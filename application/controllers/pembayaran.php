<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel');
    }

    public function index()
    {
        $data['title'] = "Dasboard | SIMDAWA-APP";
        $data['pembayaran'] = $this->PembayaranModel->get_pembayaran();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran/pembayaran_read', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->PembayaranModel->insert_pembayaran();
            redirect('pembayaran');
        } else {
            $data['title'] = "Tambah Data Pembayaran | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pembayaran/pembayaran_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($npm)
    {
        if (isset($_POST['update'])) {
            $this->PembayaranModel->update_pembayaran();
            redirect('pembayaran');
        } else {
            $data['title'] = "Perbaharui Data Persyaratan | SIMDAWA-APP";
            $data['pembayaran'] = $this->PembayaranModel->get_pembayaran_byid($npm);
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
            redirect('pembayaran');
        }
    }
}
