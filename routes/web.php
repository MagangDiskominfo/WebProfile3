<?php

use App\Http\Controllers\login;
use App\Http\Controllers\PostBerita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostHome;
use App\Http\Controllers\fungsi;
use App\Http\Controllers\PostKegiatan;
use App\Http\Controllers\PostLokasi;
use App\Http\Controllers\PostVisimisi;
use App\Http\Middleware\PreventBackHistory;

// USERS
Route::get('/', function(){
    return view('users.beranda');
});

Route::get('/users/visimisi', function () {
    return view('users.visimisi');
});

Route::get('/struktur', function () {
    return view('users.struktur');
});

Route::get('/galeri', function () {
    return view('users.galeri');
});

// ADMIN
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/lokasi', function () {
    return view('admin.lokasi');
});

Route::get('/admin/visimisi', function () {
    return view('admin.visimisi');
});

Route::get('/admin/struktur', function () {
    return view('admin.struktur');
});


Route::post('/login', [login::class, 'login']);
Route::get('/login', [login::class, 'index'])->name('login');
Route::get('/logout', [login::class, 'logout']);

Route::middleware(['auth', PreventBackHistory::class])->group(function(){
    Route::get('/home', [PostHome::class, 'home']);
    Route::post('/home', [PostHome::class, 'posthome']);
    Route::post('/berita', [PostBerita::class, 'postberita']);
    Route::get('/berita', [PostBerita::class, 'berita']);
    Route::get('/logout', [login::class, 'logout']);
    Route::post('/kegiatan', [PostKegiatan::class, 'postkegiatan']);
    Route::get('/kegiatan', [PostKegiatan::class, 'kegiatan']);
    Route::post('/visimisi', [PostVisimisi::class, 'postvisimisi']);
    Route::get('/visimisi', [PostVisimisi::class, 'visimisi']);
    Route::post('/lokasi', [PostLokasi::class, 'postlokasi']);
    Route::get('/lokasi', [PostLokasi::class, 'lokasi']);
});