<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>
<body style="background-color: #002D85">
    <!-- Navigasi di bagian atas -->
    <nav class="navbar navbar-expand-lg shadow-lg " style="background-color: #002D85">
        <div class="container custom-padding">
        <a class=" navbar-brand " href="#">
            <img src="{{ asset('../img/diskom.png') }}" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/visimisi">Visi Misi</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-white fs-6 font-family-Poppins" href="/struktur">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item ms-5 dropdown">
                        <button class="nav-link btn dropdown-toggle text-white fs-6 font-family-Poppins" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri <i class="bi bi-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item fw-bold text-primary" href="#">Foto</a></li>
                            <li><a class="dropdown-item fw-bold text-primary" href="#">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link fs-6 fw-bold font-family-Poppins bg-white rounded-3 shadow px-3 text-primary" href="/login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="content">
        <div class="position-relative" style="background-image: url('../img/bg.png')">
            <div class="overlay-gradient"></div>
                <div class="position-relative text-justify " style="padding-top: 110px;">
                    <div class="container custom-padding">
                    <h1 class="text-white font-family-Poppins"><b>PEMERINTAH <br> PROVINSI JAMBI</b></h1>
                    <h4 class="text-white mt-4 ">
                        Selamat Datang, <br> di Situs Resmi Pemerintah Provinsi Jambi. Temukan informasi <br>dan berita terkini tentang Pemerintah Kota Jambi atau jelajahi <br>lebih banyak informasi mengenai Provinsi Jambi. Nikmati akses <br> mudah ke layanan publik, pembaruan terbaru, dan berbagai <br>sumber daya yang bermanfaat untuk masyarakat Jambi.
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- <section id="berita" class="py-5">
            <div class="container">
                <h2 class="text-white mb-4">Berita</h2>
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt ante et erat aliquam, nec dignissim ex ultricies. Ut quis metus lorem. Sed ullamcorper, leo id lobortis tincidunt, dui quam viverra enim, non luctus turpis tortor in felis.
                </p>
            </div>
        </section> --}}

         <!-- Section Berita -->
    <section id="berita" class="news-section bg-white ">
        <div class="container">
            <p class="text-center text-primary fs-1 fw-bold font-family-Poppins  m-0 px-3 py-4">Berita</p>
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card news-card ">
                                    <div class="col-md-4">
                                    <img src="path-to-your-image.jpg" class="card-img-left" alt="Berita 1">
                                </div>
                                    <div class="card-body news-card-body">
                                        <h5 class="card-title">Sekda A Ridwan Buka Festival Muharram 2024 Kota Jambi</h5>
                                        <p class="card-text">Festival ini merupakan acara tahunan yang telah berjalan selama beberapa tahun terakhir, dan kali ini juga diselenggarakan dengan meriah. Acara pembukaan dihadiri oleh berbagai tokoh penting...</p>
                                        <a href="#" class="btn news-card-button">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card news-card ">
                                    <img src="path-to-your-image.jpg" class="card-img-top" alt="Berita 2">
                                    <div class="card-body news-card-body">
                                        <h5 class="card-title">Sekda A Ridwan Buka Festival Muharram 2024 Kota Jambi</h5>
                                        <p class="card-text">Festival ini merupakan acara tahunan yang telah berjalan selama beberapa tahun terakhir, dan kali ini juga diselenggarakan dengan meriah. Acara pembukaan dihadiri oleh berbagai tokoh penting...</p>
                                        <a href="#" class="btn news-card-button">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Repeat for more carousel items -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


        <section id="kegiatan" class="py-5">
            <div class="container">
                <h2 class="text-white mb-4">Kegiatan</h2>
                <p class="text-white">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam id diam in leo eleifend fermentum. Nullam suscipit turpis nec lorem vehicula, ac rutrum orci efficitur.
                </p>
            </div>
        </section>

        <section id="lokasi" class="py-5">
            <div class="container">
                <h2 class="text-white mb-4">Lokasi</h2>
                <p class="text-white">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam id diam in leo eleifend fermentum. Nullam suscipit turpis nec lorem vehicula, ac rutrum orci efficitur.
                </p>
            </div>
        </section>

        <section id="galeri" class="py-5">
            <div class="container">
                <h2 class="text-white mb-4">Galeri</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <img src="..." alt="Foto 1" class="img-fluid">
                    </div>
                    <div class="col-md-6 mb-4">
                        <img src="..." alt="Foto 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Pemerintah Provinsi Jambi. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

