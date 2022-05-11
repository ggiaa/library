<x-admin-layout title="EDIT">
    <div class="w-1/2">
        <form action="/dashboard/users/{{ $user->username }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="password" value="{{ $user->password }}">
            <div class="form-group pb-4">
                <label for="name" class="block mb-1">Nama</label>
                <input id="name" value="{{ old('name',$user->name) }}" class="@error('name') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="name">
                @error('name')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="username" class="block mb-1">Username</label>
                <input id="username" value="{{ old('username',$user->username) }}" class="@error('username') is-invalid @enderror form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" type="text" name="username">
                @error('username')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group pb-4">
                <label for="role">Role</label>
                <select id="role" class="form-control border-2 border-slate-700 focus:border-none w-full rounded-lg py-1 px-1 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:outline-1 focus:outline-sky-500" name="role">
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            <div class="text-right">
                <button class="bg-sky-500 text-white py-1 px-3 rounded w-1/4" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</x-admin-layout>