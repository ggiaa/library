<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    public function index(Request $request, $slug)
    {
        // masukkan data ke tabel borrwo
        $user = auth()->user();
        $book = Book::where('slug', $slug)->first();

        $user->meminjam()->attach($book, ['lama_peminjaman' => $request->lama_peminjaman]);

        // kurangi stok buku
        $sisastok = $book->stok - 1;
        $book->stok = $sisastok;
        $book->save();

        //udah status jadi meminjam
        $user->status = 'meminjam';
        $user->save();

        return redirect('/data')->with('success', 'Peminjaman Berhasil, Silahkan mengambil buku ke perpustakaan!');
    }

    public function dataPeminjaman(User $user)
    {

        $data = auth()->user()->meminjam()->first();

        return view('data-peminjaman', [
            'data' => $data,
        ]);
    }

    public function pengembalian($slug)
    {

        // ubah status usernya menjadi konfirmasi
        $user = auth()->user();
        $user->status = 'konfirmasi';
        $user->save();

        return back()->with('success', 'Terima kasih sudah mengembalikan buku, anda dapat meminjam kembali buku lainnya');
    }
}
