<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_cntrl extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Music_model');
		
		$this->load->model('Contact_model');
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		$this->load->view('homepage');
	}
	
	public function contactme()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|max_length[100]');
		$this->form_validation->set_rules('subject', 'subject', 'required|trim|max_length[255]');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');
		
		$this->form_validation->set_message('required','فیلد %s الزامی است');
		$this->form_validation->set_message('valid_email','یک ایمیل معتبر وارد کنید');
		$this->form_validation->set_message('max_length','کاراکتر باشد %s نباید بیشتر از %s باشد');
		
		if ($this->input->method()==='post'){
			if($this->form_validation->run()==TRUE){
				$form_data=[
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'subject'=>$this->input->post('subject'),
					'message'=>$this->input->post('message')
			];
				if ($this->Contact_model->save_message($form_data)){
				redirect(base_url());
				}
			} 
		} 
		
		$this->load->view('contactme');
	}
	
	public function aboutme()
	{
		$this->load->view('aboutme');
	}
	
	public function musicFacts()
	{
		$this->load->view('musicFacts');
	}
	
	public function selectMood()
	{
		$data['moods']=$this->Music_model->get_moods();
		$this->load->view('select_mood', $data);
	}

	public function showMusic($mood)
	{
		$data['songs']=$this->Music_model->get_songs_by_mood($mood);
		$data['mood']=$mood;
		$this->load->view('show_music', $data);	
	}
	
}
