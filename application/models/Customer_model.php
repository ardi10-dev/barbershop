<?php defined('BASEPATH') or exit('No direct script access allowed');
class Customer_model extends CI_Model
{
	public function getDataCustomer(){
        $query = "SELECT * From user";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataCustomer($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function updDataCustomer($id, $data){
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    public function edit ($id){
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->result_array();
   	}
}
