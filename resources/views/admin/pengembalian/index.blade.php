<x-admin-layout title="DATA PEMINJAMAN">
    <div>
        @if (session('success'))
        <div class="alert bg-accent text-white w-1/2 mx-auto text-center flex items-center py-1 rounded mb-2">
            <div class="flex-1">
                {{ session('success') }}
            </div>
            <div class="close px-2 text-white text-xl font-extrabold cursor-pointer">
                &times;
            </div>
        </div>
        @endif
        <table class="w-full border mx-auto mt-10 mb-5text-left">
            <thead>
                <tr class="border-b bg-slate-100 text-left">
                    <th class="py-2">#</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Lama Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Batas Pengembalian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b">
                    <td class="py-2">{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->meminjam()->first()->judul_buku }}</td>
                    <td>{{ $user->meminjam()->first()->pivot->lama_peminjaman }} Hari</td>
                    <td>{{ date('l, d F o', strtotime($user->meminjam()->first()->created_at)) }}</td>
                    <td>{{ date('l, d F o', strtotime('+'.$user->meminjam()->first()->pivot->lama_peminjaman.' days', strtotime($user->meminjam()->first()->created_at))) }}</td>
                    @if ($user->status == 'konfirmasi')
                    <td>
                        <a href="/admin/dashboard/konfirmasi/{{ $user->id }}" class="bg-accent py-1 px-3 text-white rounded-md">Konfirmasi</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const alert = document.querySelector('.alert')
        const close = document.querySelector('.close')

        close.addEventListener('click', function() {
            alert.classList.add('hidden');
        })
    </script>
</x-admin-layout>