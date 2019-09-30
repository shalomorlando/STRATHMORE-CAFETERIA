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
    public function edit_item($itemid){
        $obj = $this->db->get_where('fooditems', array('ID' => $itemid));
        $rs = $obj->result();
        return $rs;
    }

    public function item_update($edits, $itemid){
        $this->db->update('fooditems', $edits, array('ID'=> $itemid));
    }

    public function remove_item($itemno){
        $this->db->delete('fooditems', array('ID' => $itemno));
    }

}



?>