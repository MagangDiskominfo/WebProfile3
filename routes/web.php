<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/beranda', function () {
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
// Route::get('/', function () {
//     return view('users.beranda');
// });
