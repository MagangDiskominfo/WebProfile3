<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostHome extends Controller
{
    public function home () {
        return view('admin.home');
    }

    public function posthome(Request $request)
    {
        // Validasi input
        $request->validate([
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'nama_instansi' => 'required|string|max:255',
            'background_image' => 'nullable|image|mimes:png,jpg,jpeg|pdf|max:2024',
        ]);

        // Mengambil data home dari database
        $home = Home::first(); // Ambil entri pertama dari tabel 
        
        if (!$home) {
            // Jika tidak ada data 'home', buat baru
            $home = new Home();
        }

        if(!$home){
            $home = new Home();
        }

        // Memproses unggahan logo
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($home->logo && Storage::exists($home->logo)) {
                Storage::delete($home->logo);
            }
            // Simpan logo baru dengan nama yang unik
            $name_logo = 'logo_' . time() . '.' . $request->file('logo')->extension();
            $request->file('logo')->storeAs('public/home' . $name_logo);
            $home->logo = $name_logo;
        }

        // Memproses unggahan gambar latar belakang
        if ($request->hasFile('background_image')) {
            // Hapus gambar latar belakang lama jika ada
            if ($home->background_image && Storage::exists($home->background_image)) {
                Storage::delete($home->background_image);
            }
            // Simpan gambar latar belakang baru dengan nama yang unik
            $name_background = 'background_' . time() . '.' . $request->file('background_image')->extension();
            $request->file('background_image')->storeAs('public/home' . $name_background);
            $home->background_image = $name_background;
        }

        // Menyimpan nama instansi
        $home->nama_instansi = $request->nama_instansi;

        // Simpan data home
        if ($home->save()) {
            return redirect('/')->with('success', 'Berhasil menambahkan data');
        } else {
            return redirect('/dashboard')->with('error', 'Gagal menambahkan data!');
        }
    }
}
