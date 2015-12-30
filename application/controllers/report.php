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

		$this->load->model('matter_model');
		$this->load->model('timesheet_model');
		
		$data['matter'] = $this->matter_model->get_matter();
		$data['reports'] = $this->timesheet_model->get_records_by_matter();

		//var_dump($data);
		//echo json_encode($data);
		$this->load->view('report_view', $data);
	}
}