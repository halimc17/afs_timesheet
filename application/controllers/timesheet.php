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
		$this->load->Model('worktype_model');
		$data['matter_assigned'] = $this->matter_assign_model->get_assign();
		$data['worktype'] = $this->worktype_model->get_records();

		$this->load->view('timesheet_view', $data);
	}	

	public function add_record(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_'),
                'id_user' => $this->session->userdata('id_user'),
                'input_date' => $this->input->post('txt_date'),
                //'hour' => $this->input->post('txt_hours'),
                'id_work_type' => $this->input->post('combo_worktype'),
                'description' => $this->input->post('txt_description'),
                'start' => $this->input->post('txt_start'),
                'end' => $this->input->post('txt_end')
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
                'jumlah' => $this->input->post('txt_jumlah'),
                'keterangan' => $this->input->post('txt_keterangan')
            );

		$this->load->model('reimburstment_model');
        $this->reimburstment_model->add_record($data);
        echo json_encode(array("status" => TRUE));
	}	

	public function detail(){
		$this->load->model('matter_model');
		$this->load->model('timesheet_model');
		$this->load->Model('worktype_model');
		$this->load->Model('reimburstment_model');
		
		$matter = json_encode($this->matter_model->get_record2());			
		$data['timesheet'] = $this->timesheet_model->get_records();			
		$data['matter'] = $matter;	
		$data['worktype'] =$this->worktype_model->get_records();	
		$data['reimburstment'] =$this->reimburstment_model->get_record();	
		//$data['timesheet'] = $timesheet;		

		$this->load->view('matter_detail_view', $data);
		//echo $timesheet;
	}

	public function get_record(){
		$this->load->model('timesheet_model');
		$data = $this->timesheet_model->get_record();

		echo json_encode($data);
	}

	public function edit_record(){
		$data = array(
				'input_date' => $this->input->post('txt_date'),
				'description' => $this->input->post('txt_description'),
				'id_work_type' => $this->input->post('combo_worktype'),
				'start' => $this->input->post('txt_start'),
				'end' => $this->input->post('txt_end')
			);

		$this->load->model('timesheet_model');
        $this->timesheet_model->update_record(array('id_timesheet' => $this->input->post('txt_id_timesheet')), $data);

        echo json_encode(array("status" => TRUE));
	}
}
