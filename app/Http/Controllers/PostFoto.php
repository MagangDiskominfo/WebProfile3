<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostFoto extends Controller
{

    public function index () {
        return view('users.foto', ['foto' => Foto::paginate(9),]);
    }

    public function foto() {
        return view('admin.foto', ['fotos' => Foto::all()]);
    }

    public function postfoto(Request $request) {
        $validateData = $request->validate ([
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2024',    
            'deskripsi' => 'required',    
        ]);

        $validateData["excerpt"] = Str::limit($validateData['deskripsi'], 300);

        if ($request->hasFile('foto')) {
            $image_name = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/foto', $image_name);
            $validateData['foto'] = $image_name;
        }

        $result = Foto::create($validateData);

        if ($result) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }

    public function edit($id) {
        $foto = Foto::find($id);
        return view('admin.edit.editfoto', ['foto' =>$foto]);
    }

    public function update(Request $request ,$id) {
        $validateData = $request->validate([
            'foto' =>'required|image|mimes:png,jpg,jpeg|max:2024',    
            'deskripsi' => 'required',
        ]);

        $validateData["excerpt"] = Str::limit($validateData['deskripsi'], 300);

        if ($request->hasFile('foto')) {
            $image_name = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/foto', $image_name);
            $validateData['foto'] = $image_name;
        }

        $result = Foto::where('id', $id)
        ->update($validateData);

        if ($result) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }

    public function delete($id){
        $result = Foto::where('id', $id)->delete();
        if($result){
            return redirect('/kegiatan');
        } else {
            return redirect('/kegiatan');
        }
    }
}
