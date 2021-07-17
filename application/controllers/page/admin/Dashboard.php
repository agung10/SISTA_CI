<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();
        $this->load->model("M_Dosen");
        $this->load->model("M_SeminarTA");
        $this->load->model("M_PendaftaranPengguna");

        is_logged_in();
        checkAdmin();
    }

    public function index()
    {
        $data = array(
            "total_dosen" => $this->M_Dosen->total_dosen(),
            "total_seminarTA" => $this->M_SeminarTA->total_seminarTA(),

            "total_pengguna" => $this->M_PendaftaranPengguna->total_pengguna(),
            "total_verifikasi" => $this->M_PendaftaranPengguna->total_verifikasi(),
            "total_terverifikasi" => $this->M_PendaftaranPengguna->total_terverifikasi(),

            "title" => "SISTA ADMIN - Dashboard",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/index",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => "
                <script src='$this->url/assets/custom/custom.js'></script>
            "
        );

        $this->load->view('layout/page/main', $data);
    }
}
