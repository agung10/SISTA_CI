<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Dosen</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_dosen ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon shadow-danger bg-danger">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Seminar TA</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_seminarTA ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon shadow-warning bg-warning">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Peserta Seminar TA</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title">

                        </div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count text-info"><?= $total_terverifikasi ?></div>
                                <div class="card-stats-item-label">Terverifikasi</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count text-danger"><?= $total_verifikasi ?></div>
                                <div class="card-stats-item-label">Verifikasi</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-info bg-info">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_pengguna; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="row">
                        <div class="col-md-8 pt-4 pb-5 d-flex justify-content-start">
                            <div class="hero-inner">
                                <h1 style="font-size: 23px;">Selamat Datang, <?= ucwords($this->session->userdata('nama')); ?>!</h1>
                                <p class="lead" style="font-size: 18px;">Anda dapat mengelola semua data yang ada.</p>
                                <div class="d-flex justify-content-start">
                                    <p style="font-weight: bold;" id="date"></p>
                                    <p style="font-weight: bold;">,&nbsp;</p>
                                    <p style="font-weight: bold;" id="time"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end">
                            <img src="<?= base_url() ?>assets/custom/img/undraw_dashboard.svg" alt="image" class="img-fluid" width="210px" style="margin-top: -30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>