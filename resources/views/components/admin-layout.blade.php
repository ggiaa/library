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
        <div class="sidebar flex h-screen">
            <div class="w-1/5 flex flex-col shadow-lg">
                <div class="text-center py-8">
                    <span class="text-2xl">ADMIN</span>
                </div>
                <div class="flex-1 overflow-auto">
                    <a href="">
                        <div class="py-3 px-6 border-y">Dasboard</div>
                    </a>
                    <a href="">
                        <div class="py-3 px-6 border-b">Books</div>
                    </a>
                    <a href="">
                        <div class="py-3 px-6 border-b">Users</div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col flex-1">
                <div class="py-3 border-b">
                    <h1 class="text-center text-xl">{{ $title }}</h1>
                </div>
                <div class="flex-1 overflow-auto py-6 px-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <!-- EndSidebard -->
</body>

</html>