<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class PostVisimisi extends Controller
{
    public function visimisi () {
        return view('admin.visimisi');
    }

    public function postvisimisi (Request $request) {
        $validateData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visiMisi = new Visimisi();
        $visiMisi->visi = $validateData['visi'];
        $visiMisi->misi = $validateData['misi'];
        $visiMisi->save();

        // Redirect atau kembalikan respons sesuai kebutuhan aplikasi Anda
        return redirect('/');
    }
}   
