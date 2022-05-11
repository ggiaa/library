<x-admin-layout title="TAMBAH USER">
    <form action="/dashboard/users" method="POST">
        @csrf
        <div class="w-1/2 mb-10">
            <div class="form-group pb-4">
                <label for="name" class="block mb-1">Nama</label>
                <input autocomplete="off" id="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="name">
                @error('name')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="username" class="block mb-1">Username</label>
                <input autocomplete="off" id="username" value="{{ old('username') }}" class="@error('username') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="username">
                @error('username')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="password" class="block mb-1">Password</label>
                <input autocomplete="off" id="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="password">
                @error('password')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="role" class="block mb-1">Role</label>
                <select name="role" id="role" class="@error('password') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500">
                    <option value="user" {{ old('role') == 'user' ? 'selected' : ''  }}>User</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : ''  }}>Admin</option>
                </select>
            </div>
            <div class="text-right">
                <button class="bg-sky-500 text-white py-1 px-3 rounded w-1/4" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</x-admin-layout>