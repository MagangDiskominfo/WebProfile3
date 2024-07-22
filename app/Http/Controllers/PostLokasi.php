<?php

namespace App\Http\Controllers;

use App\Models\Lokasi; // Pastikan Anda sudah membuat model Lokasi
use Illuminate\Http\Request;

class PostLokasi extends Controller
{
    public function lokasi()
    {
        return view('admin.lokasi'); // Pastikan path view yang benar
    }

    public function postlokasi(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'lokasi_link' => 'required|url',
        ]);

        // Ambil nilai dari request yang sudah divalidasi
        $url = $validatedData['lokasi_link'];

        // Simpan URL ke database (menggunakan model Lokasi)
        $result = Lokasi::create([
            'lokasi_link' => $url,
        ]);

        // Arahkan pengguna ke halaman lain setelah sukses atau gagal
        if ($result) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }
}
