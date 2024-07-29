<nav class="navbar navbar-expand-lg shadow-lg " style="background-color: #002D85">
    <div class="container custom-padding">
        <a class=" navbar-brand " href="#">
            <img src="/storage/home/{{ $home[0]->logo }}" alt="Logo" style="height: 40px;">
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
                        <li><a class="dropdown-item fw-bold text-primary" href="/foto">Foto</a></li>
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