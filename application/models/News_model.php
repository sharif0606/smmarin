<?php   if (!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

    public function save_news_info() {
        $data = array();
        $data['fk_news_id'] = $this->input->post('fk_news_id', true);
        $data['sub_category_id'] = $this->input->post('sub_category_id', true);
        $data['news_name'] = $this->input->post('news_name', true);
        $data['price'] = $this->input->post('price', true);
        $data['condition_p'] = $this->input->post('condition_p', true);
        $data['new_item'] = $this->input->post('new_item', true);
        $data['popular_item'] = $this->input->post('popular_item', true);
		
        $data['news_description'] = $this->input->post('news_description',false);
		
        $data['item_code'] = $this->input->post('item_code', true);
        $data['brand'] = $this->input->post('brand', true);
        $data['meta_des'] = $this->input->post('meta_des', true);
        $data['meta_key'] = $this->input->post('meta_key', true);
        $data['news_status'] = $this->input->post('news_status', true);
		
        date_default_timezone_set('Asia/Dhaka');
        
        $data['post_time']= date("H:i");
        $data['post_date']=date("F j, Y");
		$data['post_date_small']=date("F j");
        
        $sdata=array(); 
        $error="";
        $config['upload_path']='uploads/PostImages/';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['max_size']=200000;
        $config['max_width']=200000;
        $config['max_height']=200000;
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('single_image')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['news_image']=$config['upload_path'].$sdata['file_name'];
        }

        $this->db->insert('tbl_news', $data);
        $news_id = $this->db->insert_id();

        $uploaded_files = array(); // Array to store uploaded file information
        foreach ($_FILES['news_images']['name'] as $key => $image_name) {
            $_FILES['userfile']['name'] = $_FILES['news_images']['name'][$key];
            $_FILES['userfile']['type'] = $_FILES['news_images']['type'][$key];
            $_FILES['userfile']['tmp_name'] = $_FILES['news_images']['tmp_name'][$key];
            $_FILES['userfile']['error'] = $_FILES['news_images']['error'][$key];
            $_FILES['userfile']['size'] = $_FILES['news_images']['size'][$key];
            
            if (!$this->upload->do_upload('userfile')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $uploaded_files[] = $this->upload->data();
            }
        }

        // Assuming $uploaded_files is an array of uploaded file data
        foreach ($uploaded_files as $file_data) {
            $data = array(
                'tbl_news_id' => $news_id,
                'product_images' => $config['upload_path'] . $file_data['file_name']
            );
            $this->db->insert('tbl_product_image', $data);
        }
        
    }

    public function all_news_info() {
        $this->db->select('tbl_news.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->where('tbl_category.category_type',3);
        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $news_info = $query_result->result();
        return $news_info;
    }

    public function all_news_info_by_category($category_id) {
        $this->db->select('tbl_news.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');

        $this->db->where('fk_news_id', $category_id);
        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $news_info = $query_result->result();
        return $news_info;
    }

    public function delete_news_info($news_id) {
        $this->db->where('news_id', $news_id);
        $this->db->delete('tbl_news');
    }
    public function delete_image_from_table($imageId) {
        $this->db->where('id', $imageId);
        $this->db->delete('tbl_product_image');

        // Check if the deletion was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Deletion successful
        } else {
            return false; // Deletion failed
        }
    }

   public function select_news_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
		$this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','full');
        $this->db->join('tbl_product_image','tbl_product_image.tbl_news_id=tbl_news.news_id', 'left');
        		
        $this->db->where('news_id', $news_id);
        $query_row = $this->db->get();
        $select_news_by_id = $query_row->row();
       
        return $select_news_by_id;
    }
   public function product_image_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
		// $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','full');
        $this->db->join('tbl_product_image','tbl_product_image.tbl_news_id=tbl_news.news_id', 'left');
        		
        $this->db->where('news_id', $news_id);
        $query_row = $this->db->get();
        $product_image_by_id = $query_row->result();
       
        return $product_image_by_id;
    } 

    public function update_news_info() {
        $data = array();
        $news_id = $this->input->post('news_id', true);
    
        $data['fk_news_id'] = $this->input->post('fk_news_id', true);
        $data['sub_category_id'] = $this->input->post('sub_category_id', true);
        $data['news_name'] = $this->input->post('news_name', true);
        $data['price'] = $this->input->post('price', true);
        $data['condition_p'] = $this->input->post('condition_p', true);
        $data['new_item'] = $this->input->post('new_item', true);
        $data['popular_item'] = $this->input->post('popular_item', true);
		
        $data['news_description'] = $this->input->post('news_description',false);
		
        $data['item_code'] = $this->input->post('item_code', true);
        $data['brand'] = $this->input->post('brand', true);
        $data['meta_des'] = $this->input->post('meta_des', true);
        $data['meta_key'] = $this->input->post('meta_key', true);
        $data['news_status'] = $this->input->post('news_status', true);
    
        date_default_timezone_set('Asia/Dhaka');
    
        $data['post_time'] = date("H:i");
        $data['post_date'] = date("F j, Y");
        $data['post_date_small'] = date("F j");
    
        
    
        $sdata=array(); 
        $error="";
        $config['upload_path']='uploads/PostImages/';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['max_size']=200000;
        $config['max_width']=200000;
        $config['max_height']=200000;
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('single_image')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['news_image']=$config['upload_path'].$sdata['file_name'];
        }

        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);

        $uploaded_files = array(); // Array to store uploaded file information
        foreach ($_FILES['news_images']['name'] as $key => $image_name) {
            $_FILES['userfile']['name'] = $_FILES['news_images']['name'][$key];
            $_FILES['userfile']['type'] = $_FILES['news_images']['type'][$key];
            $_FILES['userfile']['tmp_name'] = $_FILES['news_images']['tmp_name'][$key];
            $_FILES['userfile']['error'] = $_FILES['news_images']['error'][$key];
            $_FILES['userfile']['size'] = $_FILES['news_images']['size'][$key];
    
            if (!$this->upload->do_upload('userfile')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $file_data = $this->upload->data();
                $image_data = array(
                    'tbl_news_id' => $news_id,
                    'product_images' => $config['upload_path'] . $file_data['file_name']
                );

                $this->db->insert('tbl_product_image', $image_data);
            }
        }
    }


}
