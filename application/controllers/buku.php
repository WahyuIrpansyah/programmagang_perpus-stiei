<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('BukuModel');
        $this->load->library('pdf');
    }
    public function cetak()
    {
        $data['buku'] = $this->BukuModel->get_buku();
        $this->load->view('buku/buku_print', $data);
    }

    public function index()
    {
        $data['title'] = "Buku | STIE Indonesia Banjarmasin";
        $data['buku'] = $this->BukuModel->get_buku();

        if (isset($_POST['create'])) {
            $this->BukuModel->insert_buku();
            redirect('buku');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('buku/buku_create');
            $this->load->view('template/footer');
        }
    }
}
