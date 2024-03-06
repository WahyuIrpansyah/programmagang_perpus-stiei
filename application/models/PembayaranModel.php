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

    public function get_member_baru_with_pembayaran()
    {
        return $this->db
            ->select('member_baru.*, pembayaran.*')
            ->from('member_baru')
            ->join('pembayaran', 'member_baru.npm = pembayaran.npm', 'left')
            ->get()
            ->result();
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
    public function add_foreign_key_constraint()
    {
        $sql = "ALTER TABLE pembayaran
                ADD CONSTRAINT fk_pembayaran_member_baru
                FOREIGN KEY (npm) REFERENCES member_baru(npm)
                ON DELETE CASCADE
                ON UPDATE CASCADE";

        $this->db->query($sql);
    }
}
