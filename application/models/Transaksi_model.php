<?php defined('BASEPATH') or exit('No direct script access allowed');
class Transaksi_model extends CI_Model
{
	public function getDataTransaksi(){
		$query = "SELECT transaksi.*, user.nama
                    From transaksi JOIN user
                    ON transaksi.user_id = user.id_user";
        //$query = "SELECT * From transaksi";
        
        return $this->db->query($query)->result_array();
    }
    public function getDataTransaksiUser(){

		$query = "SELECT transaksi.*, user.nama
                    From transaksi JOIN user
                    ON transaksi.user_id = user.id_user where user.email = '" . $this->session->userdata('email') . "'";
        //$query = "SELECT * From transaksi";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataTransaksi($id){
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }

    public function updDataTransaksi($id, $data){
        $this->db->where('id', $id);
        $this->db->update('transaksi', $data);
    }

	public function edit ($id){
        $query = $this->db->get_where('transaksi', array('id' => $id));
        return $query->result_array();
   	}
}
