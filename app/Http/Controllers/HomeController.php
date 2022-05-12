<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            "books" => Book::latest()->paginate(8),
        ]);
    }

    public function show(Book $book)
    {
        return view('show', [
            'book' => $book,
        ]);
    }
}
