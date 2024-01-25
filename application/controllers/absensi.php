<?php
defined('BASEPATH') or exit('No direct script access allowed');

class absensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AbsensiModel');
    }

    public function index()
    {
        $data['title'] = "Absensi | STIE Indonesia Banjarmasin";
        $data['absensi'] = $this->AbsensiModel->get_absensi();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('absensi/absensi_read');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->AbsensiModel->insert_absensi();
            redirect('absensi');
        } else {
            $data['title'] = "Tambah Data Absensi | Perpustakaan STIEI";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('absensi/absensi_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($npm)
    {
        if (isset($_POST['update'])) {
            $this->AbsensiModel->update_absensi();
            redirect('absensi');
        } else {
            $data['title'] = "Perbaharui Data Absensi | SIMDAWA-APP";
            $data['absensi'] = $this->AbsensiModel->get_absensi_bynpm($npm);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('absensi/absensi_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($npm)
    {
        if (isset($npm)) {
            $this->AbsensiModel->delete_absensi($npm);
            redirect('absensi');
        }
    }
}
