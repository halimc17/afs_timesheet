<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Timesheet_model extends CI_Model{
	

    function __construct(){
        parent::__construct();
    }


	public function add_record($data){
		$this->db->insert('tb_timesheet', $data);
        return $this->db->insert_id();
	}

	public function get_records(){
		
		if($this->session->userdata('admin') == 1 AND $this->uri->segment(4) != NULL){
			$idUser = $this->uri->segment(4);	
		}else{
			$idUser = $this->session->userdata('id_user');	
		}
		
		$query = $this->db->query("SELECT
									tb_timesheet.id_timesheet,
									tb_timesheet.id_matter,
									tb_timesheet.id_user,
									tb_timesheet.input_date,
									tb_timesheet.`hour`,
									tb_timesheet.description,
									tb_timesheet.id_work_type,
									tb_timesheet.`start`,
									tb_timesheet.`end`,
									tb_user.inisial AS inisial_user,
									tb_work_type.inisial,
									tb_matter.id_payment,
									tb_payment.payment_name,
									tb_jabatan.id_jabatan,
									tb_jabatan.nama_jabatan,
									tb_jabatan.rate
									FROM
									tb_timesheet
									INNER JOIN tb_user ON tb_user.id_user = tb_timesheet.id_user
									INNER JOIN tb_work_type ON tb_work_type.id_work_type = tb_timesheet.id_work_type
									INNER JOIN tb_matter ON tb_matter.id_matter = tb_timesheet.id_matter
									INNER JOIN tb_payment ON tb_payment.id_payment = tb_matter.id_payment
									INNER JOIN tb_jabatan ON tb_jabatan.id_jabatan = tb_user.id_jabatan
									WHERE
									tb_timesheet.id_matter = '".$this->uri->segment(3)."' AND tb_timesheet.id_user = ".$idUser."
									ORDER BY tb_timesheet.id_timesheet DESC");
		
		return $query->result();
	}

	public function get_record(){
		$this->db->from('tb_timesheet');
        $this->db->where('id_timesheet',$this->uri->segment(3));
        $query = $this->db->get();
 
        return $query->row();
	}

	public function update_record($where, $data){
		$this->db->update('tb_timesheet', $data, $where);
        return $this->db->affected_rows();
	}

	public function get_records_by_matter(){
		$query = $this->db->query("SELECT
									tb_timesheet.id_timesheet,
									tb_timesheet.id_matter,
									tb_timesheet.id_user,
									tb_timesheet.input_date,
									tb_timesheet.description,
									tb_timesheet.`start`,
									tb_timesheet.`end`,
									tb_user.nama,
									tb_user.inisial,
									tb_work_type.worktype,
									tb_matter.id_payment,
									tb_user.id_jabatan
									FROM
									tb_timesheet
									INNER JOIN tb_user ON tb_user.id_user = tb_timesheet.id_user
									INNER JOIN tb_work_type ON tb_work_type.id_work_type = tb_timesheet.id_work_type
									INNER JOIN tb_matter ON tb_matter.id_matter = tb_timesheet.id_matter
									WHERE
									tb_timesheet.id_matter = '".$this->input->post('txt_idMatter')."'
									ORDER BY
									tb_timesheet.id_user ASC");
		return $query->result();
	}

}

?>

