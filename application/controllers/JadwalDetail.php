<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalDetail extends CI_Controller
{
    public function index()
    {
        $data = array(
            "title" => "SISTA - Detail Jadwal",
            "navbar" => "layout/component/navbar",
            "content" => "jadwalDetail.php",
            "footer" => "layout/component/footer"
        );
        $this->load->view('main', $data);
    }
}
