@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Foto / Edit')
@section('content')
<div class="container" style="min-height: 80vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/foto/update/{{ $foto->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Galeri Foto</label>
                    <input type="file" class="form-control-file" id="image" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="formroens-control" id="description" name="deskripsi" rows="5" required>{{ $foto->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 10%;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
