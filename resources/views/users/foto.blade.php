<?php
$warna = App\Models\Warna::first()->warna;
?>
<style>
    :root {
        --warna: {{ $warna }};
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Galeri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <style>
        .carousel-item img {
            height: 150px;
            width: auto;
            max-height: 100%;
            /* Adjust to fit within the fixed height */
            object-fit: cover;
            /* Ensures the image covers the area */
        }
    </style>
</head>

<body style="background-color: var(--warna)">
    <nav class="navbar navbar-expand-lg shadow-lg " style="background-color: var(--warna)">
        <div class="container custom-padding">
            <a class=" navbar-brand " href="#">
                {{-- <img src="{{ asset('../img/diskom.png') }}" alt="Logo" style="height: 40px;"> --}}
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
                        <a class="nav-link fs-6 fw-bold font-family-Poppins bg-white rounded-3 shadow px-3 " style="color: var(--warna)"
                            href="/login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="background-color:white; flex: 1;   min-height: 150vh;">
        <section id="galeri" class="text-center" style="padding-top: 5rem">
            <div class="position-relative">
                <div class="container custom-padding">
                    <div class="card struktur-card mt-5">
                        <div class="card-body mb-5">
                            <h1 class="fw-bold fs-1 mb-4">Galeri</h1>
                            <div id="carouselFoto" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($foto->chunk(6) as $chunk) <!-- Mengelompokkan 9 item per slide -->
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($chunk as $item  )
                                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                                <img src="/storage/foto/{{ $item->foto }}"
                                                    class="d-block w-100 rounded-3" alt="...">
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                {{-- <div class="carousel-control-custom">
                                    <button class="carousel-control-prev-custom" type="button"
                                        data-bs-target="#carouselBerita" data-bs-slide="prev">
                                        <span aria-hidden="true">Sebelumnya</span>
                                    </button>
                                    <button class="carousel-control-next-custom" type="button"
                                        data-bs-target="#carouselBerita" data-bs-slide="next">
                                        <span aria-hidden="true">Selanjutnya</span>
                                    </button>
                                </div> --}}
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFoto" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselFoto" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-primary-custom text-white pt-3">
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
                            <p class="fs-6 fw-normal"> <i class="bi bi-envelope-fill"></i>
                                diskominfokotajambi@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <ul class="list-unstyled ">
                            <li class="mt-4 mb-2"><a class="text-white" href="{{ url('/') }}">Home</a></li>
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

<<<<<<< HEAD
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            let savedColor = localStorage.getItem('backgroundColor');
            if (savedColor) {
                document.body.style.backgroundColor = savedColor;
            }
        });
    </script> --}}
=======

>>>>>>> aa855078429ed532062bab0c37422674925d739c

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
