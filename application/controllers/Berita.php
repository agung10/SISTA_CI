<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data = array(
            "title" => "SISTA - Berita",
            "navbar" => "layout/component/navbar",
            "content" => "berita",
            "footer" => "layout/component/footer"
        );
        $this->load->view('main', $data);
    }
}
