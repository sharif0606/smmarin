<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller{
    public function __construct() {
        parent::__construct();
    } 
    
    public function index(){
        $search_keyword=$this->input->get('s');
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=3")->result();
        $data['title']='Search for "'.$search_keyword.'"';
        
        $data['all_blog_data']=$this->db->select('tbl_news.*,tbl_category.*')->from('tbl_news')->join('tbl_category','tbl_category.category_id=tbl_news.fk_news_id','left')->where('news_status', '1')->like('news_name',$search_keyword)->get()->result();

        $data['main_content']=$this->load->view('frontend/pages/search_list',$data,true);
        $this->load->view('frontend/master',$data);
    } 

}
