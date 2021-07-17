<div class="main-content">
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
            <p class="section-lead">Halaman kelola daftar Seminar TA.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <form onsubmit="return vSeminarA()" action="<?= base_url('page/admin/seminarTA/store') ?>" method="POST" class="needs-validation" novalidate="">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Form Daftar Seminar TA</h4>
                            </div>
                            <div div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukan nim mahasiswa" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nim mahasiswa!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Nama Mahasiswa</label>
                                                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" placeholder="Masukan nama mahasiswa" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nama mahasiswa!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Prodi</label>
                                                    <select name="prodi" id="prodi" class="form-control selectric" required autofocus>
                                                        <option value="">Pilih Jenis Prodi</option>
                                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                                        <option value="Teknik Informatika">Teknik Informatika
                                                        </option>
                                                    </select>

                                                    <div class="invalid-feedback">
                                                        Masukan prodi mahasiswa!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <input type="text" id="semester" name="semester" class="form-control" placeholder="Masukan semester" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan semester!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tanggal Seminar</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control datepicker" placeholder="Masukan tanggal seminar" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan tanggal seminar!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jam Seminar</label>
                                                    <input type="time" id="jam" name="jam" class="form-control" placeholder="Masukan jam seminar" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan jam seminar!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruangan / Lokasi</label>
                                            <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Masukan ruangan / lokasi seminar" required autofocus>

                                            <div class="invalid-feedback">
                                                Masukan ruangan / lokasi seminar!
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul TA</label>
                                            <textarea name="judul" id="judul" class="form-control" style="min-height: 131px;" placeholder="Masukan judul TA" required autofocus></textarea>

                                            <div class="invalid-feedback">
                                                Masukan judul TA!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori Seminar</label>
                                            <select name="kategori_seminar_id" id="nama_seminar" class="form-control selectric" required autofocus>
                                                <option value="">Pilih jenis seminar</option>
                                                <?php foreach ($kategori_seminar as $ks) : ?>
                                                    <option value="<?= $ks->id ?>"><?= $ks->nama ?></option>
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
                                                    <select name="pembimbing_id" id="pembimbing" class="form-control selectric" required autofocus>
                                                        <option value="">Pilih pembimbing</option>
                                                        <?php foreach ($dosen as $p) : ?>
                                                            <option value="<?= $p->id ?>"><?= $p->nidn ?> - <?= $p->nama ?></option>
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
                                                    <input type="text" id="nilai_pembimbing" name="nilai_pembimbing" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nilai!
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Penguji 1</label>
                                                    <select name="penguji1_id" id="penguji1" class="form-control selectric" required autofocus>
                                                        <option value="">Pilih Penguji 1</option>
                                                        <?php foreach ($dosen as $p1) : ?>
                                                            <option value="<?= $p1->id ?>"><?= $p1->nidn ?> - <?= $p1->nama ?></option>
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
                                                    <input type="text" id="nilai_penguji1" name="nilai_penguji1" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nilai!
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Penguji 2</label>
                                                    <select name="penguji2_id" id="penguji2" class="form-control selectric" required autofocus>
                                                        <option value="">Pilih Penguji 2</option>
                                                        <?php foreach ($dosen as $p2) : ?>
                                                            <option value="<?= $p2->id ?>"><?= $p2->nidn ?> - <?= $p2->nama ?></option>
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
                                                    <input type="text" id="nilai_penguji2" name="nilai_penguji2" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nilai!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nilai Akhir</label>
                                                    <input type="text" id="nilai_akhir" name="nilai_akhir" class="form-control" placeholder="Masukan nilai" onkeypress="return isNumberKey(event);" readonly autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nilai!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>