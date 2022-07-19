<?php

class Obat_model extends CI_Model
{
    public function getAllObat()
    {
        return $this->db->get('obat')->result_array();
    }

    public function getObat($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kode_obat', $keyword);
            $this->db->or_like('nama', $keyword);
        }
        return $this->db->get('obat', $limit, $start)->result_array();
    }

    public function countAllObat()
    {
        return $this->db->get('obat')->num_rows();
    }

    public function tambahDataObat()
    {
        $data = [
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama" => $this->input->post('nama', true),
            "dosis" => $this->input->post('dosis', true),
            "jenis" => $this->input->post('jenis', true),
            "stok" => $this->input->post('stok', true)
        ];

        $this->db->insert('obat', $data);
    }

    public function hapusDataObat($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('obat');
    }

    public function getObatById($id)
    {
        return $this->db->get_where('obat', ['id' => $id])->row_array();
    }

    public function ubahDataObat()
    {
        $data = [
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama" => $this->input->post('nama', true),
            "dosis" => $this->input->post('dosis', true),
            "jenis" => $this->input->post('jenis', true),
            "stok" => $this->input->post('stok', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('obat', $data);
    }
}
