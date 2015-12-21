<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Assigned_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_record(){
    	$this->load->model('v_matter_assign');
    	$this->v_matter_assign->get_by_id_matter();
	}

	public function get_assign_timesheet(){
		$query = $this->db->query("SELECT
									tb_timesheet.id_timesheet,
									tb_timesheet.id_matter,
									tb_timesheet.id_user,
									(SELECT COUNT(tb_timesheet.id_matter) FROM tb_timesheet WHERE tb_timesheet.id_user = tb_user.id_user 
									AND tb_timesheet.id_matter = '".$this->uri->segment(3)."') AS jml_timesheet,
									tb_user.nama
									FROM
									tb_timesheet
									INNER JOIN tb_user ON tb_user.id_user = tb_timesheet.id_user
									WHERE
									tb_timesheet.id_matter = '".$this->uri->segment(3)."'
									GROUP BY
									tb_timesheet.id_user");
		return $query->result();
	}

}	
?>