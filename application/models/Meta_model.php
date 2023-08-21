<?php   if (!defined('BASEPATH')) exit('No direct script access allowed');

class Meta_model extends CI_Model {
    public function update_meta_info() {
        $data = array();
        $site_meta_id = 1;
        $data['site_title'] = $this->input->post('site_title', true);
		$sdata=array(); 
        $error="";
        $config['upload_path']='uploads/SiteImages/';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['max_size']=2000;
        $config['max_width']=1500;
        $config['max_height']=1500;
        $this->load->library('upload',$config);
		
        if(!$this->upload->do_upload('site_logo')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['site_logo']=$config['upload_path'].$sdata['file_name'];
        }

        if(!$this->upload->do_upload('site_second_logo')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['site_second_logo']=$config['upload_path'].$sdata['file_name'];
        }
        if(!$this->upload->do_upload('fav_icon')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['fav_icon']=$config['upload_path'].$sdata['file_name'];
        }
		
		if(!$this->upload->do_upload('value_mage')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['value_mage']=$config['upload_path'].$sdata['file_name'];
        }
		
		if(!$this->upload->do_upload('profile_image')){
            $error=$this->upload->display_errors();
            echo $error;
        }else{
            $sdata=$this->upload->data();
            $data['profile_image']=$config['upload_path'].$sdata['file_name'];
        }
		
        $data['site_address'] = $this->input->post('site_address', true);
		$data['site_number'] = $this->input->post('site_number', true);		 
		$data['site_email'] = $this->input->post('site_email', true);
		 
        $data['home_description'] = $this->input->post('home_description', true);
        $data['meta_des'] = $this->input->post('meta_des', true);
        $data['meta_key'] = $this->input->post('meta_key', true);
        $data['why_choose'] = $this->input->post('why_choose', true);
        $data['com_value'] = $this->input->post('com_value', true);
        $data['com_profile'] = $this->input->post('com_profile', true);
		
        $this->db->where('site_meta_id', $site_meta_id);
        $this->db->update('tbl_meta', $data);
    }
	
	 public function all_meta_data() {
        $this->db->select('*');
        $this->db->from('tbl_meta');
        $this->db->where('site_meta_id','1');
        $query_result = $this->db->get();
        $mdata = $query_result->row();
        return $mdata;
    }
}
