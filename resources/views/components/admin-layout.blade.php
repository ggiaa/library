<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <!-- Sidebard -->
    <section>
        <div class="flex h-screen">
            <div class="sidebar w-1/5 flex flex-col shadow-lg hidden md:block">
                <div class="text-center py-8">
                    <span class="text-2xl">ADMIN</span>
                </div>

                <div class="flex-1 overflow-auto">
                    <a href="/dashboard">
                        <div class="py-3 px-6 border-y {{ Request::is('dashboard') ? 'bg-slate-300 bg-opacity-40 text-sky-500 font-semibold' : '' }}">Dasboard</div>
                    </a>
                    <a href="/dashboard/books">
                        <div class="py-3 px-6 border-b {{ Request::is('dashboard/books*') ? 'bg-slate-300 bg-opacity-40 text-sky-500 font-semibold' : '' }}">Books</div>
                    </a>
                    <a href="/dashboard/users">
                        <div class="py-3 px-6 border-b {{ Request::is('dashboard/users*') ? 'bg-slate-300 bg-opacity-40 text-sky-500 font-semibold' : '' }}">Users</div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col flex-1">
                <div class="py-3 border-b flex justify-center relative items-center">
                    <h1 class="text-center text-2xl font-semibold">{{ $title }}</h1>
                    <div id="hamburger" class="absolute right-0 px-3 md:hidden">
                        <span class="w-[26px] h-[2px] my-[7px] block bg-slate-800 origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="w-[26px] h-[2px] my-[7px] block bg-slate-800 transition duration-300 ease-in-out"></span>
                        <span class="w-[26px] h-[2px] my-[7px] block bg-slate-800 origin-bottom-left transition duration-300 ease-in-out"></span>
                    </div>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full md:hidden lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/dashboard" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary1 {{ Request::is('dashboard') ? 'text-sky-500 font-semibold' : '' }}">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/dashboard/books" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary1 {{ Request::is('dashboard/books*') ? 'text-sky-500 font-semibold' : '' }}">Books</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex-1 overflow-auto py-6 px-10 box-border">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <!-- EndSidebard -->

    <script>
        const hamburger = document.querySelector('#hamburger')
        const navMenu = document.querySelector("#nav-menu")

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        })
    </script>
</body>

</html>