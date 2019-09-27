<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('uname')){
			redirect('user');
		}
	}

	public function index()
	{
		$this->load->view('pages/welcome');
		$this->load->view('templates/footer');
	}
	public function about(){
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
	public function index1()
	{
		$this->load->view('payment_module');
	}
	
}
