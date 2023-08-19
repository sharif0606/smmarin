<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sub_category_model extends CI_Model {
    
    public function all_category_info() {
        $this->db->select('category_id,category_name');
        $this->db->from('tbl_category');
        //$this->db->where('status',1);
        $this->db->order_by('category_name', 'asc');
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }
    // category information
    public function save_sub_category_info() {
        $data = array();
        $data['category_id'] = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['show_front'] = $this->input->post('show_front', true);
        if($_FILES['category_image']['name']){
            $sdata=array(); 
            $error="";
            
            $config['upload_path']='uploads/catImage/';
            $config['allowed_types']='gif|jpg|jpeg|png';
            $config['max_size']=2000;
            $config['max_width']=2000;
            $config['max_height']=2000;
            
            $this->load->library('upload',$config);
    		
            if(!$this->upload->do_upload('category_image')){
                $error=$this->upload->display_errors();
                echo $error;
            }else{
                $sdata=$this->upload->data();
                $data['category_image']=$config['upload_path'].$sdata['file_name'];
            }
        }

        $this->db->insert('tbl_sub_category', $data);
    }

    public function all_sub_category_info() {
        $this->db->select('tbl_sub_category.*,tbl_category.category_name as cat');
        $this->db->from('tbl_sub_category');
        $this->db->join('tbl_category','tbl_sub_category.category_id=tbl_category.category_id','left');
        //$this->db->where('status',1);
        $this->db->order_by('sub_category_id', 'desc');
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }

    public function delete_sub_category_info($sub_category_id) {
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->delete('tbl_sub_category');
    }
    public function select_sub_category_by_id($sub_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_sub_category_info() {
        $data = array();
        $sub_category_id = $this->input->post('sub_category_id', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        
        $data['show_front'] = $this->input->post('show_front', true);
        if($_FILES['category_image']['name']){
            $sdata=array(); 
            $error="";
            
            $config['upload_path']='uploads/catImage/';
            $config['allowed_types']='gif|jpg|jpeg|png';
            $config['max_size']=2000;
            $config['max_width']=2000;
            $config['max_height']=2000;
            
            $this->load->library('upload',$config);
    		
            if(!$this->upload->do_upload('category_image')){
                $error=$this->upload->display_errors();
                echo $error;
            }else{
                $sdata=$this->upload->data();
                $data['category_image']=$config['upload_path'].$sdata['file_name'];
            }
        }
        
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category', $data);
    }
    
    
    
    
}
