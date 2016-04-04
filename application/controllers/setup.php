<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}

	public function index()
	{		
		
		$this->load->model('setup_model');
		if($query = $this->setup_model->get_usd()){
					$data['records'] = $query;
				}			
		$this->load->view('setup_view', $data);
	}	
}