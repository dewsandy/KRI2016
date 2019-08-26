<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class galeri_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_galeri($tag){		
		$sql="select * from p_galeri WHERE tag = '$tag' ";
		$sql.=" ORDER BY id desc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}			
	
	function get_tag(){
		$sql="select DISTINCT tag,slug_tag from p_galeri ORDER BY tag asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_data_by_id($id){
		$b = $this->db->query("SELECT * FROM p_galeri WHERE id_prestasi=$id");
		$r = $b->row();
		$b->free_result();
		return $r;
	}

}

/* End of file  */
/* Location: ./application/models/ */