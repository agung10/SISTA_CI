<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriSeminar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_KategoriSeminar");
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data = [
            "kategori_seminar" => $this->M_KategoriSeminar->GET(),

            "title" => "SISTA ADMIN - Kategori Seminar",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/kategoriSeminar",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/datatables/datatables.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'></script>
                <script src='$this->url/assets/template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
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
            'nama' => $this->input->post('nama'),
        ];
        $this->M_KategoriSeminar->ADD($data);
        $this->session->set_flashdata(
            'message',
            'ditambah'
        );
        redirect('page/admin/kategoriSeminar');
    }

    public function edit()
    {
        $data = [
            'nama' => $this->input->post('nama'),
        ];
        $where = ['id' => $this->input->post('id')];

        $this->M_KategoriSeminar->EDIT($data, $where);
        $this->session->set_flashdata(
            'message',
            'diubah'
        );
        redirect('page/admin/kategoriSeminar');
    }

    public function hapus($id)
    {
        $this->M_KategoriSeminar->DELETE($id);
        $this->session->set_flashdata(
            'message',
            'dihapus'
        );
        redirect('page/admin/kategoriSeminar');
    }
}
