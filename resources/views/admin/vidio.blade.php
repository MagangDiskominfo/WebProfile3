@extends('/admin/dashboard')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/vidio" method="POST" enctype="multipart/form-data">
                <h2>Atur Link Vidio Website</h2>
                @csrf
                <div class="form-group">
                    <label for="vidio">Link vidio (URL)</label>
                    <input type="text" class="form-control" id="vidio" name="vidio" placeholder="Masukkan link lokasi (mis. https://www.youtube.com)">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

