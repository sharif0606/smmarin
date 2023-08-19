<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Photo_view extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information

    public function all_photo()
    {
       $data=array();
		
		$data['all_meta_data']=$this->meta_model->all_meta_data();
		$data['pro_cats']=$this->master_model->pro_cats();
       //$data['title']='Home';
	   
       $data['all_photo_view_info']=$this->photo_view_model->all_photo_view_info();
       //$data['latest_news_view_info']=$this->news_view_model->latest_news_view_info();
       $data['main_content']=$this->load->view('frontend/pages/photo_view',$data,true);
       $this->load->view('frontend/master',$data);
    }

    

}
