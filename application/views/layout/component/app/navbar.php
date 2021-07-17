<?php if ($this->session->userdata('role_id') == 1) : ?>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li>
                    <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Cari ..." aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?= base_url("assets/template/img/profil/") . $this->session->userdata('profil') ?>" class="rounded-circle mr-1" style="width: 30px; height:30px;">
                    <div class="d-sm-none d-lg-inline-block">Hai, <?= ucwords($this->session->userdata('nama')); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Masuk 5 menit lalu</div>
                    <a href="<?= base_url() ?>page/admin/profil" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url() ?>auth/keluar" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#modalKeluar">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>
<?php else : ?>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <a href="" class="navbar-brand sidebar-gone-hide">SISTA</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar">
            <i class="fas fa-bars"></i>
        </a>
        <form class="form-inline ml-auto">
            <ul class="navbar-nav">
                <li>
                    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Cari..." aria-label="Search" data-width="250">
                <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                <div class="search-backdrop"></div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?= base_url("assets/template/img/profil/") . $this->session->userdata('profil') ?>" class="rounded-circle mr-1" style="width: 30px; height:30px;">
                    <div class="d-sm-none d-lg-inline-block">Hai, <?= ucwords($this->session->userdata('nama')); ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Masuk 5 menit lalu</div>
                    <a href="<?= base_url() ?>page/pengguna/profil" class="dropdown-item has-icon">
                        <i class="fas fa-user"></i> Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url() ?>auth/keluar" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#modalKeluar">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item <?= $this->uri->segment(3) == 'dashboard' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/pengguna/dashboard" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(3) == 'jadwal' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/pengguna/jadwal" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal Seminar TA</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="daftarSeminar.html" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>Daftar Seminar</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
<?php endif; ?>