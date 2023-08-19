<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photo_view_model extends CI_Model {


     public function all_photo_view_info() {
        
        
		
		$this->db->select('tbl_photo.*,tbl_category.*');
		
        $this->db->from('tbl_photo');
		
        $this->db->join('tbl_category','tbl_category.category_id=tbl_photo.fk_photo_id','left');
		
        $this->db->where('status',1);
		
        $query_result = $this->db->get();
        $all_photo_view_info = $query_result->result();
       
        return $all_photo_view_info;
		
    }

  

    
     public function latest_news_view_info() {
        $this->db->select('tbl_news.*,tbl_user.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_news.post_user','left');
        //$this->db->where('fk_news_id',$category_id);
		$this->db->where('status',1);
        $this->db->order_by('news_id','DESC');
        $this->db->limit('3');
        $query_result = $this->db->get();
        $latest_news_view_info = $query_result->result();
        return $latest_news_view_info;
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
