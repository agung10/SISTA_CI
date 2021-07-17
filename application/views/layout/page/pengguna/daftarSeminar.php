<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SISTA - Daftar Seminar TA</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="../../assets/landingPage/landing/stisla.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/template/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraies -->
    <link rel="stylesheet" href="../../assets/template/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../../assets/template/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../../assets/template/modules/izitoast/css/iziToast.min.css">

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
                        <li class="nav-item active">
                            <a href="daftarSeminar.html" class="nav-link"><i class="fas fa-book"></i><span>Daftar Seminar</span></a>
                        </li>
                        <li class="nav-item">
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
                        <h1>Daftar Seminar TA</h1>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Daftar Seminar TA</h2>
                        <p class="section-lead">Halaman Daftar Seminar TA.</p>

                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Form Daftar Seminar TA</h4>
                                    </div>
                                    <form onsubmit="return daftarSeminar()" action="javascript:void(0);" class="needs-validation" novalidate="">
                                        <div div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>NIM</label>
                                                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukan nim anda" onkeypress="return isNumberKey(event);" required autofocus>

                                                        <div class="invalid-feedback">
                                                            Masukan nim anda!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan nama anda" required autofocus>

                                                        <div class="invalid-feedback">
                                                            Masukan nama anda!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Prodi</label>
                                                        <select name="prodi" id="prodi" class="form-control selectric" required autofocus>
                                                            <option value="">Pilih jenis prodi</option>
                                                            <option value="sistem_informasi">Sistem Informasi</option>
                                                            <option value="teknik_informatika">Teknik Informatika
                                                            </option>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan prodi anda!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Seminar</label>
                                                        <input type="text" id="tanggal_seminar" name="tanggal_seminar" class="form-control datepicker" placeholder="Masukan tanggal seminar" required autofocus>

                                                        <div class="invalid-feedback">
                                                            Masukan tanggal seminar!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jam Seminar</label>
                                                        <input type="time" id="jam_seminar" name="jam_seminar" class="form-control" placeholder="Masukan jam seminar" required autofocus>

                                                        <div class="invalid-feedback">
                                                            Masukan jam seminar!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Ruangan</label>
                                                        <input type="text" id="ruangan" name="ruangan" class="form-control" placeholder="Masukan ruangan anda" required autofocus>

                                                        <div class="invalid-feedback">
                                                            Masukan ruangan anda!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Judul TA</label>
                                                        <textarea id="judul_ta" name="judul_ta" class="form-control" style="min-height: 131px;" required autofocus></textarea>

                                                        <div class="invalid-feedback">
                                                            Masukan judul TA!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Seminar</label>
                                                        <select name="jenis_seminar" id="jenis_seminar" class="form-control selectric" required autofocus>
                                                            <option value="">Pilih jenis seminar</option>
                                                            <option value="proposal">Proposal</option>
                                                            <option value="seminar_hasil">Seminar Hasil</option>
                                                            <option value="sidang_akhir">Sidang Akhir</option>
                                                        </select>
                                                        
                                                        <div class="invalid-feedback">
                                                            Masukan jenis seminar!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pembimbing</label>
                                                        <select name="pembimbing" id="pembimbing" class="form-control selectric" required autofocus>
                                                            <option value="">Pilih pembimbing</option>
                                                            <option value="sirojul_munir">Sirojul Munir S.SI, M.KOM</option>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama pembimbing!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Penguji 1</label>
                                                        <select name="penguji_1" id="penguji_1" class="form-control selectric" required autofocus>
                                                            <option value="">Pilih penguji 1</option>
                                                            <option value="ahmad_rio">Ahmad Rio M.SI</option>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama penguji 1!
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Penguji 2</label>
                                                        <select name="penguji_2" id="penguji_2" class="form-control selectric" required autofocus>
                                                            <option value="">Pilih penguji 2</option>
                                                            <option value="amalia_rahmah">Amalia Rahmah M.T</option>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama penguji 2!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End Navbar -->

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

    <!-- JS Libraies -->
    <script src="../../assets/template/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="../../assets/template/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../../assets/template/modules/sweetalert/sweetalert.min.js"></script>
    <script src="../../assets/template/modules/izitoast/js/iziToast.min.js"></script>

    <!-- Template JS File -->
    <script src="../../assets/template/js/scripts.js"></script>

    <script>
        function daftarSeminar() {
            let nim             = document.getElementById("nim").value;
            let nama            = document.getElementById("nama").value;
            let prodi           = document.getElementById("prodi").value;
            let tanggal_seminar = document.getElementById("tanggal_seminar").value;
            let jam_seminar     = document.getElementById("jam_seminar").value;
            let ruangan         = document.getElementById("ruangan").value;
            let judul_ta        = document.getElementById("judul_ta").value;
            let jenis_seminar   = document.getElementById("jenis_seminar").value;
            let pembimbing      = document.getElementById("pembimbing").value;
            let penguji_1       = document.getElementById("penguji_1").value;
            let penguji_2       = document.getElementById("penguji_2").value;

            if (nim == "" || nama == "" || prodi == "" || tanggal_seminar == ""  || jam_seminar == "" || ruangan == "" || judul_ta == "" || jenis_seminar == "" || pembimbing == "" || penguji_1 == "" || penguji_2 == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Anda harus melengkapi semua data!',
                    position: 'bottomRight'
                }); 

                return true;
            }

            else {
                console.log("berhasil daftar");
                
                swal(
                    'Berhasil', 'Pendaftaran Seminar TA Berhasil!', 'success'
                ).then((data) => {
                    location.reload();
                });

                return false;
            }
        }

        // Only Number
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>
</body>

</html>