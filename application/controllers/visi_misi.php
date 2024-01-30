<?php
defined('BASEPATH') or exit('No direct script access allowed');

class visi_misi extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Dasboard | Perpustakaan STIE Indonesia";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/visi_misi');
        $this->load->view('template/footer');
    }
}
