<x-home-layout>
    <div class="h-full flex flex-col justify-center image-background">
        <div class="grid grid-cols-2 bg-slate-800 divide-x divide-slate-700 text-white w-1/2 rounded-lg mx-auto overflow-hidden">
            <div class="">
                <img src="/image/appImage/book.jpg" alt="" class="h-full">
            </div>
            <div class="py-10 px-14">

                @if (session('success'))
                <div class="alert text-accent text-center mb-2">
                    <div class="flex-1">
                        {{ session('success') }}
                    </div>
                </div>
                @endif
                @if (session('error'))
                <div class="alert text-accent text-center mb-2">
                    <div class="flex-1">
                        {{ session('error') }}
                    </div>
                </div>
                @endif

                <h1 class="text-3xl text-center font-semibold py-1 mb-4 uppercase">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <input id="username" placeholder="Username" autocomplete="off" class="form-control py-1 w-full border-b-2 border-slate-300 text-lg my-5 placeholder:text-slate-400 text-white focus:outline-none bg-transparent" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <input id="password" placeholder="Password" class="form-control py-1 w-full border-b-2 border-slate-300 text-lg my-5 placeholder:text-slate-400 text-white focus:outline-none bg-transparent" type="password" name="password">
                    </div>
                    <div class="form-group flex flex-wrap">
                        <button class="w-full bg-accent py-1 mt-4 mb-2 rounded-md text-lg" type="submit">LOGIN</button>
                        <a href="/register" class="text-sm mx-auto mt-2">Not have an account yet?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-home-layout>