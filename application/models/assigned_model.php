<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Assigned_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_record(){
    	$this->load->model('v_matter_assign');
    	$this->v_matter_assign->get_by_id_matter();
    }
}
?>