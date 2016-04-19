<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Retainer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){  
    	$this->db->order_by("id_retainer", "desc");
		$query = $this->db->get('tb_matter_retainer2');
		return $query->result(); 
				
    }
	
	public function get_record(){
		
	}
	
	public function add_record($data){
		$this->db->insert('tb_matter_retainer',$data);
	}

	public function add_matter_retainer($data){
		$this->db->insert('tb_matter_retainer',$data);
	}
	
	public function update_record($where, $data){
		$this->db->update('tb_matter_retainer', $data, $where);
        return $this->db->affected_rows();
	}
	
	public function delete_record($data){
		
	}

	public function add_client($data){
		$this->db->insert('tb_matter_retainer2',$data);	
	}

	public function get_detail_retainer(){
		$query = $this->db->query("SELECT
			tb_matter_retainer.id,
			tb_matter_retainer.id_retainer,
			tb_matter_retainer.id_matter,
			tb_matter_retainer.matter,
			tb_matter_retainer.description,
			(SELECT COUNT(tb_matter_retainer_assign.id_retainer) FROM tb_matter_retainer_assign WHERE tb_matter_retainer_assign.id_matter = tb_matter_retainer.id_matter) AS jml_assign
			FROM
			tb_matter_retainer WHERE id_retainer = ".$this->uri->segment(3));
		
		return $query->result();
	}

	public function get_retainer_client(){
		$query = $this->db->query("SELECT
									tb_client.nama_client,
									tb_matter_retainer2.id_retainer,
									tb_matter_retainer2.id_client,
									tb_matter_retainer2.jangka_waktu,
									tb_matter_retainer2.biaya,
									tb_matter_retainer2.menit,
									tb_matter_retainer2.disc,
									tb_matter_retainer2.description,
									tb_matter_retainer2.open_date,
									tb_matter_retainer2.close_date
									FROM
									tb_matter_retainer2
									INNER JOIN tb_client ON tb_matter_retainer2.id_client = tb_client.id_client
									WHERE
									tb_matter_retainer2.id_retainer = ".$this->uri->segment(3));
		return $query->result();
	}

	public function get_record_assign(){
		$query = $this->db->query("SELECT
				tb_matter_retainer.id,
				tb_matter_retainer.id_retainer,
				tb_matter_retainer.id_matter,
				tb_matter_retainer.matter,
				tb_matter_retainer.description,
				tb_matter_retainer2.id_client,
				tb_matter_retainer2.jangka_waktu,
				tb_matter_retainer2.biaya,
				tb_matter_retainer2.menit,
				tb_matter_retainer2.disc,
				tb_matter_retainer2.description,
				tb_matter_retainer2.open_date,
				tb_matter_retainer2.close_date,
				tb_client.nama_client
				FROM
				tb_matter_retainer
				INNER JOIN tb_matter_retainer2 ON tb_matter_retainer2.id_retainer = tb_matter_retainer.id_retainer
				INNER JOIN tb_client ON tb_client.id_client = tb_matter_retainer2.id_client
				WHERE
				tb_matter_retainer.id_matter = '".$this->uri->segment(3)."'");
		return $query->result();
	}
}

?>

