<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    } 
  // News information
    public function add_news()
    {
      $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/add_news','',true);
        $this->load->view('backend/admin_master', $data);
    } 
    public function save_news()
    {
        $this->news_model->save_news_info();
        $sdata=array();
        $sdata['message']="Save Product successfully";
        $this->session->set_userdata($sdata);
		redirect('all_news/news_list');
    }
    
    /*
    public function news_list()
    {
        $data=array();
        $data['all_news_info']=$this->news_model->all_news_info();
   
        $data['admin_main_content']=$this->load->view('backend/pages/news_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    */
     public function delete_news($news_id)
    {
        $this->news_model->delete_news_info($news_id);
        $sdata=array();
        $sdata['message']="Delete news information successfully";
        $this->session->set_userdata($sdata);
        redirect('all_news/news_list');
    }
     public function edit_news($news_id)
    {
        $data=array();
        $data['select_news_by_id']=$this->news_model->select_news_by_id($news_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_news',$data,true);
        $this->load->view('backend/admin_master',$data);
    }
    public function update_news()
    {
        $this->news_model->update_news_info();
        $sdata=array();
        $sdata['message']="Update product successfully";
        $this->session->set_userdata($sdata);
        
        redirect('all_news/news_list');
    }  
    

}
