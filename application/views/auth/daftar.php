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

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/landingPage/landing/stisla.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/modules/izitoast/css/iziToast.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/components.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/custom/custom.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>assets/template/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Daftar</h4>
                            </div>

                            <div class="card-body">
                                <form onsubmit="return register()" method="POST" action="<?= base_url() ?>auth/daftar" class="needs-validation" novalidate="" id="form-register">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="nama">Nama</label>
                                            <input id="nama" type="text" class="form-control" name="nama" placeholder="Masukan nama anda" value="<?= set_value('nama'); ?>" required autofocus>
                                            <?php
                                            $error_nama = 'Masukan nama anda!';
                                            $display_nama = '';
                                            if (!empty(form_error('nama'))) {
                                                $error_nama = str_replace('<p>', '', form_error('nama'));
                                                $error_nama = str_replace('</p>', '', $error_nama);
                                                $display_nama = 'style = "display:inline;"';
                                            }

                                            echo "
                                                <div class=\"invalid-feedback\" {$display_nama}>
                                                {$error_nama}
                                                </div>
                                                ";
                                            ?>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" class="form-control" name="email" placeholder="Masukan email anda" value="<?= set_value('email'); ?>" required autofocus>
                                            <?php
                                            $error_email = 'Masukan email anda dengan benar!';
                                            $display_email = '';
                                            if (!empty(form_error('email'))) {
                                                $error_email = str_replace('<p>', '', form_error('email'));
                                                $error_email = str_replace('</p>', '', $error_email);
                                            }

                                            echo "
                                                <div class=\"invalid-feedback\">
                                                    {$error_email}
                                                </div>
                                                ";
                                            ?>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Masukan password anda" minlength="6" required autofocus>
                                            <span id="showPassword" onclick="show()">
                                                <i class="fas fa-eye"></i>
                                            </span>

                                            <?php
                                            $error_password = 'Masukan password anda, minimal 6 karakter!';
                                            $display_password = '';
                                            if (!empty(form_error('password'))) {
                                                $error_password = str_replace('<p>', '', form_error('password'));
                                                $error_password = str_replace('</p>', '', $error_password);
                                            }

                                            echo "
                                                <div class=\"invalid-feedback\" style=\"margin-top: -17px;\">
                                                    {$error_password}
                                                </div>
                                                ";
                                            ?>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control" name="password2" placeholder="Masukan konfirmasi password" minlength="6" required autofocus>
                                            <span id="showPassword2" onclick="show('confirm')">
                                                <i class="fas fa-eye"></i>
                                            </span>

                                            <?php
                                            $error_password2 = 'Masukan konfirmasi password!';
                                            $display_password2 = '';
                                            if (!empty(form_error('password2'))) {
                                                $error_password2 = str_replace('<p>', '', form_error('password2'));
                                                $error_password2 = str_replace('</p>', '', $error_password2);
                                            }

                                            echo "
                                                <div class=\"invalid-feedback\" style=\"margin-top: -17px;\">
                                                    {$error_password2}
                                                </div>
                                                ";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                            <label class="custom-control-label" for="agree">
                                                Saya setuju dengan syarat dan ketentuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Sudah mempunyai akun? <a href="<?= base_url() ?>auth/masuk">Masuk</a>
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
        let register_correct = false

        function register() {
            let nama = document.getElementById("nama").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let password2 = document.getElementById("password2").value;

            let agree = document.getElementById("agree");

            // Email Validation Format
            const v_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (nama == "" || email == "" || password == "" || password2 == "") {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Anda harus melengkapi semua data!',
                    position: 'bottomRight'
                });

                return false;
            } else if (!(v_email.test(email))) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Format email tidak sesuai, (john@gmail.com)!',
                    position: 'bottomRight'
                });

                return false;
                // } else if (email == kosong) {
                //     iziToast.error({
                //         title: 'Gagal',
                //         message: 'Email sudah terdaftar!',
                //         position: 'bottomRight'
                //     });

                //     return false;
            } else if (password != password2) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Password tidak cocok!',
                    position: 'bottomRight'
                });

                return false;
            } else if (password.length < 6 && password2.length < 6) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Password minimal 6 karakter!',
                    position: 'bottomRight'
                });

                return false;
            } else if (agree.checked == false) {
                iziToast.error({
                    title: 'Gagal',
                    message: 'Silahkan centang ketentuannya terlebih dahulu!',
                    position: 'bottomRight'
                });

                return false;
            } else {
                console.log("berhasil daftar");

                if (register_correct == false) {
                    swal(
                        'Berhasil', 'Berhasil mendaftar, silahkan masuk!', 'success'
                    ).then((data) => {
                        register_correct = true;
                        $('#form-register').submit()
                    });
                }

                return register_correct;
            }
        }

        function show(type) {
            if (type === "confirm") {
                let nilai = document.getElementById("password2").type;

                if (nilai == "password") {
                    document.getElementById("password2").type = "text";
                    document.getElementById("showPassword2").innerHTML = "<i class='fas fa-eye-slash'></i>";
                } else {
                    document.getElementById("password2").type = "password";
                    document.getElementById("showPassword2").innerHTML = "<i class='fas fa-eye'></i>";
                }
            } else {
                let nilai = document.getElementById("password").type;

                if (nilai == "password") {
                    document.getElementById("password").type = "text";
                    document.getElementById("showPassword").innerHTML = "<i class='fas fa-eye-slash'></i>";
                } else {
                    document.getElementById("password").type = "password";
                    document.getElementById("showPassword").innerHTML = "<i class='fas fa-eye'></i>"
                }
            }
        }
    </script>
</body>

</html>