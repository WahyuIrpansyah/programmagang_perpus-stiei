<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiModel extends CI_Model
{
    private $tabel = "absensi";

    public function get_absensi()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_member_baru_with_absensi()
    {
        return $this->db
            ->select('member_baru.*, absensi.*')
            ->from('member_baru')
            ->join('absensi', 'member_baru.npm = absensi.npm', 'left')
            ->get()
            ->result();
    }

    public function insert_absensi()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_absensi_byid_absensi($id_absensi)
    {
        return $this->db->get_where($this->tabel, ['id_absensi' => $id_absensi])->row();
    }

    public function update_absensi()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jenis_pengunjung' => $this->input->post('jenis_pengunjung')
        ];

        $this->db->where('id_absensi', $this->input->post('id_absensi'));
        $this->db->update($this->tabel, $data);
    }

    public function delete_absensi($id_absensi)
    {
        $this->db->where('id_absensi', $id_absensi);
        $this->db->delete($this->tabel);
    }

    public function add_foreign_key_constraint()
    {
        $sql = "ALTER TABLE absensi
                ADD CONSTRAINT fk_absensi_member_baru
                FOREIGN KEY (npm) REFERENCES member_baru(npm)
                ON DELETE CASCADE
                ON UPDATE CASCADE";

        $this->db->query($sql);
    }
}
