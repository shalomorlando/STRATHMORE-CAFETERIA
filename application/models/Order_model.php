<?php
class Order_model extends CI_Model{

    function create_order($itemid){
        $this->db->where('ID', $itemid);
        $query = $this->db->get('fooditems');
        foreach($query->result() as $row){
                $item_name =  $row->Name;
                $item_price = $row->Price;
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
            'Price' => $item_price,
            'Quantity' => 1,
            'Status' => "uncompleted"
        );

        $this->db->insert('orders',$data);

        redirect('user/cart');
    }

    function show_history(){
        $userid = $this->session->userdata('id');
        $this->db->order_by("CartID", "asc");
        $obj = $this->db->get_where('orders', array('UserID' => $userid, 'Status' => 'completed'));
        $rs = $obj->result();
        return $rs;
    }

    function show_transactions(){
        $obj = $this->db->get('payments');
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

    function to_checkout($data){
        for($i=0; $i<sizeof($data);$i++){
            $this->db->update('orders', $data[$i], array('OrderID'=> $data[$i]->OrderID));
        }

    }

    function to_payment($paymentInfo){
        $this->db->insert('payments', $paymentInfo);
    }

    function insertPhoneInfo($data){
        $this->db->update('payments', $data, array('UserID' => $this->session->userdata('id')));
        //updateing orders status to complete(clearing cart after payment)
        $this->db->update('orders', array('Status'=> 'completed'), array('UserID' => $this->session->userdata('id')));
    }

}

?>