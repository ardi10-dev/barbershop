<?php defined('BASEPATH') or exit('No direct script access allowed');
class Layanan_model extends CI_Model
{
	public function getDataLayanan(){
        $query = "SELECT * From layanan";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataLayanan($id){
        $this->db->where('id_layanan', $id);
        $this->db->delete('layanan');
    }

    public function updDataLayanan($id, $data){
        $this->db->where('id_layanan', $id);
        $this->db->update('layanan', $data);
    }

	public function insert($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function edit ($id){
        $query = $this->db->get_where('layanan', array('id_layanan' => $id));
        return $query->result_array();
   	}
}
