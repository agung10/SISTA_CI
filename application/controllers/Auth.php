<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function daftar()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        // $this->db->select('email')->from('user');
        // $q = $this->db->get();

        if ($this->session->userdata('email')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('page/admin/dashboard');
            } elseif ($this->session->userdata('role_id') == 2) {
                redirect('page/pengguna/dashboard');
            }
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email wajib diisi!',
            'valid_email' => 'Format email tidak sesuai!',
            'is_unique' => 'Email sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Password wajib diisi!',
            'matches' => 'Password tidak cocok',
            'min_length' => 'Password minimal 6 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password]', [
            'required' => 'Konfirmasi password wajib diisi!',
            'matches' => 'Password tidak cocok',
            'min_length' => 'Password minimal 6 karakter!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = "SISTA - Daftar";
            $this->load->view('auth/daftar', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'profil' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            // $this->session->set_flashdata(
            //     'message',
            //     'Akun berhasil dibuat'
            // );
            redirect('auth/masuk');
        }
    }

    public function masuk()
    {
        if ($this->session->userdata('email')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('page/admin/dashboard');
            } elseif ($this->session->userdata('role_id') == 2) {
                redirect('page/pengguna/dashboard');
            }
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email wajib diisi!',
            'valid_email' => 'Format email tidak sesuai!'
        ]);
        $this->form_validation->set_rules('password', 'Kata Sandi',  'trim|required', [
            'required' => 'Kata sandi wajib diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = "SISTA - Masuk";
            $this->load->view('auth/masuk', $data);
        } else {
            $this->_masuk();
        }
    }

    private function _masuk()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // cek user
        if ($user) {
            // cek aktif user
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'profil' => $user['profil'],
                        'role_id' => $user['role_id'],
                        'is_active' => $user['is_active'],
                        'date_created' => $user['date_created']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('page/admin/dashboard');
                    } else {
                        redirect('page/pengguna/dashboard');
                    }
                } else {
                    $this->session->set_flashdata(
                        'messageError',
                        'Password tidak sesuai'
                    );
                    redirect('auth/masuk');
                }
            } else {
                $this->session->set_flashdata(
                    'messageError',
                    'Email belum diaktivasi'
                );
                redirect('auth/masuk');
            }
        } else {
            $this->session->set_flashdata(
                'messageError',
                'Email tidak terdaftar'
            );
            redirect('auth/masuk');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email', 'role_id');

        // $this->session->set_flashdata(
        //     'message',
        //     'berhasil keluar'
        // );
        redirect('beranda');
    }
}
