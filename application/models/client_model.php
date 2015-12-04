<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Client_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	public function get_records(){
		$this->db->order_by("id_client", "desc");
		$query = $this->db->get('tb_client');
		return $query->result();
	}
	
	public function get_record(){
		$this->db->from('tb_client');
        $this->db->where('id_client',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
	}
	
	public function add_record($data){
		$this->db->insert('tb_client',$data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_client', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_client', $data);
		$this->db->delete('tb_client'); 
	}
}

?>



