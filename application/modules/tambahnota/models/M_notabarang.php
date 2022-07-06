<?php
class M_barang extends CI_Model{
	
	 public function getAllUser() {

        return $this->db->get('notabarang')->result_array();

    }
	
	
	
	
}