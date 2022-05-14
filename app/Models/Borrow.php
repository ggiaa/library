<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'lama_peminjaman',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda',
    ];
}
