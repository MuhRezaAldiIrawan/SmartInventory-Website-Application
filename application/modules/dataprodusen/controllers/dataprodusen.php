<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataprodusen extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }

	public function index(){
	
		$data['produsen']=$this->M_list_barang->tampil()->result();
		$this->load->view('header');
		$this->load->view('body', $data);
		$this->load->view('footer');
	
	}

     //Tambah produsen
    public function tambah_aksi(){
		$nama	= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$email	= $this->input->post('email');
		$logo	= $_FILES['logo']['name'];
		if($logo=''){}else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gift';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('logo')){
				echo "Gambar tidak berhasil di Upload";
			}else {
				$logo = $this->upload->data('file_name');
			}
		}
		$status	= $this->input->post('status');
	
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'logo' => $logo,
			'status' => $status,
			


		);
		$this->M_list_barang->tambah_barang($data, 'produsen');
		redirect('dataprodusen');
	}
    //End
}