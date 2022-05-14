<x-home-layout>
    @if (session('success'))
    <div class="alert border shadow max-w-3xl mx-auto p-3 text-center rounded-xl mb-10 bg-primary1 text-white font-medium">
        {{ session('success') }}
    </div>
    @endif

    <div class="border border-accent shadow-lg max-w-3xl mx-auto p-5 rounded-xl">
        <h1 class="text-center text-xl font-medium border-b pb-2 border-accent">Data Peminjaman</h1>
        <div>
            @if (auth()->user()->status == 'free')
            <p class="pt-10 pb-5 text-center">Belum ada data peminjaman!</p>
            @elseif (auth()->user()->status == 'meminjam')
            <table class=" border-2 mx-auto mt-10 mb-5 w-11/12 text-left">
                <tr class="border-b bg-accent text-white">
                    <th class="py-1 px-1">Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Lama Peminjaman</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td class="capitalize py-3 px-1">{{ $buku->judul_buku }}</td>
                    <td class="capitalize">{{ date('l, d F o', strtotime($dataPeminjaman->tanggal_pinjam)) }}</td>
                    <td class="capitalize">{{ $dataPeminjaman->lama_peminjaman }} Hari</td>
                    <td>
                        <a href="/{{ $buku->slug }}/pengembalian" class="bg-primary1 text-white px-3 py-1 rounded-xl">Kembalikan Buku</a>
                    </td>
                </tr>
            </table>
            <p class="mt-10">Harap kembalikan buku pada : <span class="font-medium text-primary1">{{ date('l, d F o', strtotime('+'.$kembali.' days', strtotime($dataPeminjaman->tanggal_pinjam))) }}</span></p>
            @endif
        </div>
    </div>
    <script>
        const alert = document.querySelector('.alert')

        let hide = function hidden() {
            alert.classList.add('hidden');
        }

        function tutupAlert() {
            setTimeout(hide, 7000);
        }

        tutupAlert();
    </script>
</x-home-layout>