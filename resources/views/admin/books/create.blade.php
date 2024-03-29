<x-admin-layout title="CREATE">
    <form action="/admin/dashboard/books" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-1/2 mb-10">
            <div class="form-group pb-4">
                <label for="judul_buku" class="block mb-1 font-semibold text-primary-1">Judul Buku</label>
                <input autocomplete="off" id="judul_buku" value="{{ old('judul_buku') }}" class="@error('judul_buku') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="judul_buku">
                @error('judul_buku')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group hidden">
                <input id="slug" class="form-control" type="text" name="slug">
            </div>
            <div class="form-group pb-4">
                <label for="penulis" class="block mb-1 font-semibold text-primary-1">Penulis</label>
                <input autocomplete="off" id="penulis" value="{{ old('penulis') }}" class="@error('penulis') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="penulis">
                @error('penulis')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="penerbit" class="block mb-1 font-semibold text-primary-1">Penerbit</label>
                <input autocomplete="off" id="penerbit" value="{{ old('penerbit') }}" class="@error('penerbit') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="penerbit">
                @error('penerbit')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="jumlah_halaman" class="block mb-1 font-semibold text-primary-1">Jumlah Halaman</label>
                <input autocomplete="off" id="jumlah_halaman" value="{{ old('jumlah_halaman') }}" class="@error('jumlah_halaman') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="jumlah_halaman">
                @error('jumlah_halaman')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="tahun_terbit" class="block mb-1 font-semibold text-primary-1">Tahun Terbit</label>
                <input autocomplete="off" id="tahun_terbit" value="{{ old('tahun_terbit') }}" class="@error('tahun_terbit') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="tahun_terbit">
                @error('tahun_terbit')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="genre" class="block mb-1 font-semibold text-primary-1">Genre</label>
                <input autocomplete="off" id="genre" value="{{ old('genre') }}" class="@error('genre') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="genre">
                @error('genre')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="stok" class="block mb-1 font-semibold text-primary-1">Stok</label>
                <input autocomplete="off" id="stok" value="{{ old('stok') }}" class="@error('stok') is-invalid @enderror form-control border border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-1 focus:ring-accent focus:outline-secondary-1 focus:outline-2 focus:outline-offset-0" type="text" name="stok">
                @error('stok')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="sinopsis" class="block mb-1 font-semibold text-primary-1">Sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" rows="6" class="@error('sinopsis') is-invalid @enderror border resize-none border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring focuring-1s:ring-accent focus:outline-secondary-1 outline-secondary-1ocus:outline-2 focus:outline-offset-0">{{ old('sinopsis') }}</textarea>
                @error('sinopsis')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="gambar_sampul" class="block mb-1 font-semibold text-primary-1">Gambar Sampul</label>
                <input type="file" name="gambar_sampul" id="gambar_sampul" class="@error('gambar_sampul') is-invalid @enderror form-control file:outline-none file:border file:rounded-full file:cursor-pointer">
                @error('gambar_sampul')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="text-right">
                <button class="bg-accent text-white py-1 px-3 rounded w-1/4" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</x-admin-layout>