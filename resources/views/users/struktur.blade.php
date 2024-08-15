<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur Organisasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>

<body style="background-color: #002D85">
    <nav class="navbar navbar-expand-lg shadow-lg " style="background-color: #002D85">
        <div class="container custom-padding">
            <a class=" navbar-brand " href="#">
                <img src="/storage/home/{{ $home->logo }}" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white fs-6 font-family-Poppins" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white fs-6 font-family-Poppins" href="/users/visimisi">Visi Misi</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white fs-6 font-family-Poppins" href="/users/struktur">Struktur Organisasi</a>
                        </li>
                        <li class="nav-item ms-5 dropdown">
                            <button class="nav-link btn dropdown-toggle text-white fs-6 font-family-Poppins" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Galeri 
                            </button>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item fw-bold text-primary" href="/users/foto">Foto</a></li>
                                <li><a class="dropdown-item fw-bold text-primary" href="/vidio-detail">Video</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link fs-6 fw-bold font-family-Poppins bg-white rounded-3 shadow px-3 text-primary" href="/login">Masuk</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <main style="background-color:white ; flex: 1;  min-height: 150vh; ">
        <section id="struktur" class="content">
            <div class="position-relative">
                <div class="container custom-padding">
                    <div class="col text-center">
                        <div class="card struktur-card mt-5">
                            <div class="card-body ">
                                {{-- <p class="text-center text-primary fs-1 fw-bold font-family-Poppins px-3 py-3">Lokasi</p> --}}
                                <h2 class="text-center text-primary fw-bold m-4">Struktur Organisasi</h2>
                                <div>
                                    <img src="/storage/struktur/{{ $strukturn->struktur_gambar }}" alt="Struktur" class="">
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
                <p>Copyright &copy; Diskominfo Kota Jambi 2024</p>
            </div>
        </div>
    </footer>
</body>
</html>