<x-admin-layout title="BUKU">

    @if (session('success'))
    <div class="alert bg-accent text-white w-1/2 mx-auto text-center flex items-center py-1 rounded mb-2">
        <div class="flex-1">
            {{ session('success') }}
        </div>
        <div class="close px-2 text-white text-xl font-extrabold cursor-pointer">
            &times;
        </div>
    </div>
    @endif

    <div>
        <a href="/admin/dashboard/books/create" class="bg-sky-500 text-white py-1 px-3 rounded hover:bg-opacity-90">Tambah Data Buku</a>
    </div>

    <div class="table border my-4 w-4/5">
        <table class="w-full">
            <thead>
                <tr class="border-b text-left">
                    <th scope="col" class="py-2 bg-slate-100">#</th>
                    <th scope="col" class="py-2 bg-slate-100">Title</th>
                    <th scope="col" class="py-2 bg-slate-100">Writer</th>
                    <th scope="col" class="py-2 bg-slate-100">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach ($books as $book)
                <tr class="hover:bg-slate-50">
                    <td>{{($books->currentPage() - 1) * $books->perPage() + $loop->iteration}}</td>
                    <td>{{ $book->judul_buku }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td class="py-1 gap-x-2">
                        <a href="/admin/dashboard/books/{{ $book->slug }}" class="bg-sky-500 text-white px-2 rounded text-sm py-1 hover:bg-opacity-90">Detail</a>
                        <a href="/admin/dashboard/books/{{ $book->slug }}/edit" class="bg-orange-500 text-white px-2 rounded text-sm py-1 hover:bg-opacity-90">Edit</span></a>
                        <form action="/admin/dashboard/books/{{ $book->slug }}" style="display: inline" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bg-red-500 text-white px-2 rounded text-sm py-1 hover:bg-opacity-90">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="w-4/5">
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