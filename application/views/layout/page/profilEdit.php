<div class="main-content">
    <div class="profilEditPassword" data-flashdata="<?= $this->session->flashdata('messageError'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Edit Profil</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Edit Profil</h2>
            <p class="section-lead">
                Halaman Edit Profil.
            </p>

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
                                    Email tidak dapat anda ubah karena bersifat unik.
                                </strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Pengaturan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dataUmum" data-toggle="list" href="#umum" role="tab">Umum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="dataPassword" data-toggle="list" href="#passwordP" role="tab">Ubah Password</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card" id="settings-card">
                        <div class="card-header">
                            <h4>Ubah Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane show active" id="umum" role="tabpanel" aria-labelledby="dataUmum">
                                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                                        <form onsubmit="return editProfil()" method="POST" action="<?= base_url() ?>page/admin/profil/edit" class="needs-validation" novalidate="" enctype="multipart/form-data">

                                        <?php else : ?>
                                            <form onsubmit="return editProfil()" method="POST" action="<?= base_url() ?>page/pengguna/profil/edit" class="needs-validation" novalidate="" enctype="multipart/form-data">

                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div style="display: block; text-align: -webkit-center;">
                                                        <div id="image-preview" class="image-preview" style="height: 185px; width: 185px; background-image: url('<?= base_url("assets/template/img/profil/") . $this->session->userdata('profil') ?>'); background-size: cover; background-position: center center;">
                                                            <label for="image-upload" style="width: 120px; height: 40px; line-height: 40px;">Ganti File</label>

                                                            <input type="file" name="profil" value="" id="image-upload">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" id="nama" name="nama" value="<?= ucwords($this->session->userdata('nama')); ?>" class="form-control" required autofocus>

                                                        <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" id="email" name="email" value="<?= $this->session->userdata('email'); ?>" class="form-control" readonly>

                                                        <div class="invalid-feedback">
                                                            Masukkan email anda!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-footer text-md-right">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                            </form>
                                </div>

                                <!-- Ubah Password -->
                                <div class="tab-pane fade" id="passwordP" role="tabpanel" aria-labelledby="dataPassword">
                                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                                        <form onsubmit="return editProfilPassword()" action="<?= base_url() ?>page/admin/profil/changePassword" method="POST" class="needs-validation" novalidate="">

                                        <?php else : ?>
                                            <form onsubmit="return editProfilPassword()" action="<?= base_url() ?>page/pengguna/profil/changePassword" method="POST" class="needs-validation" novalidate="">

                                            <?php endif; ?>
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="form-group" style="margin-top:-15px;">
                                                        <label>Password Saat Ini</label>
                                                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Masukkan password anda saat ini" required autofocus>

                                                        <div class="invalid-feedback" style="margin-top: -5px;">
                                                            Masukkan password anda saat ini!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group" style="margin-top:-15px;">
                                                        <label>Password Baru</label>
                                                        <input type="password" class="form-control" id="new_password" name="new_password" minlength="6" placeholder="Masukkan password baru anda" required autofocus>

                                                        <div class="invalid-feedback" style="margin-top: -5px;">
                                                            Masukkan password baru anda!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group" style="margin-top:-15px;">
                                                        <label>Konfirmasi Password Baru</label>
                                                        <input type="password" class="form-control" id="new_password2" name="new_password2" minlength="6" placeholder="Masukkan konfirmasi password baru anda" required autofocus>

                                                        <div class="invalid-feedback" style="margin-top: -5px;">
                                                            Masukkan konfirmasi password baru!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-footer text-md-right">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>