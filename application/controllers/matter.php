<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matter extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}
	

	public function index()
	{
		$this->load->model('v_matter_lumpsum_model');									
		$data['records'] = $this->v_matter_lumpsum_model->get_records(); //ambil semua data matter lumpsum					
		$this->load->model('v_matter_hourly_model');
		$data['records_hourly'] = $this->v_matter_hourly_model->get_records(); //ambil semua data matter hourly		
		
		//$this->load->model('v_matter_retainer_model');
		//$data['records_retainer'] = $this->v_matter_retainer_model->get_records(); //ambil semua data matter retainer		
		$this->load->model('v_client_retainer_model');
		$data['records_client_retainer'] = $this->v_client_retainer_model->get_records(); //ambil semua data client matter retainer		
		
		$this->load->model('v_matter_successfee_model');
		$data['records_successfee'] = $this->v_matter_successfee_model->get_records(); //ambil semua data matter success fee						
		$this->load->model('v_matter_probono_model');
		$data['records_probono'] = $this->v_matter_probono_model->get_records(); //ambil semua data matter probono						
		$this->load->model('v_matter_project_model');
		$data['records_project'] = $this->v_matter_project_model->get_records(); //ambil semua data matter project

		$this->load->model('jabatan_model');
		$data['records_jabatan'] = $this->jabatan_model->get_records(); // ambil data rate dari setiap jabatan
		
		$this->load->model('client_model');
		$data['records_client'] = $this->client_model->get_records(); //ambil semua records client
		
		$this->load->view("matter_view", $data);		
	}	

	public function get_record(){
		$this->load->model('v_matter_lumpsum_model');
		$data = $this->v_matter_lumpsum_model->get_record();			

		echo json_encode($data);
	}

	public function get_record_hourly(){
		$this->load->model('v_matter_hourly_model');
		$data = $this->v_matter_hourly_model->get_record();	
		echo json_encode($data);
	}

	public function get_record_retainer(){
		$this->load->model('v_matter_retainer_model');
		$data = $this->v_matter_retainer_model->get_record();	
		echo json_encode($data);
	}

	public function get_record_successfee(){
		$this->load->model('v_matter_successfee_model');
		$data = $this->v_matter_successfee_model->get_record();	
		echo json_encode($data);
	}

	public function get_record_probono(){
		$this->load->model('v_matter_probono_model');
		$data = $this->v_matter_probono_model->get_record();	
		echo json_encode($data);
	}

	public function get_record_project(){
		$this->load->model('v_matter_project_model');
		$data = $this->v_matter_project_model->get_record();	
		echo json_encode($data);
	}

	public function add_record_lumpsum(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

		$data2 = array(
				'id_matter' => $this->input->post('txt_id_matter'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan')
			);


		$this->load->model('matter_model');
		$this->load->model('lumpsum_model');

        $this->matter_model->add_record($data);
        $this->lumpsum_model->add_record($data2);

        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/1');
	}

	public function add_record_hourly(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_h'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_h'),
				'managing_partner' => $this->input->post('txt_managing_partner'),
				'partner' => $this->input->post('txt_partner'),
				'junior_partner' => $this->input->post('txt_junior_partner'),
				'senior_associate' => $this->input->post('txt_senior_associate'),
				'mid_associate' => $this->input->post('txt_mid_associate'),
				'junior_associate' => $this->input->post('txt_junior_associate'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan')
			);

        $this->load->model('matter_model');
		$this->load->model('hourly_model');

        $this->matter_model->add_record($data);
        $this->hourly_model->add_record($data2);
        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/2');
	}

	public function edit_record_hourly(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_h'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_h'),
				'managing_partner' => $this->input->post('txt_managing_partner'),
				'partner' => $this->input->post('txt_partner'),
				'junior_partner' => $this->input->post('txt_junior_partner'),
				'senior_associate' => $this->input->post('txt_senior_associate'),
				'mid_associate' => $this->input->post('txt_mid_associate'),
				'junior_associate' => $this->input->post('txt_junior_associate'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan')
			);

		$this->load->model('matter_model');
		$this->load->model('hourly_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_h')), $data);
        $this->hourly_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_h')), $data2);
        echo json_encode(array("status" => TRUE));
	}

	public function edit_record_lumpsum(){
		 $data = array(
                'id_matter' => $this->input->post('txt_id_matter'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

		$data2 = array(
				'id_matter' => $this->input->post('txt_id_matter'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan')
			);

		$this->load->model('matter_model');
		$this->load->model('lumpsum_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter')), $data);
        $this->lumpsum_model->update_record(array('id_matter' => $this->input->post('txt_id_matter')), $data2);
        echo json_encode(array("status" => TRUE));
	}

	
	public function add_record_client_retainer(){
		$data = array(              
                'id_client' => $this->input->post('combo_client'),                                
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date'),
                'jangka_waktu' => $this->input->post('txt_jangka_waktu'),
				'biaya' => $this->input->post('txt_biaya'),
				'menit' => $this->input->post('txt_jam'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan')	             
            );

		$this->load->model('retainer_model');
		$this->retainer_model->add_client($data);
		echo json_encode(array("status" => TRUE));
	}
	public function add_matter_retainer(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_r2'),
                'id_retainer' => $this->input->post('txt_id_retainer'),
                'matter' => $this->input->post('txt_matter'),         
                'description' => $this->input->post('txt_keterangan')             
            );

		$this->load->model('retainer_model');
		$this->retainer_model->add_matter_retainer($data);
		echo json_encode(array("status" => TRUE));
	}
	

	public function add_record_retainer(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_r'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_r'),
				'jangka_waktu' => $this->input->post('txt_jangka_waktu'),
				'biaya' => $this->input->post('txt_biaya'),
				'jam' => $this->input->post('txt_jam'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan')				
			);

        $this->load->model('matter_model');
		$this->load->model('retainer_model');

        $this->matter_model->add_record($data);
        $this->retainer_model->add_record($data2);
        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/3');
	}

	public function edit_record_retainer(){
		 $data = array(
                'id_matter' => $this->input->post('txt_id_matter_r'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_r'),
				'jangka_waktu' => $this->input->post('txt_jangka_waktu'),
				'biaya' => $this->input->post('txt_biaya'),
				'jam' => $this->input->post('txt_jam'),
				'disc' => $this->input->post('txt_disc'),
				'description' => $this->input->post('txt_keterangan')				
			);

		$this->load->model('matter_model');
		$this->load->model('retainer_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_r')), $data);
        $this->retainer_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_r')), $data2);
        echo json_encode(array("status" => TRUE));
	}


	public function add_record_successfee(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_s'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_s'),
				'biaya' => $this->input->post('txt_biaya'),
				'description' => $this->input->post('txt_keterangan')				
			);

        $this->load->model('matter_model');
		$this->load->model('successfee_model');

        $this->matter_model->add_record($data);
        $this->successfee_model->add_record($data2);
        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/4');
	}

	function edit_record_successfee(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_s'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_s'),
				'biaya' => $this->input->post('txt_biaya'),
				'description' => $this->input->post('txt_keterangan')				
			);

        $this->load->model('matter_model');
		$this->load->model('successfee_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_s')), $data);
        $this->successfee_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_s')), $data2);
        echo json_encode(array("status" => TRUE));
	}

	public function add_record_probono(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_p'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_p'),				
				'description' => $this->input->post('txt_keterangan')				
			);

        $this->load->model('matter_model');
		$this->load->model('probono_model');

        $this->matter_model->add_record($data);
        $this->probono_model->add_record($data2);
        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/5');
	}

	function edit_record_probono(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_p'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

        $data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_p'),				
				'description' => $this->input->post('txt_keterangan')				
			);

        $this->load->model('matter_model');
		$this->load->model('probono_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_p')), $data);
        $this->probono_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_p')), $data2);
        echo json_encode(array("status" => TRUE));
	}

	public function add_record_project(){

		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_pr'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

		$data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_pr'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan')
			);


		$this->load->model('matter_model');
		$this->load->model('project_model');

        $this->matter_model->add_record($data);
        $this->project_model->add_record($data2);
        echo json_encode(array("status" => TRUE));
        //redirect('matter/index/6');
	}

	function edit_record_project(){
		$data = array(
                'id_matter' => $this->input->post('txt_id_matter_pr'),
                'id_client' => $this->input->post('combo_client'),
                'id_payment' => $this->input->post('txt_id_payment'),
                'matter' => $this->input->post('txt_matter'),
                'open_date' => $this->input->post('txt_open_date'),
                'close_date' => $this->input->post('txt_close_date')                
            );

		$data2 = array(
				'id_matter' => $this->input->post('txt_id_matter_pr'),
				'success_fee' => $this->input->post('txt_success_fee'),
				'term1' => $this->input->post('txt_term1'),
				'term2' => $this->input->post('txt_term2'),
				'term3' => $this->input->post('txt_term3'),
				'desc_term1' => $this->input->post('txt_desc_term1'),
				'desc_term2' => $this->input->post('txt_desc_term2'),
				'desc_term3' => $this->input->post('txt_desc_term3'),
				'description' => $this->input->post('txt_keterangan')
			);

        $this->load->model('matter_model');
		$this->load->model('project_model');
        $this->matter_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_pr')), $data);
        $this->project_model->update_record(array('id_matter' => $this->input->post('txt_id_matter_pr')), $data2);
        echo json_encode(array("status" => TRUE));
	}

	public function delete_record(){
		$data = $this->uri->segment(3);
		
		$this->load->model('matter_model');		
		$this->load->model('lumpsum_model');
		$this->load->model('hourly_model');

		$this->matter_model->delete_record($data);
		$this->lumpsum_model->delete_record($data);
		$this->hourly_model->delete_record($data);
		
		redirect('matter/');
	}

	public function change_active(){
		$data = array(
                'id_matter' => $this->uri->segment(3),
                'active' => $this->uri->segment(4)                
            );		

		$this->load->model('matter_model');
		$this->matter_model->change_active($data);

		redirect('matter/');
	}

	public function assign(){
		$this->load->model('matter_model');
		$this->load->model('user_model');
		$this->load->model('v_matter_assign_model');

		$data['records_matter'] = $this->matter_model->get_record_assign();
		$data['records_user'] = $this->user_model->get_records();
		$data['records_assign'] = $this->v_matter_assign_model->get_records_by_id_matter();

		$this->load->view('assign_view', $data);
	}


	public function assign_retainer(){
		$this->load->model('user_model');
		$this->load->model('retainer_model');
		$this->load->model('v_matter_retainer_assign_model');

		$data['records_retainer'] = $this->retainer_model->get_record_assign();
		$data['records_user'] = $this->user_model->get_records();
		$data['records_assign'] = $this->v_matter_retainer_assign_model->get_records_by_id_matter();

		$this->load->view('assign_retainer_view', $data);

	}

	public function assign_user(){
		$data = array(
			'id_matter' => $this->input->post('txt_id_matter'),
			'id_user' => $this->input->post('combo_user')
			);

		$this->load->model('matter_assign_model');
		$this->matter_assign_model->add_record($data);
		echo json_encode(array("status" => TRUE));
	}

	public function delete_assign(){
		$this->load->model('matter_assign_model');
		$this->matter_assign_model->delete_record($this->uri->segment(4));

		redirect('matter/assign/'.$this->uri->segment(3));
	}

	public function retainer_detail(){
		$this->load->model('retainer_model');		
		if($query = $this->retainer_model->get_detail_retainer()){
					$data['records_retainer'] = $query;
				}
		if($query = $this->retainer_model->get_retainer_client()){
			$data['records_client'] = $query;
		}	

		$this->load->view('retainer_detail_view', $data);
	}
}
