<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
        $this->load->model('blog_model');
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    } 
  // blog information
    public function add_blog(){
      $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/add_blog','',true);
        $this->load->view('backend/admin_master', $data);
    } 
    public function save_blog(){
        $this->blog_model->save_blog_info();
        $sdata=array();
        $sdata['message']="Save blog information successfully";
        $this->session->set_userdata($sdata);
		redirect('blog-list');
    }
    
    
    public function blog_list(){
        // init params
        $params = array();
        $limit_per_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->blog_model->get_total();
     
        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->blog_model->get_current_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'blog-list';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';
             
            $this->pagination->initialize($config); 
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
      //  $this->load->view('user_listing', $params);
        $data=array();
       // $data['all_news_info']=$this->news_model->all_news_info();
        $data['admin_main_content']=$this->load->view('backend/pages/blog_list',$params,true);
        $this->load->view('backend/admin_master', $data);
    }
    
    public function delete_blog($blog_id){
        $this->blog_model->delete_blog_info($blog_id);
        $sdata=array();
        $sdata['message']="Delete blog information successfully";
        $this->session->set_userdata($sdata);
        redirect('blog-list');
    }
    public function edit_blog($blog_id){
        $data=array();
        $data['blog']=$this->blog_model->select_blog_by_id($blog_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_blog',$data,true);
        $this->load->view('backend/admin_master',$data);
    }
    public function update_blog(){
        $this->blog_model->update_blog_info();
        $sdata=array();
        $sdata['message']="Update blog information successfully";
        $this->session->set_userdata($sdata);
        
        redirect('blog-list');
    }  
    

}
