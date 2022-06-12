<x-home-layout>
    <div class="bg-slate-100 h-full box-border overflow-x-hidden p-8">
        <div class="w-5/6 bg-white mx-auto flex rounded-lg overflow-hidden p-6 gap-x-6 shadow-lg">

            <!-- kolom 1 -->
            <div class="flex-1">

                <!-- table -->
                <table class="text-left w-full">
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Judul</th>
                        <td>{{ $book->judul_buku }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Penulis</th>
                        <td>{{ $book->penulis }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Penerbit</th>
                        <td>{{ $book->penerbit }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Jumlah Halaman</th>
                        <td>{{ $book->jumlah_halaman }} Lembar</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Tahun Terbit</th>
                        <td>{{ $book->tahun_terbit }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Genre</th>
                        <td>{{ $book->genre }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%] align-top">Sinopsis</th>
                        <td class="py-2">{!! nl2br($book->sinopsis) !!}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-primary-1 py-2 w-[22%]">Status Saat Ini</th>
                        @if ($book->stok > 0)
                        <td class="font-medium text-sky-500">Tersedia</td>
                        @else
                        <td class="font-medium text-sky-500">Tidak Tersedia</td>
                        @endif
                    </tr>
                </table>
                <!-- end table -->

                <!-- button -->
                <div class="flex justify-between items-center pb-4 pt-8 mt-auto">
                    <div>
                        <a href="/" class="bg-accent py-1 px-8 flex-1 text-center rounded-md text-white">Kembali</a>
                    </div>
                    @guest
                    <p class="right-0 text-sm text-red-500">Login untuk meminjam buku</p>
                    <div class="">
                        <p class="bg-slate-400 py-1 px-8 flex-1 text-center rounded-md text-white cursor-pointer">Pinjam</p>
                    </div>
                    @else
                    @if ($book->stok > 0 && auth()->user()->status == 'free')
                    <div>
                        <p class="show-modal bg-accent py-1 px-8 flex-1 text-center rounded-md text-white cursor-pointer">Pinjam</p>
                    </div>
                    @else
                    <div class="">
                        <p class="bg-slate-400 py-1 px-8 flex-1 text-center rounded-md text-white cursor-pointer">Pinjam</p>
                    </div>
                    @endif
                    @endguest
                </div>
                <!-- end button -->

            </div>

            <!-- kolom 2 / gambar -->
            <div class="w-1/3">
                <img src="{{ $book->gambar_sampul }}" class="w-full">
            </div>

        </div>

        <div class="hidden modal bg-black bg-opacity-60 h-full z-10 top-0 w-full left-0 fixed">
            <div class="flex flex-col h-full justify-center items-center">
                <div class="bg-white rounded-lg">
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

    </div>
    <script>
        const pinjam = document.querySelector('.show-modal')
        const batal = document.querySelector('.batal')
        const modal = document.querySelector('.modal')

        pinjam.addEventListener('click', function() {
            modal.classList.remove('hidden');
        })

        function hideModal() {
            modal.classList.add('hidden');
        }

        batal.addEventListener('click', function() {
            hideModal();
        })
    </script>
</x-home-layout>