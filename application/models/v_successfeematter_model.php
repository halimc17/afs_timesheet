<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_successfeematter_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("no_matter", "desc");
		$query = $this->db->get('v_successfeematter');
		
		return $query->result();     
    }
	
	public function get_record(){
		$query = $this->db->query("select * from v_successfeematter where no_matter = '".$this->uri->segment(3)."'");
		return $query->result();
	}
	
	public function add_record($data){
		$this->db->insert('v_successfeematter',$data);
	}
	
	public function edit_record($data){
		
	}
	
	public function delete_record($data){
		$this->db->where('no_matter', $data);
		$this->db->delete('v_successfeematter'); 
	}
}

?>



