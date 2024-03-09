<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pinjam extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PinjamModel');
        $this->load->model('Member_BaruModel');
        $this->load->library('pdf');
    }
    public function cetak()
    {
        $data['pinjam'] = $this->PinjamModel->get_pinjam();
        $data['members_with_pinjam'] = $this->PinjamModel->get_member_baru_with_pinjam();
        $this->load->view('pinjam/pinjam_print', $data);
    }

    public function index()
    {
        $data['title'] = "pinjam | STIE Indonesia Banjarmasin";
        $data['pinjam'] = $this->PinjamModel->get_pinjam();
        $data['members'] = $this->Member_BaruModel->get_member_baru();

        if (isset($_POST['create'])) {
            $this->PinjamModel->insert_pinjam();
            redirect('pinjam');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pinjam/pinjam_create');
            $this->load->view('template/footer');
        }
    }
}
