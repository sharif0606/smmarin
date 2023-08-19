<?php
// models/Users.php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class All_news_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }
   
    
    public function get_current_page_records($limit, $start){
        $this->db->limit($limit, $start);
		
        $this->db->select('tbl_news.*,tbl_category.category_name,tbl_sub_category.category_name as sub_name');
        $this->db->from('tbl_news');
        $this->db->join('tbl_category', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->join('tbl_sub_category', 'tbl_sub_category.sub_category_id=tbl_news.sub_category_id', 'left');
        $this->db->where('tbl_category.category_type',3);
        $this->db->order_by('news_id','desc');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
	
    public function get_total(){
        $this->db->select('tbl_news.id');
        $this->db->from('tbl_category');
        $this->db->join('tbl_news', 'tbl_category.category_id=tbl_news.fk_news_id', 'inner');
        $this->db->where('tbl_category.category_type',3);
        return $this->db->count_all_results();
    }
}