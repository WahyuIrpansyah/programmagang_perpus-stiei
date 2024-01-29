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
        $data['title'] = "Pengunjung | STIE Indonesia Banjarmasin";
        $data['pengunjung'] = $this->PengunjungModel->get_pengunjung();

        if (isset($_POST['create'])) {
            $this->PengunjungModel->insert_pengunjung();
            redirect('pengunjung');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengunjung/pengunjung_create');
            $this->load->view('template/footer');
        }
    }
}
