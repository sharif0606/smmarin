<?php  defined('BASEPATH') OR exit('No direct script access allowed');
 
class All_news extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    } 
    public function news_list()
    {
       // load model
        $this->load->model('all_news_model');
        // init params
        $params = array();
        $limit_per_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->all_news_model->get_total();
     
        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->all_news_model->get_current_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'all_news/news_list';
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
        $data['admin_main_content']=$this->load->view('backend/pages/news_list',$params,true);
        $this->load->view('backend/admin_master', $data);
    }
}