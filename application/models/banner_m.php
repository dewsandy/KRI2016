<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_banner(){		
		$sql="select * from p_banner";		
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_data_by_id_banner($id_banner){
		$b = $this->db->query("SELECT * FROM p_banner WHERE id_banner=$id_banner");
		$r = $b->row();
		$b->free_result();
		return $r;
	}
	
}

/* End of file  */
/* Location: ./application/models/ */