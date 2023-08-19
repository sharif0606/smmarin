<?php   if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function save_blog_info() {
        $data = array();
        $data['fk_news_id'] = $this->input->post('fk_news_id', true);
        $data['news_name'] = $this->input->post('news_name', true);
		
        $data['news_description'] = $this->input->post('news_description',false);
        
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
        
        $this->load->library('upload',$config);
		
        if(!$this->upload->do_upload('news_image')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['news_image']=$config['upload_path'].$sdata['file_name'];
        }
        $this->db->insert('tbl_news', $data);
    }

    public function all_blog_info() {
        $this->db->select('tbl_news.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');

        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $news_info = $query_result->result();
        return $news_info;
    }

    public function all_blog_info_by_category($category_id) {
        $this->db->select('tbl_news.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');

        $this->db->where('fk_news_id', $category_id);
        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $news_info = $query_result->result();
        return $news_info;
    }

    public function delete_blog_info($news_id) {
        $this->db->where('news_id', $news_id);
        $this->db->delete('tbl_news');
    }

   public function select_blog_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
		$this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','full');
        		
        $this->db->where('news_id', $news_id);
        $query_row = $this->db->get();
        $select_news_by_id = $query_row->row();
       
        return $select_news_by_id;
    }

    public function update_blog_info() {
        $data = array();
        $news_id = $this->input->post('news_id', true);

        $data['news_name'] = $this->input->post('news_name', true);
        $data['fk_news_id'] = $this->input->post('fk_news_id', true);
        
        $data['news_description'] = $this->input->post('news_description', false);
		
        $data['item_code'] = $this->input->post('item_code', true);
        $data['brand'] = $this->input->post('brand', true);
        $data['meta_des'] = $this->input->post('meta_des', true);
        $data['meta_key'] = $this->input->post('meta_key', true);
       
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
        
        $this->load->library('upload',$config);
		
        if(!$this->upload->do_upload('news_image'))
        {
            $error=$this->upload->display_errors();
            //echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['news_image']=$config['upload_path'].$sdata['file_name'];
        }
        
        
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }
    
    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
		
        $this->db->select('tbl_news.*,tbl_category.category_name');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->where_in('tbl_category.category_type',array(1,2));
        $this->db->order_by('news_id','desc');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
	
    public function get_total() 
    {
        $this->db->select('tbl_news.id');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->where_in('tbl_category.category_type',array(1,2));
        return $this->db->count_all_results();
    }
    


}
