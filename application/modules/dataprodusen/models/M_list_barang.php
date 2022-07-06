<?php
class M_list_barang extends CI_Model {
	
	public function tampil() {
        return $this->db->get('produsen');
	}
	
	public function get_where($id){
		return $this->db->get_where('barang',array('id'=>$id ));
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
		return $this->db->update('barang', $data);
	}

	  public function updateData()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('stok', 'stok', 'required|trim');
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
        $data = [
            "id" => $this->input->post('id', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "nama" => $this->input->post('name', true),
            "harga" => $this->input->post('email', true),
            "stok" => $this->input->post('email', true),
            "kategori" => $this->input->post('email', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }

	

}