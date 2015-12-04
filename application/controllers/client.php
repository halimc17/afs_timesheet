<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}

	public function index()
	{
				$data = array();	
				$this->load->model('client_model');
				if($query = $this->client_model->get_records()){
					$data['records'] = $query;
				}			
				$this->load->view('client_view', $data);		
	}	
	
	public function add_record(){
		$data = array(
			'nama_client' => $this->input->post('txt_nama_client'),
			'contact_person' => $this->input->post('txt_contactPerson'),
			'mobile1' => $this->input->post('txt_mobile1'),
			'mobile2' => $this->input->post('txt_mobile2'),
			'email' => $this->input->post('txt_email'),
			'address' => $this->input->post('txt_address'),
			'inisial' => $this->input->post('txt_inisial'),
			'keterangan' => $this->input->post('txt_keterangan'));
			
		$this->load->model('client_model');
		$this->client_model->add_record($data);
		
		
		$this->index();
	}
	
	public function delete_record(){
		$data = $this->uri->segment(3);
		$this->load->model('client_model');
		$this->client_model->delete_record($data);
		
		//$this->index();	
		redirect('client/');
	}
	
	public function get_record(){
		$this->load->model('client_model');
		$data = $this->client_model->get_record();	
		echo json_encode($data);
	}
	
	public function update_record(){
		$data = array(
                'nama_client' => $this->input->post('txt_nama_client2'),
                'contact_person' => $this->input->post('txt_contactPerson2'),
                'mobile1' => $this->input->post('txt_mobile12'),
                'mobile2' => $this->input->post('txt_mobile22'),
                'email' => $this->input->post('txt_email2'),
                'address' => $this->input->post('txt_address2'),
                'inisial' => $this->input->post('txt_inisial2'),
                'keterangan' => $this->input->post('txt_keterangan2')
            );
		$this->load->model('client_model');
		
		$this->client_model->update_record(array('id_client' => $this->input->post('txt_id_client2')), $data);
		//$this->client_model->update_record($data);
        echo json_encode(array("status" => TRUE));
	}

	
}
