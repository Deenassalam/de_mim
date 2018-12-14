<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan_model extends CI_Model {

	
	public function tampil_data1($table_name){
    	$hasil=$this->db->get('relawan');
    	return $hasil->result_array();
  	}

	public function tambahData1($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;

	}
	public function editData1($where,$table){    
    	return $this->db->get_where($table,$where);
  	}

	public function hapusData1($table_name, $id){
    	$this->db->where('id', $id);
    	$hapus = $this->db->delete($table_name);
    	return $hapus;
	}

	public function update_data1($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);  
  	}
}
