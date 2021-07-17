<div class="main-content">
    <div class="pendaftaranPengguna" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Pendaftaran Pengguna</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>page/admin/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Pendaftaran Pengguna</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Pendaftaran Pengguna</h2>
            <p class="section-lead">
                Halaman kelola seluruh pendaftaran pengguna.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Pendaftaran Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status Verifikasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($user as $key) : ?>
                                            <tr class="text-center">
                                                <td><?= $no ?></td>
                                                <td><?= ucwords($key->nama) ?></td>
                                                <td><?= $key->email ?></td>
                                                <td>
                                                    <?php if ($key->is_active == 0) : ?>
                                                        <a href="<?= base_url('page/admin/pendaftaranPengguna/verifikasi/') . $key->id ?>" class="tombol-konfirmasi">Verifikasi</a>
                                                    <?php elseif ($key->is_active == 1) : ?>
                                                        <span class="badge badge-info shadow-info">Terverifikasi</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('page/admin/pendaftaranPengguna/detail/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Detail Data">
                                                        <i class="fas fa-info-circle btn btn-primary btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/pendaftaranPengguna/edit/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Ubah Data">
                                                        <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/pendaftaranPengguna/hapus/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Hapus Data" class="tombol-hapus">
                                                        <i class="fas fa-trash-alt btn btn-danger btn-sm"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach ?>

                                        <!-- <tr id="registrasiUserEmpty" class="odd">
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

<!-- Start Modal Verifikasi -->
<!-- <?php foreach ($user as $res) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalVerifikasi<?= $res->id ?>">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('page/admin/pendaftaranPengguna/edit') ?>" method="POST">
                <input type="hidden" value="<?= $res->id ?>" name="id" readonly>

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Verifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data yang anda pilih ingin diverifikasi?</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary tombol-konfirmasi">Konfirmasi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endforeach;  ?> -->
<!-- End Modal -->