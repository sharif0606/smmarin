<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }
	
    public function new_page(){
        $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/new_page','',true);
        $this->load->view('backend/admin_master', $data);
    }
    
	public function save_page(){
        $this->page_model->save_page_info();
        $sdata=array();
        $sdata['message']="Page Saved Successfully";
        $this->session->set_userdata($sdata);
		redirect('page-list');
    }
	
	public function page_list(){
        $data=array();
        $data['all_page_info']=$this->page_model->all_page_info();
        $data['admin_main_content']=$this->load->view('backend/pages/page_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
	
	
	public function edit_page($page_id){
        $data=array();
        $data['select_page_by_id']=$this->page_model->select_page_by_id($page_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_page',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
	
	public function delete_page($page_id){
        $this->page_model->delete_page_info($page_id);
        $sdata=array();
		if($page_id == 1 || $page_id == 2)
			$sdata['message']="This page is not for delete.";
		else
			$sdata['message']="Page Deleted Successfully";
        
        $this->session->set_userdata($sdata);
        redirect('page-list');
    }
	
	public function update_page(){
        $this->page_model->update_page_info();
        $sdata=array();
        $sdata['message']="Information Updated Successfully";
        $this->session->set_userdata($sdata);
        redirect('page-list');
    }  
    
}