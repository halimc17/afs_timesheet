<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_matter_assign_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
	public function get_records_by_id_matter(){
		$query = $this->db->query("select * from v_matter_assign where id_matter = '".$this->uri->segment(3)."'");
		return $query->result();
	}
	
	
	public function delete_record($data){
		$this->db->where('id_matter', $data);
		$this->db->delete('v_hourlymatter'); 
	}
}

?>



