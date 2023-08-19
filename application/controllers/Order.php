<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }  

    public function show_order($order_id)
    {
        $data=array();
        $data['order']=$this->order_model->select_order_by_id($order_id);
        $data['order_detalis']=$this->order_model->all_order_details($order_id);
        $data['admin_main_content']=$this->load->view('backend/pages/show_order',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function order_list()
    {
        $data=array();
        
        $data['all_order_info']=$this->order_model->all_order_info();
        
        $data['admin_main_content']=$this->load->view('backend/pages/order_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }

     public function delete_order($order_id)
    {
        $this->db->delete('orders',array('id'=>$order_id));
        $sdata=array();
        $sdata['message']="Delete order information successfully";
        $this->session->set_userdata($sdata);
        redirect('order');
    }
    public function edit_order($order_id)
    {
        $data=array();
        $data['order']=$this->order_model->select_order_by_id($order_id);
        $data['order_detalis']=$this->order_model->all_order_details($order_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_order',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function update_order()
    {
        $this->order_model->update_order_info();
        $sdata=array();
        $sdata['message']="Update order information successfully";
        $this->session->set_userdata($sdata);
        
         redirect('order');
    }  
    
      // Sub order information
   
    
    

}
