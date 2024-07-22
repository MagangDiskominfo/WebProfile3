<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\struktur;
use Illuminate\Http\Request;

class PostStruktur extends Controller
{
    public function struktur() {
        return view('/admin.struktur');
    }

    public function poststruktur(Request $request) {

        $validateData = $request->validate([
            'struktur_gambar' => 'image|mimes:png,jpg,jpeg|max:2024',
        ]);

        if ($request->hasFile('struktur_gambar')) {
            $image_name = time() . '_' . $request->file('struktur_gambar')->getClientOriginalName();
            $request->file('struktur_gambar')->storeAs('public/struktur', $image_name);
            $validateData['struktur_gambar'] = $image_name;


            $result = Struktur::create($validateData);

            if ($result) {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
    }
}