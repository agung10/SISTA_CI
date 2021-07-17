<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN SISTA - Pendaftaran Peserta Seminar</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="../../assets/landingPage/landing/stisla.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/template/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../assets/template/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../../assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/template/modules/izitoast/css/iziToast.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/template/css/style.css">
    <link rel="stylesheet" href="../../assets/template/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- Start Navbar -->
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
                            <div class="d-sm-none d-lg-inline-block">Hai, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Masuk 5 menit lalu</div>
                            <a href="profileAdmin.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile Admin
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../../index.html" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End Navbar -->

            <!-- Start Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="dashboard.html">SISTA</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="dashboard.html">SIS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li>
                            <a href="dashboard.html" class="nav-link">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-header">Kelola Admin</li>
                        <li>
                            <a href="daftarSeminar.html" class="nav-link">
                                <i class="fas fa-book"></i>
                                <span>Daftar Seminar TA</span>
                            </a>
                        </li>
                        <li>
                            <a href="pemakalahSeminar.html" class="nav-link">
                                <i class="fas fa-address-book"></i>
                                <span>Pemakalah Seminar TA</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="pendaftaranPesertaSeminar.html" class="nav-link">
                                <i class="fas fa-user-friends"></i>
                                <span>Daftar Peserta Seminar</span>
                            </a>
                        </li>
                        <li>
                            <a href="registrasiUser.html" class="nav-link">
                                <i class="fas fa-users-cog"></i>
                                <span>Registrasi User</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Daftar Peserta Seminar</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="dashboard.html">Dashboard</a></div>
                            <div class="breadcrumb-item">Kelola Admin</div>
                            <div class="breadcrumb-item">Daftar Peserta Seminar</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Daftar Peserta Seminar</h2>
                        <p class="section-lead">
                            Halaman kelola seluruh Daftar Peserta Seminar.
                        </p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <table>
                                        <tr>
                                            <td>Seminar Mahasiswa</td>
                                            <td class="pl-1">:</td>
                                            <td class="pl-2">Diego Armando (0102002) - Teknik Informatika</td>
                                        </tr>
                                        <tr>
                                            <td>Judul</td>
                                            <td class="pl-1">:</td>
                                            <td class="pl-2">Rancang Bangun Aplikasi Seminar Tugas Akhir Menggunakan MVC Framework</td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Seminar</td>
                                            <td class="pl-1">:</td>
                                            <td class="pl-2">Senin, 4 Januari 2020, Jam: 10:00 WIB</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Tabel Daftar Peserta Seminar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>NO</th>
                                                        <th>NIM</th>
                                                        <th>Mahasiswa/i</th>
                                                        <th>Prodi</th>
                                                        <th>Program</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center" id="peserta">
                                                        <td>1</td>
                                                        <td>0102041</td>
                                                        <td>Wati</td>
                                                        <td>Sistem Informasi</td>
                                                        <td>S1 Reguler</td>
                                                        <td>
                                                            <span class="badge badge-success">Diterima</span>
                                                        </td>
                                                        <td>
                                                            <a href="" style="text-decoration:none;" data-toggle="modal" data-target="#modalEdit">
                                                                <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                            </a>
                                                            <a href="" data-toggle="modal" data-target="#modalHapus" data-original-title="Hapus Data">
                                                                <i class="fas fa-trash-alt btn btn-danger btn-sm"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center" id="peserta_2">
                                                        <td>2</td>
                                                        <td>0102032</td>
                                                        <td>Wawan</td>
                                                        <td>Teknik Informatika</td>
                                                        <td>S1 Reguler</td>
                                                        <td>
                                                            <span class="badge badge-success">Diterima</span>
                                                        </td>
                                                        <td>
                                                            <a href="" style="text-decoration:none;" data-toggle="modal" data-target="#modalEdit">
                                                                <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                            </a>
                                                            <a href="" data-toggle="modal" data-target="#modalHapus_2" data-original-title="Hapus Data">
                                                                <i class="fas fa-trash-alt btn btn-danger btn-sm"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center" id="peserta_3">
                                                        <td>3</td>
                                                        <td>0102031</td>
                                                        <td>Ali</td>
                                                        <td>Teknik Informatika</td>
                                                        <td>S1 Fast Trackt</td>
                                                        <td>
                                                            <span class="badge badge-danger">Ditolak</span>
                                                        </td>
                                                        <td>
                                                            <a href="" style="text-decoration:none;" data-toggle="modal" data-target="#modalEdit">
                                                                <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                            </a>
                                                            <a href="" data-toggle="modal" data-target="#modalHapus_3" data-original-title="Hapus Data">
                                                                <i class="fas fa-trash-alt btn btn-danger btn-sm"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr id="pesertaEmpty" class="odd">
                                                        <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
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

    <!-- Start Modal Edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Daftar Peserta Seminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form onsubmit="return pendaftaranSeminar()" action="javascript:void(0);" class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" id="nim" name="nim" value="0102041" class="form-control" onkeypress="return isNumberKey(event);" required autofocus>

                                    <div class="invalid-feedback">
                                        Masukan nim anda!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mahasiswa/i</label>
                                    <input type="text" id="mahasiswa" name="mahasiswa" value="Wati" class="form-control" required autofocus>

                                    <div class="invalid-feedback">
                                        Masukan nama anda!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <select name="prodi" id="prodi" class="form-control selectric" required autofocus>
                                        <option value="">Pilih jenis prodi</option>
                                        <option value="sistem_informasi" selected>Sistem Informasi</option>
                                        <option value="teknik_informatika">Teknik Informatika
                                        </option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Masukan prodi anda!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Program</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="d3" class="selectgroup-input">
                                            <span class="selectgroup-button">D3</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="s1_reguler" class="selectgroup-input" checked>
                                            <span class="selectgroup-button">S1 Reguler</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="s1_fastTrackt" class="selectgroup-input">
                                            <span class="selectgroup-button">S1 Fast Trackt</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="s2" class="selectgroup-input">
                                            <span class="selectgroup-button">S2</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" id="status" class="form-control selectric" required autofocus>
                                        <option value="">Pilih jenis status</option>
                                        <option value="diterima" selected>Diterima</option>
                                        <option value="ditolak">Ditolak </option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Masukan status anda!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Start Modal Hapus -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalHapus">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" onclick="return konfirmasiHapus()">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Start Modal Hapus 2 -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalHapus_2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" onclick="return konfirmasiHapus_2()">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Start Modal Hapus 3 -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalHapus_3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" onclick="return konfirmasiHapus_3()">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- General JS Scripts -->
    <script src="../../assets/template/modules/jquery.min.js"></script>
    <script src="../../assets/template/modules/popper.js"></script>
    <script src="../../assets/template/modules/tooltip.js"></script>
    <script src="../../assets/template/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/template/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../../assets/template/modules/moment.min.js"></script>
    <script src="../../assets/template/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../../assets/template/modules/datatables/datatables.min.js"></script>
    <script src="../../assets/template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../../assets/template/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="../../assets/template/modules/jquery-ui/jquery-ui.min.js"></script>
    <script src="../../assets/template/modules/sweetalert/sweetalert.min.js"></script>
    <script src="../../assets/template/modules/izitoast/js/iziToast.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../assets/template/js/page/modules-datatables.js"></script>

    <!-- Template JS File -->
    <script src="../../assets/template/js/scripts.js"></script>

    <script>
        function pendaftaranSeminar() {
            let nim = document.getElementById("nim").value;
            let mahasiswa = document.getElementById("mahasiswa").value;
            let prodi = document.getElementById("prodi").value;
            let program = document.getElementsByClassName("selectgroup-input");

            let programValue
            for (let i = 0; i < program.length; i++) {
                if (program[i].checked == true) {
                    programValue = true;
                }
            }

            if (nim == "" || mahasiswa == "" || prodi == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Lengkapi semua data terlebih dahulu!',
                    position: 'bottomRight'
                });

                return true;
            } else if (!programValue) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Anda belum memilih program!',
                    position: 'bottomRight'
                });

                return false;
            } else {
                console.log("berhasil mengubah data");

                swal(
                    'Berhasil', 'Data berhasil diubah!', 'success'
                ).then((data) => {
                    location.reload();
                });

                return false;
            }
        }

        // konfirmasi Hapus
        function konfirmasiHapus() {
            let peserta = document.getElementById("peserta");

            swal(
                'Berhasil', 'Data berhasil di hapus!', 'success'
            ).then((data) => {
                $("#modalHapus").modal('hide');
            });

            peserta.parentElement.removeChild(peserta);
            console.log("Peserta berhasil dihapus");
        }

        function konfirmasiHapus_2() {
            let peserta_2 = document.getElementById("peserta_2");

            swal(
                'Berhasil', 'Data berhasil di hapus!', 'success'
            ).then((data) => {
                $("#modalHapus_2").modal('hide');
            });

            peserta_2.parentElement.removeChild(peserta_2);
            console.log("Peserta berhasil dihapus");
        }

        function konfirmasiHapus_3() {
            let peserta_3 = document.getElementById("peserta_3");

            swal(
                'Berhasil', 'Data berhasil di hapus!', 'success'
            ).then((data) => {
                $("#modalHapus_3").modal('hide');
            });

            peserta_3.parentElement.removeChild(peserta_3);
            console.log("Peserta berhasil dihapus");
        }

        // Number Only
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>
</body>

</html>