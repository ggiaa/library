<x-home-layout>
    <div class="image-background h-full box-border overflow-x-hidden">
        <div class="p-8">

            <!-- search button -->
            <div class="pb-4 ml-auto max-w-sm">
                <form action="/">
                    <div class="flex">
                        <input type="text" name="search" value="{{ request('search') }}" class="border border-r-0 w-full rounded-l-md focus:outline-none px-2 py-1" placeholder="Masukkan judul buku...">
                        <button class="bg-accent text-white px-8 rounded-r-md" type="submit">Cari</button>
                    </div>
                </form>
            </div>
            <!-- end search button -->

            <!-- card -->
            <div class="grid grid-cols-4 gap-x-6 gap-y-16">
                @foreach ($books as $book)
                <div class="card rounded-md shadow-md border border-slate-200 overflow-hidden bg-white">
                    <div class="h-3/4">
                        <img src="{{ $book->gambar_sampul }}" class="w-full h-full">
                    </div>
                    <div class="border-t-2 px-4 py-2 h-1/4 flex flex-col justify-between">
                        <div class="text-center">
                            <p class="text-xl font-medium">{{ $book->judul_buku }}</p>
                            <p class="text-sm mt-2">~ {{ $book->penulis }}</p>
                        </div>
                        <div class="mb-2 mt-4 flex">
                            <a href="/{{ $book->slug }}" class="bg-accent py-1 px-4 flex-1 text-center rounded-lg text-white">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end card -->

            <div class="mb-4 mt-8">
                {{ $books->links() }}
            </div>
        </div>
    </div>

</x-home-layout>