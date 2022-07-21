<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    // MULAI KONTEN CARD
    public function dataCustomer()
    {
        $res = $this->db->count_all_results('user');
        return $res;
    }

    public function dataTransaksi()
    {
        $res = $this->db->count_all_results('transaksi');
        return $res;
    }

    public function dataPegawai()
    {
        $res = $this->db->count_all_results('pegawai');
        return $res;
    }

    public function dataLayanan()
    {
        $res = $this->db->count_all_results('layanan');
        return $res;
    }
}
