<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_BaruModel extends CI_Model
{
    private $tabel = "member_baru";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function get_member_baru()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function insert_member_baru()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempattanggal_lahir' => $this->input->post('tempattanggal_lahir'),
            'npm' => $this->input->post('npm'),
            'semester' => $this->input->post('semester'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'foto' => $this->input->post('foto')
        ];
        $this->db->insert($this->tabel, $data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Member berhasil ditambahkan!");
            $this->session->set_flashdata('status', true);
            return true;
        } else {
            $this->session->set_flashdata('pesan', "Data Member gagal ditambahkan!");
            $this->session->set_flashdata('status', false);
            return false;
        }
    }

    public function get_member_baru_bynpm($npm)
    {
        return $this->db->get_where($this->tabel, ['npm' => $npm])->row();
    }

    public function update_member_baru()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempattanggal_lahir' => $this->input->post('tempattanggal_lahir'),
            'npm' => $this->input->post('npm'),
            'semester' => $this->input->post('semester'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'foto' => $this->input->post('foto')
        ];
        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Member berhasil di update!");
            $this->session->set_flashdata('status', true);
            return true;
        } else {
            $this->session->set_flashdata('pesan', "Data Member gagal di update!");
            $this->session->set_flashdata('status', false);
            return false;
        }
    }

    public function delete_member_baru($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Member berhasil dihapus!");
            $this->session->set_flashdata('status', true);
            return true;
        } else {
            $this->session->set_flashdata('pesan', "Data Member gagal dihapus!");
            $this->session->set_flashdata('status', false);
            return false;
        }
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
