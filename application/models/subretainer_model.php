<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Subretainer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){   

    	$this->db->order_by("id_submatter", "desc");
		$query = $this->db->get('v_submatter_retainer');
		return $query->result(); 
    }
	
	public function get_record(){ // by id matter
		$this->db->from('v_submatter_retainer');
        $this->db->where('id_matter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->result();
		
	}

	public function get_record2(){ //by id sub matter
		$this->db->from('v_submatter_retainer');
        $this->db->where('id_submatter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
		
	}
	
	public function add_record($data){
		$this->db->insert('tb_subretainer',$data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_subretainer', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_matter', $data);
		$this->db->delete('tb_subretainer'); 
	}
}

?>



