<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpengunjung extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PengunjungModel');
    }

    public function cetak()
    {
        $data['pengunjung'] = $this->PengunjungModel->get_pengunjung();
        $this->load->view('pengunjung/pengunjung_print', $data);
    }

    public function index()
    {
        $data['title'] = "Laporan Pengunjung | STIE Indonesia";
        $data['pengunjung'] = $this->PengunjungModel->get_pengunjung();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pengunjung/pengunjung_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id_pengunjung)
    {
        if (isset($_POST['update'])) {
            $this->PengunjungModel->update_pengunjung();
            redirect('laporanpengunjung');
        } else {
            $data['title'] = "Perbaharui Data Pengunjung | STIE Indonesia Banjarmasin";
            $data['pengunjung'] = $this->PengunjungModel->get_pengunjung_byid_pengunjung($id_pengunjung);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengunjung/pengunjung_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_pengunjung)
    {
        if (isset($id_pengunjung)) {
            $this->PengunjungModel->delete_pengunjung($id_pengunjung);
            redirect('laporanpengunjung');
        }
    }
}
