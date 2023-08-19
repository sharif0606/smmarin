<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkoutctrl extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information


    public function index(){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['cartItems'] = $this->cart->contents();
        $data['main_content']=$this->load->view('frontend/pages/checkout',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function login() {
		
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
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $sdata['msg'] = "Contact Number or password is invalid!";
            $this->session->set_flashdata($sdata);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    
    function checkoutsubmit(){
        // Redirect if the cart is empty
        if($this->cart->total_items() <= 0){
            redirect('cart');
        }
        
        $custData = $data = array();

        // Form field validation rules
        $this->form_validation->set_rules('customer_gender', 'Name', 'required');
        $this->form_validation->set_rules('customer_name', 'Name', 'required');
        $this->form_validation->set_rules('customer_contact', 'Contact Number', 'required');
        $this->form_validation->set_rules('customer_address', 'Address', 'required');
        
        // Validate submitted form data
        if($this->form_validation->run() == true){
            $customer_id=0;
            if(!empty($this->input->post('id_customer',true))){
                $cid=$this->db->query("select id from customer where id='".$this->input->post('id_customer',true)."'")->row();
                if($cid)
                    $customer_id=$cid->id;
            }
            if($customer_id==0){
                $cid=$this->db->query("select id from customer where c_contact='".$this->input->post('customer_contact',true)."' or c_email='".$this->input->post('customer_email',true)."'")->row();
                if($cid)
                    $customer_id=$cid->id;
            }
            if($customer_id==0){
                $custData = array(
                    'c_gender' => $this->input->post('customer_gender',true),
                    'c_name' => $this->input->post('customer_name',true),
                    'c_contact' => $this->input->post('customer_contact',true),
                    'c_email' => $this->input->post('customer_email',true),
                    'c_address' => $this->input->post('customer_address',true),
                    'c_status'=>1
                );
                $insertOrder = $this->db->insert('customer',$custData);
                $customer_id=$this->db->insert_id();
            }
            
            // Check customer data insert status
            if($customer_id){
                $ordData = array(
                    'customer_id' => $customer_id,
                    'customer_gender' => $this->input->post('customer_gender',true),
                    'customer_name' => $this->input->post('customer_name',true),
                    'customer_contact' => $this->input->post('customer_contact',true),
                    'customer_email' => $this->input->post('customer_email',true),
                    'customer_address' => $this->input->post('customer_address',true),
                    'grand_total' => $this->cart->total(),
                    'created'=>date('Y-m-d H:i:s'),
                    'status'=>0
                );
                $insertOrder = $this->db->insert('orders',$ordData);
                // Insert order
                $order = $this->placeOrder($this->db->insert_id());
                
                // If the order submission is successful
                if($order){
                    $g=array(0=>"",1=>"Mr.",2=>"Ms.");
                    $this->session->set_userdata('msg', '<b>Thank You '.$g[$this->input->post('customer_gender',true)].' '.$this->input->post('customer_name',true).',</b><br> Your Order placed successfully. Our customer service will contact you soon.');
                    redirect('ordersuccess');
                }else{
                    $this->session->set_flashdata('msg', 'Order submission failed, please try again.');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else{
                $this->session->set_flashdata('msg', 'Order submission failed, please try again.');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        
    }
    
    function placeOrder($insertOrder){
        
        if($insertOrder){
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();
            
            // Cart items
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['order_id']     = $insertOrder;
                $ordItemData[$i]['product_id']     = $item['id'];
                $ordItemData[$i]['quantity']     = $item['qty'];
                $ordItemData[$i]['price']     = $item["price"];
                $i++;
            }
            
            if(!empty($ordItemData)){
                $insert = $this->db->insert_batch("order_items", $ordItemData);
                if($insert){
                    $this->cart->destroy();
                    return true;
                }
            }
        }
        return false;
    }
    
    function orderSuccess(){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['main_content']=$this->load->view('frontend/pages/ordersuccess',$data,true);
        $this->load->view('frontend/master',$data);
    }
    

}
