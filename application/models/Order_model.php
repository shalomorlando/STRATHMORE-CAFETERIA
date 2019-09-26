<?php
class Order_model extends CI_Model{

    function create_order($itemid){
        $this->db->where('ID', $itemid);
        $query = $this->db->get('fooditems');
        foreach($query->result() as $row){
                $item_name =  $row->Name;
                $iteme_price = $row->Price;
                $item_des =  $row->Description;
            
        }

        $orderid = random_int(1000,10000000);

        $userid = $this->session->userdata('id');

        $data = array(
            'OrderID' => $orderid,
            'UserID' => $userid,
            'ItemID' => $itemid,
            'ItemName' => $item_name,
            'ItemDes' => $item_des,
            'Price' => $iteme_price,
            'Quantity' => 1,
            'Status' => "uncompleted"
        );

        $this->db->insert('orders',$data);

        redirect('user/cart');
    }

    function show_history(){
        $userid = $this->session->userdata('id');
        $obj = $this->db->get_where('orders', array('UserID' => $userid, 'Status' => 'completed'));
        $rs = $obj->result();
        return $rs;
    }

    function cart(){
        $userid = $this->session->userdata('id');
        $q =$this->db->get_where('orders', array('UserID' => $userid, 'Status' => 'uncompleted'));
        $res = $q->result();
        return $res;
    }
    function del_cart_item($itemNo){
        $this->db->delete('orders', array('ItemID' => $itemNo, 'Status' => 'uncompleted'));
        redirect('user/cart');
    }
    function checkout($id_arr){
        echo '<pre>'; print_r($id_arr); echo '</pre>';
    }

}

?>