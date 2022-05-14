<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;

class KonfirmasiPengembalianController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databorrow = Borrow::with('book');

        dd($databorrow);
        return view('admin.konfirmasi-pengembalian');
    }
}
