<?php foreach ($detail_penilaian as $key) : ?>
<?php endforeach; ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Penilaian</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="dashboard.html">Dashboard</a></div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Penilaian / Detail</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Detail Penilaian</h2>
            <p class="section-lead">Halaman kelola Detail Penilaian.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary" id="mycard-dimiss">
                        <div class="card-header">
                            <h4>Detail Penilaian</h4>

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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Judul Seminar</label>
                                                    <textarea class="form-control bg-secondary shadow-secondary" style="min-height: 50px;" disabled><?= $key->judul ?></textarea>
                                                </div>
                                            </div>
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>NIDN</label>
                                                    <input type="text" value="<?= $key->nidn ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Nama Dosen</label>
                                                    <input type="text" value="<?= $key->nama_dosen ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Penilaian</label>
                                                <input type="text" value="<?= $key->nama_penilaian ?>" class="form-control bg-secondary shadow-secondary" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan Penilaian</label>
                                                <textarea class="form-control bg-secondary shadow-secondary" style="min-height: 50px;" disabled><?= $key->keterangan ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input type="text" value="<?= $key->nilai ?>" class="form-control bg-secondary shadow-secondary" disabled>
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