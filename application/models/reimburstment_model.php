<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Reimburstment_model extends CI_Model{
	

    function __construct(){
        parent::__construct();
    }


	public function add_record($data){
		$this->db->insert('tb_reimburstment', $data);
        return $this->db->insert_id();
	}

	public function get_records(){
		$query = $this->db->query("SELECT
									tb_reimburstment.id_matter,
									tb_reimburstment.id_user,
									(SELECT COUNT(tb_reimburstment.id_reimburstment) FROM tb_reimburstment WHERE tb_reimburstment.id_user = tb_user.id_user 
									AND tb_reimburstment.id_matter = '".$this->uri->segment(3)."') AS jml_reimburstment,
									tb_user.nama
									FROM
									tb_reimburstment
									INNER JOIN tb_user ON tb_user.id_user = tb_reimburstment.id_user
									WHERE
									tb_reimburstment.id_matter = '".$this->uri->segment(3)."'
									GROUP BY
									tb_reimburstment.id_user");
		return $query->result();
	}

	public function get_record(){

		if($this->session->userdata('admin') == 1 AND $this->uri->segment(4) != NULL){
			$idUser = $this->uri->segment(4);	
		}else{
			$idUser = $this->session->userdata('id_user');	
		}

		$query = $this->db->query("SELECT
									tb_reimburstment.id_matter,
									tb_reimburstment.id_user,
									tb_user.nama,
									tb_user.inisial,
									tb_reimburstment.jumlah,
									tb_reimburstment.keterangan,
									tb_reimburstment.input_date,
									tb_reimburstment_type.type
									FROM
									tb_reimburstment
									INNER JOIN tb_user ON tb_user.id_user = tb_reimburstment.id_user
									INNER JOIN tb_reimburstment_type ON tb_reimburstment_type.id_type = tb_reimburstment.type_reimburstment
									WHERE
									tb_reimburstment.id_matter = '".$this->uri->segment(3)."' AND
									tb_reimburstment.id_user = ".$idUser);

		return $query->result();
	}

	public function get_ope_byDate(){

		$query = $this->db->query("SELECT
									tb_reimburstment.id_matter,
									tb_reimburstment.id_user,
									tb_user.nama,
									tb_user.inisial,
									tb_reimburstment.jumlah,
									tb_reimburstment.keterangan,
									tb_reimburstment.input_date,
									tb_reimburstment_type.type
									FROM
									tb_reimburstment
									INNER JOIN tb_user ON tb_user.id_user = tb_reimburstment.id_user
									INNER JOIN tb_reimburstment_type ON tb_reimburstment_type.id_type = tb_reimburstment.type_reimburstment
									WHERE
									tb_reimburstment.id_matter = '".$this->input->post('txt_idMatter')."' AND
									tb_reimburstment.input_date BETWEEN DATE('".$this->input->post('txt_startDate')."') AND DATE('".$this->input->post('txt_endDate')."')");


		return $query->result();
	}

	public function get_ope(){

		$query = $this->db->query("SELECT
									tb_reimburstment.id_matter,
									tb_reimburstment.id_user,
									tb_user.nama,
									tb_user.inisial,
									tb_reimburstment.jumlah,
									tb_reimburstment.keterangan,
									tb_reimburstment.input_date,
									tb_reimburstment_type.type
									FROM
									tb_reimburstment
									INNER JOIN tb_user ON tb_user.id_user = tb_reimburstment.id_user
									INNER JOIN tb_reimburstment_type ON tb_reimburstment_type.id_type = tb_reimburstment.type_reimburstment
									WHERE
									tb_reimburstment.id_matter = '".$this->input->post('txt_idMatter')."'");


		return $query->result();
	}

}

?>

