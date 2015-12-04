<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Personil_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

  
    public function get_records(){     	
		
		$query = $this->db->get('tb_personil');
		$query = $this->db->query("SELECT
									tb_personil.id_personil,
									tb_personil.nama,
									tb_personil.inisial,
									tb_personil.mobile1,
									tb_personil.mobile2,
									tb_personil.home_phone,
									tb_personil.email1,
									tb_personil.email2,
									tb_personil.ext,
									tb_personil.`status`,
									tb_personil.username,
									tb_personil.`password`,
									tb_personil.admin,
									tb_personil.active,
									tb_divisi.namaDivisi,
									tb_jabatan.nama_jabatan
									FROM
									tb_personil
									INNER JOIN tb_divisi ON tb_divisi.id_divisi = tb_personil.id_divisi
									INNER JOIN tb_jabatan ON tb_jabatan.id_jabatan = tb_personil.jabatan");
		return $query->result();
     
    }
	
	
	
	public function get_attorney(){
		$query = $this->db->query("select * from tb_personil where status != 'Staff'");
		//$query = $this->db->get('tb_personil');
		return $query->result();
	}
	
	public function get_record(){
		//$query = $this->db->get('tb_personil');
		$query = $this->db->query("select * from tb_personil where id_personil = ".$this->uri->segment(3));
		return $query->result();
	}
	
	public function get_personil(){
		$query = $this->db->query("select * from tb_personil");
		return $query->result();
	}
	
	
	
	public function updateRecord(){		
		$this->db->set("nama", $nama);
		$this->db->set("inisial", $inisial);
		$this->db->set("mobile1", $mobile1);
		$this->db->set("mobile2", $mobile2);
		$this->db->set("home_phone", $home_phone);
		$this->db->set("email1", $email1);
		$this->db->set("email2", $email2);
		$this->db->set("ext", $ext);
		$this->db->set("status", $status);
		$this->db->set("username", $username);		
		$this->db->set("admin", $admin);
		$this->db->set("active", $active);
		$this->db->update("tb_personil");
		$this->db->where("id_personil", $this->uri->segment(3));
	}
	
	public function add_record($data){
		$this->db->insert('tb_personil',$data);
	}

}

?>

