<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photo_model extends CI_Model {

    public function save_photo_info() {
        $data = array();
        $data['fk_photo_id'] = $this->input->post('fk_photo_id', true);
		
		
		date_default_timezone_set('Asia/Dhaka');
		
        $data['post_time']= date("H:i");
        $data['post_date']=date("F j, Y");
        $data['status'] = $this->input->post('status', true);
       
        $sdata=array(); 
        $error="";
        
        $config['upload_path']='uploads/PhotoImages/';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['max_size']=2000;
        $config['max_width']=1500;
        $config['max_height']=1500;
        
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('photo_image'))
        {
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['photo_image']=$config['upload_path'].$sdata['file_name'];
        }
        
        
        $this->db->insert('tbl_photo', $data);
    }

    public function all_photo_info() {
        $this->db->select('tbl_photo.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_photo', 'tbl_category.category_id=tbl_photo.fk_photo_id', 'inner');

        $this->db->order_by('photo_id', 'desc');
        $query_result = $this->db->get();
        $photo_info = $query_result->result();
        return $photo_info;
    }

    public function all_photo_info_by_category($category_id) {
        $this->db->select('tbl_photo.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_photo', 'tbl_category.category_id=tbl_photo.fk_photo_id', 'inner');

        $this->db->where('fk_photo_id', $category_id);
        $this->db->order_by('photo_id', 'desc');
        $query_result = $this->db->get();
        $photo_info = $query_result->result();
        return $photo_info;
    }

    public function delete_photo_info($photo_id) {
        $this->db->where('photo_id', $photo_id);
        $this->db->delete('tbl_photo');
    }

    public function select_photo_by_id($photo_id) {
		
		$this->db->select('tbl_photo.*,tbl_category.*');
		
        $this->db->from('tbl_photo');
		
        $this->db->join('tbl_category','tbl_category.category_id=tbl_photo.fk_photo_id','left');
		
		
        $this->db->where('photo_id', $photo_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_photo_info() {
        $data = array();
        $photo_id = $this->input->post('photo_id', true);

       // $data['photo_name'] = $this->input->post('photo_name', true);
        $data['fk_photo_id'] = $this->input->post('fk_photo_id', true);
        
		date_default_timezone_set('Asia/Dhaka');
		
		$data['post_time']= date("H:i");
        $data['post_date']=date("F j, Y");
		
        $data['status'] = $this->input->post('status', true);
        
        $sdata=array(); 
        $error="";
        
        $config['upload_path']='uploads/PhotoImages/';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['max_size']=2000;
        $config['max_width']=1500;
        $config['max_height']=1500;
        
        $this->load->library('upload',$config);
		
        if(!$this->upload->do_upload('photo_image'))
        {
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['photo_image']=$config['upload_path'].$sdata['file_name'];
        }
        
		
		
        
        $this->db->where('photo_id', $photo_id);
        $this->db->update('tbl_photo', $data);
    }

}
