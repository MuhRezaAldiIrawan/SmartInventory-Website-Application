<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masukkeluar extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('body');
		$this->load->view('footer');
	}
}