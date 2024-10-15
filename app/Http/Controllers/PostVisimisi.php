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

    // public function index() {
    //     $visimisin = Visimisi::first(); // Sesuaikan query dengan kebutuhan Anda
    //     return view('users.visimisi', ['visimisin' => $visimisin]);
    // }

    // public function index() {
    //     $visimisin = Visimisi::first();
    
    //     // Pecah string misi menjadi array menggunakan angka sebagai pemisah
    //     $misi_array = preg_split('/(?<=\d)\.\s*/', $visimisin->misi);
    
    //     return view('users.visimisi', ['visimisin' => $visimisin, 'misi_array' => $misi_array]);
    // }
    
    // public function index() {
    //     $visimisin = Visimisi::first();
    
    //     // Pecah string misi menjadi array menggunakan angka sebagai pemisah
    //     $misi_array = preg_split('/(?<=\d)\.\s*/', $visimisin->misi);
    
    //     // Filter out empty values or unintended numbers
    //     $misi_array = array_filter($misi_array, function($misi) {
    //         return trim($misi) !== '' && trim($misi) !== '1';
    //     });
    
    //     return view('users.visimisi', ['visimisin' => $visimisin, 'misi_array' => $misi_array]);
    // }

    public function index() {
        $visimisin = Visimisi::first();
    
        // Pisahkan misi menggunakan regular expression yang mendeteksi angka di akhir kalimat
        $misi_array = explode("\n", $visimisin->misi);
        
        // Hilangkan angka di akhir kalimat menggunakan preg_replace
        $misi_array = array_map(function($misi) {
            return preg_replace('/\d+$/', '', $misi); // Menghapus angka di akhir kalimat
        }, $misi_array);
    
        return view('users.visimisi', ['visimisin' => $visimisin, 'misi_array' => $misi_array]);
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