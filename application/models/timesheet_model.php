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
									tb_user.nama,
									tb_work_type.inisial
									FROM
									tb_timesheet
									INNER JOIN tb_user ON tb_user.id_user = tb_timesheet.id_user
									INNER JOIN tb_work_type ON tb_work_type.id_work_type = tb_timesheet.id_work_type
									WHERE
									tb_timesheet.id_matter = '".$this->uri->segment(3)."' AND tb_timesheet.id_user = ".$this->session->userdata('id_user')." ORDER BY tb_timesheet.id_timesheet DESC");							
		return $query->result();
	}

}

?>

