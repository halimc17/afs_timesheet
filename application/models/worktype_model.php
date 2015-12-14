<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Worktype_model extends CI_Model{
	

    function __construct(){
        parent::__construct();
    }

  	public function get_records(){
  		$this->db->order_by("id_work_type", "asc");
		$query = $this->db->get('tb_work_type');
		return $query->result();
  	}

  	public function change_active($data){
		$this->db->where('id_work_type', $data['id_work_type']);
		$this->db->update('tb_work_type', $data);      
	}

	public function add_record($data){
		//$this->db->insert('tb_user',$data);
		$this->db->insert('tb_work_type', $data);
        return $this->db->insert_id();
	}

	public function delete_record($data){
		$this->db->where('id_work_type', $data);
		$this->db->delete('tb_work_type');
	}

	public function get_record(){
		$this->db->from('tb_work_type');
        $this->db->where('id_work_type',$this->uri->segment(3));
        $query = $this->db->get();

        return $query->row();
	}

	public function update_record($where, $data){
		$this->db->update('tb_work_type', $data, $where);
        return $this->db->affected_rows();
	}



}

?>

