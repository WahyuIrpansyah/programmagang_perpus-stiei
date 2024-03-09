<?php

class KembaliModel extends CI_Model
{
    private $tabel = "kembali";

    public function get_kembali()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_member_baru_with_kembali()
    {
        return $this->db
            ->select('member_baru.*, kembali.*')
            ->from('member_baru')
            ->join('kembali', 'member_baru.npm = kembali.npm', 'left')
            ->get()
            ->result();
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

    public function add_foreign_key_constraint()
    {
        $sql = "ALTER TABLE kembali
                ADD CONSTRAINT fk_kembali_member_baru
                FOREIGN KEY (npm) REFERENCES member_baru(npm)
                ON DELETE CASCADE
                ON UPDATE CASCADE";

        $this->db->query($sql);
    }
}
