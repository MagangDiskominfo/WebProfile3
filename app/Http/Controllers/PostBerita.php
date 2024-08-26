<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostBerita extends Controller
{
    public function berita()
    {
        return view('admin.berita', ['beritas'=> Berita::all(),]);
        
    }

    public function detail($id){
        $berita = Berita::find($id);
        return view('users.detail_berita', ['berita' => $berita]);
    }

    public function postberita(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image_berita' => 'required|image|mimes:png,jpg,jpeg|max:2024',
        ]);

        $validateData["user_id"] = auth()->user()->id;
        $validateData['slug'] = Str::slug($validateData['title']);
        $validateData["excerpt"] = Str::limit($validateData['body'], 300);
        $validateData["active"] = 1;

        $image_name = time() . '_' . $request->file('image_berita')->getClientOriginalName();
        $request->file('image_berita')->storeAs('public/berita', $image_name);

        $validateData['image_berita'] = $image_name;

        $result = Berita::create($validateData);

        if ($result) {
            return redirect('/dashboard')->with('success', 'Berhasil menambahkan data');
        } else {
            return redirect('/berita')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view('admin.edit.editberita', ['berita' => $berita]);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image_berita' => 'required|image|mimes:png,jpg,jpeg|max:2024',
        ]);

        $validateData["user_id"] = auth()->user()->id;
        $validateData["excerpt"] = Str::limit($validateData['body'], 300);

        $image_name = time() . '_' . $request->file('image_berita')->getClientOriginalName();
        $request->file('image_berita')->storeAs('public/berita', $image_name);

        $validateData['image_berita'] = $image_name;

        $result = Berita::where('id', $id)
        ->update($validateData);

        if ($result) {
            return redirect('/berita');
        } else {
            return redirect('/dashboard');
        }
    }

    public function delete($id){
        $result = Berita::where('id', $id)->delete();
        if($result){
            return redirect('/berita');
        }else{
            return redirect('/berita');
        }
    }

    // public function active(Request $request, $id) {
    //     $berita = Berita::find($id);

    //     // Perbarui status active berdasarkan data dari toggle switch
    //     $berita->active = $request->input('active');
    
    //     // Simpan perubahan ke database
    //     $berita->save();
    
    //     // Kembalikan respons JSON
    //     return response()->json(['success' => 'Status berhasil diperbarui.']);
    // }
}