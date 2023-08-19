<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_product_view extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information


    public function product_info_view($none,$pro_cats_id){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=3 and show_front=1")->result();
        $data['brands']=$this->db->query("SELECT brand, count(`news_id`) as total FROM `tbl_news` WHERE tbl_news.fk_news_id=$pro_cats_id and (brand is not null or brand !='') GROUP BY brand")->result();
        $data['title']=$none;
        $data['c_name']=$none;
        $data['c_id']=$pro_cats_id;
        $data['brand']=$this->input->get('q');
        if($q=$this->input->get('q'))
            $data['all_blog_data']=$this->blog_view_model->all_blog_filter_info($pro_cats_id,$q);
        else
            $data['all_blog_data']=$this->blog_view_model->all_blog_filter_info($pro_cats_id);
        
        $data['main_content']=$this->load->view('frontend/pages/category_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function product_info_view_sub($none,$pro_cats_id){
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=3 and show_front=1")->result();
        $data['brands']=$this->db->query("SELECT brand, count(`news_id`) as total FROM `tbl_news` WHERE tbl_news.sub_category_id=$pro_cats_id and ( brand is not null or brand !='') GROUP BY brand")->result();
        $data['title']=$none;
        $data['c_name']=$none;
        $data['c_id']=$pro_cats_id;
        $data['brand']=$this->input->get('q');
        if($q=$this->input->get('q'))
            $data['all_blog_data']=$this->blog_view_model->all_blog_sub_info($pro_cats_id,$q);
        else
            $data['all_blog_data']=$this->blog_view_model->all_blog_sub_info($pro_cats_id);
        
        $data['main_content']=$this->load->view('frontend/pages/category_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    
    public function all_product_info($pages=false){
        
        $data=array();
        $data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['categories']=$this->db->query("select * from tbl_category where category_type=3 and show_front=1")->result();
        $data['brands']=$this->db->query("SELECT brand, count(`news_id`) as total FROM `tbl_news` WHERE brand is not null or brand !='' GROUP BY brand")->result();
        $data['title']="";
        $data['c_name']="Products";
        $data['c_id']=0;
        
        $data['brand']=$this->input->get('q');
        
        $params = array();
        $limit_per_page = 12;
        $page = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) : 0;
        if($q=$this->input->get('q'))
            $total_records = $this->blog_view_model->get_total($q);
        else
            $total_records = $this->blog_view_model->get_total();
        if ($total_records > 0)
        {
            if($q=$this->input->get('q'))
                $data['all_blog_data']=$this->blog_view_model->all_blog_info($limit_per_page, $page*$limit_per_page,$q);
            else
                $data['all_blog_data']=$this->blog_view_model->all_blog_info($limit_per_page, $page*$limit_per_page);
            
                 
            $config['base_url'] = base_url() . 'products';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 2;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination float-right">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = '';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = '';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = ' > ';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = ' < ';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';
             
            $this->pagination->initialize($config); 
            // build paging links
            $data["links"] = $this->pagination->create_links();
            $start= (int)$this->uri->segment(2) * $config['per_page']+1;
            $end = ($this->uri->segment(2) == floor($config['total_rows']/ $config['per_page']))? $config['total_rows'] : (int)$this->uri->segment(2) * $config['per_page'] + $config['per_page'];
            $data['result_count']= "Showing ".$start." - ".$end." of ".$config['total_rows']." Results";
        }
        
        $data['main_content']=$this->load->view('frontend/pages/product_view',$data,true);
        $this->load->view('frontend/master',$data);
    }
    

}
