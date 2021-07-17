<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_Dosen");
    }

    public function index()
    {
        $data = [
            "dosen" => $this->M_Dosen->GET(),

            "title" => "SISTA ADMIN - Dosen",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/dosen",
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
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama')
        ];
        $this->M_Dosen->ADD($data);
        $this->session->set_flashdata(
            'message',
            'ditambah'
        );
        redirect('page/admin/dosen');
    }

    public function edit()
    {
        $data = [
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama')
        ];
        $where = ['id' => $this->input->post('id')];

        $this->M_Dosen->EDIT($data, $where);
        $this->session->set_flashdata(
            'message',
            'diubah'
        );
        redirect('page/admin/dosen');
    }

    public function hapus($id)
    {
        $this->M_Dosen->DELETE($id);
        $this->session->set_flashdata(
            'message',
            'dihapus'
        );
        redirect('page/admin/dosen');
    }
}
