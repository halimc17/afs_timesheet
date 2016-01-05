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

		$this->load->model('user_model');
		$data['attorney'] = $this->user_model->selectAttorney();	

		$this->load->model('client_model');
		$data['client'] = $this->client_model->get_records();
		
		$this->load->view('report_view', $data);
		
		
	}	

	public function byMatter(){

		$this->load->model('matter_model');
		$this->load->model('timesheet_model');

		$this->load->model('user_model');
		$data['attorney'] = $this->user_model->selectAttorney();

		$this->load->model('client_model');
		$data['client'] = $this->client_model->get_records();
		

		if($this->input->post("chk-1") == 1){
			$data['matter'] = $this->matter_model->get_matter();
			$data['reports'] = $this->timesheet_model->get_records_by_matter_date();
		}else{
			
			$data['matter'] = $this->matter_model->get_matter();
			$data['reports'] = $this->timesheet_model->get_records_by_matter();
		}

		$this->load->view('report_view', $data);
	}

	public function byAttorney(){
		$this->load->model('timesheet_model');
		$data['timesheet'] = $this->timesheet_model->get_records_by_attorney();

		$this->load->model('client_model');
		$data['client'] = $this->client_model->get_records();

		$this->load->model('user_model');
		$data['attorney'] = $this->user_model->selectAttorney();

		$this->load->view('report_view', $data);
	}

	public function byClient(){

		$this->load->model('timesheet_model');
		$data['timesheetClient'] = $this->timesheet_model->get_records_byClient();

		$this->load->model('client_model');
		$data['client'] = $this->client_model->get_records();

		$this->load->model('user_model');
		$data['attorney'] = $this->user_model->selectAttorney();	

		$this->load->view('report_view', $data);
	}
}