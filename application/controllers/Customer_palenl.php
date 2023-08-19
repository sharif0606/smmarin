<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_palenl extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }
    
    public function regi() {
		
       // Form field validation rules
        $this->form_validation->set_rules('customer_gender', 'Name', 'required');
        $this->form_validation->set_rules('customer_name', 'Name', 'required');
        $this->form_validation->set_rules('customer_contact', 'Contact Number', 'required|is_unique[customer.c_contact]');
        $this->form_validation->set_rules('customer_email', 'Email', 'required|valid_email|is_unique[customer.c_email]');
        $this->form_validation->set_rules('customer_address', 'Address', 'required');
        
        // Validate submitted form data
        if($this->form_validation->run() == true){
            $custData = array(
                'c_gender' => $this->input->post('customer_gender',true),
                'c_name' => $this->input->post('customer_name',true),
                'c_contact' => $this->input->post('customer_contact',true),
                'c_email' => $this->input->post('customer_email',true),
                'c_address' => $this->input->post('customer_address',true),
                'password' => sha1($this->input->post('password',true)),
                'c_status'=>1
            );
            if($this->db->insert('customer',$custData)){
            $this->session->set_flashdata("msg","You are successfully create an account");
            redirect('login');
            }else{
                $this->session->set_flashdata("msg","Your registration fail. Please try again with correct information");
                redirect('register');
            }
        }else{
            $data=array();
            $data['all_meta_data']=$this->meta_model->all_meta_data();
            $data['main_content']=$this->load->view('frontend/pages/customer/regi',$data,true);
            $this->load->view('frontend/master',$data);
        }
    }
    
    public function login() {
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['main_content']=$this->load->view('frontend/pages/customer/login',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    
    public function user_login_check() {
		
        $c_email = $this->input->post('c_email', true);
        $password = sha1($this->input->post('password', true));
		
        $result = $this->db->query("select * from customer where c_email='$c_email' and password='$password' and c_status=1")->row();
        
        $sdata = array();
		
        if ($result) {
            $g=array("","Mr.","Ms.");
            
            $sdata['customer_id'] = $result->id;
            $sdata['c_name'] = $result->c_name;
            $sdata['c_email'] = $result->c_email;
            $sdata['c_address'] = $result->c_address;
            $sdata['c_contact'] = $result->c_contact;
            $sdata['c_gender'] = $result->c_gender;
            $sdata['gender'] = $g[$result->c_gender];
            $this->session->set_userdata($sdata);
            redirect('customer-dashboard');
        } else {
            $sdata['msg'] = "Contact Number or password is invalid!";
            $this->session->set_flashdata($sdata);
            redirect('login');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
    public function index(){
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL) {
           redirect('login');
        }
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['main_content']=$this->load->view('frontend/pages/customer/dashboard',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function order_his(){
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL) {
           redirect('login');
        }
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['order']=$this->db->query("select * from orders where customer_id='$customer_id'")->result();
        $data['main_content']=$this->load->view('frontend/pages/customer/order_his',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function order_show($order_id){
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL) {
           redirect('login');
        }
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['order']=$this->order_model->select_order_by_id($order_id);
        $data['order_detalis']=$this->order_model->all_order_details($order_id);
        $data['main_content']=$this->load->view('frontend/pages/customer/order_show',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function info(){
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL) {
           redirect('login');
        }
        // Form field validation rules
        $this->form_validation->set_rules('c_gender', 'Name', 'required');
        $this->form_validation->set_rules('c_name', 'Name', 'required');
        if($this->input->post('c_contact',true)!=$this->session->userdata('c_contact'))
            $this->form_validation->set_rules('c_contact', 'Contact Number', 'required|is_unique[customer.c_contact]');
        else
            $this->form_validation->set_rules('c_contact', 'Contact Number', 'required');
        
        if($this->input->post('c_email',true)!=$this->session->userdata('c_email'))
            $this->form_validation->set_rules('c_email', 'Email', 'required|valid_email|is_unique[customer.c_email]');
        else
            $this->form_validation->set_rules('c_email', 'Email', 'required|valid_email');
        
        $this->form_validation->set_rules('c_address', 'Address', 'required');
        
        // Validate submitted form data
        if($this->form_validation->run() == true){
            
            $custData['c_gender'] =$this->input->post('c_gender',true);
            $custData['c_name'] =$this->input->post('c_name',true);
            $custData['c_contact'] =$this->input->post('c_contact',true);
            $custData['c_email'] =$this->input->post('c_email',true);
            $custData['c_address'] =$this->input->post('c_address',true);
            if($this->input->post('new_password',true))
            $custData['password'] =sha1($this->input->post('new_password',true));
            
            $this->db->where('id',$customer_id);
            if($this->db->update('customer',$custData)){
                $this->session->set_flashdata("msg","You are successfully update your account");
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->session->set_flashdata("msg","Your update fail. Please try again with correct information");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $data=array();
            $data['all_meta_data']=$this->meta_model->all_meta_data();
            $data['main_content']=$this->load->view('frontend/pages/customer/info',$data,true);
            $this->load->view('frontend/master',$data);
        }
    }
    
}