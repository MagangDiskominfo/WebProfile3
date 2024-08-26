<?php

namespace App\Http\Controllers;

use App\Models\Lokasi; // Pastikan Anda sudah membuat model Lokasi
use Illuminate\Http\Request;

class PostLokasi extends Controller
{
    public function lokasi()
    {
        return view('admin.lokasi');
    }

    public function postlokasi(Request $request)
    {
        // Validasi data yang diterima
        $validateData = $request->validate([
            'lokasi_link' => 'required|url',
            'wilayah' => 'required|string|max:255',
            'nomor_instansi' => 'required|string|max:255',
            'email_instansi' => 'required|email|max:255',
            'yt_link' => 'required|url',
            'ig_link' => 'required|url',
            'fb_link' => 'required|url',
            'x_link' => 'required|url',

        ]);


        // Ambil nilai dari request yang sudah divalidasi
        $url = $validateData['lokasi_link'];
        // $url = $validateData['lokasi_link'];

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

        $result = Lokasi::where('id', 1)->update($validateData);

        // Arahkan pengguna ke halaman lain setelah sukses atau gagal
        if ($lokasi) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }
}
