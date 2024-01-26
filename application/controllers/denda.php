<?php
defined('BASEPATH') or exit('No direct script access allowed');

class denda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('DendaModel');
    }

    public function cetak()
    {
        $data['denda'] = $this->DendaModel->get_denda();
        $this->load->view('denda/denda_print', $data);
    }

    public function index()
    {
        $data['title'] = "Dasboard | SIMDAWA-APP";
        $data['denda'] = $this->DendaModel->get_denda();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('denda/denda_read', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->DendaModel->insert_denda();
            redirect('denda');
        } else {
            $data['title'] = "Tambah Data Denda | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('denda/denda_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($bulan)
    {
        if (isset($_POST['update'])) {
            $this->DendaModel->update_denda();
            redirect('denda');
        } else {
            $data['title'] = "Perbaharui Data Denda | SIMDAWA-APP";
            $data['denda'] = $this->DendaModel->get_denda_bybulan($bulan);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('denda/denda_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($bulan)
    {
        if (isset($bulan)) {
            $this->DendaModel->delete_denda($bulan);
            redirect('denda');
        }
    }
}
