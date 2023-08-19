<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public function index(){
        $data=array();
		$data['all_meta_data']=$this->meta_model->all_meta_data();
		$data['services_list']=$this->master_model->services_list();
		$data['home_page_product_new']=$this->master_model->home_page_product('new_item');
		$data['home_page_product_popular']=$this->master_model->home_page_product('popular_item');
		$data['home_page_product_range']=$this->master_model->home_page_product_range();
		$data['pro_cats']=$this->master_model->pro_cats();
		$data['home_page_gallary_row_1']=$this->master_model->home_page_gallary_row_1();
		$data['home_page_gallary_row_2']=$this->master_model->home_page_gallary_row_2();
		$data['all_photo_view_info']=$this->photo_view_model->all_photo_view_info();
		$data['slide_news']=$this->master_model->slide_news();
		$data['slide_news_1st']=$this->master_model->slide_news_1st();
		$data['main_content']=$this->load->view('frontend/pages/home',$data,true);
		$this->load->view('frontend/master',$data);
    }
}