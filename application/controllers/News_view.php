<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_view extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information


    public function category_info_view($category_id)
    {
       $data=array();
		
		$data['all_meta_data']=$this->meta_model->all_meta_data();
		$data['pro_cats']=$this->master_model->pro_cats();
       $data['title']='Home';
       $data['category_view_info']=$this->news_view_model->category_view_info($category_id);
       $data['latest_news_view_info']=$this->news_view_model->latest_news_view_info();
       $data['main_content']=$this->load->view('frontend/pages/category_view',$data,true);
       $this->load->view('frontend/master',$data);
    }
    
	/*
    public function news_info_view($news_id)
    {
       $data=array();
       $data['title']='Home';
       $data['category_name_view_info']=$this->news_view_model->category_name_view_info($news_id);
       $data['news_view_info']=$this->news_view_model->news_view_info($news_id);
       $data['latest_news_view_info']=$this->news_view_model->latest_news_view_info();
       $data['main_content']=$this->load->view('frontend/pages/news_view',$data,true);
       $this->load->view('frontend/master',$data);
    }*/
    
     public function news_info_view($none1,$none2,$news_id,$cat_id)
    {
       $data=array();
		
		$data['all_meta_data']=$this->meta_model->all_meta_data();
        $data['title']='Details';
       
      // $data['news_title_view_info']=$this->news_view_model->news_title_view_info($news_id);
        
        
		$data['pro_cats']=$this->master_model->pro_cats();
      // $data['category_name_view_info']=$this->news_view_model->category_name_view_info($news_id);
       
     // $data['news_view_info']=$this->news_view_model->news_view_info($news_id);
	 
      $data['full_news_view']=$this->news_view_model->full_news_view($news_id);
	  
      $data['latest_news_view']=$this->news_view_model->latest_news_view($news_id,$cat_id);
	  
	  $data['related_news_view']=$this->news_view_model->related_news_view($news_id,$cat_id);
     
      // $data['latest_news_view_info']=$this->news_view_model->latest_news_view_info();
	  
       $data['main_content']=$this->load->view('frontend/pages/news_view',$data,true);
	   
       $this->load->view('frontend/master',$data);
    }
    
    
    
    public function top_news_info_view()
    {
       $data=array();
      
       $data['top_news_view_info']=$this->news_view_model->top_news_view_info();
       $data['latest_news_view_info']=$this->news_view_model->latest_news_view_info();
       $data['main_content']=$this->load->view('frontend/pages/top_news_view',$data,true);
       $this->load->view('frontend/master',$data);
    }

    
    
    
    
    
    public function news_print_view($news_id)
    {
       
      $data=array();
     
      $data['news_print_view_info']=$this->news_view_model->news_print_view_info($news_id);

    // echo '<pre>';
    //  print_r($data);
    // exit();
        //$this->load->view('frontend/pages/news_print_view','',true);
      $data['print_content']=$this->load->view('frontend/pages/news_print_view',$data,true);
      $this->load->view('frontend/print_master',$data);
    }
    
    

 
    

}
