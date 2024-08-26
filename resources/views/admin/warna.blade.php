@extends('/admin/dashboard')
@section('content')
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/warna" method="POST" enctype="multipart/form-data">
                <h2>Atur Warna Website</h2>
                <p>Silahkan isi dengan benar untuk Warna Website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="warna">Warna Backgorund</label>
                    <input type="color" class="form-control" id="warna" name="warna">
                </div>       
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
    {{-- <script>
        function gantiWarna() {
            let color = document.getElementById('inputWarna').value;
            localStorage.setItem('backgroundColor', color);
            alert('Warna latar belakang disimpan!');
        }
    </script> --}}
@endsection
