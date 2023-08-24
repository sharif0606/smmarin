<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_view_model extends CI_Model {


    
    
     public function full_news_view($news_id) {
         
        $this->db->select('*');
        $this->db->from('tbl_news');
		$this->db->join('tbl_product_image','tbl_product_image.tbl_news_id=tbl_news.news_id');
        $this->db->where('news_id',$news_id);
		$this->db->where('news_status',1);
        $query_result = $this->db->get();
        $full_news_view = $query_result->result();
        return $full_news_view;
    }
    // public function full_news_view($news_id) {
    //     $this->db->select('tbl_news.*, tbl_product_image.product_images'); // Select columns from both tables
    //     $this->db->from('tbl_news');
    //     $this->db->where('tbl_news.news_id', $news_id);
    //     $this->db->where('tbl_news.news_status', 1);
        
    //     // LEFT JOIN to get associated product images
    //     $this->db->join('tbl_product_image', 'tbl_product_image.tbl_news_id = tbl_news.news_id', 'left');
    
    //     $query_result = $this->db->get();
    //     $full_news_view = $query_result->result();
    //     return $full_news_view;
    // }
    
     public function latest_news_view($news_id,$cat_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
		$this->db->where('news_status',1);
		$this->db->where('news_id !=',$news_id);
		$this->db->where('fk_news_id',$cat_id);
        $this->db->order_by('news_id','DESC');
        $this->db->limit('3');
        $query_result = $this->db->get();
        $latest_news_view_info = $query_result->result();
        return $latest_news_view_info;
    }
	
	public function related_news_view($news_id,$cat_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left');
        $this->db->join('tbl_product_image', 'tbl_product_image.tbl_news_id = tbl_news.news_id', 'left');
		$this->db->where('news_status',1);
		$this->db->where('news_id !=',$news_id);
		$this->db->where('fk_news_id',$cat_id);
        $this->db->order_by('news_id','ASC');
        $this->db->limit('4');
        $query_result = $this->db->get();
        $related_news_view = $query_result->result();
        return $related_news_view;
    }
    
     public function news_title_view_info($news_id) {
         
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $query_row = $this->db->get();
        $news_title_view_info = $query_row->row();
        return $news_title_view_info;
    }
	
     public function category_name_view_info($news_id) {
        
        $this->db->select('*');
        $this->db->from('tbl_news');
        //$this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','right');
        $this->db->where('fk_news_id',$news_id);
	
        $query_result = $this->db->get();
        $category_name_view_info = $query_result->result();
       
        return $category_name_view_info;  
    }
    
  
    public function news_view_info($news_id) {
         
        $this->db->select('tbl_news.*,tbl_user.*');
		
        $this->db->from('tbl_news');
		
        $this->db->join('tbl_user','tbl_user.user_id=tbl_news.post_user','left');
		
        $this->db->where('news_id',$news_id);
		$this->db->where('news_status',1);
        $query_result = $this->db->get();
        $news_view_info = $query_result->result();
        return $news_view_info;
    }
    
    
    
     public function news_print_view_info($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
      
        $this->db->where('news_id',$news_id);
	
        $query_result = $this->db->get();
        $news_print_view_info = $query_result->result();
        return $news_print_view_info;
    }

    
     public function category_view_info($category_id) {
        $this->db->select('tbl_news.*,tbl_user.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_news.post_user','left');
        $this->db->where('fk_news_id',$category_id);
		$this->db->where('news_status',1);
        $this->db->order_by('news_id','DESC');
        //$this->db->limit('7');
        $query_result = $this->db->get();
        $category_view_info = $query_result->result();
        return $category_view_info;
    }
    
    
     public function latest_news_view_info() {
        $this->db->select('tbl_news.*,tbl_user.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_news.post_user','left');
        //$this->db->where('fk_news_id',$category_id);
		$this->db->where('news_status',1);
        $this->db->order_by('news_id','DESC');
        $this->db->limit('3');
        $query_result = $this->db->get();
        $latest_news_view_info = $query_result->result();
        return $latest_news_view_info;
    }
    
    
    public function top_news_view_info() {
        $this->db->select('tbl_news.*,tbl_user.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_news.post_user','left');
	$this->db->where('news_status',1);
        $this->db->where('top_news',1);
        $this->db->order_by('news_id','DESC');
        $this->db->limit('8');
        $query_result = $this->db->get();
        $top_news_view_info = $query_result->result();
        return $top_news_view_info;
    }
	
	
	
	
	
     public function search_keyword_info($search_keyword) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->like('news_name', $search_keyword);
        $query_result = $this->db->get();
        $search_news_info = $query_result->result();
        return $search_news_info;
    }


}
