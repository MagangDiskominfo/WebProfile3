<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Galeri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Galeri</h1>
    <ul class="navbar-nav px-2">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/visimisi">Visi Misi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/struktur">Struktur Organisasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/galeri">Galeri</a>
        </li>
    </ul>
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
</body>
</html>
