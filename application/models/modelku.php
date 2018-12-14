<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelku extends CI_Model {

	
	public function getUser($table_name){
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function hapusData($table_name, $id){
    	$this->db->where('id_k', $id);
    	$hapus = $this->db->delete($table_name);
    	return $hapus;
  	}

	public function editData($where,$table){    
    	return $this->db->get_where($table,$where);
  	}
  	
	public function update_data($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);  
  	}
}
