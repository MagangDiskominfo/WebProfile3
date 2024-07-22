@extends('/admin/dashboard')
@section('content')
<form action="/lokasi" method="POST">
    <h2>Atur Lokasi Website</h2>
    <p>Silahkan isi dengan benar untuk membuat Lokasi website mu!</p>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="lokasi">Link Lokasi (URL)</label>
        <input type="text" id="lokasi" name="lokasi_link" placeholder="Masukkan link lokasi (mis. https://maps.google.com)" value="{{old ('lokasi_link', $lokasi->lokasi_link ?? '') }}" required>
    </div>
    <div class="form-group">
        <button type="submit">Upload Link Lokasi</button>
    </div>
</form>
@endsection