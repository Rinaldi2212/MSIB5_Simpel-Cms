<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute-rute untuk mengelola berita
Route::get('/news', [NewsController::class, 'index'])->name('news.index'); // Menampilkan daftar berita
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); // Menampilkan form tambah berita
Route::post('/news', [NewsController::class, 'store'])->name('news.store'); // Menyimpan berita baru
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show'); // Menampilkan detail berita
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit'); // Menampilkan form edit berita
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update'); // Mengupdate berita
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy'); // Menghapus berita

