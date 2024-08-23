<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vidio;
use Illuminate\Http\Request;

class PostVidio extends Controller
{
    public function warna(){
        return view('admin.warna');
    }
    
    public function index(){
        return view('admin.vidio');
    }
    public function vidio() {
        $vidio = Vidio::all();
        return redirect($vidio[0]->vidio);
    }

    public function postvidio(Request $request) {
        $validateData = $request->validate([
            'vidio'=> 'required|url'
        ]);

        $result = Vidio::where('id', 1)->update($validateData);
    }
    
}
