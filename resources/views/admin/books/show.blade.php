<x-admin-layout title="DETAIL">
    <div class="w-3/4 grid grid-cols-3">
        <div class="col-span-2">
            <table class="text-left">
                <tr>
                    <th class="pr-4 align-top">Judul</th>
                    <td>{{ $book->judul_buku }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Penulis</th>
                    <td>{{ $book->penulis }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Penerbit</th>
                    <td>{{ $book->penerbit }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Jumlah Halaman</th>
                    <td>{{ $book->jumlah_halaman }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Tahun Terbit</th>
                    <td>{{ $book->tahun_terbit }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Genre</th>
                    <td>{{ $book->genre }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Stok</th>
                    <td>{{ $book->stok }}</td>
                </tr>
                <tr>
                    <th class="pr-4 align-top">Sinopsis</th>
                    <td>{{ $book->sinopsis }}</td>
                </tr>
            </table>
        </div>
        <div class="border shadow-lg">
            @if ($book->gambar_sampul)
            <img src="/{{ $book->gambar_sampul }}" alt="">
            @endif
        </div>
    </div>
</x-admin-layout>