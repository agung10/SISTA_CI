<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title><?= $title ?></title>

<!-- Icon -->
<link rel="shortcut icon" href="<?= base_url() ?>assets/landingPage/landing/stisla.png">

<!-- General CSS Files -->
<link rel="stylesheet" href="<?= base_url() ?>assets/template/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<?= $cssLibraries ?>


<!-- Template CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/template/css/style.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/template/css/components.css">
</head>
<?php if ($this->session->userdata('role_id') == 1) : ?>

<body>
<div id="app">
<div class="main-wrapper main-wrapper-1">

<?php else : ?>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">

        <?php endif; ?>
        <div class="navbar-bg"></div>
        <!-- Start Navbar -->
        <?php $this->load->view($navbar) ?>
        <!-- End Navbar -->

        <!-- Start Sidebar -->
        <?php $this->load->view($sidebar) ?>
        <!-- End Sidebar -->

        <!-- Main Content -->
        <?php $this->load->view($content) ?>
        <!-- End Content -->

        <!-- Start Footer -->
        <?php $this->load->view($footer) ?>
        <!-- End Footer -->
        </div>
    </div>

    <!-- Start Modal Keluar -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalKeluar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Keluar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin keluar dari halaman ini?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url() ?>auth/keluar" class="btn btn-danger">Keluar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>assets/template/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/popper.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/template/js/stisla.js"></script>

    <script src="<?= base_url() ?>assets/template/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- JS Libraries -->
    <?= $jsLibraries ?>

    <!-- Page Specific JS File -->
    <?= $jsSpecific ?>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/template/js/scripts.js"></script>
    <?php $this->load->view('layout/component/app/messages.php') ?>

    <script>
        // Only Number
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }

        function editProfil() {
            let nama = document.getElementById("nama").value;

            if (nama == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama tidak boleh kosong!',
                    position: 'bottomRight'
                });
            }
        }

        function editProfilPassword() {
            let current_password = document.getElementById("current_password").value;
            let new_password = document.getElementById("new_password").value;
            let new_password2 = document.getElementById("new_password2").value;

            if (current_password == new_password) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Password tidak boleh sama dengan sebelumnya!',
                    position: 'bottomRight'
                });
            } else if (new_password != new_password2) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Password tidak cocok!',
                    position: 'bottomRight'
                });
            } else if (new_password.length < 6 && new_password2.length < 6) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Password minimal 6 karakter!',
                    position: 'bottomRight'
                });
            } 
        }

        function kSeminar() {
            let nama = document.getElementById("nama").value;

            if (nama == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama Seminar tidak boleh kosong!',
                    position: 'bottomRight'
                });
            }
        }

        function vDosen() {
            let nidn = document.getElementById("nidn").value;
            let nama = document.getElementById("nama").value;

            if (nama == "" || nidn == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama dosen dan NIDN tidak boleh kosong!',
                    position: 'bottomRight'
                });
            } else if (nama == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama dosen tidak boleh kosong!',
                    position: 'bottomRight'
                });
            } else if (nidn == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'NIDN tidak boleh kosong!',
                    position: 'bottomRight'
                });
            }
        }

        function vPenilaian() {
            let nama = document.getElementById("nama").value;
            let keterangan = document.getElementById("keterangan").value;

            if (nama == "" || keterangan == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama Penilaian dan Keterangan tidak boleh kosong!',
                    position: 'bottomRight'
                });
            } else if (nama == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Nama Penilaian tidak boleh kosong!',
                    position: 'bottomRight'
                });
            } else if (keterangan == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Keterangan tidak boleh kosong!',
                    position: 'bottomRight'
                });
            }
        }

        function vDetailPenilaian() {
            let seminar_id = document.getElementById("seminar_id").value;
            let dosen = document.getElementById("dosen").value;
            let penilaian = document.getElementById("penilaian").value;
            let nilai = document.getElementById("nilai").value;

            if (seminar_id == "" || dosen == "" || penilaian == "" || nilai == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Data yang anda masukkan belum lengkap!',
                    position: 'bottomRight'
                });
            }
        }

        function vSeminarA() {
            let semester = document.getElementById("semester").value;
            let nim = document.getElementById("nim").value;
            let nama_mahasiswa = document.getElementById("nama_mahasiswa").value;
            let prodi = document.getElementById("prodi").value;
            let tanggal = document.getElementById("tanggal").value;
            let jam = document.getElementById("jam").value;
            let lokasi = document.getElementById("lokasi").value;
            let judul = document.getElementById("judul").value;
            let nama_seminar = document.getElementById("nama_seminar").value;
            let pembimbing = document.getElementById("pembimbing").value;
            let nilai_pembimbing = document.getElementById("nilai_pembimbing").value;
            let penguji1 = document.getElementById("penguji1").value;
            let nilai_penguji1 = document.getElementById("nilai_penguji1").value;
            let penguji2 = document.getElementById("penguji2").value;
            let nilai_penguji2 = document.getElementById("nilai_penguji2").value;

            if (semester == "" || nim == "" || nama_mahasiswa == "" || prodi == "" || tanggal == "" || jam == "" || lokasi == "" || judul == "" || nama_seminar == "" || pembimbing == "" || nilai_pembimbing == "" || penguji1 == "" || nilai_penguji1 == "" || penguji2 == "" || nilai_penguji2 == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Anda harus melengkapi semua data!',
                    position: 'bottomRight'
                });
            }
        }

        function pendaftaranPeserta() {
            let nim = document.getElementById("nim").value;
            let nama = document.getElementById("nama").value;

            if (nim == "" || nama == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Anda harus melengkapi semua data!',
                    position: 'bottomRight'
                });
            }
        }
    </script>

    <script>
        function sidangAkhir() {
            swal(
                'INFO SEMINAR', 'Untuk seminar Sidang Akhir, hanya yang bersangkutan saja, mahasiswa/i lain tidak bisa mendaftar!', 'info'
            ).then((data) => {
                location.reload();
            });

            return false;
        }
    </script>

<script>
	$('#seminar_id').change(function(){
		var selected =  $(this).val()
		$.ajax({
			url : "<?=base_url('page/admin/detailPenilaian/getJudulSeminar/"+selected+"')?>",
			type: "GET",
			success: function(data){
				var dataSeminar = JSON.parse(data)
				$('#judul').val(dataSeminar.judul)
			}
		})
	})
</script>
</body>

</html>