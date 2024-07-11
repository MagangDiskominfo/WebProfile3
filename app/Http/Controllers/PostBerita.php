<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostBerita extends Controller
{
 public function store(Request $request){

    $validateData = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'image_berita' => 'required|image|mimes:png,jpg,jpeg|max:2024',
    ]);

    $validateData["user_id"] = 1;
    $validateData["slug"] = Str::slug($validateData['title'], '-');
    $validateData["excerpt"] = Str::limit($validateData['body'], 300);

    $image_name = time() . '_' . $request->file('image_berita')->getClientOriginalName();
    $request->file('image_berita')->storeAs('public/berita', $image_name);

    $validateData['image_berita'] = $image_name;

    $result = Berita::create($validateData);

    if ($result) {
        return redirect('/')->with('success', 'Berhasil menambahkan data');
    } else {
        return redirect('/dashboard')->with("error", "Gagal menambahkan data!");
    }

 }
}
