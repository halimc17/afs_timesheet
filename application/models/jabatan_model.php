<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     	
		
		$query = $this->db->get('tb_jabatan');		
		return $query->result();
     
    }
	
	public function get_record(){
		$query = $this->db->query("select * from tb_jabatan where id_client = ".$this->uri->segment(3));
		return $query->result();
	}
}
?>