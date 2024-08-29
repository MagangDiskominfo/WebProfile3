@extends('/admin/dashboard')
@section('title', 'Buku Panduan')
@section('content')
<div class="container" style="min-height: 80vh">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-4">
                <h2 class="font-weight-bold mb-4">Buku Panduan</h2>
                <p class="mb-4" style="font-weight: 600; color: #555555">Buku panduan ini menyediakan petunjuk langkah demi langkah tentang cara menggunakan Website GePIKA (Gerbang Profil Instansi Kota Jambi) dengan benar serta membantu instansi pengguna menghindari kesalahan umum yang mungkin terjadi saat pertama kali menggunakan website.
                    <br><br>Ayo Pelajari Sekarang !
                </p>  
                <div style="display: flex; margin-bottom:3rem">
                    <a href="{{ asset('img/bukupanduan.pdf')  }}" class="btn font-weight-bold text-white px-4 py-2 text-center" style="background-color: #003f88; flex: 1; " download="Buku_Panduan.pdf">Unduh Buku Panduan</a>
                </div>
                <div style="display: flex; border: 5px solid #003f88;">
                    <embed src="{{ asset('img/bukupanduan.pdf') }}" type="application/pdf" width="100%" height="600px" />
                    {{-- <iframe src="{{ asset('img/bukupanduan.pdf') }}" width="100%" height="600px"></iframe> --}}
                </div>
        </div>
    </div>
</div>
@endsection