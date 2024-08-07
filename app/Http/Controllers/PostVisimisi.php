<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class PostVisimisi extends Controller
{
    public function visimisi() {
        return view('admin.visimisi');
    }

    public function index() {
        $visimisin = Visimisi::first(); // Sesuaikan query dengan kebutuhan Anda
        return view('users.visimisi', ['visimisin' => $visimisin]);
    }

    public function postvisimisi(Request $request) {
        $validateData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $result = Visimisi::where('id', 1)->update($validateData);

        if ($result) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }
}