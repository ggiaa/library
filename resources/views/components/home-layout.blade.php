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
        <section class="bg-accent shadow">
            <div class="container mx-auto flex justify-between px-10 text-white items-center">
                <p class="font-medium text-2xl py-2">Library</p>
                <ul class="flex gap-x-8 font-medium">
                    <li>
                        <a href="/" class="{{ Request::is('/') ? 'font-semibold text-white border-b-[3px] border-primary1 py-2' : '' }}">Home</a>
                    </li>
                    @auth
                    <li>
                        <a href="/data" class="{{ Request::is('data') ? 'font-semibold text-white border-b-[3px] border-primary1 py-2' : '' }}">Data Peminjaman</a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                    @else
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </section>

        <section class="body py-8 px-8">
            <div class="pb-4 ml-auto max-w-sm">
                <form action="/">
                    <div class="flex">
                        <input type="text" name="search" value="{{ request('search') }}" class="border w-full rounded-l-lg focus:outline-none px-2 py-1 border-primary1" placeholder="Masukkan judul buku...">
                        <button class="bg-primary1 text-white px-8 rounded-r-lg" type="submit">Cari</button>
                    </div>
                </form>
            </div>
            {{ $slot }}
        </section>
    </div>
</body>

</html>