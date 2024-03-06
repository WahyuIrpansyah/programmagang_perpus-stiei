<?php

class KembaliModel extends CI_Model
{
    private $tabel = "kembali";

    public function get_kembali()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_kembali()
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'id_buku' => $this->input->post('id_buku'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'denda' => $this->input->post('denda')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_kembali_byid_kembali($id_kembali)
    {
        return $this->db->get_where($this->tabel, ['id_kembali' => $id_kembali])->row();
    }

    function update_kembali()
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'id_buku' => $this->input->post('id_buku'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'denda' => $this->input->post('denda')
        ];

        $this->db->where('id_kembali', $this->input->post('id_kembali'));
        $this->db->update($this->tabel, $data);
    }

    function delete_kembali($id_kembali)
    {
        $this->db->where('id_kembali', $id_kembali);
        $this->db->delete($this->tabel);
    }
}
