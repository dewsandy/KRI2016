<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_agenda($s='',$lim=1,$off=0,$mulai=""){		
		$sql="select * from p_agenda WHERE agenda LIKE '%$s%'";
		if(!empty($mulai))
			$sql.=" AND tanggal <= $mulai ";		
		$sql.=" ORDER BY id_agenda desc LIMIT $off,$lim";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_list_agenda_total($s='',$mulai=""){
		$sql="select * from p_agenda WHERE agenda LIKE '%$s%'";
		if(!empty($mulai))
			$sql.=" AND tanggal <= $mulai ";		
		$sql.=" ORDER BY id_agenda desc";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}	
	
	function get_agenda($mulai=""){
		$sql="select * from p_agenda WHERE tanggal >= $mulai ";		
		$sql.=" ORDER BY tanggal asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_data_by_id($id){
		$b = $this->db->query("SELECT * FROM p_agenda WHERE id_agenda=$id");
		$r = $b->row();
		$b->free_result();
		return $r;
	}
	
	function get_agenda_today($mulai){
		$sql="select * from p_agenda WHERE tanggal = '$mulai' ";		
		$sql.=" ORDER BY id_agenda desc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_agenda_web($mulai){
		$sql="select * from p_agenda WHERE tanggal >= '$mulai' ";		
		$sql.=" ORDER BY tanggal asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
}

/* End of file  */
/* Location: ./application/models/ */