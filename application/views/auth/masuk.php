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
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/modules/izitoast/css/iziToast.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/components.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/custom/custom.css">
</head>

<body>
    <div class="messageMasuk" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="messageMasukError" data-flashdata="<?= $this->session->flashdata('messageError'); ?>"></div>

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>assets/template/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Masuk</h4>
                            </div>

                            <div class="card-body">
                                <form onsubmit="return validMasuk();" action="<?= base_url() ?>auth/masuk" method="POST" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" class="form-control" name="email" placeholder="Masukan email anda" value="<?= set_value('email'); ?>" required autofocus>

                                        <div class="invalid-feedback">
                                            Email tidak boleh kosong!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="forgotPassword.html" class="text-small">
                                                    Lupa Password?
                                                </a>
                                            </div>
                                        </div>

                                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukan password anda" required autofocus>
                                        <span id="showPassword" onclick="show()">
                                            <i class="fas fa-eye"></i>
                                        </span>

                                        <div class="invalid-feedback" style="margin-top: -15px;">
                                            Password tidak boleh kosong!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Masuk
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="mt-5 text-muted text-center">
                            Belum mempunyai akun? <a href="<?= base_url() ?>auth/daftar">Daftar Sekarang</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; SISTA 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>assets/template/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/popper.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/template/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>assets/template/modules/sweetalert/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/template/modules/izitoast/js/iziToast.min.js"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/template/js/scripts.js"></script>

    <script>
        function show() {
            let nilai = document.getElementById("password").type;

            if (nilai == "password") {
                document.getElementById("password").type = "text";
                document.getElementById("showPassword").innerHTML = "<i class='fas fa-eye-slash'></i>";
            } else {
                document.getElementById("password").type = "password";
                document.getElementById("showPassword").innerHTML = "<i class='fas fa-eye'></i>"
            }
        }
    </script>

    <script>
        function validMasuk() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if (email == "" || password == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Email dan password wajib diisi!',
                    position: 'bottomRight'
                });
            }
        }
    </script>

    <script>
        const messageMasuk = $(".messageMasuk").data("flashdata");
        const messageMasukError = $(".messageMasukError").data("flashdata");

        if (messageMasuk) {
            swal({
                title: "Berhasil",
                text: messageMasuk,
                icon: "success",
            });
        } else if (messageMasukError) {
            swal({
                title: "Gagal Masuk",
                text:  messageMasukError,
                icon: "error",
            });
        }
    </script>
</body>

</html>