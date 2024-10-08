@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Beranda') <!-- Menambahkan judul halaman -->
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/home" method="POST" enctype="multipart/form-data">
                <h2  class="font-weight-bold">Atur Beranda Website</h2>
                <p>Silahkan isi dengan benar untuk membuat beranda Website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi"  placeholder="Masukkan Nama Instansi" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Website</label>
                    {{-- <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Website" required> --}}
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Website" required></textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo Website</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="background_image">Background Website</label>
                    <input type="file" class="form-control" id="background_image" name="background_image">
                </div>
                <div class="form-group">
                    <label for="gambar_ketua">Gambar Ketua Instansi</label>
                    <input type="file" class="form-control" id="gambar_ketua" name="gambar_ketua">
                </div>
                <div class="form-group">
                    <label for="nama_ketua">Nama Ketua Instansi</label>
                    <input type="text" class="form-control" id="nama_ketua" name="nama_ketua"  placeholder="Masukkan Nama Ketua Instansi" required>
                </div>
                <div class="form-group">
                    <label for="gambar_wakil">Gambar Wakil Ketua Instansi</label>
                    <input type="file" class="form-control" id="gambar_wakil" name="gambar_wakil">
                </div>
                <div class="form-group">
                    <label for="nama_wakil">Nama Wakil Instansi</label>
                    <input type="text" class="form-control" id="nama_wakil" name="nama_wakil"  placeholder="Masukkan Nama Wakil Instansi" required>
                </div>
                <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

