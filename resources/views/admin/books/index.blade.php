<x-admin-layout title="BOOKS">

    @if (session('success'))
    <div class="alert bg-cyan-600 text-white w-1/2 mx-auto text-center flex items-center py-1 rounded mb-2">
        <div class="flex-1">
            {{ session('success') }}
        </div>
        <div class="close px-2 text-red-400 text-xl font-extrabold cursor-pointer">
            &times;
        </div>
    </div>
    @endif

    <div>
        <a href="/dashboard/books/create" class="bg-sky-500 text-white py-1 px-3 rounded">Tambah Data Buku</a>
    </div>

    <div class="table border my-4 w-4/5">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Writer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach ($books as $book)
                <tr class="hover:bg-slate-50">
                    <td class="text-center">{{($books->currentPage() - 1) * $books->perPage() + $loop->iteration}}</td>
                    <td>{{ $book->judul_buku }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td class="py-1 flex gap-x-2 justify-center">
                        <a href="/dashboard/books/{{ $book->slug }}" class="bg-sky-500 text-white px-2 rounded text-sm py-1">Detail</a>
                        <a href="/dashboard/books/{{ $book->slug }}" class="bg-orange-500 text-white px-2 rounded text-sm py-1">Edit</span></a>
                        <form action="/dashboard/books/{{ $book->slug }}" style="display: inline" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bg-red-500 text-white px-2 rounded text-sm py-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        {{ $books->links() }}
    </div>

    <script>
        const alert = document.querySelector('.alert')
        const close = document.querySelector('.close')

        close.addEventListener('click', function() {
            alert.classList.add('hidden');
        })
    </script>
</x-admin-layout>