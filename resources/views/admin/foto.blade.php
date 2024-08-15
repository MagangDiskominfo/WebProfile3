@extends('/admin/dashboard')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/foto" method="POST" enctype="multipart/form-data">
                <h2>Atur Foto Instansi</h2>
                @csrf
                <div class="form-group">
                    <label for="image">Galeri Foto</label>
                    <input type="file" class="form-control-file" id="image" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <!-- Tabel CRUD untuk menampilkan data kegiatan -->
            <h2>Daftar Foto</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fotos as $foto)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $foto->deskripsi }}</td>
                            <td><img src='storage/foto/{{ $foto->foto }}' alt="{{ $foto->deskripsi }}" width="100"></td>
                            <td>
                                <!-- Tambahkan tombol edit dan delete -->
                                <a href="/foto/edit/{{ $foto->id }}" class="btn btn-warning">Edit</a>
                                <a href="/foto/delete/{{ $foto->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection