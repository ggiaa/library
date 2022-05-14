<x-home-layout>
    <div class="card grid grid-cols-3 w-3/4 mx-auto border-accent border-2 rounded-lg overflow-hidden p-4">
        <div class="col-span-2 mr-4">
            <table class="text-left w-full">
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Judul</th>
                    <td>{{ $book->judul_buku }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Penulis</th>
                    <td>{{ $book->penulis }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Penerbit</th>
                    <td>{{ $book->penerbit }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Jumlah Halaman</th>
                    <td>{{ $book->jumlah_halaman }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Tahun Terbit</th>
                    <td>{{ $book->tahun_terbit }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Genre</th>
                    <td>{{ $book->genre }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-accent pr-8 py-1">Sinopsis</th>
                    <td>{{ $book->sinopsis }}</td>
                </tr>
            </table>
            <div class="text-center pt-5">
                <p>Stok saat ini : <span class="font-medium">{{ $book->stok }}</span> pcs</p>
            </div>
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="/" class="bg-accent py-1 px-8 flex-1 text-center rounded-xl text-white">Kembali</a>
                </div>
                @guest
                <p class="right-0 text-sm text-red-500">Login untuk meminjam buku</p>
                <div class="">
                    <p class="bg-slate-400 py-1 px-8 flex-1 text-center rounded-xl text-white cursor-pointer">Pinjam</p>
                </div>
                @else
                @if ($book->stok == 0)
                <div class="">
                    <p class="bg-slate-400 py-1 px-8 flex-1 text-center rounded-xl text-white cursor-pointer">Pinjam</p>
                </div>
                @else
                @if (auth()->user()->status == 'meminjam')
                <div class="">
                    <p class="bg-slate-400 py-1 px-8 flex-1 text-center rounded-xl text-white cursor-pointer">Pinjam</p>
                </div>
                @else
                <div>
                    <p class="show-modal bg-accent py-1 px-8 flex-1 text-center rounded-xl text-white cursor-pointer">Pinjam</p>
                </div>
                @endif
                @endif
                @endguest
            </div>
        </div>
        <div class="border shadow-lg">
            <img src="{{ $book->gambar_sampul }}">
        </div>

        <!-- modal -->
        <div class="hidden modal bg-black bg-opacity-60 top-0 left-0 w-full h-full flex flex-col justify-center items-center">
            <div class="bg-slate-100 max-w-sm w-full rounded-lg">
                <form action="/{{ $book->slug }}/pinjam" method="POST">
                    @csrf
                    <h1 class="border-b-2 py-2 font-medium text-lg text-center">Pinjam Buku</h1>
                    <div class="form-group py-8 px-16 flex justify-center">
                        <label for="lama_peminjaman" class="mr-8">Lama Peminjaman</label>
                        <select name="lama_peminjaman" id="lama_peminjaman" class="border-b-2 bg-transparent border-slate-800 focus:outline-none">
                            <option value="1">1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                            <option value="7">1 minggu</option>
                            <option value="14">2 minggu</option>
                            <option value="30">1 bulan</option>
                        </select>
                    </div>
                    <div class="flex justify-evenly mb-5">
                        <a class="batal bg-accent text-white py-1 px-6 rounded-lg cursor-pointer">Batal</a>
                        <button type="submit" class="bg-accent text-white py-1 px-6 rounded-lg">Pinjam</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const pinjam = document.querySelector('.show-modal')
        const batal = document.querySelector('.batal')
        const modal = document.querySelector('.modal')

        pinjam.addEventListener('click', function() {
            modal.classList.remove('hidden');
            modal.classList.add('absolute');
        })

        function hideModal() {
            modal.classList.add('hidden');
            modal.classList.remove('absolute');
        }

        batal.addEventListener('click', function() {
            hideModal();
        })
    </script>
</x-home-layout>