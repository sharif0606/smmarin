<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_view_model extends CI_Model {
    
    public function all_blog_sub_info($pro_cats_id,$q=false) {
		$this->db->select('tbl_news.*,tbl_sub_category.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_sub_category','tbl_sub_category.sub_category_id=tbl_news.sub_category_id','left');
        if($q)
            $this->db->where('brand', $q);
            
        $this->db->where('news_status', '1');
        $this->db->where('tbl_news.sub_category_id',$pro_cats_id);
        $query_result = $this->db->get();
        $all_blog_data = $query_result->result();
        return $all_blog_data;
    }
    
    public function all_blog_filter_info($pro_cats_id,$q=false) {
		$this->db->select('tbl_news.*,tbl_category.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left');
        if($q)
            $this->db->where('brand', $q);
            
        $this->db->where('news_status', '1');
        $this->db->where('fk_news_id',$pro_cats_id);
        $query_result = $this->db->get();
        $all_blog_data = $query_result->result();
        return $all_blog_data;
    }
    
    public function all_blog_info($limit, $start,$q=false) {
        $this->db->limit($limit, $start);
		$this->db->select('tbl_news.*,tbl_category.*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left');
        $this->db->where('news_status', '1');
        
        if($q)
            $this->db->where('brand', $q);
        
        $query_result = $this->db->get();
        $all_blog_data = $query_result->result();
        return $all_blog_data;
    }
    
    public function get_total($q=false){
        $this->db->select('tbl_news.id');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->where('tbl_category.category_type',3);
         if($q)
            $this->db->where('brand', $q);
            
        return $this->db->count_all_results();
    }
}
