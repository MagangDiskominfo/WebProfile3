<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class Halaman extends Controller
{
    public function halaman () {
        return view('admin.halaman', ['berita'=> Berita::all(), 'kegiatan'=> Kegiatan::all()]);
    }
}
