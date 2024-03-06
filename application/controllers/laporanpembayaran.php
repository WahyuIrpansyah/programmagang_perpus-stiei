<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel');
    }

    public function index()
    {
        $data['title'] = "Laporan Pembayaran | STIE Indonesia";
        $data['pembayaran'] = $this->PembayaranModel->get_pembayaran();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran/pembayaran_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($npm)
    {
        if (isset($_POST['update'])) {
            $this->PembayaranModel->update_pembayaran();
            redirect('laporanpembayaran');
        } else {
            $data['title'] = "Perbaharui Data Persyaratan | STIE Indonesia Banjarmasin";
            $data['pembayaran'] = $this->PembayaranModel->get_pembayaran_bynpm($npm);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pembayaran/pembayaran_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($npm)
    {
        if (isset($npm)) {
            $this->PembayaranModel->delete_pembayaran($npm);
            redirect('laporanpembayaran');
        }
    }
}
