<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Matter_assign_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	
	public function add_record($data){
		$this->db->insert('tb_matter_assign',$data);
	}

	public function delete_record($data){
		$this->db->where('id_matter_assign', $data);
		$this->db->delete('tb_matter_assign'); 
	}
	
	
}

?>



