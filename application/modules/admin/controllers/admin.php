<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin  extends MY_Controller {
	 public function __construct() {
        parent::__construct();
        
    }

	public function index(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['title'] = 'Dashboard';
		$this->load->view('dashboard', $data);
	}
	public function profile(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['title'] = 'My Profile';
		$this->load->view('profile', $data);
	}

    public function edit(){

        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		if($this->form_validation->run() == false){

			$this->load->view('edit', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			
			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			//$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun Telah di Update</div>');
			redirect('admin/profile');

			
		}
    }
			
}