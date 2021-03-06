<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Matter_assign_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	
	public function add_record($data){
		$this->db->insert('tb_matter_assign',$data);
	}

	public function add_record_retainer($data){
		$this->db->insert('tb_matter_retainer_assign',$data);
	}

	public function delete_record($data){
		$this->db->where('id_matter_assign', $data);
		$this->db->delete('tb_matter_assign'); 
	}

	public function get_assign(){
		$query = $this->db->query("SELECT
									tb_matter.id,
									tb_matter.id_matter,
									tb_matter.matter,
									tb_matter.open_date,
									tb_matter.close_date,
									tb_matter.active,
									tb_matter.input_date,
									tb_client.nama_client,
									tb_payment.payment_name,
									(SELECT COUNT(id_matter) FROM tb_timesheet WHERE tb_timesheet.id_matter = tb_matter.id_matter AND tb_timesheet.id_user = ".$this->session->userdata('id_user').")
									AS jml_timesheet,
									(SELECT COUNT(id_matter) FROM tb_reimburstment WHERE tb_reimburstment.id_matter = tb_matter.id_matter AND tb_reimburstment.id_user = ".$this->session->userdata('id_user').") 
									AS jml_reimburstment	
									FROM
									tb_matter 
									INNER JOIN tb_matter_assign ON tb_matter_assign.id_matter = tb_matter.id_matter
									INNER JOIN tb_client ON tb_client.id_client = tb_matter.id_client
									INNER JOIN tb_payment ON tb_payment.id_payment = tb_matter.id_payment
									WHERE
									tb_matter_assign.id_user = ".$this->session->userdata('id_user')." ORDER BY tb_matter.id DESC");		
		return $query->result();
	}

	public function get_assign_retainer(){
		$query = $this->db->query("SELECT
									tb_matter_retainer.id,
									tb_matter_retainer.id_retainer,
									tb_matter_retainer.id_matter,
									tb_matter_retainer.matter,
									tb_matter_retainer.description,
									tb_matter_retainer_assign.id_user,
									tb_matter_retainer_assign.id_retainer,
									tb_matter_retainer2.jangka_waktu,
									tb_matter_retainer2.biaya,
									tb_matter_retainer2.menit,
									tb_matter_retainer2.description,
									tb_matter_retainer2.open_date,
									tb_matter_retainer2.close_date,
									tb_client.nama_client
									FROM
									tb_matter_retainer
									INNER JOIN tb_matter_retainer_assign ON tb_matter_retainer_assign.id_matter = tb_matter_retainer.id_matter
									INNER JOIN tb_matter_retainer2 ON tb_matter_retainer2.id_retainer = tb_matter_retainer.id_retainer
									INNER JOIN tb_client ON tb_client.id_client = tb_matter_retainer2.id_client
									WHERE tb_matter_retainer_assign.id_user = ".$this->session->userdata('id_user')." ORDER BY tb_matter_retainer_assign.id_matter_assign DESC");
		return $query->result();
	}
}

?>



