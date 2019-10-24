<?php
class Payment_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->model('AccessToken_model');
        if(!$this->session->userdata('id')){
            redirect('login');
        }
        
    }

    function push(){
        $userid = $this->session->userdata('id');
        $obj = $this->db->get_where('payments', array('UserID' => $userid, 'Status' => "unpaid"));
        

        foreach($obj->result() as $row){
            $phone = $row->Phone;
            $amount = $row->Total;
        }

        $phoneToString = strval($phone);
        $areaCode = "254";

        $finalPhone = $areaCode.$phoneToString;


        echo $finalPhone;   
        $Access = $this->AccessToken_model->getAccess();
        
        
        echo $Access;

    }

}
?>