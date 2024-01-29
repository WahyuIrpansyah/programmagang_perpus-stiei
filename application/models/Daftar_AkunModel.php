<?php
class Daftar_AkunModel extends CI_Model
{
    private $tabel = 'daftar_akun';

    public function cek_npm()
    {
        //mengecek no pendftaran di tabel pendaftaran pengguna, apakah no pendaftarannya sudah ada
        $cek = $this->db->get_where($this->tabel, ['npm' => $this->input->post('npm')]);
        if ($cek->num_rows() > 0) { //jika no_pendaftaran sudah ada kembalikan nilai True
            return True;
        } else { //jika no_pendaftaran belum ada kembalikan nilai False
            return False;
        }
    }
    public function insert_daftar_akun($file)
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'keterangan' => 'Belum Diverifikasi'
        ];
        $this->db->insert($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $id = $this->db->insert_id();
            $this->insert_akun($id);
        } else {
            $this->session->set_flashdata("pesan", "Data pendaftaran gagal ditambahkan!");
            $this->session->set_flashdata("status", False);
        }
    }
    public function insert_akun($id)
    {
        $data = [
            'username' => $this->input->post('npm'), //no pendaftaran diambil untuk dijadikan username
            'password' => md5($this->input->post('password')), //membuat password agar diubah bentuk md5
            'peran' => 'user',
            'pendaftaran_id' => $id
        ];
        $this->db->insert('akun', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("pesan", "Data pendaftaran berhasil ditambahkan! Untuk sementara akun kamu
masih belum diverifikasi admin. Tunggu 1 x 24 Jam");
            $this->session->set_flashdata("status", True);
        } else {
            $this->session->set_flashdata("pesan", "Data pendaftaran gagal ditambahkan!");
            $this->session->set_flashdata("status", False);
        }
    }
}
