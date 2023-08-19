<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == 1) {
           redirect('dashboard');
        }
    }
   
    public function index() {
        $this->load->view('backend/user/user_login');
    }

    public function user_login_check() {
		
        $user_email = $this->input->post('user_email', true);
        $password = $this->input->post('password', true);
		
        $result = $this->user_model->check_user_login_info($user_email, $password);
		
        $sdata = array();
		
        if ($result) {
            $sdata['user_id'] = $result->user_id;
            $sdata['user_role'] = $result->user_role;
            $sdata['user_name'] = $result->user_name;
            $this->session->set_userdata($sdata);
            redirect('dashboard');
        } else {
            $sdata['message'] = "Email address or password is invalid!";
            $this->session->set_userdata($sdata);
            redirect('abcd');
        }
    }

    
 
}
