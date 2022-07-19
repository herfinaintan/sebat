<?php

class Laporan_model extends CI_model
{
    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM obat GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->result();
    }

    function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM obat WHERE tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal ASC");

        return $query->result();
    }

    function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM obat WHERE YEAR(tanggal) = '$tahun1' AND MONTH(tanggal) BETWEEN '$bulanawal' AND '$bulanakhir' ORDER BY tanggal ASC");

        return $query->result();
    }

    function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * FROM obat WHERE YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC");

        return $query->result();
    }
}
