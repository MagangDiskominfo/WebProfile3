@extends('/admin/dashboard')
@section('content')

    <div class="container mt-5">
        <h1>Ubah Warna Latar Belakang</h1>
        <input type="color" id="inputWarna" class="form-control mt-3">
        <button class="btn btn-primary mt-3" onclick="gantiWarna()">Simpan Warna</button>
    </div>
    
    <script>
        function gantiWarna() {
            let color = document.getElementById('inputWarna').value;
            localStorage.setItem('backgroundColor', color);
            alert('Warna latar belakang disimpan!');
        }
    </script>
@endsection
