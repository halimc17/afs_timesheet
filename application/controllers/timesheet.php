<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timesheet extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->Model('matter_assign_model');
		$data['matter_assigned'] =$this->matter_assign_model->get_assign();

		$this->load->view('timesheet_view', $data);
	}		
}
