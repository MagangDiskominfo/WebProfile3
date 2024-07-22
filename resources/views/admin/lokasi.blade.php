@extends('/admin/dashboard')
@section('content')
<form action="/lokasi" method="POST">
    @csrf
    <div class="form-group">
        <label for="lokasi">Link Lokasi (URL)</label>
        <input type="text" id="lokasi" name="url" placeholder="Masukkan link lokasi (mis. https://maps.google.com)">
    </div>
    <div class="form-group">
        <button type="submit">Upload Link Lokasi</button>
    </div>
</form>
@endsection