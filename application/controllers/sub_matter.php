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

		$data = array();

		$paymentType = $this->uri->segment(4);
		if($paymentType == 1){
			$this->load->model('v_matter_lumpsum_model');
			$matter_lumpsum = json_encode($this->v_matter_lumpsum_model->get_record());			
			$data['lumpsum'] = $matter_lumpsum;

		}elseif($paymentType == 2){

			$this->load->model('v_matter_hourly_model');
			$matter_hourly = json_encode($this->v_matter_hourly_model->get_record());
			$data['hourly'] = $matter_hourly;

		}elseif($paymentType == 3){

			$this->load->model('v_matter_retainer_model');
			$matter_retainer = json_encode($this->v_matter_retainer_model->get_record());
			$data['retainer'] = $matter_retainer;			

		}elseif($paymentType == 4){
			
			$this->load->model('v_matter_successfee_model');
			$matter_successfee = json_encode($this->v_matter_successfee_model->get_record());
			$data['successfee'] = $matter_successfee;			

		}elseif($paymentType == 5){

			$this->load->model('v_matter_probono_model');
			$matter_probono = json_encode($this->v_matter_probono_model->get_record());
			$data['probono'] = $matter_probono;

		}elseif($paymentType == 6){
			$this->load->model('v_matter_project_model');
			$matter_project = json_encode($this->v_matter_project_model->get_record());
			$data['project'] = $matter_project;
		}

		//$obj = json_decode($data);
		//echo $obj->{'id_matter'};

		$this->load->view('sub_matter_view', $data);

	}
	
	
	
	public function addRecord(){
		
		$this->load->model('matter_model');		
		$query = $this->matter_model->get_record();
		$data['records'] = $query;
		
		$this->load->view("subMatter_view", $data);
	}
	
	

}
