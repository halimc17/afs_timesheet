<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Retainer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
				
    }
	
	public function get_record(){
		
	}
	
	public function add_record($data){
		$this->db->insert('tb_matter_retainer',$data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_matter_retainer', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		
	}
}

?>



