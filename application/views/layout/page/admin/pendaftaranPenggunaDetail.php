<?php foreach ($user as $key) : ?>
<?php endforeach; ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <a href="javascript: history.back();">
                <i class="fas fa-arrow-left"></i>
            </a>
            &nbsp;
            <h1>Pendaftaran Pengguna Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="dashboard.html">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Pendaftaran Pengguna / Detail</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Pendaftaran Pengguna Detail</h2>
            <p class="section-lead">
                Halaman detail pendaftaran pengguna.
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Foto Profil</h4>
                        </div>
                        <div class="card-body align-self-center">
                            <img src="<?= base_url("assets/template/img/profil/") . $key->profil ?>" alt="Profil <?= $key->nama ?>" style="height: 200px; width: 200px; object-fit:cover;">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary" id="mycard-dimiss">
                        <div class="card-header">
                            <h4>Detail Data</h4>

                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info btn-sm" href="#"><i class="fas fa-minus"></i></a>
                                <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger btn-sm" href="#"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <p class="form-control bg bg-secondary"><?= $key->nama ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <p class="form-control bg bg-secondary"><?= $key->email ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status Verifikasi</label>
                                            <br>
                                            <?php if ($key->is_active == 0) : ?>
                                                <span class="badge badge-danger shadow-danger">Belum Terverifikasi</span>
                                            <?php elseif ($key->is_active == 1) : ?>
                                                <span class="badge badge-info shadow-info">Terverifikasi</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
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

<!-- General JS Scripts -->
<script src="../../assets/template/modules/jquery.min.js"></script>
<script src="../../assets/template/modules/popper.js"></script>
<script src="../../assets/template/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/template/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="../../assets/template/modules/moment.min.js"></script>
<script src="../../assets/template/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="../../assets/template/js/scripts.js"></script>
</body>

</html>