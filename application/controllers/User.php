<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('uname')){
			redirect('login');
		}
		$this->load->model('Item_model');
		$this->load->model('Order_model');
	}

	public function index($page = 'landing')
	{ 
		$results = $this->Item_model->show_items();
		$data = array(
			'row' =>  $results
		);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		
	}

	function cart(){
		$res = $this->Order_model->cart();
		$data = array('row' => $res);
		$this->load->view('templates/header');
		$this->load->view('pages/cart', $data);
		$this->load->view('templates/footer');
	}

	function remove_cart_item($ItemNo){
		$this->Order_model->del_cart_item($ItemNo);
	}
	
	function admin_landing(){
		$results = $this->Item_model->show_items();
		$data = array(
			'row' =>  $results
		);
		$this->load->view('admin/admin_header');
		$this->load->view('pages/landing', $data);
		$this->load->view('templates/footer');
	}

	function user_history(){
		$result = $this->Order_model->show_history();
		$data = array(
			'row' =>  $result
		);
		$this->load->view('templates/header');
		$this->load->view('pages/user_history', $data);
		$this->load->view('templates/footer');
	}

	function payment(){
		$this->load->view('templates/header');
		$this->load->view('pages/payment_module');
	}
	
	function admin(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin');
	}

    function adminmenu(){
		$res = $this->Item_model->show_items();
		$data = array(
			'row' =>  $res
		);
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin');
		$this->load->view('admin/adminmenu', $data);
	}

	function adminaddnewitem(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin');
		$this->load->view('admin/adminaddnewitem');
	}

	function admin_edit($itemid){
		$resultset = $this->Item_model->edit_item();
		$data_arr = array(
			'r' => $resultset
		);
		
	}

	
	function logout()
 	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
		$this->session->unset_userdata($row);
		}
		redirect('login');
	}
}