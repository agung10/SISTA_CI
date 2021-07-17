<div class="main-content">
    <div class="detailPenilaian" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Detail Penilaian</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url() ?>page/admin/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Detail Penilaian</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Detail Penilaian</h2>
            <p class="section-lead">
                Halaman kelola seluruh detail penilaian.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Penilaian</h4>
                            <div class="card-header-action">
                                <a href="" data-toggle="modal" data-target="#modalAddDP" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Tambah Penilaian
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NIM - Nama Mahasiswa</th>
                                            <th>Judul</th>
                                            <th>Nama Dosen</th>
                                            <th>Nama Penilaian</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($detail_penilaian as $key) : ?>
                                            <tr class="text-center">
                                                <td><?= $no ?></td>
                                                <td><?= $key->nim ?> - <?= ucwords($key->nama_mahasiswa) ?></td>
                                                <td><?= $key->judul ?></td>
                                                <td><?= $key->nama_dosen ?></td>
                                                <td><?= $key->nama_penilaian ?></td>
                                                <td><?= $key->nilai ?></td>
                                                <td>
                                                    <a href="<?= base_url('page/admin/detailPenilaian/detail/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Detail Data">
                                                        <i class="fas fa-info-circle btn btn-primary btn-sm"></i>
                                                    </a>
                                                    <a href="" style="text-decoration:none;" data-toggle="modal" data-target="#modalEditDP<?= $key->id ?>">
                                                        <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/detailPenilaian/hapus/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Hapus Data" class="tombol-hapus">
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
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddDP">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Penilaian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="return vDetailPenilaian()" action="<?= base_url('page/admin/detailPenilaian/add') ?>" method="POST" class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul Seminar</label>
                                <textarea id="judul" name="judul" class="form-control" style="min-height: 67px;" placeholder="Masukan judul Tugas Akhir" readonly autofocus></textarea>

                                <div class="invalid-feedback">
                                    Masukan judul seminar!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NIM - Nama Mahasiswa</label>
                                <select name="seminar_id" id="seminar_id" class="form-control selectric" required autofocus>
                                    <option value="">Pilih Mahasiswa</option>
                                    <?php foreach ($seminar_ta as $st) : ?>
                                        <option value="<?= $st->id ?>"><?= $st->nim ?> - <?= $st->nama_mahasiswa ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="invalid-feedback">
                                    Masukan NIM dan nama mahasiswa!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NIDN - Nama Dosen</label>
                                <select name="dosen_id" id="dosen" class="form-control selectric" required autofocus>
                                    <option value="">Pilih Dosen</option>
                                    <?php foreach ($dosen as $d) : ?>
                                        <option value="<?= $d->id ?>"><?= $d->nidn ?> - <?= $d->nama ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="invalid-feedback">
                                    Masukan NIDN dan nama dosen!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Penilaian - Keterangan</label>
                                <select name="penilaian_id" id="penilaian" class="form-control selectric" required autofocus>
                                    <option value="">Pilih Penilaian</option>
                                    <?php foreach ($penilaian as $p) : ?>
                                        <option value="<?= $p->id ?>"><?= $p->nama ?> - <?= $p->keterangan ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="invalid-feedback">
                                    Masukan nama dan keterangan penilaian!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nilai</label>
                                <input type="text" id="nilai" name="nilai" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required autofocus>

                                <div class="invalid-feedback">
                                    Masukan nilai!
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
<?php foreach ($detail_penilaian as $res) : ?>
    <!-- Start Modal Edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditDP<?= $res->id ?>">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('page/admin/detailPenilaian/edit') ?>" method="POST" class="needs-validation" novalidate="">
                        <input type="hidden" value="<?= $res->id ?>" name="id" readonly>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Seminar</label>
                                    <textarea name="judul" class="form-control" style="min-height: 67px;" placeholder="Masukan judul Tugas Akhir" readonly autofocus><?= $res->judul ?></textarea>
                                    <div class="invalid-feedback">
                                        Masukan judul seminar!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>NIM - Nama Mahasiswa</label>
                                    <select name="seminar_id" class="form-control selectric" required>
                                        <option value="">Pilih Mahasiswa</option>
                                        <?php foreach ($seminar_ta as $ste) : ?>
                                            <option value="<?= $ste->id ?>" <?= $ste->id == $res->seminar_id ? "selected" : null ?>><?= $ste->nim ?> - <?= $ste->nama_mahasiswa ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>NIDN - Nama Dosen</label>
                                    <select name="dosen_id" class="form-control selectric" required>
                                        <option value="">Pilih Dosen</option>
                                        <?php foreach ($dosen as $de) : ?>
                                            <option value="<?= $de->id ?>" <?= $de->id == $res->dosen_id ? "selected" : null ?>><?= $de->nidn ?> - <?= $de->nama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Penilaian - Keterangan</label>
                                    <select name="penilaian_id" class="form-control selectric" required>
                                        <option value="">Pilih Penilaian</option>
                                        <?php foreach ($penilaian as $pe) : ?>
                                            <option value="<?= $pe->id ?>" <?= $pe->id == $res->penilaian_id ? "selected" : null ?>><?= $pe->nama ?> - <?= $pe->keterangan ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <input type="text" name="nilai" value="<?= $res->nilai ?>" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required>
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