<nav class="col-md-2 d-none d-md-block bg-white sidebar px-3">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item logo">
                <a class="nav-link " href="/dashboard">
                    <img src="/img/logogepika2.svg" alt="Logo" class="dashboard-logo">
                </a>
            </li>
            <li class="nav-item jarak">
                <a class="nav-link text-primary" href="/dashboard">
                    <img src="/img/dashboard.svg" alt="Dashboard Logo" width="20" height="20">
                    Dashboard 
                </a>
            </li>
            <li class="nav-item jarak">
                <a class="nav-link collapsed text-primary" href="#informasiSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="informasiSubMenu">
                    {{-- <span data-feather="layers"></span> --}}
                    <img src="/img/info.svg" alt="Dashboard Logo" width="20" height="20">
                    Kelola Informasi 
                    <img src="/img/cdown.svg" alt="Dashboard Logo" width="20" height="20">
                </a>
                <div id="informasiSubMenu" class="collapse">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kegiatan">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lokasi">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/visimisi">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/struktur">Struktur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/footer">Footer</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item jarak">
                <a class="nav-link collapsed text-primary" href="#berandaSubMenu" data-toggle="collapse" aria-expanded="false" aria-controls="berandaSubMenu">
                    <img src="/img/galeri.svg" alt="Dashboard Logo" width="22" height="22">
                    Kelola Galeri
                    <img src="/img/cdown.svg" alt="Dashboard Logo" width="20" height="20">
                </a>
                <div id="berandaSubMenu" class="collapse">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/foto">Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vidio">Vidio</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item jarak">
                <a class="nav-link text-primary" href="/warna" >
                    <img src="/img/warna.svg" alt="Dashboard Logo" width="20" height="20">
                    Warna Website
                </a>
                {{-- <div id="webSubMenu" class="collapse">
                    <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/warna">Warna Web</a>
                        </li>
                    </ul>
                </div> --}}
            </li>
            {{-- <li class="nav-item jarak">
                <a class="nav-link collapsed text-primary" href="/buku-panduan" data-toggle="collapse" aria-expanded="false" >
                    <span data-feather="book"></span>
                    Buku Panduan
                </a>
            </li> --}}
            <li class="nav-item jarak">
                <a class="nav-link text-primary" href="/buku-panduan">
                    <img src="/img/bukupanduan.svg" alt="Dashboard Logo" width="22" height="22">
                    Buku Panduan
                </a>
            </li>
            <li class="nav-item jarak">
                <a class="nav-link text-primary" href="/logout">
                    <img src="/img/logout.svg" alt="Dashboard Logo" width="22" height="22">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
