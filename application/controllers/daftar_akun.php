<?php
defined('BASEPATH') or exit('No direct script access allowed');
class daftar_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_AkunModel');
    }
    public function index()
    {
    }
    public function daftar()
    {
        if (isset($_POST['btn_daftar'])) {
            $cek_npm = $this->Daftar_AkunModel->cek_npm();
            if ($cek_npm == true) {
                $this->session->set_flashdata('pesan', 'No Pendaftaran sudah terdaftar di sistem!');
                redirect('daftar_akun/daftar_akun');
            }
        } else {
            $data['title'] = "Pendaftaran Pengguna | SIMDAWA-APP";
            $this->load->view('daftar_akun/daftar_akun', $data);
        }
    }
    public function verifikasi($keterangan, $id)
    {
        if (isset($id)) {
            $status = ($keterangan == "acc") ? "Sudah Diverifikasi" : "Akun Dibatalkan";
            $this->Daftar_AkunModel->verifikasi_akun($status, $id);
            redirect('Daftar_akun');
        }
    }
}
