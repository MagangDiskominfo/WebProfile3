@extends('/admin/dashboard')
@section('content')
    <form action="/admin/home/update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
        </div>
        <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" required>
        </div>
        <div class="form-group">
            <label for="background_image">Gambar Latar Belakang</label>
            <input type="file" class="form-control" id="background_image" name="background_image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
