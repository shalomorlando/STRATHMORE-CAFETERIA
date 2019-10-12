<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->library('form_validation');
        if(!$this->session->userdata('id')){
            redirect('login');
        }
    }

    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/payment_module');
    }

    public function generate($itemid){
        $this->Order_model->create_order($itemid);
    }

    public function checkout(){
        if ($this->input->post('checkout')) { 
            
            $quantities = $this->input->post('quantity');
            $strVal = $this->input->post('data');
            $array_var = unserialize(base64_decode($strVal));

                if(!empty($array_var))
                {
                    //matching quantity requested(quantities) to existing checkout data(array_var) and appending all other necessary attributes
                    $cartId = random_int(1000,10000000);
                    date_default_timezone_set('Africa/Nairobi'); //setting server time zone
			        $date = date("Y-m-d h:i:sa",time()); //getting date and time from server
                    
                    for($i = 0; $i<sizeof($array_var) ;$i++){
                        $array_var[$i]->Quantity = $quantities[$i];
                        $array_var[$i]->CartID = $cartId;
                        $array_var[$i]->Subtotal = ($array_var[$i]->Price)*($array_var[$i]->Quantity);
                        $array_var[$i]->TimeStamp = $date;
                        $array_var[$i]->Status = 'uncompleted';
                    }


                }
                else{
                    echo "empty";
                }
            $paymentData = array(
                'CartID' => $cartId,
                'UserID' => $this->session->userdata('id'),
                'Total' => $this->input->post('Total'),
                'Status' => 'unpaid'
            );

        }
        print_r($array_var);

        echo $array_var[0]->ItemName;

        $this->Order_model->to_checkout($array_var);
        $this->Order_model->to_payment($paymentData);

        redirect('user/payment');

    }
    function paymentInfo(){
        $this->form_validation->set_rules('phoneno', 'Phone number', 'required|min_length[10]|max_length[10]');

        if($this->form_validation->run()){
            $data = array(
                'Phone' => $this->input->post('phoneno'),
            );

            $this->Order_model->insertPhoneInfo($data);
            echo "<h1>An Mpesa Prompt has been sent to your Phone....Check your phone<h1>";
        }
        else{
            $this->index();
        }
       

    }


    
}
?>