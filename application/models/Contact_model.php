<?php   if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function send_contact() {
       
       	$data = array();
        $data['contact_name'] = $this->input->post('contact_name', true);
        $data['contact_email'] = $this->input->post('contact_email', true);		
        $data['contact_subject'] = $this->input->post('contact_subject', true);
        $data['contact_message'] = $this->input->post('contact_message', true);
       	
	$to = "sohelbhuiyan1213@gmail.com";
	$subject = $data['contact_subject'];
	
	        
	
	$message = "From: ".$data['contact_name']." <".$data['contact_email'].">\r\n \r\nSubject: ".$data['contact_subject']."\r\n \r\nMessage: \r\n".$data['contact_message'];
	
	
	mail($to,$subject,$message);
		
    }

}
