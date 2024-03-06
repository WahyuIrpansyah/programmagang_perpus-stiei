<?php

class PinjamModel extends CI_Model
{
    private $tabel = "pinjam";

    public function get_pinjam()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_pinjam()
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'id_buku' => $this->input->post('id_buku'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_pinjam_byid_pinjam($id_pinjam)
    {
        return $this->db->get_where($this->tabel, ['id_pinjam' => $id_pinjam])->row();
    }

    function update_pinjam()
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'id_buku' => $this->input->post('id_buku'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali')
        ];

        $this->db->where('id_pinjam', $this->input->post('id_pinjam'));
        $this->db->update($this->tabel, $data);
    }

    function delete_pinjam($id_pinjam)
    {
        $this->db->where('id_pinjam', $id_pinjam);
        $this->db->delete($this->tabel);
    }
}
