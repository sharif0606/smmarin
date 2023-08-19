<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_model extends CI_Model {

    
    
    public function backend_news_search_info($search_keyword) {
        
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','full');
        $this->db->like('news_id', $search_keyword);
        $this->db->or_like('news_name', $search_keyword);
        $query_result = $this->db->get();
        $backend_news_search_info = $query_result->result();
        return $backend_news_search_info;
    }


}
