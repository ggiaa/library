<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $book = Book::where('judul_buku', 'like', '%' . request('search') . '%');
        } else {
            $book = Book::latest();
        }

        return view('index', [
            "books" => $book->paginate(8),
        ]);
    }

    public function show(Book $book)
    {
        return view('show', [
            'book' => $book,
        ]);
    }
}
