<?php

class BukuModel extends CI_Model
{
    private $tabel = "buku";

    public function get_buku()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_buku()
    {
        $data = [
            'id_buku' => $this->input->post('id_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_buku_byid_buku($id_buku)
    {
        return $this->db->get_where($this->tabel, ['id_buku' => $id_buku])->row();
    }

    function update_buku()
    {
        $data = [
            'id_buku' => $this->input->post('id_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun')
        ];

        $this->db->where('id_buku', $this->input->post('id_buku'));
        $this->db->update($this->tabel, $data);
    }

    function delete_buku($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete($this->tabel);
    }
}
