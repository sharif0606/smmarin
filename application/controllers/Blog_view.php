<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_view extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }  
  // News information

    public function blog_list(){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['title']='Recent Blog';
        $data['archives']=$this->db->query("SELECT month(`created_at`) as m,year(`created_at`) as y FROM `tbl_news` where fk_news_id in (select category_id from tbl_category where category_type=2) group by month(`created_at`), year(`created_at`)")->result_array();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=2")->result();
        $data['blogs']=$this->db->query("select * from tbl_news where fk_news_id in (select category_id from tbl_category where category_type=2) order by news_id desc limit 0,12")->result();
        $data['main_content']=$this->load->view('frontend/pages/blog_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    public function blog_arch($y,$m){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $months = array('','January','February','March','April','May','June','July ','August','September','October','November','December',);
        $data['title']='Blog '.$months[$m]." $y";
        $data['archives']=$this->db->query("SELECT month(`created_at`) as m,year(`created_at`) as y FROM `tbl_news` where fk_news_id in (select category_id from tbl_category where category_type=2) group by month(`created_at`), year(`created_at`)")->result_array();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=2")->result();
        $data['blogs']=$this->db->query("select * from tbl_news where fk_news_id in (select category_id from tbl_category where category_type=2) and month(`created_at`)='".$m."' and year(`created_at`)='".$y."'")->result();
        $data['main_content']=$this->load->view('frontend/pages/blog_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function blog_cat($cat,$cat_name){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['archives']=$this->db->query("SELECT month(`created_at`) as m,year(`created_at`) as y FROM `tbl_news` where fk_news_id in (select category_id from tbl_category where category_type=2) group by month(`created_at`), year(`created_at`)")->result_array();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=2")->result();
        $data['blogs']=$this->db->query("select * from tbl_news where fk_news_id='".$cat."'")->result();
        $data['title']='Blog - '.urldecode($cat_name);
        $data['main_content']=$this->load->view('frontend/pages/blog_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    public function blog_info_view($pro_cats_id){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['archives']=$this->db->query("SELECT month(`created_at`) as m,year(`created_at`) as y FROM `tbl_news` where fk_news_id in (select category_id from tbl_category where category_type=2) group by month(`created_at`), year(`created_at`)")->result_array();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=2")->result();
        $data['blog']=$this->db->query("select * from tbl_news where news_id='".$pro_cats_id."'")->row();
        
        $data['main_content']=$this->load->view('frontend/pages/blog_info_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    

}
