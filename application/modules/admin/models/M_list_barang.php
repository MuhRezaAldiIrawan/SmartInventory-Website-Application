<?php
class M_list_barang extends CI_Model {
	public function tampil() {
        return $this->db->get('barang');
	}
	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}
	public function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function get_where($id){
		return $this->db->get_where('barang',array('id'=>$id ));
	}
	
	public function hapus_list_barang($id){
		$this->db->where('id',$id);
		return $this->db->delete('barang');
	}

}