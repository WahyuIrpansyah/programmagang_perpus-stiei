<?php

class AbsensiModel extends CI_Model
{
    private $tabel = "absensi";

    public function get_absensi()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_absensi()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_absensi_bynpm($npm)
    {
        return $this->db->get_where($this->tabel, ['npm' => $npm])->row();
    }

    function update_absensi()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung')
        ];

        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update($this->tabel, $data);
    }

    function delete_absensi($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete($this->tabel);
    }
}
