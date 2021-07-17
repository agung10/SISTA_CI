<div class="hero-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 pr-lg-5">
                <h1>Jadwal</h1>
                <p class="lead">
                    Halaman ini berguna untuk menampilkan jadwal terbaru seputar informasi mengenai seminar
                    tugas akhir.
                </p>
            </div>
            <div class="col-lg-4 d-lg-block d-none">
                <img src="<?= base_url() ?>assets/landingPage/landing/undraw_schedule.svg" alt="image" class="img-fluid img-flip" width="100%">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
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
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Jadwal</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md table-striped">
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
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>
                                        <span class="badge badge-primary">0102002</span>
                                    </td>
                                    <td>Diego Armando</td>
                                    <td>Proposal</td>
                                    <td>10:00, 4-01-2021</td>
                                    <td>Online</td>
                                    <td>
                                        <a href="<?= base_url() ?>jadwalDetail" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>
                                        <span class="badge badge-primary">0102001</span>
                                    </td>
                                    <td>Ahmad Budiman</td>
                                    <td>Seminar Hasil</td>
                                    <td>13:00, 4-01-2021</td>
                                    <td>Online</td>
                                    <td>
                                        <a href="<?= base_url() ?>jadwalDetail" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>
                                        <span class="badge badge-primary">0102040</span>
                                    </td>
                                    <td>Fradelina Putri</td>
                                    <td>Sidang Akhir</td>
                                    <td>12:00, 8-01-2021</td>
                                    <td>B2-304</td>
                                    <td>
                                        <a href="<?= base_url() ?>jadwalDetail" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>