<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailPenilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_DetailPenilaian");
    }

    public function index()
    {
        $data = [
            "detail_penilaian" => $this->M_DetailPenilaian->GET(),

            'seminar_ta' => $this->db->get('seminar_ta')->result(),
            'penilaian' => $this->db->get('penilaian')->result(),
            'dosen' => $this->db->get('dosen')->result(),

            "title" => "SISTA ADMIN - Detail Penilaian",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/detailPenilaian",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/datatables/datatables.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
                <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
            ",
            "jsSpecific" => "
                <script src='$this->url/assets/template/js/page/modules-datatables.js'></script>
            "
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function add()
    {
        $data = [
            'seminar_id' => $this->input->post('seminar_id'),
            'dosen_id' => $this->input->post('dosen_id'),
            'penilaian_id' => $this->input->post('penilaian_id'),
            'nilai' => $this->input->post('nilai')
        ];

        $this->M_DetailPenilaian->ADD($data);
        $this->session->set_flashdata(
            'message',
            'ditambah'
        );
        redirect('page/admin/detailPenilaian');
    }

    public function edit()
    {
        $data = [
            'seminar_id' => $this->input->post('seminar_id'),
            'dosen_id' => $this->input->post('dosen_id'),
            'penilaian_id' => $this->input->post('penilaian_id'),
            'nilai' => $this->input->post('nilai')
        ];
        $where = ['id' => $this->input->post('id')];

        $this->M_DetailPenilaian->EDIT($data, $where);
        $this->session->set_flashdata(
            'message',
            'diubah'
        );
        redirect('page/admin/detailPenilaian');
    }

    public function hapus($id)
    {
        $this->M_DetailPenilaian->DELETE($id);
        $this->session->set_flashdata(
            'message',
            'dihapus'
        );
        redirect('page/admin/detailPenilaian');
    }

    public function detail()
    {
        $data = [
            "detail_penilaian" => $this->M_DetailPenilaian->GET(),

            "title" => "SISTA ADMIN - Detail Seminar TA",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/detailPenilaianD",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function getJudulSeminar($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('seminar_ta')->row();
        echo json_encode($query);
    }
}
