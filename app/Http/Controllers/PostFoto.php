<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostFoto extends Controller
{
    public function index()
    {
        $fotos = Foto::all();
        return view('admin.foto.form', compact('fotos'));
    }

    public function create()
    {
        return view('admin.foto.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'upload_foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $path = $request->file('upload_foto')->store('fotos');

        Foto::create([
            'upload_foto' => $path,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.foto.index')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(Foto $foto)
    {
        return view('admin.foto.form', compact('foto'));
    }

    public function update(Request $request, Foto $foto)
    {
        $request->validate([
            'upload_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('upload_foto')) {
            Storage::delete($foto->upload_foto);
            $path = $request->file('upload_foto')->store('fotos');
            $foto->upload_foto = $path;
        }

        $foto->deskripsi = $request->deskripsi;
        $foto->save();

        return redirect()->route('admin.foto.index')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(Foto $foto)
    {
        Storage::delete($foto->upload_foto);
        $foto->delete();
        return redirect()->route('admin.foto.index')->with('success', 'Foto berhasil dihapus');
    }
}
