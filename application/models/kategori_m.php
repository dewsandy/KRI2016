<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_kategori(){
		$sql="select * from p_kategori ORDER BY id_kategori asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_list_kategori_web($order='kategori',$lim = 0){
		$sql="select *, COUNT(a.id_kategori) as total from p_kategori a join 
		p_berita b on a.id_kategori = b.id_kategori GROUP BY a.id_kategori ORDER BY $order asc";
		if($lim!=0)
		$sql.=" LIMIT 0,$lim ";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_data_by_id($id){
		$b = $this->db->query("SELECT * FROM p_kategori WHERE id_kategori=$id");
		$r = $b->row();
		$b->free_result();
		return $r;
	}

}

/* End of file  */
/* Location: ./application/models/ */