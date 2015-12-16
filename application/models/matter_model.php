<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Matter_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
   public function get_records(){
		$this->db->order_by("id_matter", "desc");
		$query = $this->db->get('tb_matter');
		return $query->result();
	}
	
	public function get_record(){
		$this->db->from('tb_matter');
        $this->db->where('id_matter',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
	}

	public function get_record2(){
		$this->db->from('v_matter_detail');
		$this->db->where('id_matter', $this->uri->segment(3));
		$query = $this->db->get();

		return $query->row();
	}
	
	public function add_record($data){
		$this->db->insert('tb_matter',$data);		
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_matter', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		$this->db->where('id_matter', $data);
		$this->db->delete('tb_matter'); 
	}

	public function change_active($data){
		$this->db->where('id_matter', $data['id_matter']);
		$this->db->update('tb_matter', $data);      
	}

	public function get_record_assign(){
		$query = $this->db->query("select tb_matter.id,
							tb_matter.id_matter,
							tb_matter.id_client,
							tb_matter.id_payment,
							tb_matter.matter,
							tb_matter.open_date,
							tb_matter.close_date,
							tb_matter.active,
							tb_matter.input_date,
							tb_client.nama_client
							FROM
							tb_matter
							INNER JOIN tb_client ON tb_client.id_client = tb_matter.id_client
							WHERE
							tb_matter.id_matter = '".$this->uri->segment(3)."'");
							
		return $query->result();
	}
}

?>



