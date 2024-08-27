<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Warna;
use Illuminate\Http\Request;

class PostWarna extends Controller
{
    public function warna () {
        return view('admin.warna');
    }

    public function postwarna(Request $request) {
        $validateData = $request->validate([
            'warna' => 'required|string|max:255',
        ]);
    
        $result = Warna::where('id', 1)->update(['warna' => $validateData['warna']]);
    
        if ($result) {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
}
