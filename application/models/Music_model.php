<?php
class Music_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_moods()
	{
		$this->db->select('mood');
		$this->db->distinct();
		return $this->db->get('music')->result();
	}
	
	public function get_songs_by_mood($mood)
	{
		$this->db->where('mood', $mood);
		return $this->db->get('music')->result();
	}
}



?>