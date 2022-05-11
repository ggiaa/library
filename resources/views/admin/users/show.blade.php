<x-admin-layout title="DETAIL USER">
    <div class="w-1/2">
        <table class="text-left w-full border">
            <tr class="border-b bg-slate-100">
                <th class="pr-4 py-1 align-top">Nama</th>
                <th class="pr-4 py-1 align-top">Username</th>
                <th class="pr-4 py-1 align-top">Role</th>
            </tr>
            <tr>
                <td class="py-1">{{ $user->name }}</td>
                <td class="py-1">{{ $user->username }}</td>
                <td class="py-1">{{ $user->role }}</td>
            </tr>
        </table>
    </div>
</x-admin-layout>