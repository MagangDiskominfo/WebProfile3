    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather></span>
                                    <strong>Dashboard</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#berandaSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="berandaSubMenu">
                                    <span data-feather="home"></span>
                                    Kelola Informasi
                                </a>
                                <div id="berandaSubMenu" class="collapse">
                                    <ul class="nav flex-column ml-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Berita</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Kegiatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lokasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">VisiMisi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Struktur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Footer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#berandaSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="berandaSubMenu">
                                    <span data-feather="home"></span>
                                    Kelola Beranda
                                </a>
                                <div id="berandaSubMenu" class="collapse">
                                    <ul class="nav flex-column ml-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Foto</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Vidio</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart"></span>
                                    Logout
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/users/beranda') }}">
                                    <span data-feather="bar-chart-2"></span>
                                    Beranda
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">INFORMASI</h1>
                    </div>
                </main>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">Copyright@</span>
            </div>
        </footer>

        <script>
            feather.replace(); // Initialize Feather Icons
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
