<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function generate($itemid){
        $this->Order_model->create_order($itemid);
    }
    
}
?>