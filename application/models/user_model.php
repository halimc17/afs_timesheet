<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class user_model extends CI_Model{
	

    function __construct(){
        parent::__construct();
    }

  	public function get_records(){
  		$this->db->order_by("id_user", "asc");
		$query = $this->db->get('tb_user');
		return $query->result();
  	}

  	public function change_active($data){
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('tb_user', $data);      
	}

	public function add_record($data){
		//$this->db->insert('tb_user',$data);
		$this->db->insert('tb_user', $data);
        return $this->db->insert_id();
	}

	public function delete_record($data){
		$this->db->where('id_user', $data);
		$this->db->delete('tb_user');
	}

	public function get_record(){
		$this->db->from('tb_user');
        $this->db->where('id_user',$this->uri->segment(3));
        $query = $this->db->get();

        return $query->row();
	}

	public function update_record($where, $data){
		$this->db->update('tb_user', $data, $where);
        return $this->db->affected_rows();
	}



}

?>

