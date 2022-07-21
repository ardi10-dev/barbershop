<?php defined('BASEPATH') or exit('No direct script access allowed');
class Pegawai_model extends CI_Model
{
	public function getDataPegawai(){
        $query = "SELECT * From pegawai";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataPegawai($id){
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }

    public function updDataPegawai($id, $data){
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
    }

    public function edit ($id){
        $query = $this->db->get_where('pegawai', array('id_pegawai' => $id));
        return $query->result_array();
   	}
}
