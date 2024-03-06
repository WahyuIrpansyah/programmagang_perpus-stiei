<?php

class PengunjungModel extends CI_Model
{
    private $tabel = "pengunjung";

    public function get_pengunjung()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_pengunjung()
    {
        $data = [
            'bulan' => $this->input->post('bulan'),
            'minggu' => $this->input->post('minggu'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung'),
            'jumlah_pengunjung' => $this->input->post('jumlah_pengunjung')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_pengunjung_byid_pengunjung($id_pengunjung)
    {
        return $this->db->get_where($this->tabel, ['id_pengunjung' => $id_pengunjung])->row();
    }

    function update_pengunjung()
    {
        $data = [
            'bulan' => $this->input->post('bulan'),
            'minggu' => $this->input->post('minggu'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung'),
            'jumlah_pengunjung' => $this->input->post('jumlah_pengunjung')
        ];

        $this->db->where('id_pengunjung', $this->input->post('id_pengunjung'));
        $this->db->update($this->tabel, $data);
    }

    function delete_pengunjung($id_pengunjung)
    {
        $this->db->where('id_pengunjung', $id_pengunjung);
        $this->db->delete($this->tabel);
    }
}
