<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submatter_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
   public function get_records(){
		$this->db->order_by("id_matter", "desc");
		$query = $this->db->get('tb_submatter');
		return $query->result();
	}
	
	public function get_record(){
		$this->db->from('tb_submatter');
        $this->db->where('id_matter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
	}
	
	public function add_record($data){
		$this->db->insert('tb_submatter',$data);		
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_submatter', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_submatter', $data);
		$this->db->delete('tb_matter'); 
	}

	public function change_active($data){
		$this->db->where('id_matter', $data['id_matter']);
		$this->db->update('tb_submatter', $data);      
	}

	public function get_record_assign(){
		
	}
}

?>



