<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun extends MY_Controller {
	public function index(){

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		
		$this->load->view('header');
		$this->load->view('body', $data);
		$this->load->view('footer');
	}


}