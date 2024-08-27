@extends('/admin/dashboard')
@section('title', 'Kelola Galeri / Vidio')
@section('content')
<div class="container" style="min-height: 74vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/vidio" method="POST" enctype="multipart/form-data">
                <h2 class="font-weight-bold">Atur Link Vidio Website</h2>
                @csrf
                <div class="form-group">
                    <label for="vidio">Link vidio (URL)</label>
                    <input type="text" class="form-control" id="vidio" name="vidio" placeholder="Masukkan link lokasi (mis. https://www.youtube.com)">
                </div>
                <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

