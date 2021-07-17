<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SISTA - Berita</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="../../assets/landingPage/landing/stisla.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/template/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/fontawesome/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/template/css/style.css">
    <link rel="stylesheet" href="../../assets/template/css/components.css">
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="dashboard.html" class="navbar-brand sidebar-gone-hide">SISTA</a>
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
                        <input class="form-control" type="search" placeholder="Cari ..." aria-label="Search" data-width="250">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../../assets/template/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hai, User</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Masuk 5 menit lalu</div>
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="fas fa-user"></i> Profile User
                            </a>
                            <a href="pengaturan.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Pengaturan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../../index.html" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal.html" class="nav-link">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Jadwal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="daftarSeminar.html" class="nav-link">
                                <i class="fas fa-book"></i>
                                <span>Daftar Seminar</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="berita.html" class="nav-link">
                                <i class="fas fa-newspaper"></i>
                                <span>Berita</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Berita</h1>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">Berita</h2>
                        <p class="section-lead">Halaman Berita User.
                        </p>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mb-lg-0 mb-5">
                                <article class="article">
                                    <figure class="article-image text-center pl-4 pr-4 pt-4 pb-4">
                                        <img src="../../assets/custom/img/undraw_news.svg" alt="image" class="img-fluid" width="40%">
                                    </figure>
                                </article>

                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="article">
                                            <div class="p-5">
                                                <h5>Rancang Bangun Aplikasi Seminar Tugas Akhir Berbasis Web Menggunakan MVC Framework</h5>
                                                <div class="article-metas">
                                                    <div class="article-meta">Oleh <a href="javascript:;">Diego Armando</a></div>
                                                    <div class="article-meta">Senin, 4 Januari 2021, 10:00 WIB</div>
                                                </div>
                                                <div class="text-right">
                                                    <a href="" class="article-cta">Lihat Berita <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="article">
                                            <div class="p-5">
                                                <h5>Rancang Bangun Aplikasi Pemesanan Tiket Online Berbasis Web</h5>
                                                <div class="article-metas">
                                                    <div class="article-meta">Oleh <a href="javascript:;">Ahmad Budiman</a></div>
                                                    <div class="article-meta">Kamis, 31 Desember 2020, 14:00 WIB</div>
                                                </div>
                                                <div class="text-right">
                                                    <a href="" class="article-cta">Lihat Berita <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End Content -->

            <!-- Start Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    &copy; SISTA - SI05 2020
                </div>
                <div class="footer-right">
                    STT Terpadu Nurul Fikri
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../../assets/template/modules/jquery.min.js"></script>
    <script src="../../assets/template/modules/popper.js"></script>
    <script src="../../assets/template/modules/tooltip.js"></script>
    <script src="../../assets/template/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/template/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../../assets/template/modules/moment.min.js"></script>
    <script src="../../assets/template/js/stisla.js"></script>

    <script src="../../assets/template/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Template JS File -->
    <script src="../../assets/template/js/scripts.js"></script>
</body>

</html>