@extends('/admin/dashboard')
@section('content')
    <form action="/footer" method="POST" enctype="multipart/form-data">
        <h2>Atur Foooter Website</h2>
        <p>Silahkan isi dengan benar untuk membuat Footer Website mu!</p>
        @csrf
        <div class="form-group">
            <label for="wilayah">Wilayah</label>
            <input type="text" class="form-control" id="wilayah" name="wilayah">
        </div>
        <div class="form-group">
            <label for="nomor">Nomor Instansi</label>
            <input type="text" class="form-control" id="nomor" name="nomor_instansi" required>
        </div>
        <div class="form-group">
            <label for="email">Email Instansi</label>
            <input type="email" class="form-control" id="email" name="email_instansi" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </div>        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

