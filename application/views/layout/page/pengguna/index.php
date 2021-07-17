<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Dashboard</h2>
            <p class="section-lead">Halaman Dashboard.
            </p>
            <div class="hero bg-primary text-white">
                <div class="row">
                    <div class="col-md-8 pt-4 pb-5 d-flex justify-content-start">
                        <div class="hero-inner">
                            <h2 style="font-size: 23px;">Selamat Datang, <?= ucwords($this->session->userdata('nama')); ?>!</h2>
                            <p class="lead" style="font-size: 18px;">Temukan informasi mengenai seminar tugas akhir, yang anda inginkan, dan daftarkan diri anda untuk melihat seminar yang ada.</p>
                            <div class="d-flex justify-content-start">
                                <p style="font-weight: bold;" id="date"></p>
                                <p style="font-weight: bold;">,&nbsp;</p>
                                <p style="font-weight: bold;" id="time"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <img src="<?= base_url() ?>assets/custom/img/undraw_dashboard.svg" alt="image" class="img-fluid" width="215px" style="margin-top: -30px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Content -->