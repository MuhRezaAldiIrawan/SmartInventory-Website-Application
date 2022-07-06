<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listadmin extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }
	//Menu
	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produsen']=$this->M_list_barang->tampilprodusen()->result();
		$this->load->view('dataprodusen', $data);
	
	}

	public function nota(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['nota']=$this->M_list_barang->tampilnota()->result();
		$this->load->view('notabarang', $data);
	
	}
	public function databarang(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['databarang']=$this->M_list_barang->tampildata()->result();
		$this->load->view('databarang', $data);
	
	}
	public function barangmasuk(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barangmasuk']=$this->M_list_barang->tampilmasuk()->result();
		$this->load->view('barangmasuk', $data);
	
	}
	public function barangkeluar(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barangkeluar']=$this->M_list_barang->tampilkeluar()->result();
		$this->load->view('barangkeluar', $data);
	
	}

	//End

     //Tambah barang
    public function tambah_aksi(){
		$nama	= $this->input->post('nama');
		$harga	= $this->input->post('harga');
		$stok	= $this->input->post('stok');
		$kategori	= $this->input->post('kategori');
		$gambar	= $_FILES['gambar']['name'];
		if($gambar=''){}else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gift';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar tidak berhasil di Upload";
			}else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'kategori' => $kategori,
			'gambar' => $gambar


		);
		$this->M_list_barang->tambah_barang($data, 'barang');
		redirect('listadmin');
	}
    //End

	//Update
		public function edit($id){
			
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
		$where = array('id' => $id);
		$data['produsen'] = $this->M_list_barang->edit_barang($where, 'produsen')->result();
		$this->load->view('edit', $data); 
	}
	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$logo = $this->input->post('logo');
		$status = $this->input->post('status');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'logo' => $logo,
			'status' => $status


		);
		$where = array(
			'id' => $id
		);

		$this->M_list_barang->update_data($where,$data,'produsen');
		redirect('listadmin/dataprodusen');
	}
	//End

	//Nota Barang//
	public function updatenota(){
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$produsen = $this->input->post('produsen');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
		$total = $this->input->post('total');
		$gambar = $this->input->post('gambar');

		$data = array(
			'tanggal' => $tanggal,
			'produsen' => $produsen,
			'nama' => $nama,
			'jumlah' => $jumlah,
			'total' => $total,
			'gambar' => $gambar,


		);
		$where = array(
			'id' => $id
		);

		$this->M_list_barang->update_data($where,$data,'nota');
		redirect('listadmin/nota');
	}
	public function editnota($id){
			
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
		$where = array('id' => $id);
		$data['nota'] = $this->M_list_barang->edit_barang($where, 'nota')->result();
		$this->load->view('editnota', $data); 
	}

		//Delete
		public function hapusnota($id){
			$where = array('id' => $id);
			$this->M_list_barang->hapus_data($where, 'nota');
			redirect('listadmin/notabarang');
		}
		//End
	//End
	//END Nota Barang

	//Data Barang
	public function editbarang($id){
			
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
		$where = array('id' => $id);
		$data['databarang'] = $this->M_list_barang->edit_barang($where, 'databarang')->result();
		$this->load->view('editbarang', $data); 
	}
	public function updatebarang(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$produsen = $this->input->post('produsen');
		$detail = $this->input->post('detail');

		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'produsen' => $produsen,
			'detail' => $detail,
	

		);
		$where = array(
			'id' => $id
		);

		$this->M_list_barang->update_data($where,$data,'databarang');
		redirect('listadmin/databarang');
	}
	public function hapusbarang($id){
		$where = array('id' => $id);
		$this->M_list_barang->hapus_data($where, 'databarang');
		redirect('listadmin/databarang');
	}

	//Barang Masuk

	public function updatemasuk(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
		$gambar = $this->input->post('gambar');
;

		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'jumlah' => $jumlah,
			'gambar' => $gambar,


		);
		$where = array(
			'id' => $id
		);

		$this->M_list_barang->update_data($where,$data,'barangmasuk');
		redirect('listadmin/barangmasuk');
	}
	public function editmasuk($id){
			
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
		$where = array('id' => $id);
		$data['barangmasuk'] = $this->M_list_barang->edit_barang($where, 'barangmasuk')->result();
		$this->load->view('editmasuk', $data); 
	}

		//Delete
		public function hapusmasuk($id){
			$where = array('id' => $id);
			$this->M_list_barang->hapus_data($where, 'barangmasuk');
			redirect('listadmin/barangmasuk');
		}

		//Barang Keluar
		public function updatekeluar(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$gambar = $this->input->post('gambar');
	;
	
			$data = array(
				'nama' => $nama,
				'harga' => $harga,
				'jumlah' => $jumlah,
				'gambar' => $gambar,
	
	
			);
			$where = array(
				'id' => $id
			);
	
			$this->M_list_barang->update_data($where,$data,'barangkeluar');
			redirect('listadmin/barangkeluar');
		}
		public function editkeluar($id){
				
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
			$where = array('id' => $id);
			$data['barangkeluar'] = $this->M_list_barang->edit_barang($where, 'barangkeluar')->result();
			$this->load->view('editkeluar', $data); 
		}
	
			//Delete
			public function hapuskeluar($id){
				$where = array('id' => $id);
				$this->M_list_barang->hapus_data($where, 'barangkeluar');
				redirect('listadmin/barangkeluar');
			}

	//End Data Barang


	

	//Delete
		public function hapus($id){
		$where = array('id' => $id);
		$this->M_list_barang->hapus_data($where, 'produsen');
		redirect('listadmin/dataprodusen');
	}
	//End


}