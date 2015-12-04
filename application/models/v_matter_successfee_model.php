<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_matter_successfee_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("id", "desc");
		$query = $this->db->get('v_matter_successfee');
		
		return $query->result();     
    }	

     public function get_record(){
    	$this->db->from('v_matter_successfee');
        $this->db->where('id_matter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
    }
}

?>



