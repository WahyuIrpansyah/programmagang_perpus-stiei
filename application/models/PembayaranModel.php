<?php

class PembayaranModel extends CI_Model
{
    private $tabel = "pembayaran";

    public function get_pembayaran()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_pembayaran()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'semester' => $this->input->post('semester'),
            'status' => $this->input->post('status'),
            'tujuan' => $this->input->post('tujuan'),
            'total_pembayaran' => $this->input->post('total_pembayaran')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_pembayaran_bynpm($npm)
    {
        return $this->db->get_where($this->tabel, ['npm' => $npm])->row();
    }

    function update_pembayaran()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'semester' => $this->input->post('semester'),
            'status' => $this->input->post('status'),
            'tujuan' => $this->input->post('tujuan'),
            'total_pembayaran' => $this->input->post('total_pembayaran')
        ];

        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update($this->tabel, $data);
    }

    function delete_pembayaran($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete($this->tabel);
    }
}
