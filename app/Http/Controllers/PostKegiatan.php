<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Str;

class PostKegiatan extends Controller
{
    public function kegiatan()
    {
        return view('admin.kegiatan', ['kegiatans' => Kegiatan::all(),]);
    }

    public function detail($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('users.detail_kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function postkegiatan(Request $request)
    {
        // Validasi data yang diterima dari form
        $validateData = $request->validate([
            'judul_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'gambar_kegiatan' => 'image|mimes:png,jpg,jpeg|max:2024',
        ]);

        $validateData["excerpt"] = Str::limit($validateData['deskripsi_kegiatan'], 300);
        $validateData["active"] = 1;        

        // Jika ada file gambar yang diunggah, proses penyimpanannya
        if ($request->hasFile('gambar_kegiatan')) {
            $image_name = time() . '_' . $request->file('gambar_kegiatan')->getClientOriginalName();
            $request->file('gambar_kegiatan')->storeAs('public/kegiatan', $image_name);
            $validateData['gambar_kegiatan'] = $image_name;
        }

        // Menyimpan data ke dalam tabel kegiatan
        $result = Kegiatan::create($validateData);

        // Mengembalikan respons berdasarkan hasil penyimpanan
        if ($result) {
            return redirect('/dashboard');
        } else {
            return redirect('/kegiatan');
        }
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.edit.editkegiatan', ['kegiatan' => $kegiatan]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'judul_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'gambar_kegiatan' => 'image|mimes:png,jpg,jpeg|max:2024',
        ]);

        $validateData["excerpt"] = Str::limit($validateData['deskripsi_kegiatan'], 300);

        // Jika ada file gambar yang diunggah, proses penyimpanannya
        if ($request->hasFile('gambar_kegiatan')) {
            $image_name = time() . '_' . $request->file('gambar_kegiatan')->getClientOriginalName();
            $request->file('gambar_kegiatan')->storeAs('public/kegiatan', $image_name);
            $validateData['gambar_kegiatan'] = $image_name;
        }

        // Menyimpan data ke dalam tabel kegiatan
        $result = Kegiatan::where('id', $id)
            ->update($validateData);  

        // Mengembalikan respons berdasarkan hasil penyimpanan
        if ($result) {
            return redirect('/kegiatan');
        } else {
            return redirect('/dashboard');
        }
    }

    public function delete($id)
    {
        $result = Kegiatan::where('id', $id)->delete();
        if ($result) {
            return redirect('/kegiatan');
        } else {
            return redirect('/kegiatan');
        }
    }

    public function active(Request $request, $id) {
        $kegiatan = Kegiatan::find($id);

        // Perbarui status active berdasarkan data dari toggle switch
        $kegiatan->active = $request->input('active');
    
        // Simpan perubahan ke database
        $kegiatan->save();
    
        // Kembalikan respons JSON
        return response()->json(['success' => 'Status berhasil diperbarui.']);
    }
}
