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
            <!-- Card -->
            <div class="card grid grid-cols-3 w-3/4 mx-auto border-accent border-2 rounded-lg overflow-hidden p-4">
                <div class="col-span-2 mr-4">
                    <table class="text-left w-full">
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Judul</th>
                            <td>{{ $book->judul_buku }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Penulis</th>
                            <td>{{ $book->penulis }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Penerbit</th>
                            <td>{{ $book->penerbit }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Jumlah Halaman</th>
                            <td>{{ $book->jumlah_halaman }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Tahun Terbit</th>
                            <td>{{ $book->tahun_terbit }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Genre</th>
                            <td>{{ $book->genre }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-accent pr-8 py-1">Sinopsis</th>
                            <td>{{ $book->sinopsis }}</td>
                        </tr>
                    </table>
                    <div class="mt-8">
                        <a href="/" class="bg-accent py-1 px-4 flex-1 text-center rounded-xl text-white">Kembali</a>
                    </div>
                </div>
                <div class="">
                    <img src="/image/1.jpg">
                </div>
            </div>

            <!-- end card -->
        </section>
    </div>
</body>

</html>