<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    public function index(Request $request, $slug)
    {
        // dd(auth()->user());
        // dd(Book::where('slug', $slug)->first()->id);

        $validate = $request->validate([
            'lama_peminjaman' => 'required',
        ]);

        $validate['user_id'] = auth()->user()->id;
        $validate['book_id'] = Book::where('slug', $slug)->first()->id;
        $validate['tanggal_pinjam'] = Carbon::now();

        Borrow::create($validate);

        // kurangi stok buku
        $stok = Book::where('slug', $slug)->first()->stok;
        $sisastok = $stok - 1;

        $data = Book::where('slug', $slug)->first();
        $data->stok = $sisastok;
        $data->save();

        //udah status jadi meminjam
        $user = auth()->user();
        $user->status = 'meminjam';
        $user->save();

        return redirect('/data')->with('success', 'Peminjaman Berhasil, Silahkan mengambil buku ke perpustakaan!');
    }

    public function dataPeminjaman()
    {
        try {
            $data = Borrow::where('user_id', auth()->user()->id)->first();
            $buku = Book::where('id', $data->book_id)->first();

            return view('data-peminjaman', [
                "dataPeminjaman" => $data,
                'buku' => $buku,
                'kembali' => $data->lama_peminjaman,
            ]);
        } catch (Exception) {
            return view('data-peminjaman', [
                "dataPeminjaman" => $data,
            ]);
        };
    }

    public function pengembalian($slug)
    {
        //ubah status user
        $user = auth()->user();
        $user->status = 'free';
        $user->save();

        //hapus data borrow
        $idborrow = Borrow::where('user_id', auth()->user()->id)->first()->id;
        Borrow::destroy($idborrow);

        //tambah stok buku
        $stok = Book::where('slug', $slug)->first()->stok;
        $sisastok = $stok + 1;

        $data = Book::where('slug', $slug)->first();
        $data->stok = $sisastok;
        $data->save();

        return back()->with('success', 'Terima kasih sudah mengembalikan buku, anda dapat meminjam kembali buku lainnya');
    }
}
