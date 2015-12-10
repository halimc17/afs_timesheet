<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Timesheet_model extends CI_Model{
	

    function __construct(){
        parent::__construct();
    }


	public function add_record($data){
		$this->db->insert('tb_timesheet', $data);
        return $this->db->insert_id();
	}

}

?>

