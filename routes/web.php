<?php

use App\Http\Controllers\login;
use App\Http\Controllers\PostBerita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostHome;
use App\Http\Controllers\fungsi;
use App\Http\Controllers\Halaman;
use App\Http\Controllers\PostFooter;
use App\Http\Controllers\PostFoto;
use App\Http\Controllers\PostGaleri;
use App\Http\Controllers\PostKegiatan;
use App\Http\Controllers\PostLokasi;
use App\Http\Controllers\PostStruktur;
use App\Http\Controllers\PostVidio;
use App\Http\Controllers\PostVisimisi;
use App\Http\Controllers\ShowBeranda;
use App\Http\Middleware\PreventBackHistory;

// USERS
Route::get('/', [ShowBeranda::class, 'showberanda']);
Route::get('/users/visimisi', [PostVisimisi::class, 'index']);
Route::get('/users/struktur', [PostStruktur::class, 'index']);

Route::get('/users/foto', [PostFoto::class, 'index']);
// Route::get('/dashboard', function () {return view('admin.dashboard');});

Route::get('/users/detail-berita/{id}', [PostBerita::class, 'detail']);
Route::get('/users/detail-kegiatan/{id}', [PostKegiatan::class, 'detail']);
Route::get('/vidio-detail', [PostVidio::class, 'vidio']);
Route::get('/users/video', function () {return view('users.video');});

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
    Route::get('/kegiatan/edit/{id}', [PostKegiatan::class, 'edit']);
    Route::post('/kegiatan/update/{id}', [PostKegiatan::class, 'update']);
    Route::get('/kegiatan/delete/{id}', [PostKegiatan::class, 'delete']);

    Route::get('/vidio', [PostVidio::class, 'index']);      
    Route::post('/vidio', [PostVidio::class, 'postvidio']);

    Route::get('/foto', [PostFoto::class, 'foto']);
    Route::post('/foto', [PostFoto::class, 'postfoto']);
    Route::get('/foto/edit/{id}', [PostFoto::class, 'edit']);
    Route::post('/foto/update/{id}', [PostFoto::class, 'update']);
    Route::get('/foto/delete/{id}', [PostFoto::class, 'delete']); 

    Route::post('/visimisi', [PostVisimisi::class, 'postvisimisi']);
    Route::get('/visimisi', [PostVisimisi::class, 'visimisi']);

    Route::post('/struktur', [PostStruktur::class, 'poststruktur']);
    Route::get('/struktur', [PostStruktur::class, 'struktur']);

    Route::post('/lokasi', [PostLokasi::class, 'postlokasi']);
    Route::get('/lokasi', [PostLokasi::class, 'lokasi'])->name('lokasi.form'); // Formulir untuk input atau update
    Route::put('/lokasi', [PostLokasi::class, 'postlokasi'])->name('lokasi.update'); // Proses input atau update

    Route::get('/footer', [PostFooter::class, 'footer']);
    Route::post('/footer', [PostFooter::class, 'postfooter']);

    Route::get('/dashboard', [Halaman::class, 'halaman']);
    Route::get('/logout', [login::class, 'logout']);
});