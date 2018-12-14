<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Menu');
	}
	public function form_input(){
		$this->load->view('Form_daftar');
	}
	public function form_login(){
		$this->load->view('login');
	}
	
	
}
