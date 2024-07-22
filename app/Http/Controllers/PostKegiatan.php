<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class PostKegiatan extends Controller
{
    public function kegiatan () {
        return view('admin.kegiatan');
    }

    public function postkegiatan(Request $request) {
        // Validasi data yang diterima dari form
        $validateData = $request->validate([
            'judul_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'gambar_kegiatan' => 'image|mimes:png,jpg,jpeg|max:2024',
        ]);

        // Jika ada file gambar yang diunggah, proses penyimpanannya
        if ($request->hasFile('gambar_kegiatan')) {
            $image_name = time() . '_' . $request->file('gambar_kegiatan')->getClientOriginalName();
            $request->file('gambar_kegiatan')->storeAs('public/kegiatan', $image_name);
            $validateData['gambar_kegiatan'] = $image_name;
        }

        // Menyimpan data ke dalam tabel kegiatan
        $result = Kegiatan::create($validateData);

        // Mengembalikan respons berdasarkan hasil penyimpanan
        if ($result) {
            return redirect('/')->with('success', 'Berhasil menambahkan kegiatan');
        } else {
            return redirect('/dashboard')->with('error', 'Gagal menambahkan kegiatan!');
        }
    }
}
