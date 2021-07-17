<div class="main-content">
    <div class="profil" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="changePassword" data-flashdata="<?= $this->session->flashdata('messagePW'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <?php if ($this->session->userdata('role_id') == 1) : ?>
                <h1>Profil Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="<?= base_url() ?>page/pengguna/dashboard">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Profil Admin</div>
                </div>
            <?php else : ?>
                <h1>Profil Pengguna</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="<?= base_url() ?>page/pengguna/dashboard">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Profil Pengguna</div>
                </div>
            <?php endif; ?>
        </div>
        <div class="section-body">
            <?php if ($this->session->userdata('role_id') == 1) : ?>
                <h2 class="section-title">Profil Admin</h2>
                <p class="section-lead">Halaman Profil Admin.</p>
            <?php else : ?>
                <h2 class="section-title">Profil Pengguna</h2>
                <p class="section-lead">Halaman Profil Pengguna.</p>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>

                            <span style="font-size: 16px;">
                                <i class="fas fa-info pr-2"></i>
                                <strong>
                                    Klik Edit Profil jika anda ingin mengubah data pada akun anda.
                                </strong>
                            </span>
                        </div>
                    </div>
                </div>

                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Foto Profil</h4>
                            </div>
                            <div class="card-body align-self-center text-center">
                                <img src="<?= base_url("assets/template/img/profil/") . $this->session->userdata('profil') ?>" alt="Profil Admin" style="height: 200px; width: 200px; object-fit:cover;">
                                <span class="mt-2 badge shadow-primary badge-primary">Bergabung sejak <?= date('d F Y', $this->session->userdata('date_created')); ?></span>
                            </div>
                        </div>

                        <a href="<?= base_url() ?>page/admin/profil/edit" class="btn btn-warning w-100 mb-3">Edit Profil</a>
                    </div>

                <?php else : ?>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Foto Profil</h4>
                            </div>
                            <div class="card-body align-self-center text-center">
                                <img src="<?= base_url("assets/template/img/profil/") . $this->session->userdata('profil') ?>" alt="Profil Pengguna" style="height: 185px; width: 185px;">

                                <span class="mt-2 badge shadow-primary badge-primary">Bergabung sejak <?= date('d F Y', $this->session->userdata('date_created')); ?></span>
                            </div>
                        </div>

                        <a href="<?= base_url() ?>page/pengguna/profil/edit" class="btn btn-warning w-100 mb-3">Edit Profil</a>
                    </div>

                <?php endif; ?>

                <div class="col-md-8">
                    <div class="card card-primary" id="mycard-dimiss">
                        <div class="card-header">
                            <h4>Detail Data</h4>

                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info btn-sm" href="#">
                                    <i class="fas fa-minus"></i>
                                </a>
                                <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger btn-sm" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <p class="form-control bg-secondary"><?= ucwords($this->session->userdata('nama')); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <p class="form-control bg-secondary"><?= $this->session->userdata('email'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <p class="form-control bg-secondary">Laki-laki</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <p class="form-control bg-secondary">27 Desember 1999</p>
                                        </div>
                                    </div> -->
                                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                                    <?php else : ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status Verifikasi</label>
                                                <br>
                                                <?php if ($this->session->userdata('is_active') == 0) : ?>
                                                    <span class="badge badge-danger shadow-danger">Belum Terverifikasi</span>
                                                <?php elseif ($this->session->userdata('is_active') == 1) : ?>
                                                    <span class="badge badge-info shadow-info">Terverifikasi</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>