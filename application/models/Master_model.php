<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_model extends CI_Model {
    
	public function about_pages() {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('page_type',1);
        $this->db->where('page_status',1);
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
	
	public function services_pages() {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('page_type',2);
        $this->db->where('page_status',1);
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
	
	public function slide_news_1st() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('fk_news_id',1);
        $this->db->where('news_status',1);	
        $this->db->order_by('news_id', 'DESC');
        $query_result = $this->db->get();
        $res = $query_result->row();
        return $res;
    }
	
	public function slide_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('fk_news_id',1);
        $this->db->where('news_status',1);		
        $this->db->limit('2');
        $this->db->offset('1');
        $this->db->order_by('news_id', 'DESC');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
    
	public function home_page_product_range() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('show_front',1);		
        $this->db->where('category_type',3);		
        $this->db->order_by('category_id', 'DESC');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
    
	public function home_page_product($type=false) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left');
        $this->db->where('fk_news_id <>',1);
        $this->db->where('news_status',1);		
        $this->db->where($type,1);		
        $this->db->order_by('news_id', 'DESC');
        $this->db->limit('9');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }

	public function home_page_gallary_row_1() {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->where('status',1);		
        $this->db->order_by('photo_id', 'DESC');
        $this->db->limit('3');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
	public function home_page_gallary_row_2() {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        $this->db->where('status',1);		
        $this->db->order_by('photo_id', 'DESC');
        $this->db->limit('3');		
        $this->db->offset('3');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
	
	public function services_list() {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('page_type',2);		
        $this->db->where('page_status',1);		
        $this->db->order_by('page_id', 'DESC');
        $this->db->limit('8');
        $query_result = $this->db->get();
        $res = $query_result->result();
        return $res;
    }
	
	 public function pro_cats() {
		$this->db->select('tbl_news.*,tbl_category.*');
        $this->db->from('tbl_news');
        $this->db->where('fk_news_id <>', 1);
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left');
        $query_result = $this->db->get();
        $pro_cats = $query_result->result();
        return $pro_cats;
    }
    
}
