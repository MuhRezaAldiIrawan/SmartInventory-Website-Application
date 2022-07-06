<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run()==false) {
            $this->load->view('header');
            $this->load->view('body');
            $this->load->view('footer');
        } else {
            // Validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email =  $this->input->post('email');
        $password =  $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
        if ($user) { //ada user
            //if user active
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Your email has not been activated</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email ga terdaftar</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}