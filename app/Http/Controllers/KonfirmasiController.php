<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $users = User::where('status', '!=', 'free')->with('meminjam')->get();

        return view('admin.pengembalian.index', [
            'users' => $users,
        ]);
    }

    public function konfirmasi($id)
    {
        $user = User::where('id', $id)->first();

        // tambah stok buku
        $buku = Book::where('judul_buku', $user->meminjam()->first()->judul_buku)->first();
        $buku->stok += 1;
        $buku->save();


        //ubah status jadi free
        $user->status = 'free';
        $user->save();

        // Hapus data borrow
        $user->meminjam()->detach();

        return back()->with('success', 'berhasil dikonfirmasi');
    }
}
