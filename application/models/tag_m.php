<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tag_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_list_kategori(){
		$sql="select * from p_tag ORDER BY id_tag asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_list_kategori_web($order='kategori',$lim = 0){
		$sql="select *, COUNT(a.id_tag) as total from p_tag a join 
		p_tagberita b on a.id_tag = b.id_tag GROUP BY a.id_tag ORDER BY $order asc";
		if($lim!=0)
		$sql.=" LIMIT 0,$lim ";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_data_by_id($id){
		$b = $this->db->query("SELECT * FROM p_tagberita a join p_tag b on a.id_tag = b.id_tag WHERE id_berita=$id");
		$r = $b->result();
		$b->free_result();
		return $r;
	}

}

/* End of file  */
/* Location: ./application/models/ */