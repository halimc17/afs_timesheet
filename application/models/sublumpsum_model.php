<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Sublumpsum_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
    }
	
	public function get_record(){
		
	}
	
	public function add_record($data){
		$this->db->insert('tb_sublumpsum',$data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_sublumpsum', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_matter', $data);
		$this->db->delete('tb_sublumpsum'); 
	}
}

?>



