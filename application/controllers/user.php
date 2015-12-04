<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		if($this->session->userdata('logged_in') == FALSE){
			redirect('login');
		}
	}

	public function index(){
		$this->load->model('v_user_model');
		$data['records'] = $this->v_user_model->get_records();

		$this->load->model('divisi_model');
		$data['records_divisi'] = $this->divisi_model->get_records();		//ambil data divisi
		$this->load->model('jabatan_model');
		$data['records_jabatan'] = $this->jabatan_model->get_records();		// ambil data jabatan

		$this->load->view('user_view', $data);
	}

	public function get_record(){
		$this->load->model('user_model');
		$data = $this->user_model->get_record();	
		echo json_encode($data);
	}
	
	public function edit_record(){
		 $data = array(                
                'nama' => $this->input->post('txt_nama_user'),
				'inisial' => $this->input->post('txt_inisial'),
				'mobile1' => $this->input->post('txt_mobile1'),
				'mobile2' => $this->input->post('txt_mobile2'),
				'home_phone' => $this->input->post('txt_home_phone'),
				'email1' => $this->input->post('txt_email1'),
				'email2' => $this->input->post('txt_email2'),
				'ext' => $this->input->post('txt_ext'),
				'status' => $this->input->post('combo_status'),
				'id_divisi' => $this->input->post('combo_divisi'),
				'id_jabatan' => $this->input->post('combo_jabatan'),
				'username' => $this->input->post('txt_username'),
				//'password' => md5($this->input->post('txt_password')),
				'admin' => $this->input->post('check_administrator')
            );
		$this->load->model('user_model');
        $this->user_model->update_record(array('id_user' => $this->input->post('txt_id_user')), $data);
        echo json_encode(array("status" => TRUE));

	}
	
	public function add_record(){
		$data = array(
				'nama' => $this->input->post('txt_nama_user'),
				'inisial' => $this->input->post('txt_inisial'),
				'mobile1' => $this->input->post('txt_mobile1'),
				'mobile2' => $this->input->post('txt_mobile2'),
				'home_phone' => $this->input->post('txt_home_phone'),
				'email1' => $this->input->post('txt_email1'),
				'email2' => $this->input->post('txt_email2'),
				'ext' => $this->input->post('txt_ext'),
				'status' => $this->input->post('combo_status'),
				'id_divisi' => $this->input->post('combo_divisi'),
				'id_jabatan' => $this->input->post('combo_jabatan'),
				'username' => $this->input->post('txt_username'),
				'password' => md5($this->input->post('txt_password')),
				'admin' => $this->input->post('check_administrator')
			);

		//$this->load->model('user_model');
		//$this->user_model->add_record($data);

		//redirect('user/');
		$this->load->model('user_model');
		$insert = $this->user_model->add_record($data);
        echo json_encode(array("status" => TRUE));
	}	

	public function delete_record(){
		$data = $this->uri->segment(3);
		$this->load->model('user_model');
		$this->user_model->delete_record($data);
		
		//$this->index();	
		redirect('user/');
	}

	public function change_active(){
		$data = array(
                'id_user' => $this->uri->segment(3),
                'active' => $this->uri->segment(4)                
            );		

		$this->load->model('user_model');
		$this->user_model->change_active($data);

		redirect('user/');
	}

}