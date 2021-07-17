<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->url = base_url();

        is_logged_in();
        checkPengguna();
    }

    public function index()
    {
        $data = array(
            "title" => "SISTA - Dashboard",
            "cssLibraries" => "",
            "navbar" => "layout/component/app/navbar",
            "sidebar" => "layout/component/app/sidebar",
            "content" => "layout/page/pengguna/index",
            "footer" => "layout/component/app/footer",
            "jsLibraries" => "",
            "jsSpecific" => "
                <script src='$this->url/assets/custom/custom.js'></script>
            "
        );
        $this->load->view('layout/page/main', $data);
    }
}
