<?php
defined('BASEPATH') or exit('No direct script access allowed');

class member_baru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('AbsensiModel', 'Member_BaruModel'));
        $this->load->library('pdf');
    }

    public function cetak()
    {
        $data['member_baru'] = $this->Member_BaruModel->get_member_baru();
        $this->load->view('member_baru/member_baru_print', $data);
    }

    public function index()
    {
        $data['title'] = "Dasboard | SIMDAWA-APP";
        $data['member_baru'] = $this->Member_BaruModel->get_member_baru();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('member_baru/member_baru_create', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->Member_BaruModel->insert_member_baru();
            redirect('member_baru');
        } else {
            $data['title'] = "Tambah Data  member_baru | SIMDAWA-APP";
            $data['member_baru'] = $this->Member_BaruModel->get_member_baru_bynpm($npm);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('member_baru/member_baru_create', $data);
            $this->load->view('template/footer');
        }
    }
}
