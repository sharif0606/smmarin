<?php   if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page_model extends CI_Model {

    public function save_page_info() {
		
        $data = array();
        
		$data['page_title'] = $this->input->post('page_title', true);
		
        $data['page_type'] = $this->input->post('page_type', true);		
        
		$data['page_status'] = $this->input->post('page_status',true);
        
		$data['page_description'] = $this->input->post('page_description', true);
        
        $this->db->insert('tbl_page', $data);
    }

    public function all_page_info() {
		
        $this->db->select('*');
        $this->db->from('tbl_page');
		
        $this->db->order_by('page_id', 'DESC');
        $query_result = $this->db->get();
        $page_info = $query_result->result();
        return $page_info;
    }

	public function delete_page_info($page_id) {
        $this->db->where('page_id', $page_id);
        $this->db->where('page_id !=',1);
        $this->db->where('page_id !=',2);
        $this->db->delete('tbl_page');
    }
	
	public function select_page_by_id($page_id) {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('page_id', $page_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
	
    public function update_page_info() {
        $data = array();
		
        $page_id = $this->input->post('page_id', true);

        $data['page_title'] = $this->input->post('page_title', true);
		
        $data['page_type'] = $this->input->post('page_type', true);
		
         $data['page_description'] = $this->input->post('page_description', false);
		 
        $data['page_status'] = $this->input->post('page_status', true);
        
        $this->db->where('page_id', $page_id);
        $this->db->update('tbl_page', $data);
    }
    
	public function view_page_by_id($about_services_type) {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('page_id', $about_services_type);
        $this->db->where('page_status',1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
