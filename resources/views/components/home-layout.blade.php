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
    <div class="flex flex-col h-screen w-screen">
        <section class="bg-primary-1 shadow">
            <div class="container mx-auto flex justify-between px-16 text-white items-center">
                <p class="font-medium text-2xl py-3">Library</p>
                <ul class="flex gap-x-10 font-medium">
                    <li>
                        <a href="/" class="uppercase {{ Request::is('/*') ? 'font-semibold text-accent' : '' }}">Home</a>
                    </li>
                    @auth
                    <li>
                        <a href="/data" class="uppercase {{ Request::is('data') ? 'font-semibold text-accent' : '' }}">Data Peminjaman</a>
                    </li>
                    <li>
                        <a href="/logout" class="uppercase">Logout</a>
                    </li>
                    @else
                    <li>
                        <a href="/login" class="uppercase {{ Request::is('login') ? 'font-semibold text-accent' : '' }}">Login</a>
                    </li>
                    <li>
                        <a href="/register" class="uppercase {{ Request::is('register') ? 'font-semibold text-accent' : '' }}">Register</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </section>

        <section class="body flex-1 bg-black">
            {{ $slot }}
        </section>
    </div>
</body>

</html>