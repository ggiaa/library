<x-home-layout>
    <div class="h-full flex flex-col justify-center image-background">
        <div class="grid grid-cols-2 bg-slate-800 divide-x divide-slate-700 text-white w-1/2 rounded-lg mx-auto overflow-hidden">
            <div class="">
                <img src="/image/appImage/book.jpg" alt="" class="h-full">
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
                        <button class="w-full bg-accent py-1 mt-4 mb-3 text-lg rounded-md" type="submit">REGISTER</button>
                        <a href="/login" class="text-sm mx-auto">Login?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-home-layout>