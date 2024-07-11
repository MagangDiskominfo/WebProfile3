<?php

use App\Http\Controllers\PostBerita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostHome;

// USERS
Route::get('/', function(){
    return view('users.beranda');
});

Route::get('/visimisi', function () {
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

Route::get('/admin/home', function () {
    return view('admin.home');
});

Route::get('/admin/berita', function () {
    return view('admin.berita');
});

Route::get('/admin/kegiatan', function () {
    return view('admin.kegiatan');
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

Route::get('/admin/footer', function () {
    return view('admin.footer');
});

Route::post('/admin/home/update', [PostHome::class, 'update']);
Route::post('/admin/berita/add', [PostBerita::class, 'store']);