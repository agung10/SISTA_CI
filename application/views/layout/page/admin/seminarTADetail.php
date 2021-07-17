<?php foreach ($seminar_ta as $key) : ?>
<?php endforeach; ?>
<?php foreach ($kategori_seminar as $ks) : ?>
<?php endforeach; ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Seminar TA</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="dashboard.html">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Seminar TA / Detail</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Detail Seminar TA</h2>
            <p class="section-lead">Halaman kelola detail Seminar TA.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary" id="mycard-dimiss">
                        <div class="card-header">
                            <h4>Detail Seminar TA</h4>

                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info btn-sm" href="#"><i class="fas fa-minus"></i></a>
                                <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger btn-sm" href="#"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse">
                            <div div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" value="<?= $key->nim ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Nama Mahasiswa</label>
                                                    <input type="text" value="<?= $key->nama_mahasiswa ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Prodi</label>
                                                    <input type="text" value="<?= $key->prodi ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <input type="text" value="<?= $key->semester ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tanggal Seminar</label>
                                                    <input type="text" value="<?= tgl_indo(date($key->tanggal)) ?>" class="form-control bg-secondary shadow-secondary datepicker" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jam Seminar</label>
                                                    <input type="time" value="<?= $key->jam ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruangan / Lokasi</label>
                                            <input type="text" value="<?= $key->lokasi ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul TA</label>
                                            <textarea id="judul" class="form-control bg-secondary shadow-secondary" style="min-height: 131px;" disabled><?= $key->judul ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori Seminar</label>
                                            <select class="form-control bg-secondary shadow-secondary selectric" disabled>
                                                <option value="">Pilih jenis seminar</option>
                                                <?php foreach ($kategori_seminar as $ks) : ?>
                                                    <option value="<?= $ks->id ?>" <?= $ks->id == $key->kategori_seminar_id ? "selected" : null ?>><?= $ks->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Pembimbing</label>
                                                    <select class="form-control bg-secondary shadow-secondary selectric" disabled>
                                                        <option value="">Pilih pembimbing</option>
                                                        <?php foreach ($dosen as $p) : ?>
                                                            <option value="<?= $p->id ?>" <?= $p->id == $key->pembimbing_id ? "selected" : null ?>><?= $p->nidn ?> - <?= $p->nama ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label>Nilai Pembimbing</label>
                                                    <input type="text" value="<?= $key->nilai_pembimbing ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Penguji 1</label>
                                                    <select class="form-control bg-secondary shadow-secondary selectric" disabled>
                                                        <option value="">Pilih pembimbing</option>
                                                        <?php foreach ($dosen as $p1) : ?>
                                                            <option value="<?= $p1->id ?>" <?= $p1->id == $key->penguji1_id ? "selected" : null ?>><?= $p1->nidn ?> - <?= $p1->nama ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label>Nilai Penguji 1</label>
                                                    <input type="text" value="<?= $key->nilai_penguji1 ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Penguji 2</label>
                                                    <select class="form-control bg-secondary shadow-secondary selectric" disabled>
                                                        <option value="">Pilih pembimbing</option>
                                                        <?php foreach ($dosen as $p2) : ?>
                                                            <option value="<?= $p2->id ?>" <?= $p2->id == $key->penguji2_id ? "selected" : null ?>><?= $p2->nidn ?> - <?= $p2->nama ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label>Nilai Penguji 2</label>
                                                    <input type="text" value="<?= $key->nilai_penguji2 ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nilai Akhir</label>
                                                    <input type="text" value="<?= $key->nilai_akhir ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
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