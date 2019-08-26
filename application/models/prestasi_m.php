<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prestasi_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_prestasi($s='',$lim=1,$off=0,$tahun="",$tkt=""){		
		$sql="select * from p_prestasi WHERE prestasi LIKE '%$s%'";
		if(!empty($tkt))
			$sql.=" AND tingkat = '$tkt' ";
		if(!empty($tahun))
			$sql.=" AND tahun = $tahun ";
		$sql.=" ORDER BY tahun desc LIMIT $off,$lim";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_list_prestasi_total($s='',$tahun="",$jenis=""){
		$sql="select * from p_prestasi WHERE prestasi LIKE '%$s%'";
		if(!empty($jenis))
			$sql.=" AND jenis = '$jenis' ";
		if(!empty($tahun))
			$sql.=" AND tahun = $tahun ";
		$sql.=" ORDER BY id_prestasi desc";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}	
	
	function get_tahun(){
		$sql="select DISTINCT tahun from p_prestasi ORDER BY tahun desc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_data_by_id($id){
		$b = $this->db->query("SELECT * FROM p_prestasi WHERE id_prestasi=$id");
		$r = $b->row();
		$b->free_result();
		return $r;
	}

}

/* End of file  */
/* Location: ./application/models/ */