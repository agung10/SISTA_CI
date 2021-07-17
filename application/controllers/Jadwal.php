<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function index()
    {
        $data = array(
            "title" => "SISTA - Jadwal",
            "navbar" => "layout/component/navbar",
            "content" => "jadwal",
            "footer" => "layout/component/footer"
        );
        $this->load->view('main', $data);
    }
}
