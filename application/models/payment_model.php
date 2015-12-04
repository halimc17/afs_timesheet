<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Payment_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	public function get_records(){
		
		$query = $this->db->query("SELECT *	FROM tb_paymenttype");
		return $query->result();
	}

}

?>



