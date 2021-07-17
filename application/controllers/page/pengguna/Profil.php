<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();
    }

    public function index()
    {
        $data = array(
            "title" => "SISTA - Profil",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/profil",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "
                <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
            ",
            "jsSpecific" => ""
        );
        $this->load->view('layout/page/main', $data);
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama wajib diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data = array(
                "title" => "SISTA - Edit Profil",
                "cssLibraries" => "
                    <link rel='stylesheet' href='$this->url/assets/template/modules/jquery-selectric/selectric.css'>
                    <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.css'>
                    <link rel='stylesheet' href='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
                    <link rel='stylesheet' href='$this->url/assets/template/modules/izitoast/css/iziToast.min.css'>
                ",
                "navbar" => "layout/component/app/navbar",
                "sidebar" => "layout/component/app/sidebar",
                "content" => "layout/page/profilEdit",
                "footer" => "layout/component/app/footer",
                "jsLibraries" => "
                    <script src='$this->url/assets/template/modules/jquery-ui/jquery-ui.min.js'></script>
                    <script src='$this->url/assets/template/modules/jquery-selectric/jquery.selectric.min.js'></script>
                    <script src='$this->url/assets/template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js'></script>
                    <script src='$this->url/assets/template/modules/bootstrap-daterangepicker/daterangepicker.js'></script>
                    <script src='$this->url/assets/template/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
                    <script src='$this->url/assets/template/modules/sweetalert/sweetalert.min.js'></script>
                    <script src='$this->url/assets/template/modules/izitoast/js/iziToast.min.js'></script>
                ",
                "jsSpecific" => "
                    <script src='$this->url/assets/template/js/page/features-post-create.js'></script>
                "
            );
            $this->load->view('layout/page/main', $data);
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $this->session->set_userdata('nama', $nama);

            $upload_profil = $_FILES['profil']['name'];
            if ($upload_profil) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '5120';
                $config['upload_path'] = './assets/template/img/profil';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('profil')) {
                    $old_profil = $data['user']['profil'];
                    if ($old_profil != 'default.png') {
                        unlink(FCPATH . 'assets/template/img/profil/' . $old_profil);
                    }

                    $new_profil = $this->upload->data('file_name');
                    $this->db->set('profil', $new_profil);

                    $this->session->set_userdata('profil', $new_profil);
                } else {
                    echo $this->upload->display_errors();
                    exit;
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata(
                'message',
                'diubah'
            );
            redirect('page/pengguna/profil');
        }
    }

    public function changePassword()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password');
        $new_password2 = $this->input->post('new_password2');

        if (!password_verify($current_password, $data['user']['password'])) {
            $this->session->set_flashdata(
                'messageError',
                'Password saat ini salah'
            );
            redirect('page/pengguna/profil/edit');
        } else {
            if ($current_password == $new_password) {
                $this->session->set_flashdata(
                    'messageError',
                    'Password baru tidak boleh sama dengan password saat ini'
                );
                redirect('page/pengguna/profil/edit');
            } else if ($new_password != $new_password2) {
                $this->session->set_flashdata(
                    'messageError',
                    'Password tidak cocok'
                );
                redirect('page/pengguna/profil/edit');
            } else {
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');

                $this->session->set_flashdata(
                    'messagePW',
                    'diubah'
                );

                redirect('page/pengguna/profil');
            }
        }
    }
}
