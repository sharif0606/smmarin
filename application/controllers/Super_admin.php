<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Super_admin extends CI_Controller{
	
	public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }
	
    public function index()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/dashboard','',true);
        $this->load->view('backend/admin_master',$data);
    }
    
    

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        
        $sdata=array();
        $sdata['message']="You are successfully logout!";
        $this->session->set_userdata($sdata);
        redirect('abcd');
    }
        
}
