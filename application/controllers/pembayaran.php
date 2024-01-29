<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel');
        $this->load->library('pdf');
    }
    public function cetak()
    {
        $data['pembayaran'] = $this->PembayaranModel->get_pembayaran();
        $this->load->view('pembayaran/pembayaran_print', $data);
    }

    public function index()
    {
        $data['title'] = "Pembayaran | STIE Indonesia Banjarmasin";
        $data['pembayaran'] = $this->PembayaranModel->get_pembayaran();

        if (isset($_POST['create'])) {
            $this->PembayaranModel->insert_pembayaran();
            redirect('pembayaran');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pembayaran/pembayaran_create');
            $this->load->view('template/footer');
        }
    }
}
