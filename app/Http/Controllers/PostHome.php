<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostHome extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function posthome(Request $request)
    {
        // Validasi input
        $validateData = $request->validate([
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'nama_instansi' => 'required|string|max:1000',
            'deskripsi' => 'required|string|max:1000',
            'background_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'gambar_ketua' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'nama_ketua' => 'required|string|max:1000',
            'gambar_wakil' => 'nullable|image|mimes:png,jpg,jpeg|max:2024',
            'nama_wakil' => 'required|string|max:1000', 
        ]);

        // Proses penyimpanan logo jika ada
        if ($request->hasFile('logo')) {
            $image_name = time() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('public/home', $image_name);
            $validateData['logo'] = $image_name;
        }

        // Proses penyimpanan background image jika ada
        if ($request->hasFile('background_image')) {
            $image_name = time() . '_' . $request->file('background_image')->getClientOriginalName();
            $request->file('background_image')->storeAs('public/home', $image_name);
            $validateData['background_image'] = $image_name;
        }

        if ($request->hasFile('gambar_ketua')) {
            $image_name = time() . '_' . $request->file('gambar_ketua')->getClientOriginalName();
            $request->file('gambar_ketua')->storeAs('public/home', $image_name);
            $validateData['gambar_ketua'] = $image_name;
        }

        if ($request->hasFile('gambar_wakil')) {
            $image_name = time() . '_' . $request->file('gambar_wakil')->getClientOriginalName();
            $request->file('gambar_wakil')->storeAs('public/home', $image_name);
            $validateData['gambar_wakil'] = $image_name;
        }

        $result = Home::where('id', 1)->update($validateData);

        if ($result) {
            return redirect('/home');
        } else {
            return redirect('/dashboard');
        }
    }
}
