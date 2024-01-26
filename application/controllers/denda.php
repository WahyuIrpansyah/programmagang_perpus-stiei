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
        $data['title'] = "Form Denda | STIE Indonesia";
        $data['denda'] = $this->DendaModel->get_denda();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('denda/denda_create', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->DendaModel->insert_denda();
            redirect('denda');
        } else {
            $data['title'] = "Tambah Data Denda | STIE Indonesia";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('denda/denda_create');
            $this->load->view('template/footer');
        }
    }
}
