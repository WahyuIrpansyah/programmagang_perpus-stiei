<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanabsensi extends CI_Controller
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

    public function ubah($id_absensi)
    {
        if (isset($_POST['update'])) {
            $this->AbsensiModel->update_absensi();
            redirect('laporanabsensi');
        } else {
            $data['title'] = "Perbaharui Data Absensi | STIE Indonesia Banjarmasin";
            $data['absensi'] = $this->AbsensiModel->get_absensi_byid_absensi($id_absensi);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('absensi/absensi_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_absensi)
    {
        if (isset($id_absensi)) {
            $this->AbsensiModel->delete_absensi($id_absensi);
            redirect('laporanabsensi');
        }
    }
}
