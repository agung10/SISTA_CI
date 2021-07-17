<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SeminarTA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_SeminarTA");
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data = [
            "seminar_ta" => $this->M_SeminarTA->GET(),

            "title" => "SISTA ADMIN - Seminar TA",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/seminarTA",
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
            'kategori_seminar' => $this->db->get('kategori_seminar')->result(),
            'dosen' => $this->db->get('dosen')->result(),

            "title" => "SISTA ADMIN - Tambah Seminar TA",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/seminarTAAdd",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.js'></script>
                <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
                <script src='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
            ",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function store()
    {
        $nilaiP = $this->input->post('nilai_pembimbing');
        $nilaiP1 = $this->input->post('nilai_penguji1');
        $nilaiP2 = $this->input->post('nilai_penguji2');

        $nilai_akhir = ($nilaiP + $nilaiP1 + $nilaiP2) / 3;

        $data = [
            'semester' => $this->input->post('semester'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'prodi' => $this->input->post('prodi'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            'lokasi' => $this->input->post('lokasi'),
            'judul' => $this->input->post('judul'),
            'kategori_seminar_id' => $this->input->post('kategori_seminar_id'),
            'pembimbing_id' => $this->input->post('pembimbing_id'),
            'penguji1_id' => $this->input->post('penguji1_id'),
            'penguji2_id' => $this->input->post('penguji2_id'),
            'nilai_pembimbing' => $nilaiP,
            'nilai_penguji1' => $nilaiP1,
            'nilai_penguji2' => $nilaiP2,
            'nilai_akhir' => $nilai_akhir
        ];

        $this->M_SeminarTA->ADD($data);
        $this->session->set_flashdata(
            'message',
            'ditambah'
        );
        redirect('page/admin/seminarTA');
    }

    public function edit($id)
    {
        $where = ['id' => $id];

        $data = [
            'kategori_seminar' => $this->db->get('kategori_seminar')->result(),
            'dosen' => $this->db->get('dosen')->result(),

            "seminar_ta" => $this->M_SeminarTA->EDIT($where),

            "title" => "SISTA ADMIN - Tambah Seminar TA",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/seminarTAEdit",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.js'></script>
                <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
                <script src='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
            ",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function update()
    {
        $nilaiP = $this->input->post('nilai_pembimbing');
        $nilaiP1 = $this->input->post('nilai_penguji1');
        $nilaiP2 = $this->input->post('nilai_penguji2');

        $nilai_akhir = ($nilaiP + $nilaiP1 + $nilaiP2) / 3;

        $data = [
            'semester' => $this->input->post('semester'),
            'nim' => $this->input->post('nim'),
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'prodi' => $this->input->post('prodi'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            'lokasi' => $this->input->post('lokasi'),
            'judul' => $this->input->post('judul'),
            'kategori_seminar_id' => $this->input->post('kategori_seminar_id'),
            'pembimbing_id' => $this->input->post('pembimbing_id'),
            'penguji1_id' => $this->input->post('penguji1_id'),
            'penguji2_id' => $this->input->post('penguji2_id'),
            'nilai_pembimbing' => $nilaiP,
            'nilai_penguji1' => $nilaiP1,
            'nilai_penguji2' => $nilaiP2,
            'nilai_akhir' => $nilai_akhir
        ];

        $where = ['id' => $this->input->post('id')];

        $this->M_SeminarTA->UPDATE($data, $where);

        $this->session->set_flashdata(
            'message',
            'diubah'
        );
        redirect('page/admin/seminarTA');
    }

    public function hapus($id)
    {
        $this->M_SeminarTA->DELETE($id);
        $this->session->set_flashdata(
            'message',
            'dihapus'
        );
        redirect('page/admin/seminarTA');
    }

    public function detail($id)
    {
        $where = ['id' => $id];

        $data = [
            'kategori_seminar' => $this->db->get('kategori_seminar')->result(),
            'dosen' => $this->db->get('dosen')->result(),

            "seminar_ta" => $this->M_SeminarTA->SHOW($where),

            "title" => "SISTA ADMIN - Detail Seminar TA",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/seminarTADetail",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }
}
