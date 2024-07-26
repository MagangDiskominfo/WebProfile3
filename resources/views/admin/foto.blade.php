@extends('/admin/dashboard')
@section('content')
<div class="container">
    <!-- Form untuk tambah/edit foto -->
    <h2>{{ isset($foto) ? 'Edit Foto' : 'Tambah Foto' }}</h2>
    <form action="{{ isset($foto) ? route('admin.foto.update', $foto->id) : route('admin.foto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($foto))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="upload_foto">Gambar</label>
            <input type="file" class="form-control-file" id="upload_foto" name="upload_foto">
            @if (isset($foto))
                <small>Biarkan kosong jika tidak ingin mengganti foto</small>
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $foto->upload_foto) }}" alt="Foto" width="150">
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" value="{{ isset($foto) ? $foto->deskripsi : old('deskripsi') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($foto) ? 'Simpan Perubahan' : 'Tambah Foto' }}</button>
    </form>

    <!-- Menampilkan daftar foto -->
    <h3 class="mt-4">Daftar Foto</h3>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    @isset($fotos)
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fotos as $foto)
                    <tr>
                        <td><img src="{{ asset('storage/' . $foto->upload_foto) }}" alt="Foto" width="100"></td>
                        <td>{{ $foto->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.foto.edit', $foto->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.foto.destroy', $foto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endisset
</div>
@endsection
