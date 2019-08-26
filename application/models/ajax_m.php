<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ajax_m extends My_Model{   
	public function __construct(){
		parent ::__construct();
	}
	
	
	function count_all_stok_penjualan(){
		$sql="select * from stok_penjualan a join user b on a.id_user = b.id_user join model c on
			 c.id_model = a.id_model WHERE status_lihat=0";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}
	
	function get_stok_penjualan(){				
		$sql="select * from stok_penjualan p join user u on u.id_user = p.id_user
			  join model a on a.id_model = p.id_model join subkategori b on a.id_subkategori = b.id_subkategori join
			   kategori c on c.id_kategori = b.id_kategori
			  WHERE status_lihat=0 ORDER BY id_stock asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}

	function count_all_penjualan(){
		$sql="select * from penjualan a join user b on a.id_sales = b.id_user WHERE statusjual=0";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}
	
	function get_penjualan(){				
		$sql="select * from penjualan a join user b on a.id_sales = b.id_user WHERE statusjual=0
			  ORDER BY id_penjualan asc";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
}	
	