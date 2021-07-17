<div class="main-content">
    <section class="section">
        <div class="section-header">
            <a href="javascript: history.back();">
                <i class="fas fa-arrow-left"></i>
            </a>
            &nbsp;
            <h1>Edit Pendaftaran pengguna</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url() ?>page/admin/dashboard">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Kelola Admin</div>
                <div class="breadcrumb-item">Pendaftaran Pengguna / Edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Pendaftaran pengguna</h2>
            <p class="section-lead">
                Halaman kelola edit pendaftaran pengguna.
            </p>

            <?php foreach ($user as $key) : ?>
                <form onsubmit="return penggunaEdit()" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $key->id ?>" name="id" readonly>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Foto Profil</h4>
                                </div>
                                <div class="card-body align-self-center">
                                    <div id="image-preview" class="image-preview" style="height: 185px; width: 185px; background-image: url('<?= base_url("assets/template/img/profil/") . $key->profil ?>'); background-size: cover; background-position: center center;">
                                        <label for="image-upload" style="width: 120px; height: 40px; line-height: 40px;">Ganti File</label>

                                        <input type="file" name="profil" value="" id="image-upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card card-primary" id="mycard-dimiss">
                                <div class="card-header">
                                    <h4>Form Edit</h4>

                                    <div class="card-header-action">
                                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info btn-sm" href="#"><i class="fas fa-minus"></i></a>
                                        <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger btn-sm" href="#"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="collapse show" id="mycard-collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" id="nama" name="nama" value="<?= $key->nama ?>" class="form-control" required autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan username user!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" id="email" name="email" value="<?= $key->email ?>" class="form-control" readonly autofocus>

                                                    <div class="invalid-feedback">
                                                        Masukan email user!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <?php if ($key->is_active == 0) : ?>
                                                        <label>Pilih Verifikasi</label>
                                                        <select name="is_active" id="is_active" class="form-control selectric" required autofocus>
                                                            <option value="0" selected>Belum Verifikasi</option>
                                                            <option value="1">Verifikasi</option>
                                                        </select>
                                                    <?php endif ?>
                                                    <?php if ($key->is_active == 1) : ?>
                                                        <label>Pilih Verifikasi</label>
                                                        <select name="is_active" id="is_active" class="form-control selectric" required autofocus>
                                                            <option value="1" selected aria-readonly>Sudah diverifikasi</option>
                                                        </select>
                                                    <?php endif ?>

                                                    <div class="invalid-feedback">
                                                        Masukan jenis kelamin user!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </section>
</div>


<script>
    function penggunaEdit() {
        let username = document.getElementById("username").value;
        let email = document.getElementById("email").value;
        let jenis_kelamin = document.getElementById("jenis_kelamin").value;
        let tanggal_lahir = document.getElementById("tanggal_lahir").value;

        // Email Validation Format
        const v_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (username == "" || email == "" || jenis_kelamin == "" || tanggal_lahir == "") {
            iziToast.error({
                title: 'Gagal',
                message: 'Lengkapi semua data terlebih dahulu!',
                position: 'bottomRight'
            });

            return true;
        } else if (!(v_email.test(email))) {
            iziToast.error({
                title: 'Gagal',
                message: 'Format email tidak sesuai, (john@gmail.com)!',
                position: 'bottomRight'
            });

            return true;
        } else {
            console.log("berhasil mengubah data");

            swal(
                'Berhasil', 'Data berhasil diubah!', 'success'
            ).then((data) => {
                window.location = "registrasiUser.html";
            });

            return false;
        }
    }
</script>