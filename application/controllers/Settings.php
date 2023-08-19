<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	//put your code here
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    } 
    public function settings_page()
    {
        $data=array();		
		
        $data['admin_main_content']=$this->load->view('backend/pages/settings_page','',true);
        $this->load->view('backend/admin_master', $data);
    }
    
	
	
	 public function update_settings_page()
    {
        $this->settings_model->update_settings_info();
        $sdata=array();
        $sdata['message']="Information Updated Successfully. Please Logout to See The Changes.";
        $this->session->set_userdata($sdata);        
        redirect('settings');
    }  
    
}