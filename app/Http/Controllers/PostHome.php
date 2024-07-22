<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostHome extends Controller
{
    public function update(Request $request)
    {
        // Validasi input
        $validateData = $request->validate([
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'nama_instansi' => 'required|string|max:255',
            'background_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
        ]);

        // Mengambil data home dari database
        $home = Home::first(); // Ambil entri pertama dari tabel home

        if(!$home){
            $home = new Home();
        }

        // Memproses unggahan logo
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($home->logo && Storage::exists($home->logo)) {
                Storage::delete($home->logo);
            }
            // Simpan logo baru
            $home->logo = $request->file('logo')->store('public/home');
        }

        // Memproses unggahan gambar latar belakang
        if ($request->hasFile('background_image')) {
            // Hapus gambar latar belakang lama jika ada
            if ($home->background_image && Storage::exists($home->background_image)) {
                Storage::delete($home->background_image);
            }
            // Simpan gambar latar belakang baru
            $home->background_image = $request->file('background_image')->store('public/home');
        }

        // Menyimpan nama instansi
        $home->nama_instansi = $request->nama_instansi;

        // Simpan data home
        $home->save();

        // Redirect dengan pesan sukses
        if ($home->save()) {
            return redirect('/')->with('success', 'Berhasil menambahkan data');
        } else {
            return redirect('/dashboard')->with("error", "Gagal menambahkan data!");
        }
    }
}
