<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategory extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('sub_category_model');
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }  
  // Category information
    public function add_sub_category()
    {
        $data=array();
        $data['all_category']=$this->sub_category_model->all_category_info();
        $data['admin_main_content']=$this->load->view('backend/pages/add_sub_category',$data,true);
        $this->load->view('backend/admin_master', $data);
    } 
    public function save_sub_category()
    {
        $this->sub_category_model->save_sub_category_info();
        $sdata=array();
        $sdata['message']="Save sub category information successfully";
        $this->session->set_userdata($sdata);
        
        redirect('sub_category-list');
    }

    public function sub_category_list()
    {
        $data=array();
        
        $data['all_sub_category_info']=$this->sub_category_model->all_sub_category_info();
        
        $data['admin_main_content']=$this->load->view('backend/pages/sub_category_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }

     public function delete_sub_category($sub_category_id)
    {
        $this->sub_category_model->delete_sub_category_info($sub_category_id);
        $sdata=array();
        $sdata['message']="Delete sub_category information successfully";
        $this->session->set_userdata($sdata);
        redirect('sub_category-list');
    }
     public function edit_sub_category($sub_category_id)
    {
        $data=array();
        $data['all_category']=$this->sub_category_model->all_category_info();
        $data['select_category_by_id']=$this->sub_category_model->select_sub_category_by_id($sub_category_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_sub_category',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function update_sub_category()
    {
        $this->sub_category_model->update_sub_category_info();
        $sdata=array();
        $sdata['message']="Update sub category information successfully";
        $this->session->set_userdata($sdata);
        
         redirect('sub_category-list');
    }  
    
      // Sub sub_category information
   
    
    

}
