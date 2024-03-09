<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kembali extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('KembaliModel');
        $this->load->model('Member_BaruModel');
        $this->load->library('pdf');
    }
    public function cetak()
    {
        $data['kembali'] = $this->KembaliModel->get_kembali();
        $data['members_with_kembali'] = $this->KembaliModel->get_member_baru_with_kembali();
        $this->load->view('kembali/kembali_print', $data);
    }

    public function index()
    {
        $data['title'] = "Pengembalian | STIE Indonesia Banjarmasin";
        $data['kembali'] = $this->KembaliModel->get_kembali();
        $data['members'] = $this->Member_BaruModel->get_member_baru();

        if (isset($_POST['create'])) {
            $this->KembaliModel->insert_kembali();
            redirect('kembali');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kembali/kembali_create');
            $this->load->view('template/footer');
        }
    }
}
