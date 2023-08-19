<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Photo extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
           redirect('abcd');
        }
    }  
  // News information
    public function add_photo()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('backend/pages/add_photo','',true);
        $this->load->view('backend/admin_master', $data);
    } 
    public function save_photo()
    {
        $this->photo_model->save_photo_info();
        $sdata=array();
        $sdata['message']="Save photo information successfully";
        $this->session->set_userdata($sdata);
       redirect('photo-list');
    }

    public function photo_list()
    {
        $data=array();
        $data['all_photo_info']=$this->photo_model->all_photo_info();
        $data['admin_main_content']=$this->load->view('backend/pages/photo_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
     public function delete_photo($photo_id)
    {
        $this->photo_model->delete_photo_info($photo_id);
        $sdata=array();
        $sdata['message']="Delete photo information successfully";
        $this->session->set_userdata($sdata);
        redirect('photo-list');
    }
     public function edit_photo($photo_id)
    {
        $data=array();
        $data['select_photo_by_id']=$this->photo_model->select_photo_by_id($photo_id);
        $data['admin_main_content']=$this->load->view('backend/pages/edit_photo',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
    public function update_photo()
    {
        $this->photo_model->update_photo_info();
        $sdata=array();
        $sdata['message']="Update photo information successfully";
        $this->session->set_userdata($sdata);
        
        redirect('photo-list');
    }  

}
