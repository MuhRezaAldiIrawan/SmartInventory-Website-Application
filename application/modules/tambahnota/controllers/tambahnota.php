<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahnota extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
		$this->form_validation->set_rules('order', 'Order', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'harga', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
		$this->form_validation->set_rules('total', 'total', 'required|trim');

		if($this->form_validation->run() == false)
		{
			$this->load->view('header');
			$this->load->view('body');
			$this->load->view('footer');
		}else{
			$data = [
				'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
				'order_id' => htmlspecialchars($this->input->post('order', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true)),
				'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
				'total' => htmlspecialchars($this->input->post('total', true)),
				

			];

			$this->db->insert('notabarang', $data);
			redirect('notabarang/notabarang');
		}
	}
	
}