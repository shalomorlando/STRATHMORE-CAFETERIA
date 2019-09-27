<?php
class Item_model extends CI_Model{

    public function insert($data){
        $this->db->insert('fooditems', $data);
    }

    public function show_items(){
        $query = $this->db->get('fooditems');
        $resultset = $query->result();
        return $resultset;
    }


}



?>