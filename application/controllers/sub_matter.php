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
		$this->load->model('sublumpsum_model');
		$this->load->model('subhourly_model');
		$this->load->model('subretainer_model');
		$this->load->model('assigned_model');
		$this->load->model('reimburstment_model');

		$data['records_sublumpsum'] = $this->sublumpsum_model->get_record();
		$data['records_subhourly'] = $this->subhourly_model->get_record();
		$data['records_subretainer'] = $this->subretainer_model->get_record();
		$data['records_assigned'] = $this->assigned_model->get_assign_timesheet();
		$data['reimburstment'] = $this->reimburstment_model->get_records();

		$this->load->view('sub_matter_view', $data);

	}
	
	
	
	public function addRecord_subLumpsum(){
		$data = array('id_submatter' => $this->input->post('txt_id_subMatter'),
				'id_matter' => $this->input->post('txt_id_matter_h'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_sub_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date'));

		$data2 = array('id_submatter' => $this->input->post('txt_id_subMatter'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan'));

		$this->load->model('submatter_model');
		$this->load->model('sublumpsum_model');

        $this->submatter_model->add_record($data);
        $this->sublumpsum_model->add_record($data2);

        echo json_encode(array("status" => TRUE));
		
	}

	public function editRecord_subLumpsum(){

		$data = array(
                'id_submatter' => $this->input->post('txt_id_subMatter'),
                'id_matter' => $this->input->post('txt_id_matter_h'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_sub_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

		$data2 = array(
				'id_submatter' => $this->input->post('txt_id_subMatter'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan')
			);

		$this->load->model('submatter_model');
		$this->load->model('sublumpsum_model');
        $this->submatter_model->update_record(array('id_submatter' => $this->input->post('txt_id_subMatter')), $data);
        $this->sublumpsum_model->update_record(array('id_submatter' => $this->input->post('txt_id_subMatter')), $data2);
        echo json_encode(array("status" => TRUE));

	}

	public function addRecord_subHourly(){
		$data = array('id_submatter' => $this->input->post('txt_id_subMatter_hr'),
				'id_matter' => $this->input->post('txt_id_matter_hourly'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_sub_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date'));

		$data2 = array('id_submatter' => $this->input->post('txt_id_subMatter_hr'),
				'managing_partner' => $this->input->post('txt_managing_partner'),
				'partner' => $this->input->post('txt_partner'),
				'junior_partner' => $this->input->post('txt_junior_partner'),
				'senior_associate' => $this->input->post('txt_senior_associate'),
				'mid_associate' => $this->input->post('txt_mid_associate'),
				'junior_associate' => $this->input->post('txt_junior_associate'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan'));

		$this->load->model('submatter_model');
		$this->load->model('subhourly_model');

        $this->submatter_model->add_record($data);
        $this->subhourly_model->add_record($data2);

        echo json_encode(array("status" => TRUE));
		
	}

	public function addRecord_subRetainer(){
		$data = array('id_submatter' => $this->input->post('txt_id_subMatter_rt'),
				'id_matter' => $this->input->post('txt_id_matter_r'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_sub_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date'));

		$data2 = array('id_submatter' => $this->input->post('txt_id_subMatter_rt'),
				'jangka_waktu' => $this->input->post('txt_jangka_waktu'),
				'biaya' => $this->input->post('txt_biaya'),
				'jam' => $this->input->post('txt_jam'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan'));

		$this->load->model('submatter_model');
		$this->load->model('subretainer_model');

        $this->submatter_model->add_record($data);
        $this->subretainer_model->add_record($data2);

        echo json_encode(array("status" => TRUE));	
		
	}

	public function addRecord_subSuccessfee(){
		
		
	}

	public function addRecord_subProbono(){
		
		
	}

	public function addRecord_subProject(){
		
		
	}

	public function getRecord_lumpsum(){
		$this->load->model('sublumpsum_model');
		$data = $this->sublumpsum_model->get_record2();			

		echo json_encode($data);
	}

	public function assign(){

	}
}