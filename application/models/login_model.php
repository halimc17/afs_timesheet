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
		
		//$query = mysql_query("SELECT * FROM tb_user WHERE username = '".$username."' AND password = '".$password."'");
        // Let's check if there are any results

        $query = mysql_query("SELECT
                                tb_user.id_user,
                                tb_user.nama,
                                tb_user.inisial,
                                tb_user.mobile1,
                                tb_user.mobile2,
                                tb_user.home_phone,
                                tb_user.email1,
                                tb_user.email2,
                                tb_user.ext,
                                tb_user.`status`,
                                tb_user.id_divisi,
                                tb_user.id_jabatan,
                                tb_user.username,
                                tb_user.`password`,
                                tb_user.admin,
                                tb_user.active,
                                tb_user.last_login,
                                tb_jabatan.nama_jabatan,
                                tb_jabatan.rate,
                                tb_divisi.nama_divisi
                                FROM
                                tb_user
                                INNER JOIN tb_jabatan ON tb_jabatan.id_jabatan = tb_user.id_jabatan
                                INNER JOIN tb_divisi ON tb_divisi.id_divisi = tb_user.id_divisi
                                WHERE username = '".$username."' AND password = '".$password."'");
		
		
        if(mysql_num_rows($query) == 1)
        {
            // If there is a user, then create session data
            $row = mysql_fetch_object($query);
			$lastLogin = date("Y-m-d");
            $sessData = array(
                    'id_user' => $row->id_user,
                    'nama' => $row->nama,
                    'username' => $row->username,
                    'inisial' => $row->inisial,
                    'status' => $row->status,
                    'id_jabatan' => $row->id_jabatan,
					'rate' => $row->rate,
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