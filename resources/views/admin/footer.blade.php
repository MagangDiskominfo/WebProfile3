@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Footer')
@section('content')
<div class="container" style="min-height: 80vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/footer" method="POST" enctype="multipart/form-data">
                <h2>Atur Foooter Website</h2>
                <p>Silahkan isi dengan benar untuk membuat Footer Website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="footer">Footer (*Nama Instansi)</label>
                    <input type="text" class="form-control" id="footer" name="copyright">
                </div>       
                <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection

