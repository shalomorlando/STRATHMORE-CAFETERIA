<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('type') != 1){
                redirect('login');
            }
            $this->load->model('Item_model');
            $this->load->model('Order_model');
        }

        function index(){
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
        function admin_landing(){
            $results = $this->Item_model->show_items();
            $data = array(
                'row' =>  $results
            );
            $this->load->view('admin/admin_header');
            $this->load->view('pages/landing', $data);
            $this->load->view('templates/footer');
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
        function transaction_reports(){
            $result = $this->Order_model->show_transactions();
            $data = array(
                'row' =>  $result
            );
		
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin');
            $this->load->view('admin/transaction_report', $data);
        }




}
?>