<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// admin dashboard
route::get('/admin/dashboard', [AdminDashboard::class, 'index']);
Route::get('/admin/logout', [AdminDashboard::class, 'logout']);
route::resource('admin/dashboard/books', BookController::class);
route::resource('admin/dashboard/users', UserController::class);
route::get('/admin/dashboard/data-peminjaman', [KonfirmasiController::class, 'index']);
route::get('/admin/dashboard/konfirmasi/{id}', [KonfirmasiController::class, 'konfirmasi']);


// user
Route::get('/', [HomeController::class, 'index']);


Route::post('/{book:slug}/pinjam', [PinjamController::class, 'index']);


Route::get('/{book:slug}/pengembalian', [PinjamController::class, 'pengembalian']);
Route::get('/data', [PinjamController::class, 'dataPeminjaman']);

// login register
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

//Home
Route::get('/{book:slug}', [HomeController::class, 'show']);
