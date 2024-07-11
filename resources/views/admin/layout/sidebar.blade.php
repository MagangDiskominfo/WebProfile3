<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                    <span data-feather></span>
                    <strong>Dashboard</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#informasiSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="informasiSubMenu">
                    <span data-feather="layers"></span>
                    Kelola Informasi
                </a>
                <div id="informasiSubMenu" class="collapse">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/berita') }}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/kegiatan') }}">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/lokasi') }}">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/visimisi') }}">VisiMisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/struktur') }}">Struktur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/footer') }}">Footer</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#berandaSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="berandaSubMenu">
                    <span data-feather="aperture"></span>
                    Kelola Galeri
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
                    <span data-feather="log-out"></span>
                    Logout
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/users/beranda') }}">
                    <span data-feather="home"></span>
                    Beranda
                </a>
            </li>
        </ul>
    </div>
</nav>
