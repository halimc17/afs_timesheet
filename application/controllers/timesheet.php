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

	public function add_record(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_'),
                'id_user' => $this->session->userdata('id_user'),
                'input_date' => $this->input->post('txt_date'),
                'hour' => $this->input->post('txt_hours'),
                'description' => $this->input->post('txt_description')
            );

		$this->load->model('timesheet_model');
        $this->timesheet_model->add_record($data);
        echo json_encode(array("status" => TRUE));
	}

	public function add_record_reimburstment(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_'),
                'id_user' => $this->session->userdata('id_user'),
                'input_date' => $this->input->post('txt_date'),
                'type_reimburstment' => $this->input->post('combo_reimburstment'),
                'jumlah' => $this->input->post('txt_jumlah')
            );

		$this->load->model('reimburstment_model');
        $this->reimburstment_model->add_record($data);
        echo json_encode(array("status" => TRUE));
	}	

	public function detail(){
		
	}
}
