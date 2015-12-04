<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_retainermatter_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("no_matter", "desc");
		$query = $this->db->get('v_retainermatter');
		
		return $query->result();     
    }
	
	public function get_record(){
		$query = $this->db->query("select * from v_retainermatter where no_matter = '".$this->uri->segment(3)."'");
		return $query->result();
	}
	
	public function add_record($data){
		$this->db->insert('v_retainermatter',$data);
	}
	
	public function edit_record($data){
		
	}
	
	public function delete_record($data){
		$this->db->where('no_matter', $data);
		$this->db->delete('v_retainermatter'); 
	}
}

?>



