<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_buku',
        'slug',
        'penulis',
        'penerbit',
        'jumlah_halaman',
        'tahun_terbit',
        'genre',
        'sinopsis',
        'gambar_sampul',
        'stok',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
