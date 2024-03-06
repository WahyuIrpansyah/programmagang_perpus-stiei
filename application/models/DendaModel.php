<?php

class DendaModel extends CI_Model
{
    private $tabel = "denda";

    public function get_denda()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_denda()
    {
        $data = [
            'bulan' => $this->input->post('bulan'),
            'minggu' => $this->input->post('minggu'),
            'jumlah_denda' => $this->input->post('jumlah_denda'),
            'total_denda' => $this->input->post('total_denda')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_denda_byid_denda($id_denda)
    {
        return $this->db->get_where($this->tabel, ['id_denda' => $id_denda])->row();
    }

    function update_denda()
    {
        $data = [
            'bulan' => $this->input->post('bulan'),
            'minggu' => $this->input->post('minggu'),
            'jumlah_denda' => $this->input->post('jumlah_denda'),
            'total_denda' => $this->input->post('total_denda')
        ];

        $this->db->where('id_denda', $this->input->post('id_denda'));
        $this->db->update($this->tabel, $data);
    }

    function delete_denda($id_denda)
    {
        $this->db->where('id_denda', $id_denda);
        $this->db->delete($this->tabel);
    }
}
