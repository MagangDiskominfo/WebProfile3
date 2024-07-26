<?php

use App\Http\Controllers\login;
use App\Http\Controllers\PostBerita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostHome;
use App\Http\Controllers\fungsi;
use App\Http\Controllers\PostFoto;
use App\Http\Controllers\PostKegiatan;
use App\Http\Controllers\PostLokasi;
use App\Http\Controllers\PostStruktur;
use App\Http\Controllers\PostVisimisi;
use App\Http\Controllers\ShowBeranda;
use App\Http\Middleware\PreventBackHistory;

// USERS
Route::get('/', [ShowBeranda::class, 'showberanda']);

Route::get('/users/visimisi', function () {
    return view('users.visimisi');
});

Route::get('/users/struktur', function () {
    return view('users.struktur');
});

Route::get('/galeri', function () {
    return view('users.foto');
});

Route::get('/video', function () {
    return view('users.video');
});

// ADMIN
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::post('/login', [login::class, 'login']);
Route::get('/login', [login::class, 'index'])->name('login');
Route::get('/logout', [login::class, 'logout']);

Route::middleware(['auth', PreventBackHistory::class])->group(function(){
    Route::get('/home', [PostHome::class, 'home']);
    Route::post('/home', [PostHome::class, 'posthome']);

    Route::post('/berita', [PostBerita::class, 'postberita']);
    Route::get('/berita', [PostBerita::class, 'berita']);
    Route::get('/berita/edit/{id}', [PostBerita::class, 'edit']);
    Route::post('/berita/update/{id}', [PostBerita::class, 'update']);
    Route::get('/berita/delete/{id}', [PostBerita::class, 'delete']);

    Route::post('/kegiatan', [PostKegiatan::class, 'postkegiatan']);
    Route::get('/kegiatan', [PostKegiatan::class, 'kegiatan']);
    Route::post('/visimisi', [PostVisimisi::class, 'postvisimisi']);
    Route::get('/visimisi', [PostVisimisi::class, 'visimisi']);
    Route::post('/lokasi', [PostLokasi::class, 'postlokasi']);
    // Route::get('/lokasi', [PostLokasi::class, 'lokasi']);
    Route::get('/lokasi', [PostLokasi::class, 'lokasi'])->name('lokasi.form'); // Formulir untuk input atau update
    Route::put('/lokasi', [PostLokasi::class, 'postlokasi'])->name('lokasi.update'); // Proses input atau update
    Route::post('/struktur', [PostStruktur::class, 'poststruktur']);
    Route::get('/struktur', [PostStruktur::class, 'struktur']);
    Route::get('/foto', function() {return view('admin.foto');});

    Route::get('/admin/foto', [PostFoto::class, 'index'])->name('admin.foto.index');
    Route::get('/admin/foto/create', [PostFoto::class, 'create'])->name('admin.foto.create');
    Route::post('/admin/foto', [PostFoto::class, 'store'])->name('admin.foto.store');
    Route::get('/admin/foto/{foto}/edit', [PostFoto::class, 'edit'])->name('admin.foto.edit');
    Route::put('/admin/foto/{foto}', [PostFoto::class, 'update'])->name('admin.foto.update');
    Route::delete('/admin/foto/{foto}', [PostFoto::class, 'destroy'])->name('admin.foto.destroy');

    

    Route::get('/logout', [login::class, 'logout']);
});