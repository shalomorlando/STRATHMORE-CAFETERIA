<?php
    class Authentication extends CI_Model{
        public function __construct(){
            $this->load->library('encrypt');
        }

        function can_login($email, $password){
            $this->db->where('Email', $email);
            $query = $this->db->get('users');

            if($query->num_rows() > 0){
                foreach($query->result() as $row){
                    $store_pword = $this->encrypt->decode($row->Password);
                    if($password == $password){  //*tricks
                        $this->session->set_userdata('id', $row->UID);
                        $this->session->set_userdata('uname', $row->UserName); 
                        $this->session->set_userdata('type', strval($row->UserType));
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