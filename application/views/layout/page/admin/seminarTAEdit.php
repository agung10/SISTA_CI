<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Seminar TA</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="dashboard.html">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Seminar TA / Edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Seminar TA</h2>
            <p class="section-lead">Halaman kelola edit Seminar TA.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <?php foreach ($seminar_ta as $key) : ?>
                        <form action="<?= base_url('page/admin/seminarTA/update') ?>" method="POST" class="needs-validation" novalidate="">
                            <input type="hidden" value="<?= $key->id ?>" name="id" readonly>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Form Edit Seminar TA</h4>
                                </div>
                                <div div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>NIM</label>
                                                        <input type="text" name="nim" value="<?= $key->nim ?>" class="form-control" placeholder="Masukan nim mahasiswa" onkeypress="return isNumberKey(event);" required>

                                                        <div class="invalid-feedback">
                                                            Masukan nim mahasiswa!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Nama Mahasiswa</label>
                                                        <input type="text" name="nama_mahasiswa" value="<?= $key->nama_mahasiswa ?>" class="form-control" placeholder="Masukan nama mahasiswa" required>

                                                        <div class="invalid-feedback">
                                                            Masukan nama mahasiswa!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Prodi</label>
                                                        <select name="prodi" class="form-control selectric" required>
                                                            <option value="">Pilih Jenis Prodi</option>
                                                            <?php if ($key->prodi == "Sistem Informasi") : ?>
                                                                <option value="Sistem Informasi" selected>Sistem Informasi</option>
                                                                <option value="Teknik Informatika">Teknik Informatika
                                                                </option>
                                                            <?php elseif ($key->prodi == "Teknik Informatika") : ?>
                                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                                <option value="Teknik Informatika" selected>Teknik Informatika
                                                                </option>
                                                            <?php endif; ?>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan prodi mahasiswa!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Semester</label>
                                                        <input type="text" name="semester" value="<?= $key->semester ?>" class="form-control" placeholder="Masukan semester" onkeypress="return isNumberKey(event);" required>

                                                        <div class="invalid-feedback">
                                                            Masukan semester!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tanggal Seminar</label>
                                                        <input type="text" name="tanggal" value="<?= $key->tanggal ?>" class="form-control datepicker" placeholder="Masukan tanggal seminar" required>

                                                        <div class="invalid-feedback">
                                                            Masukan tanggal seminar!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Jam Seminar</label>
                                                        <input type="time" name="jam" value="<?= $key->jam ?>" class="form-control" placeholder="Masukan jam seminar" required>

                                                        <div class="invalid-feedback">
                                                            Masukan jam seminar!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Ruangan / Lokasi</label>
                                                <input type="text" name="lokasi" value="<?= $key->lokasi ?>" class="form-control" placeholder="Masukan ruangan / lokasi seminar" required>

                                                <div class="invalid-feedback">
                                                    Masukan ruangan / lokasi seminar!
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Judul TA</label>
                                                <textarea name="judul" id="judul" class="form-control" style="min-height: 131px;" placeholder="Masukan judul TA" required><?= $key->judul ?></textarea>

                                                <div class="invalid-feedback">
                                                    Masukan judul TA!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori Seminar</label>
                                                <select name="kategori_seminar_id" class="form-control selectric" required>
                                                    <option value="">Pilih jenis seminar</option>
                                                    <?php foreach ($kategori_seminar as $ks) : ?>
                                                        <option value="<?= $ks->id ?>" <?= $ks->id == $key->kategori_seminar_id ? "selected" : null ?>><?= $ks->nama ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <div class="invalid-feedback">
                                                    Masukan jenis seminar!
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Pembimbing</label>
                                                        <select name="pembimbing_id" class="form-control selectric" required>
                                                            <option value="">Pilih pembimbing</option>
                                                            <?php foreach ($dosen as $p) : ?>
                                                                <option value="<?= $p->id ?>" <?= $p->id == $key->pembimbing_id ? "selected" : null ?>><?= $p->nidn ?> - <?= $p->nama ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama pembimbing!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Nilai Pembimbing</label>
                                                        <input type="text" name="nilai_pembimbing" value="<?= $key->nilai_pembimbing ?>" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required>

                                                        <div class="invalid-feedback">
                                                            Masukan nilai!
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Penguji 1</label>
                                                        <select name="penguji1_id" class="form-control selectric" required>
                                                            <option value="">Pilih Penguji 1</option>
                                                            <?php foreach ($dosen as $p1) : ?>
                                                                <option value="<?= $p1->id ?>" <?= $p1->id == $key->penguji1_id ? "selected" : null ?>><?= $p1->nidn ?> - <?= $p1->nama ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama penguji 1!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Nilai Penguji 1</label>
                                                        <input type="text" name="nilai_penguji1" value="<?= $key->nilai_penguji1 ?>" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required>

                                                        <div class="invalid-feedback">
                                                            Masukan nilai!
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Penguji 2</label>
                                                        <select name="penguji2_id" class="form-control selectric" required>
                                                            <option value="">Pilih Penguji 2</option>
                                                            <?php foreach ($dosen as $p2) : ?>
                                                                <option value="<?= $p2->id ?>" <?= $p2->id == $key->penguji2_id ? "selected" : null ?>><?= $p2->nidn ?> - <?= $p2->nama ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                        <div class="invalid-feedback">
                                                            Masukan nama penguji 2!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Nilai Penguji 2</label>
                                                        <input type="text" name="nilai_penguji2" value="<?= $key->nilai_penguji2 ?>" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required>

                                                        <div class="invalid-feedback">
                                                            Masukan nilai!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Nilai Akhir</label>
                                                        <input type="text" name="nilai_akhir" value="<?= $key->nilai_akhir ?>" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" readonly>

                                                        <div class="invalid-feedback">
                                                            Masukan nilai!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>