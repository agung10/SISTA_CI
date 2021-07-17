<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jadwal Seminar TA</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Jadwal Seminar TA</h2>
            <p class="section-lead">
                Halaman seluruh Jadwal Seminar TA.
            </p>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>

                            <span style="font-size: 16px;">
                                <i class="fas fa-info pr-2"></i>
                                <strong>Selain mahasiswa/i yang bersangkutan, hanya bisa melihat Seminar Proposal dan Seminar Hasil saja.</strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Tabel Jadwal</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>NIM</th>
                                            <th>Mahasiswa/i</th>
                                            <th>Seminar</th>
                                            <th>Waktu</th>
                                            <th>Ruangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($seminar_ta as $key) : ?>
                                            <tr class="text-center">
                                                <td><?= $no ?></td>
                                                <td>
                                                    <span class="badge badge-info badge-sm shadow-info"><?= $key->nim ?></span>
                                                </td>
                                                <td><?= $key->nama_mahasiswa ?></td>
                                                <td><?= $key->nama_seminar ?></td>
                                                <td><?= tgl_indo(date($key->tanggal)) ?>, <?= $key->jam ?> WIB</td>
                                                <td><?= $key->lokasi ?></td>
                                                <td>
                                                    <?php if ($key->nama_seminar == "Sidang Akhir") : ?>
                                                        <a href="" class="btn btn-secondary btn-sm" onclick="return sidangAkhir()">Detail</a>
                                                    <?php else : ?>
                                                        <a href="<?= base_url('page/pengguna/jadwal/detail/') . $key->id ?>" class="btn btn-secondary btn-sm">Detail</a>
                                                    <?php endif; ?>
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