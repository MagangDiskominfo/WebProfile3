@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Berita / Edit')
@section('content')
<div class="container" style="min-height: 80vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/berita/update/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $berita->title }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Berita</label>
                    <input type="file" class="form-control-file" id="image_berita" name="image_berita" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Berita</label>
                    <textarea class="formroens-control" id="body" name="body" rows="5" required>{{ $berita->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 10%;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
