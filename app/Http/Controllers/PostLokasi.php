<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostLokasi extends Controller
{
    public function lokasi() {
        return view('admin.lokasi');
    }

    public function postlokasi(Request $request) {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'lokasi' => 'required|url',
        ]);

        // Ambil nilai dari request yang sudah divalidasi
        $url = $validatedData['url'];

        // Lakukan sesuatu dengan URL, misalnya menyimpannya ke database atau memprosesnya lebih lanjut

        // Contoh pengembalian response JSON (jika Anda ingin mengembalikan JSON)
        // return response()->json(['message' => 'URL is valid', 'url' => $url], 200);

        // Atau arahkan pengguna ke halaman lain setelah sukses
        return redirect('/')->with('success', 'URL is valid');
    }
}
