<x-admin-layout title="EDIT">
    <div class="w-2/3">
        <form action="/dashboard/books/{{ $book->slug }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group pb-4">
                <label for="judul_buku" class="block mb-1">Judul Buku</label>
                <input id="judul_buku" value="{{ old('judul_buku',$book->judul_buku) }}" class="@error('judul_buku') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="judul_buku">
                @error('judul_buku')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="penulis" class="block mb-1">Penulis</label>
                <input id="penulis" value="{{ old('penulis',$book->penulis) }}" class="@error('penulis') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="penulis">
                @error('penulis')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="penerbit" class="block mb-1">Penerbit</label>
                <input id="penerbit" value="{{ old('penerbit',$book->penerbit) }}" class="@error('penerbit') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="penerbit">
                @error('penerbit')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="jumlah_halaman" class="block mb-1">Jumlah Halaman</label>
                <input id="jumlah_halaman" value="{{ old('jumlah_halaman',$book->jumlah_halaman) }}" class="@error('jumlah_halaman') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="jumlah_halaman">
                @error('jumlah_halaman')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="tahun_terbit" class="block mb-1">Tahun Terbit</label>
                <input id="tahun_terbit" value="{{ old('tahun_terbit',$book->tahun_terbit) }}" class="@error('tahun_terbit') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="tahun_terbit">
                @error('tahun_terbit')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="genre" class="block mb-1">Genre</label>
                <input id="genre" value="{{ old('genre',$book->genre) }}" class="@error('genre') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="genre">
                @error('genre')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="sinopsis" class="block mb-1">sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" rows="7" class="@error('genre') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500 resize-none">{{ old('sinopsis',$book->sinopsis) }}</textarea>
                @error('sinopsis')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="gambar_sampul" class="block mb-1">Gambar Sampul</label>
                @if ($book->gambar_sampul)
                <div class="py-2">
                    <img src="/{{ $book->gambar_sampul }}" alt="" width="100px" class="shadow-lg border">
                </div>
                @else
                <div class="py-2">
                    <p class="text-red-500">Tidak ada gambar sampul!</p>
                </div>
                @endif
                <input type="hidden" name="oldImage" value="{{ $book->gambar_sampul }}">
                <input type="file" name="gambar_sampul" id="gambar_sampul" class="@error('gambar_sampul') is-invalid @enderror form-control file:outline-none file:border-2 file:rounded-full file:cursor-pointer">
                @error('gambar_sampul')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="text-right">
                <button class="bg-sky-500 text-white py-1 px-3 rounded w-1/4" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</x-admin-layout>