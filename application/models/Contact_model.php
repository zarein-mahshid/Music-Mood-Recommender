<?php
class Contact_model extends CI_Model{
	//بارگذاری دیتابیس
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	//ذخیره پیام دریافتی در جدول
	
	public function save_message($data)
	{
		$insert_data=[
			'name'=>$data['name'],
			'email'=>$data['email'],
			'subject'=>$data['subject'],
			'message'=>$data['message']
		];
		
		return $this->db->insert('contact_messages', $insert_data);
	}
	
	
}

?>