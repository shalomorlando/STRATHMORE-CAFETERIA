<?php
    class Login extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if($this->session->userdata('uname')){
                redirect('landing');
            }
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->model('authentication');
            $this->load->library('session');
        }

        public function index(){

            $this->load->view('templates/header');
		    $this->load->view('pages/login');
		    $this->load->view('templates/footer');


        }
     
        function login_validation(){
            
            $this->form_validation->set_rules('u_email', 'Email', 'required');
            $this->form_validation->set_rules('pword', 'Password', 'required');
            if($this->form_validation->run()){
                $email = $this->input->post('u_email');
                $password = $this->input->post('pword');
                //model function
                
                if($this->authentication->can_login($email, $password)){
                    $session_data = array(
                        'email' => $email
                    );
                    $this->session->set_userdata($session_data);
                    if($email == 'admin@strath.edu'){ //tricks
                        redirect(base_url().'user/admin');
                    }
                    else{
                        redirect('user');
                    }
                }
                else{
                    $this->session->set_flashdata('error', 'Invalid credentials, please try again...');
                    redirect(base_url().'login');
                }

            }
            else{
                $this->index();
            }
        }
    }













?>