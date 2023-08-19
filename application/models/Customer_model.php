<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function all_customer_info() {
        $this->db->select('*');
        $this->db->from('customer');
        //$this->db->where('status',1);
        $this->db->order_by('id', 'desc');
        $query_result = $this->db->get();
        $order_info = $query_result->result();
        return $order_info;
    }
    
    public function select_customer_by_id($customer_id) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('id', $customer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_customer_info() {
        $data = array();
        $customer_id = $this->input->post('id', true);
        
        $custData['c_gender'] =$this->input->post('c_gender',true);
        $custData['c_name'] =$this->input->post('c_name',true);
        $custData['c_contact'] =$this->input->post('c_contact',true);
        $custData['c_email'] =$this->input->post('c_email',true);
        $custData['c_address'] =$this->input->post('c_address',true);
        
        $this->db->where('id', $customer_id);
        $this->db->update('customer', $custData);
    }
    
    
    
    
}
