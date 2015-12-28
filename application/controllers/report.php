<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}

	public function index()
	{		
		
		$this->load->view('report_view');
		
		
	}	

	public function byMatter(){
		$this->load->model('timesheet_model');
		$data = $this->timesheet_model->get_records_by_matter();

		echo json_encode($data);
	}
}