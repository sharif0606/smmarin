<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {
	
	//put your code here
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    } 
    public function meta_page()
    {
        $data=array();
		
		$data['all_meta_data']=$this->meta_model->all_meta_data();
		
        $data['admin_main_content']=$this->load->view('backend/pages/meta_page',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    
	
	
	 public function update_meta_page()
    {
        $this->meta_model->update_meta_info();
        $sdata=array();
        $sdata['message']="Information Updated Successfully";
        $this->session->set_userdata($sdata);
        
        redirect('meta');
    }  
    
}