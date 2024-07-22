<?php

namespace App\Http\Controllers;

use App\Models\Lokasi; // Pastikan Anda sudah membuat model Lokasi
use Illuminate\Http\Request;

class PostLokasi extends Controller
{
    public function lokasi()
    {
        // $lokasi = Lokasi::first();
        return view('admin.lokasi');
        // ,['lokasi' => $lokasi]); Pastikan path view yang benar
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
        $lokasi = Lokasi::first();
        if ($lokasi) {
            //Update URL jika sudah ada
            $lokasi->lokasi_link = $url;
            $lokasi->save();
        } else {
            Lokasi::create([
            'lokasi_link' => $url,
        ]);
        }

        // Arahkan pengguna ke halaman lain setelah sukses atau gagal
        if ($lokasi) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }
}
