<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporandenda extends CI_Controller
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
        $data['title'] = "Laporan Denda | STIE Indonesia Banjarmasin";
        $data['denda'] = $this->DendaModel->get_denda();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('denda/denda_read', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id_denda)
    {
        if (isset($_POST['update'])) {
            $this->DendaModel->update_denda();
            redirect('laporandenda');
        } else {
            $data['title'] = "Perbaharui Data Denda | STIE Indonesia Banjarmasin";
            $data['denda'] = $this->DendaModel->get_denda_byid_denda($id_denda);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('denda/denda_update');
            $this->load->view('template/footer');
        }
    }

    public function hapus($id_denda)
    {
        if (isset($id_denda)) {
            $this->DendaModel->delete_denda($id_denda);
            redirect('laporandenda');
        }
    }
}
