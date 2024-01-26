<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanabsensi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AbsensiModel');
    }


    public function index()
    {
        $data['title'] = "Absensi | STIE Indonesia Banjarmasin";
        $data['absensi'] = $this->AbsensiModel->get_absensi();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('absensi/absensi_create');
        $this->load->view('template/footer');
    }
}
