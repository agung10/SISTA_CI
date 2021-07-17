<div class="main-content">
    <div class="seminarTA" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Daftar Seminar TA</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="dashboard.html">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Daftar Seminar TA</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Daftar Seminar TA</h2>
            <p class="section-lead">
                Halaman kelola seluruh Daftar Seminar TA.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Daftar Seminar TA</h4>
                            <div class="card-header-action">
                                <a href="<?= base_url() ?>page/admin/seminarTA/add" type="submit" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Tambah Daftar Seminar TA
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NIM - Mahasiswa/i</th>
                                            <th>Kategori Seminar</th>
                                            <th>Waktu</th>
                                            <th>Ruangan</th>
                                            <th>Peserta</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($seminar_ta as $key) : ?>
                                            <tr class="text-center" id="seminar">
                                                <td><?= $no ?></td>
                                                <td>
                                                    <?= $key->nim ?> - <?= $key->nama_mahasiswa ?>
                                                </td>
                                                <td><span class="badge badge-info badge-sm shadow-info"><?= $key->nama_seminar ?></span></td>
                                                <td><?= tgl_indo(date($key->tanggal)) ?>, <?= $key->jam ?> WIB</td>
                                                <td><?= $key->lokasi ?></td>
                                                <td><a href="">Peserta Seminar</a></td>

                                                <td>
                                                    <a href="<?= base_url('page/admin/seminarTA/detail/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Detail Data">
                                                        <i class="fas fa-info-circle btn btn-primary btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/seminarTA/edit/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Ubah Data">
                                                        <i class="fas fa-edit btn btn-warning btn-sm"></i>
                                                    </a>
                                                    <a href="<?= base_url('page/admin/seminarTA/hapus/') . $key->id; ?>" style="text-decoration:none;" data-toggle="tooltip" data-original-title="Hapus Data" class="tombol-hapus">
                                                        <i class="fas fa-trash-alt btn btn-danger btn-sm"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach ?>
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