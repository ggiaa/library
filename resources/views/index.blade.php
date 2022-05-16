<x-home-layout>

    <div class="pb-4 ml-auto max-w-sm">
        <form action="/">
            <div class="flex">
                <input type="text" name="search" value="{{ request('search') }}" class="border w-full rounded-l-lg focus:outline-none px-2 py-1 border-primary1" placeholder="Masukkan judul buku...">
                <button class="bg-accent text-white px-8 rounded-r-lg" type="submit">Cari</button>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-4 gap-4">
        <!-- Card -->
        @foreach ($books as $book)
        <div class="card w-full rounded shadow-lg border border-slate-300">
            <div class="p-4">
                <img src="{{ $book->gambar_sampul }}">
            </div>
            <div class=" border-t-2 px-4 py-2">
                <div class="text-center">
                    <p class="text-xl font-medium">{{ $book->judul_buku }}</p>
                    <p class="text-sm">~ {{ $book->penulis }}</p>
                </div>
                <div class="mb-2 mt-4 flex">
                    <a href="/{{ $book->slug }}" class="bg-accent py-1 px-4 flex-1 text-center rounded-lg text-white">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end card -->

    </div>

    <div class="my-4">
        {{ $books->links() }}
    </div>
</x-home-layout>