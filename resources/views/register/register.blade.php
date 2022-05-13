<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Register</title>
</head>

<body>
    <div class="border-2 h-screen flex flex-col items-center justify-center">
        <div class="grid grid-cols-2 bg-slate-800 divide-x divide-slate-700 text-white w-1/2 rounded-lg">
            <div class="">
                image
            </div>
            <div class="py-10 px-14">
                <h1 class="text-3xl text-center font-semibold py-1 mb-4">REGISTER</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <input id="name" placeholder="name" value="{{ old('name') }}" class=" form-control w-full border-b-2 border-slate-300 text-lg my-6 placeholder:text-slate-400 text-white focus:outline-none bg-transparent" type="text" name="name">
                        @error('name')
                        <div class="text-red-500 text-xs absolute -my-5">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="username" placeholder="Username" value="{{ old('username') }}" class="form-control w-full border-b-2 border-slate-300 text-lg my-6 placeholder:text-slate-400 text-white focus:outline-none bg-transparent" type="text" name="username">
                        @error('username')
                        <div class="text-red-500 text-xs absolute -my-5">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" placeholder="Password" class="form-control w-full border-b-2 border-slate-300 text-lg my-6 placeholder:text-slate-400 text-white focus:outline-none bg-transparent" type="password" name="password">
                        @error('password')
                        <div class="text-red-500 text-xs absolute -my-5">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group flex flex-wrap">
                        <button class="w-full bg-accent py-1 my-2 rounded-lg" type="submit">REGISTER</button>
                        <a href="/register" class="text-xs text-sky-400 mx-auto">Login?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>