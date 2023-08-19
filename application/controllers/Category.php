<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }  
  // Category information
    public function add_category()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/add_category','',true);
        $this->load->view('backend/admin_master', $data);
    } 
    public function save_category()
    {
        $this->category_model->save_category_info();
        $sdata=array();
        $sdata['message']="Save category information successfully";
        $this->session->set_userdata($sdata);
        
        redirect('category-list');
    }

    public function category_list()
    {
        $data=array();
        
        $data['all_category_info']=$this->category_model->all_category_info();
        
        $data['admin_main_content']=$this->load->view('backend/pages/category_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }

     public function delete_category($category_id)
    {
        $this->category_model->delete_category_info($category_id);
        $sdata=array();
        $sdata['message']="Delete category information successfully";
        $this->session->set_userdata($sdata);
        redirect('category-list');
    }
     public function edit_category($category_id)
    {
        $data=array();
        $data['select_category_by_id']=$this->category_model->select_category_by_id($category_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_category',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function update_category()
    {
        $this->category_model->update_category_info();
        $sdata=array();
        $sdata['message']="Update category information successfully";
        $this->session->set_userdata($sdata);
        
         redirect('category-list');
    }  
    
      // Sub Category information
   
    
    

}
