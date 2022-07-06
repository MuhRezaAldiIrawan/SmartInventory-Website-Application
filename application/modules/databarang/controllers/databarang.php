<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class databarang extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }

	public function index(){
	
		$data['databarang']=$this->M_list_barang->tampil()->result();
		$this->load->view('header');
		$this->load->view('body', $data);
		$this->load->view('footer');
	
	}

     //Tambah produsen
    public function tambah_aksi(){
		$nama	= $this->input->post('nama');
		$harga	= $this->input->post('harga');
		$stok	= $this->input->post('stok');
		$produsen	= $this->input->post('produsen');
		$detail	= $this->input->post('detail');
	
		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'produsen' => $produsen,
			'detail' => $detail,
			


		);
		$this->M_list_barang->tambah_barang($data, 'databarang');
		redirect('databarang');
	}
    //End
}