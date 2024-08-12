<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>

<body style="background-color: #002D85">
    <!-- Navigasi di bagian atas -->
    @include('users/layouts/navbar')
    <header class="content">
        <div class="position-relative" style="background-image: url('/storage/home/{{ $home[0]->background_image }}')">
            {{-- <div class="overlay-gradient"></div> --}}
            <div class="position-relative text-justify " style="padding-top: 110px;">
                <div class="container custom-padding">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white font-family-Poppins"><b>{{ $home[0]->nama_instansi }}</b></h1>
                            <div class="description-container">
                                <h5 class="text-white mt-4 ">{{ $home[0]->deskripsi }}</h5>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="mt-4">
                                <img src="/img/joko.jpg" alt="Presiden" class="img-fluid mb-3" style="max-width: 150px; margin-right: 2rem">
                                <img src="/img/wowo.png" alt="Wakil Presiden" class="img-fluid" style="max-width: 150px;">
                            </div>
                        </div>
                    </div>
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
        <section id="berita" class="news-section bg-white pb-4">
            <div class="container">
                <p class="text-center text-primary fs-1 fw-bold font-family-Poppins  m-0 px-3 py-4">Berita</p>
                <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @foreach ($berita as $item)
                                    <div class="col-md-6">
                                        <div class="card news-card ">
                                            <div class="">
                                                <img src="/storage/berita/{{ $item->image_berita }}"
                                                    class="card-img-top" alt="Berita 1">
                                            </div>
                                            <div class="">
                                                <div class="card-body news-card-body">
                                                    <h5 class="card-title">{{ $item->title }}</h5>
                                                    <p class="card-text">{{ $item->excerpt }}</p>
                                                    <a href="/users/detail-berita/{{ $item->id }}" class="btn news-card-button">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        {{-- <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card news-card ">
                                        <div class="">
                                        <img src="../img/berita1.webp" class="card-img-top" alt="Berita 1">
                                    </div>
                                    <div class="">
                                        <div class="card-body news-card-body">
                                            <h5 class="card-title">(1)Sekda A Ridwan Buka Festival Muharram 2024 Kota Jambi</h5>
                                            <p class="card-text">Festival ini merupakan acara tahunan yang telah berjalan selama beberapa tahun terakhir, dan kali ini juga diselenggarakan dengan meriah. Acara pembukaan dihadiri oleh berbagai tokoh penting...</p>
                                            <a href="#" class="btn news-card-button">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card news-card ">
                                        <img src="../img/berita1.webp" class="card-img-top" alt="Berita 2">
                                        <div class="card-body news-card-body">
                                            <h5 class="card-title">(2)Sekda A Ridwan Buka Festival Muharram 2024 Kota Jambi</h5>
                                            <p class="card-text">Festival ini merupakan acara tahunan yang telah berjalan selama beberapa tahun terakhir, dan kali ini juga diselenggarakan dengan meriah. Acara pembukaan dihadiri oleh berbagai tokoh penting...</p>
                                            <a href="#" class="btn news-card-button">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> --}}
                        <!-- Repeat for more carousel items -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Section Kegiatan -->
        <section id="kegiatan" class="news-section bg-primary-custom pb-4 ">
            <div class="container">
                <p class="text-center text-white fs-1 fw-bold font-family-Poppins  m-0 px-3 py-4">Kegiatan</p>
                <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @foreach ($kegiatan as $item)
                                    <div class="col-md-6">
                                        <div class="card news-card ">
                                            <div class="">
                                                <img src="storage/kegiatan/{{ $item->gambar_kegiatan }}"
                                                    class="card-img-top kegiatan-image" alt="Berita 1">
                                            </div>
                                            <div class="">
                                                <div class="card-body news-card-body">
                                                    <h5 class="card-title">{{ $item->judul_kegiatan }}</h5>
                                                    <p class="card-text">{{ $item->excerpt }}</p>
                                                    <a href="/users/detail-kegiatan/{{ $item->id }}" class="btn news-card-button">Baca
                                                        Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Repeat for more carousel items -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>


        {{-- <section id="kegiatan" class="py-5">
            <div class="container">
                <h2 class="text-white mb-4">Kegiatan</h2>
                <p class="text-white">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam id diam in leo eleifend fermentum. Nullam suscipit turpis nec lorem vehicula, ac rutrum orci efficitur.
                </p>
            </div>
        </section> --}}
        <section id="lokasi" class=" pb-4 py-1 bg-white">
            <div class="container">
                <p class="text-center text-primary fs-1 fw-bold font-family-Poppins px-3 py-3">Lokasi</p>
                <div class="col text-center">
                    <div class="card maps-card mx-4 ">
                        <div class="card-body">
                            <iframe src="{{ $lokasi[0]->lokasi_link }}" width="1100" height="500"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!-- Footer -->
    <footer class="bg-primary-custom text-white pt-4">
        <div class=" text-white start-0 w-100 py-2 ">
            <div class="container custom-padding">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="pt-2">
                            <p class="fs-6 fw-normal"> <i class="bi bi-geo-alt-fill"></i>     {{ $footer[0]->wilayah }}</p>
                            <p class="fs-6 fw-normal"> <i class="bi bi-telephone-fill"></i>    {{ $footer[0]->nomor_instansi }}</p>  
                            <p class="fs-6 fw-normal"> <i class="bi bi-envelope-fill"></i>
                                {{ $footer [0]->email_instansi }}</p>
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
            </div>
            <div class="container text-center">
                {{-- <p>&copy; 2024 Pemerintah Provinsi Jambi. All rights reserved. © </p> --}}
                <hr style="border-width: 2px; border-color: white; margin-left: 4rem; margin-right: 4rem;">
                <p>Copyright &copy; Diskominfo Kota Jambi 2024</p>
            </div>
        </div>
    </footer>



    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
