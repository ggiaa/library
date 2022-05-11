<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Symfony\Component\String\b;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.books.index', [
            "books" => Book::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "judul_buku" => "required|unique:books",
            "slug" => "unique:books",
            "penulis" => "required",
            "penerbit" => "required",
            "jumlah_halaman" => "required|numeric|min:1",
            "tahun_terbit" => "required|numeric|min:1",
            "genre" => "required",
            "sinopsis" => "required",
        ]);

        $validate['slug'] = Str::slug($request->judul_buku);

        Book::create($validate);

        return redirect('/dashboard/books')->with('success', 'Berhasil menambahkan data buku baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin.books.show', [
            "book" => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            "judul_buku" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "jumlah_halaman" => "required|numeric|min:1",
            "tahun_terbit" => "required|numeric|min:1",
            "genre" => "required",
            "sinopsis" => "required",
        ];

        if ($request->judul_buku != $book->judul_buku) {
            $rules['judul_buku'] = 'required|unique:books';
        }

        $validate = $request->validate($rules);
        $validate['slug'] = Str::slug($request->judul_buku);

        Book::where('id', $book->id)->update($validate);

        return redirect('/dashboard/books')->with('success', 'Perubahan berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('dashboard/books')->with('success', 'Data berhasil dihapus!');
    }
}
