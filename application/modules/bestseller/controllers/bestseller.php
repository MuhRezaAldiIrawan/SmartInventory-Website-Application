<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bestseller extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }

	public function index(){
	
		$data['barangkeluar']=$this->M_list_barang->tampil()->result();
		$this->load->view('header');
		$this->load->view('body', $data);
		$this->load->view('footer');
	
	}

     //Tambah produsen
    public function tambah_aksi(){
		$nama	= $this->input->post('nama');
		$harga	= $this->input->post('harga');
		$jumlah	= $this->input->post('jumlah');
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
			'jumlah' => $jumlah,
			'gambar' => $gambar,
			
		);
		$this->M_list_barang->tambah_barang($data, 'barangkeluar');
		redirect('barangkeluar');
	}
    //End
}