<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index(){

			$this->loginF();		
	}

	public function prosesLogin()
	{
		$username = $this->input->post('txt_username');
		$password=md5($this->input->post('txt_password'));
		$result = $this->login_model->validate($username,$password);
		
		if($result) {	

			redirect('home/');
			
		}else{        
			
			$this->index();
		}
		
	}	

	public function loginF(){
		$this->load->view("login_view");
	}

	public function logout()
	{
		$newdata = array(
		'idpersonil'   =>'',
		'nama'  =>'',
		'username'     => '',
		'loggedin' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}
	
	
}