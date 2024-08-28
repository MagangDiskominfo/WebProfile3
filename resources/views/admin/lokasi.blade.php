@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Lokasi')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/lokasi" method="POST">
                <h2 class="font-weight-bold">Atur Lokasi Website</h2>
                <p>Silahkan isi dengan benar untuk membuat Lokasi website mu!</p>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lokasi">Link Lokasi (URL)</label>
                    <input type="text" id="lokasi" name="lokasi_link" placeholder="Masukkan link lokasi (mis. https://maps.google.com)" value="{{old ('lokasi_link', $lokasi->lokasi_link ?? '') }}" required>
                </div>
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
                <h5 class="font-weight-bold">Media Sosial</h5>
                <div class="form-group">
                    <label for="yt">Link Youtube (URL)</label>
                    <input type="text" id="yt" name="yt_link" placeholder="Masukkan link Yt (mis. https://youtube.com)" required>
                </div>
                <div class="form-group">
                    <label for="ig">Link Instagram (URL)</label>
                    <input type="text" id="ig" name="ig_link" placeholder="Masukkan link Ig (mis. https://instagram.com)" required>
                </div>
                <div class="form-group">
                    <label for="fb">Link facebook (URL)</label>
                    <input type="text" id="fb" name="fb_link" placeholder="Masukkan link Fb (mis. https://facebook.com)" required>
                </div>
                <div class="form-group">
                    <label for="x">Link X (URL)</label>
                    <input type="text" id="x" name="x_link" placeholder="Masukkan link X (mis. https://X.com)" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection