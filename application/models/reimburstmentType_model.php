<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class reimburstmentType_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	public function get_records(){
		$this->db->order_by("id_type", "asc");
		$query = $this->db->get('tb_reimburstment_type');
		return $query->result();
	}
}

?>



