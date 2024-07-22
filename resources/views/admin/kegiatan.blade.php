@extends('/admin/dashboard')
@section('content')
<form action="/kegiatan" method="POST" enctype="multipart/form-data">
    <h2>Atur Kegiatan Website</h2>
    <p>Silahkan isi dengan benar untuk membuat kegiatan website mu!</p>
    @csrf
    <div class="form-group">
        <label for="judul">Judul Kegiatan</label>
        <input type="text" id="judul" name="judul_kegiatan" placeholder="Masukkan Judul Kegiatan">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Kegiatan</label>
        <textarea id="deskripsi" name="deskripsi_kegiatan" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
    </div>
    <div class="form-group">
        <label for="iamge">Gambar Kegiatan</label>
        <input type="file" class="form-control-file" id="image" name="gambar_kegiatan" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
@endsection
