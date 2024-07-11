@extends('/admin/dashboard')
@section('content')
    <form action="/admin/berita/add" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Berita</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar Berita</label>
            <input type="file" class="form-control-file" id="image_berita" name="image_berita" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Berita</label>
            <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
