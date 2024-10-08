<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Berita</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    {{-- <style>

        html, body {
            height: 100%; /* Memastikan html dan body memenuhi tinggi layar penuh */
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1; /* Membuat konten utama memanfaatkan ruang yang tersedia */
        }

    </style> --}}
</head>

<body style="background-color: #002D85">
    <nav class="navbar navbar-expand-lg shadow-lg " style="background-color: #002D85">
        <div class="container custom-padding">
            <a class=" navbar-brand " href="#">
                <img src="/storage/home/{{ $home->logo }}" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/users/visimisi">Visi Misi</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/users/struktur">Struktur
                            Organisasi</a>
                    </li>
                    <li class="nav-item ms-5 dropdown">
                        <button class="nav-link btn dropdown-toggle text-white fs-6 font-family-Poppins" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </button>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item fw-bold text-primary" href="/users/foto">Foto</a></li>
                            <li><a class="dropdown-item fw-bold text-primary" href="/vidio-detail">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link fs-6 fw-bold font-family-Poppins bg-white rounded-3 shadow px-3 text-primary"
                            href="/login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        {{-- <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">{{ $berita->title }}</h1>
                    <p class="card-text">{{ $berita->body }}</p>
                    <img src="/storage/berita/{{ $berita->image_berita }}" class="img-fluid mx-auto d-block" alt="Berita Image">
                </div>
            </div>
        </div> --}}
        <main style="background-color:white ; flex: 1;  min-height: 150vh; padding-bottom: 3rem ">
            <section id="struktur" class="content">
                <div class="position-relative-detail">
                    <div class="container custom-padding-detail">
                        
                        {{-- <div class="col text-center">
                            <div class="card detail-card mt-5 ">
                                <div class="card-body ">
                                    <h1 class="card-title text-center">{{ $berita->title }}</h1>
                                    <p class="card-text">{{ $berita->body }}</p>
                                    <img src="/storage/berita/{{ $berita->image_berita }}" class="img-fluid mx-auto d-block" alt="Berita Image">
                                </div>
                            </div>
                        </div> --}}
                        <div class="card detail-card mt-5 ">
                            <div class="card-body ">
                                <div class="row mt-5">
                                    <div class="col-md-4 text-center">
                                        <img src="/storage/berita/{{ $berita->image_berita }}" class="img-fluid" alt="Berita Image">
                                    </div>
                                    <div class="col-md-8">
                                        <h1 class="card-title text-center">{{ $berita->title }}</h1>
                                        <p class="card-text">{{ $berita->body }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <footer class="text-white pt-3">
            <div class=" text-white start-0 w-100 py-2 ">
                {{-- <div class="container custom-padding">
                    <div class="row ">
                        <div class="col-md-6">
                            <a class=" navbar-brand " href="#">
                                <img src="{{ asset('../img/diskom.png') }}" alt="Logo" style="height: 35px;">
                            </a>
                            <div class="pt-2">
                                <p class="fs-6 fw-normal"> <i class="bi bi-geo-alt-fill"></i> Kota Jambi, Jambi </p>
                                <p class="fs-6 fw-normal"> <i class="bi bi-telephone-fill"></i> 0741444953</p>
                                <p class="fs-6 fw-normal"> <i class="bi bi-envelope-fill"></i> diskominfokotajambi@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <ul class="list-unstyled ">
                                <li class="mt-4 mb-2"><a class="text-white" href="/">Home</a></li>
                                <li class="mb-2"><a class="text-white" href="/visimisi">Visi Misi</a></li>
                                <li class="mb-2"><a class="text-white" href="/struktur">Struktur Organisasi</a></li>
                                <li class="mb-2"><a class="text-white" href="/galeri">Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="container text-center">
                    {{-- <p>&copy; 2024 Pemerintah Provinsi Jambi. All rights reserved. © </p> --}}
                    {{-- <hr style="border-width: 2px; border-color: white; margin-left: 4rem; margin-right: 4rem;"> --}}
                    <p>Copyright &copy; {{ $footer->copyright }}</p>
                </div>
            </div>
    </footer>
</body>
</html>
