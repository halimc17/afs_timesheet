<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_matter_retainer_assign_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
	public function get_records_by_id_matter(){
		$query = $this->db->query("select * from v_matter_retainer_assign where id_matter = '".$this->uri->segment(3)."'");
		return $query->result();
	}
	
	
	
}

?>



