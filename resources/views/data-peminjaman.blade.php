<x-home-layout>
    <div class="p-8 image-background h-full">
        <div class="flex flex-col h-full justify-center items-center">
            @if (session('success'))
            <div class="alert bg-accent text-white max-w-3xl mx-auto border shadow text-center rounded-xl flex items-center px-3 py-2  mb-10 bg-primary1 font-medium">
                <div class="flex-1">
                    {{ session('success') }}
                </div>
                <div class="close px-2 text-white text-xl font-extrabold cursor-pointer">
                    &times;
                </div>
            </div>
            @endif

            <div class="border shadow-lg max-w-3xl mx-auto p-5 rounded-xl bg-white text-black w-2/3">

                <h1 class="text-center text-xl font-medium border-b pb-2 border-primary-1 text-accent">PEMINJAMAN</h1>

                <div>
                    @if (auth()->user()->status == 'free')
                    <p class="pt-10 pb-5 text-center text-lg font-medium">Belum Ada Data!</p>
                    <p class="pb-5 text-center text-lg">silahkan pinjam buku terlebih dahulu</p>

                    @elseif (auth()->user()->status == 'meminjam')
                    <table class="border border-primary-1 mx-auto mt-10 mb-5 w-11/12 text-left">
                        <tr class="border-b bg-accent bg-opacity-90">
                            <th class="py-2">Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Lama Peminjaman</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td class="capitalize py-4">{{ $data->judul_buku }}</td>
                            <td class="capitalize">{{ date('l, d F o', strtotime($data->created_at)) }}</td>
                            <td class="capitalize">{{ $data->pivot->lama_peminjaman }} Hari</td>
                            <td>
                                <a href="/{{ $data->slug }}/pengembalian" class="bg-accent text-white px-3 py-1 rounded-lg">Kembalikan Buku</a>
                            </td>
                        </tr>
                    </table>
                    <p class="mt-10">Harap kembalikan buku pada : <span class="font-medium text-accent">{{ date('l, d F o', strtotime('+'.$data->pivot->lama_peminjaman.' days', strtotime($data->created_at))) }}</span></p>
                    @else
                    <p class="pt-10 pb-5 text-center text-lg font-medium">Pengembalian sedang diproses!</p>
                    <p class="pb-5 text-center">Silahkan tunggu konfirmasi dari petugas sebelum melakukan peminjaman selanjutnya</p>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <script>
        const alert = document.querySelector('.alert')
        const tutup = document.querySelector('.close')

        tutup.addEventListener('click', function() {
            alert.classList.add('hidden');
        });
    </script>
</x-home-layout>