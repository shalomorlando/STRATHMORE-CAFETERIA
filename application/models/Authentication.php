<?php
    class Authentication extends CI_Model{
        public function __construct(){
            $this->load->library('encrypt');
        }

        function can_login($email, $password){
            $query = $this->db->get_where('users', array('Email' => $email));

            if($query->num_rows() > 0){
                foreach($query->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    if($password == $store_pword){  
                        $this->session->set_userdata('id', $row->UID);
                        $this->session->set_userdata('uname', $row->UserName); 
                        $this->session->set_userdata('type', $row->UserType);
                        return true;
                    }
                    else{
                        return false; 
                    }
                }
                
            }
            else{
                return false;
            }
        }

    }


?>