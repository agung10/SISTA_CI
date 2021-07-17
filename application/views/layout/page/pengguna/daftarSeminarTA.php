<?php foreach ($seminar_ta as $res) : ?>
<?php endforeach; ?>

<div class="main-content">
    <div class="daftarSeminarTA" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <section class="section">
        <div class="section-header">
            <h1>Pendaftaran Peserta Seminar TA</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url() ?>page/pengguna/dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="<?= base_url() ?>page/pengguna/jadwal">Jadwal</a>
                </div>
                <div class="breadcrumb-item">Detail Jadwal</div>
                <div class="breadcrumb-item">Pendaftaran Peserta</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Pendaftaran Peserta Seminar TA</h2>
            <p class="section-lead">Halaman Pendaftaran Peserta Seminar TA.
            </p>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <table>
                            <tr>
                                <td>Seminar Mahasiswa</td>
                                <td class="pl-1">:</td>
                                <td class="pl-2"><?= $res->nama_mahasiswa ?> (<?= $res->nim ?>)</td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td class="pl-1">:</td>
                                <td class="pl-2"><?= $res->judul ?></td>
                            </tr>
                            <tr>
                                <td>Waktu Seminar</td>
                                <td class="pl-1">:</td>
                                <td class="pl-2"><?= tgl_indo(date($res->tanggal)) ?>, <?= $res->jam ?> WIB</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Form Pendaftaran Peserta Seminar TA</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form onsubmit="return pendaftaranPeserta()" action="<?= base_url() ?>page/pengguna/jadwal/store" method="POST" class="needs-validation" novalidate="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukan nim anda" onkeypress="return isNumberKey(event);" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nim anda!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan nama anda" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan nama anda!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>