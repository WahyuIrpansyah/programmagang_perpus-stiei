<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_Baru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_BaruModel');
        $this->load->library('pdf');
    }

    public function cetak()
    {
        $data['member_baru'] = $this->Member_BaruModel->get_member_baru();
        $this->load->view('member_baru/member_baru_print', $data);
    }

    public function index()
    {
        $data['title'] = "Member Baru | STIE Indonesia Banjarmasin";
        $data['member_baru'] = $this->Member_BaruModel->get_member_baru();

        if (isset($_POST['create'])) {
            $this->Member_BaruModel->insert_member_baru();
            redirect('member_baru');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('member_baru/member_baru_create');
            $this->load->view('template/footer');
        }
    }
}
