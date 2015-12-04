<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Divisi_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     		
		$query = $this->db->get('tb_divisi');
		return $query->result();
     
    }
	
	public function get_record(){
		$query = $this->db->query("select * from tb_divisi where id_divisi = ".$this->uri->segment(3));
		return $query->result();
	}
	
	public function add_record($data){
		$this->db->insert('tb_divisi',$data);
	}
	
	public function edit_record($data){
		$this->db->where('id_divisi', $data['id_divisi']);
		$this->db->update('tb_divisi', $data);
	}
	
	public function delete_record($data){
		$this->db->where('id_divisi', $data);
		$this->db->delete('tb_divisi'); 
	}
}

?>



