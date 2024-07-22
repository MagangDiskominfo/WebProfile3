@extends('/admin/dashboard')
@section('content')
    <form action="/foto" method="POST" enctype="multipart/form-data">
        <h2>Atur Foto Website</h2>
        <p>Silahkan isi dengan benar untuk membuat Foto Website mu!</p>
        @csrf
        <div class="form-group">
            <label for="image1">Gambar Berita</label>
            <input type="file" class="form-control-file" id="image1" name="image_berita" required>
        </div>
        <div class="form-group">
            <label for="image2">Gambar Berita</label>
            <input type="file" class="form-control-file" id="image2" name="image_berita" required>
        </div>
        <div class="form-group">
            <label for="image3">Gambar Berita</label>
            <input type="file" class="form-control-file" id="image3" name="image_berita" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection