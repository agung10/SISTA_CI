<?php if ($this->session->userdata('role_id') == 1) : ?>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="">SISTA</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="">SIS</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="<?= $this->uri->segment(3) == 'dashboard' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/dashboard" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-header">Kelola Admin</li>
                <li class="<?= $this->uri->segment(3) == 'kategoriSeminar' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/kategoriSeminar" class="nav-link">
                        <i class="fas fa-bookmark"></i>
                        <span>Kategori Seminar</span>
                    </a>
                </li>
                <li class="<?= $this->uri->segment(3) == 'dosen' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/dosen" class="nav-link">
                        <i class="fas fa-user-graduate"></i>
                        <span>Dosen</span>
                    </a>
                </li>
                <li class="<?= $this->uri->segment(3) == 'penilaian' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/penilaian" class="nav-link">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <li class="<?= $this->uri->segment(3) == 'detailPenilaian' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/detailPenilaian" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <span>Detail Penilaian</span>
                    </a>
                </li>
                <li class="<?= $this->uri->segment(3) == 'seminarTA' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/seminarTA" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>Seminar TA</span>
                    </a>
                </li>
                <li class="<?= $this->uri->segment(3) == 'pendaftaranPengguna' ? 'active' : '' ?>">
                    <a href="<?= base_url() ?>page/admin/pendaftaranPengguna" class="nav-link">
                        <i class="fas fa-user-plus"></i>
                        <span>Pendaftaran Pengguna</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
<?php endif; ?>