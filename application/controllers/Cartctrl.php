<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cartctrl extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
    }  
  // News information

    function index(){
        $data = array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['cartItems'] = $this->cart->contents();
        $data['main_content']=$this->load->view('frontend/pages/cart',$data,true);
        $this->load->view('frontend/master', $data);
    }
    
    function updateItemQty($rowid,$qty,$op){
        $update = 0;
        
        // Get cart item info
        
        if($op=="+")
            $qty = $qty+1;
        else
            $qty = $qty-1;
            
        // Update item in the cart
        if(!empty($rowid) && !empty($qty)){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function removeItem($rowid){
        $remove = $this->cart->remove($rowid);
        redirect($_SERVER['HTTP_REFERER']);
    }
    function addcart(){
        $data = array(
            'id'    => $this->input->post('id',true),
            'qty'    => $this->input->post('qty',true),
            'price'    => $this->input->post('price',true),
            'name'    => $this->input->post('name',true),
            'image' => $this->input->post('image',true)
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect($_SERVER['HTTP_REFERER']);
    }
    

}