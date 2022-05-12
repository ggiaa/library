<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Home</title>
</head>

<body>
    <div>
        <section class="bg-primary1">
            <div class="container mx-auto flex justify-between px-10 text-white items-center">
                <p class="font-medium text-2xl py-2">Library</p>
                <ul class="flex gap-x-4 font-medium">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Login</a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="body py-8 px-8">
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
                            <a href="/{{ $book->slug }}" class="bg-accent py-1 px-4 flex-1 text-center rounded-xl text-white">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end card -->

            </div>

            <div class="my-4">
                {{ $books->links() }}
            </div>
        </section>
    </div>
</body>

</html>