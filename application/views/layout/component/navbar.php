<nav class="navbar navbar-reverse navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">SISTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-lg-3 align-items-lg-center">
                <li class="nav-item <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>beranda" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'jadwal' || $this->uri->segment(1) == 'jadwalDetail' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>jadwal" class="nav-link">Jadwal</a>
                </li>
                <li>
                    <a href="" class="nav-link" id="konfirmasiDaftar">Daftar Seminar</a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'berita' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>berita" class="nav-link">Berita</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto align-items-lg-center d-none d-lg-block">
                <li class="ml-lg-3 nav-item">
                    <a href="<?= base_url() ?>auth/masuk" class="btn btn-round btn-icon icon-left">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>