<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Payment_model');
        if(!$this->session->userdata('id')){
            redirect('login');
        }
        
    }

    public function index(){
        $this->Payment_model->push();
    }

}
?>