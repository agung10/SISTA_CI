<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendaftaranPengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        $this->load->model("M_PendaftaranPengguna");
    }

    public function index()
    {
        $data = [
            "user" => $this->M_PendaftaranPengguna->GET(),

            "title" => "SISTA ADMIN - Pendaftaran Pengguna",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/datatables.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/pendaftaranPengguna",
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

    public function edit($id)
    {
        if ($this->input->method(TRUE) === 'POST') {
            $user = $this->db->get_where('user', [
                'id' => $id
            ])->row_array();

            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'profil' => $this->input->post('profil'),
                'is_active' => $this->input->post('is_active')
            ];

            $upload_profil = $_FILES['profil']['name'];
            if ($upload_profil) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '5120';
                $config['upload_path'] = './assets/template/img/profil';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('profil')) {
                    $old_profil = $user['profil'];
                    if ($old_profil != 'default.png') {
                        unlink('assets/template/img/profil/' . $old_profil);
                    }

                    $new_profil = $this->upload->data('file_name');
                    $data['profil'] = $new_profil;
                } else {
                    print_r($this->upload->display_errors());
                    exit;
                }
            }

            $where = ['id' => $this->input->post('id')];
            $this->M_PendaftaranPengguna->UPDATE($data, $where);

            $this->session->set_flashdata(
                'message',
                'diubah'
            );
            redirect('page/admin/pendaftaranPengguna');
        }
        $where = ['id' => $id];

        $data = [
            "user" => $this->M_PendaftaranPengguna->EDIT($where),

            "title" => "SISTA ADMIN - Edit Pendaftaran Pengguna",
            "cssLibraries" => "
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
                <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
            ",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/pendaftaranPenggunaEdit",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.js'></script>
                <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
                <script src='$this->url/assets/template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js'></script>
                <script src='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
            ",
            "jsSpecific" => "
                <script src='$this->url/assets/template/js/page/features-post-create.js'></script>
            "
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function hapus($id)
    {
        $this->M_PendaftaranPengguna->DELETE($id);
        $this->session->set_flashdata(
            'message',
            'dihapus'
        );
        redirect('page/admin/pendaftaranPengguna');
    }

    public function detail($id)
    {
        $where = ['id' => $id];

        $data = [
            "user" => $this->M_PendaftaranPengguna->SHOW($where),

            "title" => "SISTA ADMIN - Detail Pendaftaran Pengguna",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/admin/pendaftaranPenggunaDetail",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => ""
        ];
        $this->load->view('layout/page/main', $data);
    }

    public function verifikasi($id)
    {
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('user');


        $this->session->set_flashdata(
            'message',
            'diverifikasi'
        );
        redirect('page/admin/pendaftaranPengguna');
    }
}
