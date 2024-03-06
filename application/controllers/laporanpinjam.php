<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpinjam extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PinjamModel');
    }

    public function cetak()
    {
        $data['pinjam'] = $this->PinjamModel->get_pinjam();
        $this->load->view('pinjam/pinjam_print', $data);
    }

    public function index()
    {
        $data['title'] = "Laporan pinjam | STIE Indonesia Banjarmasin";
        $data['pinjam'] = $this->PinjamModel->get_pinjam();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pinjam/pinjam_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id_pinjam)
    {
        if (isset($_POST['update'])) {
            $this->PinjamModel->update_pinjam();
            redirect('laporanpinjam');
        } else {
            $data['title'] = "Perbaharui Data pinjam | STIE Indonesia Banjarmasin";
            $data['pinjam'] = $this->PinjamModel->get_pinjam_byid_pinjam($id_pinjam);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pinjam/pinjam_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_pinjam)
    {
        if (isset($id_pinjam)) {
            $this->PinjamModel->delete_pinjam($id_pinjam);
            redirect('laporanpinjam');
        }
    }
}
