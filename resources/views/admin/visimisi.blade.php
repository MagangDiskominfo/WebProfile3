@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Visi Misi')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm" style="min-height: 80vh">
        <div class="card-body mx-4 my-2">
            <form action="/visimisi" method="POST" enctype="multipart/form-data">
                <h2 class="font-weight-bold">Atur Visi Misi Website</h2>
                <p>Silahkan isi dengan benar untuk membuat Visi Misi Website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <input type="text" id="visi" name="visi" placeholder="Masukkan Visi">
                </div>
                <div class="form-group">
                    <label for="Misi">Misi</label>
                    <textarea id="Misi" name="misi" placeholder="Masukkan Misi"></textarea>
                </div>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
