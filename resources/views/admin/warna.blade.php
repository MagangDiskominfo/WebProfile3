@extends('/admin/dashboard')
@section('title', 'Warna Website')
@section('content')
<div class="container" style="min-height: 80vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/warna" method="POST" enctype="multipart/form-data">
                <h2 class="font-weight-bold">Atur Warna Website</h2>
                <p>Silahkan pilih warna Website Instansimu!</p>
                @csrf
                <div class="form-group">
                    <label for="warna">Pilih Warna Website</label>
                    <input type="color" class="form-control" id="warna" name="warna">
                </div>       
                <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
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
