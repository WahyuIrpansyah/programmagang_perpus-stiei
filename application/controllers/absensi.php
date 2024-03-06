<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AbsensiModel');
        $this->load->model('Member_BaruModel');
        $this->load->library('pdf');
    }

    public function cetak()
    {
        $data['absensi'] = $this->AbsensiModel->get_absensi();
        $data['members_with_absensi'] = $this->AbsensiModel->get_member_baru_with_absensi();
        $this->load->view('absensi/absensi_print', $data);
    }

    public function index()
    {
        $data['title'] = "Absensi | STIE Indonesia Banjarmasin";
        $data['absensi'] = $this->AbsensiModel->get_absensi();
        $data['members'] = $this->Member_BaruModel->get_member_baru();

        if (isset($_POST['create'])) {
            $this->AbsensiModel->insert_absensi();
            redirect('absensi');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('absensi/absensi_create');
            $this->load->view('template/footer');
        }
    }
}
