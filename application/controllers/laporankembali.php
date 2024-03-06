<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporankembali extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('KembaliModel');
    }

    public function cetak()
    {
        $data['kembali'] = $this->KembaliModel->get_kembali();
        $this->load->view('kembali/kembali_print', $data);
    }

    public function index()
    {
        $data['title'] = "Laporan Kembali | STIE Indonesia Banjarmasin";
        $data['kembali'] = $this->KembaliModel->get_kembali();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kembali/kembali_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id_kembali)
    {
        if (isset($_POST['update'])) {
            $this->KembaliModel->update_kembali();
            redirect('laporankembali');
        } else {
            $data['title'] = "Perbaharui Data kembali | STIE Indonesia Banjarmasin";
            $data['kembali'] = $this->KembaliModel->get_kembali_byid_kembali($id_kembali);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kembali/kembali_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_kembali)
    {
        if (isset($id_kembali)) {
            $this->KembaliModel->delete_kembali($id_kembali);
            redirect('laporankembali');
        }
    }
}
