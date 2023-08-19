<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information
    public function about_services_view($about_services_type)
    {
        $data=array();
		
		$data['all_meta_data']=$this->meta_model->all_meta_data();
		$data['pro_cats']=$this->master_model->pro_cats();
		
		$data['page_data']=$this->page_model->view_page_by_id($about_services_type);
		
        $data['main_content']=$this->load->view('frontend/pages/about_us',$data,true);
        $this->load->view('frontend/master', $data);
    } 
    

}
