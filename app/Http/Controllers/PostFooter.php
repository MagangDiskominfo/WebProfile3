<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class PostFooter extends Controller
{

    public function footer () {
        return view('admin.footer');
    }

    public function postfooter(Request $request) {
        $validateData = $request->validate([
            'wilayah' => 'required|string|max:255',
            'nomor_instansi' => 'required|string|max:255',
            'email_instansi' => 'required|email|max:255',
        ]);

        $result = Footer::where('id', 1)->update($validateData);;

        if ($result) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
        

    }
}
