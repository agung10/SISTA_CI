<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/landingPage/landing/stisla.png">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/modules/prism/prism.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/dist/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landingPage/landing/style.css">
</head>

<body>
    <!-- Start Navbar -->
    <?php $this->load->view($navbar) ?>
    <!-- End Navbar -->

    <!-- Start Content -->
    <?php $this->load->view($content) ?>

    <section class="download-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2>Daftarkan Diri Anda!</h2>
                    <p class="lead">Dapatkan informasi terkini seputar seminar tugas akhir.</p>
                </div>
                <div class="col-md-5 text-right">
                    <a href="<?= base_url() ?>auth/daftar" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Start Footer -->
    <?php $this->load->view($footer) ?>
    <!-- End Footer -->

    <!-- JS Libraies -->
    <script src="<?= base_url(); ?>assets/template/modules/sweetalert/sweetalert.min.js"></script>

    <!-- Start Script -->
    <script src="<?= base_url(); ?>assets/landingPage/dist/modules/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/dist/modules/popper.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/dist/modules/tooltip.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/dist/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/dist/modules/prism/prism.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/dist/js/stisla.js"></script>
    <script src="<?= base_url(); ?>assets/landingPage/landing/script.js"></script>
    <!-- End Script -->

    <script>
        $("#konfirmasiDaftar").click(function() {
            swal({
                    title: 'Konfirmasi Daftar',
                    text: 'Anda harus mendaftar terlebih dahulu, silahkan klik OK untuk lanjut daftar!',
                    icon: 'info',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= base_url() ?>auth/daftar"
                    }
                });
            return false;
        });
    </script>

    <script>
        $("#konfirmasiDaftarPeserta").click(function() {
            swal({
                    title: 'Konfirmasi Daftar',
                    text: 'Anda harus mendaftar terlebih dahulu, silahkan klik OK untuk lanjut daftar!',
                    icon: 'info',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= base_url() ?>auth/daftar"
                    }
                });
            return false;
        });
    </script>
</body>

</html>