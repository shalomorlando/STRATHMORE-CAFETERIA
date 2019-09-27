<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('Item_model');
        }

        public function index()
        {
                $this->load->view('adminaddnewitem', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('uploadfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('user/adminaddnewitem', $error);
                }
                else
                {
                        $filedata = $this->upload->data();
                        $filename = $filedata['file_name'];
                        $item = $this->input->post('foodItem');
                        $price = $this->input->post('price');
                        $description = $this->input->post('description');
                        $type = $this->input->post('type');
                        $itemid = random_int(1000, 100000000);
                
                        $todb = array(
                            'ID' => $itemid,
                            'Name' => $item,
                            'Price' => $price,
                            'Description' => $description,
                            'Type' => $type,
                            'Quantity' => 10,
                            'PicName' => $filename
                        );


                        $this->Item_model->insert($todb);
                        redirect('user/adminmenu');
                }
        }

        public function view(){
            $res = $this->Item_model->show_items();
            $data = array(
                'row' =>  $res
            );
            $this->load->view('adminmenu', $data);
        }
}
?>