<div class="main-content">
    <div class="kategoriSeminar" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Kategori Seminar</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>page/admin/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Kategori Seminar</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Kategori Seminar</h2>
            <p class="section-lead">
                Halaman kelola seluruh kategori seminar.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Kategori Seminar</h4>
                            <div class="card-header-action">
                                <a href="" data-toggle="modal" data-target="#modalAddKS" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Tambah Kategori Seminar
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($kategori_seminar as $key) : ?>
                                            <tr class="text-center">
                                                <td><?= $no ?></td>
                                                <td><?= ucwords($key->nama) ?></td>
                                                <td><?= format_indo(date($key->date_created)) ?></td>
                                                <td>
                                                    <a href="" style="text-decoration:none;" data-toggle="modal" data-target="#modalEditKS<?= $key->id ?>">
                                                        <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/kategoriSeminar/hapus/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Hapus Data" class="tombol-hapus">
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

<!-- Start Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddKS">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kategori Seminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="return kSeminar()" action="<?= base_url('page/admin/kategoriSeminar/add') ?>" method="POST" class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Seminar</label>
                                <input type="text" id="nama" name="nama" class="form-control" required autofocus>

                                <div class="invalid-feedback">
                                    Masukan nama seminar!
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
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
<?php foreach ($kategori_seminar as $res) : ?>
    <!-- Start Modal Edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditKS<?= $res->id ?>">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Kategori Seminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('page/admin/kategoriSeminar/edit') ?>" method="POST" class="needs-validation" novalidate="">
                        <input type="hidden" value="<?= $res->id ?>" name="id" readonly>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Seminar</label>
                                    <input type="text" name="nama" value="<?= $res->nama ?>" class="form-control" required>

                                    <div class="invalid-feedback">
                                        Masukan nama seminar!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
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
<?php endforeach; ?>