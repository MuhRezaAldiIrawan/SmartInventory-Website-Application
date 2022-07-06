<?php
class M_list_barang extends CI_Model {
	
	public function tampilprodusen() {
        return $this->db->get('produsen');
	}
	public function tampilnota() {
        return $this->db->get('nota');
	}
	public function tampildata() {
        return $this->db->get('databarang');
	}
	public function tampilmasuk() {
        return $this->db->get('barangmasuk');
	}
	public function tampilkeluar() {
        return $this->db->get('barangkeluar');
	}
	public function pesanan() {
        return $this->db->get('pesanan');
	}
	
	public function get_where($id){
		return $this->db->get_where('produsen',array('id'=>$id ));
	}
	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


	public function edit($id, $data){
		$this->db->where('id',$id);
		return $this->db->update('produsen', $data);
	}

	 
	

}