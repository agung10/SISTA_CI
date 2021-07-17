<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_SeminarTA");
    }

    public function index()
    {
        $data = array(
            "total_seminarTA" => $this->M_SeminarTA->total_seminarTA(),

            "title" => "SISTA - Landing Page",
            "navbar" => "layout/component/navbar",
            "content" => "beranda",
            "footer" => "layout/component/footer"
        );
        $this->load->view('main', $data);
    }
}
