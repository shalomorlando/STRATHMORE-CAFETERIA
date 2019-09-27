<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('uname')){
            redirect('landing');
        }

        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('register_model');
        $this->load->helper(array('form'));
    }
    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }

    function validation(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('u_email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pword', 'Password', 'required');

        if($this->form_validation->run()){
            $uid = random_int(1000,100000);
            $encrypted_password = $this->encrypt->encode($this->input->post('pword'));
            
            $data = array(
                'UID' => $uid,
                'UserName' => $this->input->post('username'),
                'Email' => $this->input->post('u_email'),
                'Phone' => $this->input->post('phone'),
                'Password' => $encrypted_password
            );
            $this->register_model->insert($data);
            redirect('login');
            
            
        }
        else{
            $this->index();
        }
    }

}


?>