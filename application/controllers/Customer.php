<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }  

    public function customer_list()
    {
        $data=array();
        
        $data['all_customer_info']=$this->customer_model->all_customer_info();
        
        $data['admin_main_content']=$this->load->view('backend/pages/customer_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }

     public function delete_customer($customer_id,$s)
    {
        $this->db->where('id',$customer_id);
        $this->db->update('customer',array('c_status'=>$s));
        $sdata=array();
        $sdata['message']="Change customer status successfully";
        $this->session->set_userdata($sdata);
        redirect('customer');
    }
    public function edit_customer($customer_id)
    {
        $data=array();
        $data['customer']=$this->customer_model->select_customer_by_id($customer_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_customer',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function update_customer()
    {
        $this->customer_model->update_customer_info();
        $sdata=array();
        $sdata['message']="Update customer information successfully";
        $this->session->set_userdata($sdata);
        
         redirect('customer');
    }  
    
      // Sub customer information
   
    
    

}
