<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Home;
use App\Models\Kegiatan;
use App\Models\Lokasi;

class ShowBeranda extends Controller
{
    public function showberanda() {
       return view ('users.beranda', ['home'=> Home::all(),'berita'=> Berita::all(), 'kegiatan'=> Kegiatan::all(), 'lokasi'=> Lokasi::all()]);
    }
}
