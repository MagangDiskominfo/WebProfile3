@extends('/admin/dashboard')
@section('content')
    <form action="/kegiatan/update/{{ $kegiatan->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Kegiatan</label>
            <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" value="{{ $kegiatan->judul_kegiatan }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar Kegiatan</label>
            <input type="file" class="form-control-file" id="gambar_kegiatan" name="gambar_kegiatan" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Kegiatan</label>
            <textarea class="formroens-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="5" required>{{ $kegiatan->deskripsi_kegiatan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection