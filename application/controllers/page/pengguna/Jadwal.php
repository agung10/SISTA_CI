<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_Jadwal");
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data = [
            "seminar_ta" => $this->M_Jadwal->GET(),

            "title" => "SISTA - Seminar TA",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/pengguna/jadwal",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/datatables/datatables.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
            ",
            "jsSpecific" => "
                <script src='$this->url/assets/template/js/page/modules-datatables.js'></script>
            "
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function daftar()
    {
        $data = [
            "seminar_ta" => $this->M_Jadwal->GET(),

            "title" => "SISTA - Daftar Seminar TA",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/pengguna/daftarSeminarTA",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
            ",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function store()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'seminar_id' => $this->input->post('seminar_id')
        ];

        $this->M_Jadwal->ADD($data);
        $this->session->set_flashdata(
            'message',
            'ditambah'
        );
        redirect('page/admin/jadwal/daftar');
    }

    public function detail($id)
    {
        $where = ['id' => $id];

        $data = [
            "seminar_ta" => $this->M_Jadwal->SHOW($where),
            "jadwal" => $this->M_Jadwal->GET(),
            'dosen' => $this->db->get('dosen')->result(),

            "title" => "SISTA - Detail Seminar TA",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/pengguna/jadwalDetail",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }
}
