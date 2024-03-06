<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanbuku extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('BukuModel');
    }

    public function cetak()
    {
        $data['buku'] = $this->BukuModel->get_buku();
        $this->load->view('buku/buku_print', $data);
    }

    public function index()
    {
        $data['title'] = "Laporan Buku | STIE Indonesia Banjarmasin";
        $data['buku'] = $this->BukuModel->get_buku();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('buku/buku_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id_buku)
    {
        if (isset($_POST['update'])) {
            $this->BukuModel->update_buku();
            redirect('laporanbuku');
        } else {
            $data['title'] = "Perbaharui Data Buku | STIE Indonesia Banjarmasin";
            $data['buku'] = $this->BukuModel->get_buku_byid_buku($id_buku);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('buku/buku_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_buku)
    {
        if (isset($id_buku)) {
            $this->BukuModel->delete_buku($id_buku);
            redirect('laporanbuku');
        }
    }
}
