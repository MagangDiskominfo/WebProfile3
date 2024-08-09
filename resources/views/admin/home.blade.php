@extends('/admin/dashboard')
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
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Website" required>
                </div>
                <div class="form-group">
                    <label for="logo">Logo Website</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="background_image">Background Website</label>
                    <input type="file" class="form-control" id="background_image" name="background_image">
                </div>
                <button type="submit" class="btn font-weight-bold text-white" style="background-color: #002D85; border-color: #002D85;">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

