<?php foreach ($jadwal as $res) : ?>
<?php endforeach; ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Jadwal</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url() ?>page/pengguna/dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="<?= base_url() ?>page/pengguna/jadwal">Jadwal</a>
                </div>
                <div class="breadcrumb-item">Jadwal Seminar TA</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Detail Jadwal</h2>
            <p class="section-lead">Halaman Detail Jadwal.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Seminar Proposal</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <table style="font-size: 15px;">
                                        <tbody>
                                            <tr>
                                                <td>NIM</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->nim ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Mahasiswa</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->nama_mahasiswa ?></td>
                                            </tr>
                                            <tr>
                                                <td>Prodi</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->prodi ?></td>
                                            </tr>
                                            <tr>
                                                <td>Judul</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->judul ?></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= tgl_indo(date($res->tanggal)) ?>, Pukul : <?= $res->jam ?> WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Ruang</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->lokasi ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table style="font-size: 15px;">
                                        <tbody>
                                            <tr>
                                                <td>Pembimbing</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->nama_dosen ?></td>
                                            </tr>
                                            <tr>
                                                <td>Penguji 1</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->nama_dosen ?></td>
                                            </tr>
                                            <tr>
                                                <td>Penguji 2</td>
                                                <td class="pl-1">:</td>
                                                <td class="pl-2"><?= $res->nama_dosen ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url() ?>page/pengguna/jadwal/daftar" class="btn btn-primary text-white">Daftar Peserta</a>
                </div>
            </div>
        </div>
    </section>
</div>