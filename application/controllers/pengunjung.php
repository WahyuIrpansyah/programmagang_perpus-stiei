<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengunjung extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PengunjungModel');
        $this->load->library('pdf');
    }

    public function cetak()
    {
        $data['pengunjung'] = $this->PengunjungModel->get_pengunjung();
        $this->load->view('pengunjung/pengunjung_print', $data);
    }

    public function index()
    {
        $data['title'] = "Dasboard | SIMDAWA-APP";
        $data['pengunjung'] = $this->PengunjungModel->get_pengunjung();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pengunjung/pengunjung_create', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->PengunjungModel->insert_pengunjung();
            redirect('pengunjung');
        } else {
            $data['title'] = "Tambah Data Pengunjung | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengunjung/pengunjung_create');
            $this->load->view('template/footer');
        }
    }
}
