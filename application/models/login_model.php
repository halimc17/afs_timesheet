<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function validate(){
        // grab user input
        $username = $this->input->post('txt_username');
        $password = md5($this->input->post('txt_password'));
  
        // Prep the query
        //$this->db->where('username', $username);
        //$this->db->where('password', $password);

        // Run the query
        //$query = $this->db->get('tb_personil');
		
		$query = mysql_query("SELECT * FROM tb_user WHERE username = '".$username."' AND password = '".$password."'");
        // Let's check if there are any results
		
		
        if(mysql_num_rows($query) == 1)
        {
            // If there is a user, then create session data
            $row = mysql_fetch_object($query);
			$lastLogin = date("Y-m-d");
            $sessData = array(
                    'id_user' => $row->id_user,
                    'nama' => $row->nama,
                    'username' => $row->username,
                    'status' => $row->status,
					'id_jabatan' => $row->id_jabatan,
                    'logged_in' => TRUE
                    );
            $this->load->library('session');    
			$this->session->set_userdata($sessData);
					
			return true;			
        }		
		return false;		
     
    }

}

?>