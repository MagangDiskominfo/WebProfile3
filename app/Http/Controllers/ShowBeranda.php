<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Kegiatan;
use App\Models\Lokasi;

class ShowBeranda extends Controller
{
    public function showberanda() {
       return view ('users.beranda', ['footer'=> Footer::all(), 'home'=> Home::all(),'berita'=> Berita::where('active', 1)->get(), 'kegiatan'=> Kegiatan::all(), 'lokasi'=> Lokasi::all()]);
    }
}
