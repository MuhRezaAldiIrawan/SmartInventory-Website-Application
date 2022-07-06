<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regis extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'password', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false)
		{
			$this->load->view('header_regis');
			$this->load->view('body_regis');
			$this->load->view('footer_regis');
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()

			];

			$this->db->insert('user', $data);
			redirect('login/login');
		}
	}
	
}