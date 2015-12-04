<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class V_user_model extends CI_Model{



    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("id_user", "desc");
		$query = $this->db->get('v_user');
		
		return $query->result();     
    }
	
	public function get_record(){
		
	}
	
	public function add_record($data){
		
	}
	
	public function edit_record($data){
		
	}
	
	public function delete_record($data){
		
	}
}

?>



