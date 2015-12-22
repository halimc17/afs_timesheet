<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Hourly_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     
		
		$this->db->order_by("id_hourly", "desc");
		$query = $this->db->get('tb_hourly');
		
		return $query->result();     
    }
	
	public function get_record(){
		$query = $this->db->query("select * from tb_hourly where id_hourly = ".$this->uri->segment(3));
		return $query->result();
	}

	public function get_record2($idMatter){
		$query = $this->db->query("select * from tb_hourly where id_matter = '".$idMatter."'");
		return $query->result();
	}
	
	public function add_record($data){
		$this->db->insert('tb_matter_hourly', $data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_matter_hourly', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_matter', $data);
		$this->db->delete('tb_matter_hourly'); 
	}
}

?>



