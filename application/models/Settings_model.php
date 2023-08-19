<?php   if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings_model extends CI_Model {

   
	
    public function update_settings_info() {
		
        $data = array();

        $old_pass = md5($this->input->post('old_pass', true));		
		
        $data['password'] = md5($this->input->post('new_pass', true));
		
        $confirm_new_pass = md5($this->input->post('confirm_new_pass', true));
		
		if($data['password'] == $confirm_new_pass){
			
			
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('user_id', 1);
			$query_row = $this->db->get();
			$the_user = $query_row->row();

			if($old_pass == $the_user->password){
				
				$this->db->update('tbl_user', $data);
				
			}else{
				$sdata=array();
				$sdata['message']="Invalid Old Password.";
				$this->session->set_userdata($sdata);        
				redirect('settings');
			}
			
			
			
			
		}else{
			$sdata=array();
			$sdata['message']="Invalid Combination for New Password & Confirm New Password.";
			$this->session->set_userdata($sdata);        
			redirect('settings');
		}
		
		
    }	
	

}
