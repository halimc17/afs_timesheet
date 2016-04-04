<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Setup_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_usd(){     
		
		$query = $this->db->query("select * from tb_usd");	
		return $query->result();     
    }
	

}

?>



