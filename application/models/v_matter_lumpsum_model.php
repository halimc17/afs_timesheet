<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_matter_lumpsum_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("id", "desc");
		$query = $this->db->get('v_matter_lumpsum');
		
		return $query->result();     
    }	

    public function get_record(){
    	$this->db->from('v_matter_lumpsum');
        $this->db->where('id_matter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
    }

}

?>



