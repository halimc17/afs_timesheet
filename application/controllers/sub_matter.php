<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sub_matter extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}
	

	public function index()
	{
		$this->load->view('sub_matter_view');
	}	
	
	public function get_record(){
		
	}
	
	
	
	public function addRecord(){
		
		$this->load->model('matter_model');		
		$query = $this->matter_model->get_record();
		$data['records'] = $query;
		
		$this->load->view("subMatter_view", $data);
	}
	
	

}
