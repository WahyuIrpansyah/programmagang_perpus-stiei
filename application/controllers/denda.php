<?php
defined('BASEPATH') or exit('No direct script access allowed');

class denda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('DendaModel');
        $this->load->library('pdf');
    }
    public function cetak()
    {
        $data['denda'] = $this->DendaModel->get_denda();
        $this->load->view('denda/denda_print', $data);
    }

    public function index()
    {
        $data['title'] = "Absensi | STIE Indonesia Banjarmasin";
        $data['denda'] = $this->DendaModel->get_denda();

        if (isset($_POST['create'])) {
            $this->DendaModel->insert_denda();
            redirect('denda');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('denda/denda_create');
            $this->load->view('template/footer');
        }
    }
}
