@extends('/admin/dashboard')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/struktur" method="POST" enctype="multipart/form-data">
                <h2>Atur Sturktur Organisasi Website</h2>
                <p>Silahkan isi dengan benar untuk membuat Struktur Organisasi Website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="struktur">Upload Struktur Organisasi</label>
                    <input type="file" class="form-control-file" id="struktur" name="struktur_gambar" required>
                </div>
                <button type="submit"  style="width: 10%;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
