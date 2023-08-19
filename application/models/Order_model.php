<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    public function all_order_info() {
        $this->db->select('*');
        $this->db->from('orders');
        //$this->db->where('status',1);
        $this->db->order_by('id', 'desc');
        $query_result = $this->db->get();
        $order_info = $query_result->result();
        return $order_info;
    }
    
    public function all_order_details($order_id) {
        $this->db->select('*');
        $this->db->from('order_items');
        $this->db->join('tbl_news','tbl_news.news_id=order_items.product_id');
        $this->db->where('order_items.order_id', $order_id);
        $this->db->order_by('order_items.id', 'desc');
        $query_result = $this->db->get();
        $order_info = $query_result->result();
        return $order_info;
    }
    
    public function select_order_by_id($order_id) {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('id', $order_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_order_info() {
        $data = array();
        $order_id = $this->input->post('id', true);
        $data['status'] = $this->input->post('status', true);
        $this->db->where('id', $order_id);
        $this->db->update('orders', $data);
    }
    
    
    
    
}
