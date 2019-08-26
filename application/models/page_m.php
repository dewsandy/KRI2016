<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class page_m extends My_Model{
		
		function __construct(){
			parent::__construct();
		}
						
		function get_page_admin(){
			$sql = "SELECT * FROM p_page order by id_page ASC";
			$b = $this->db->query($sql);
			$row = $b->result();
			$b->free_result();
			return $row;
		}		
		function detail_page($id){
			$sql = "SELECT * FROM p_page WHERE for_page='$id'";
			$b = $this->db->query($sql);
			$row = $b->row();
			$b->free_result();			
			return $row;
		}	
		function detail_page_admin($id){
			$sql = "SELECT * FROM p_page WHERE id_page=$id";
			$b = $this->db->query($sql);
			$row = $b->row();
			$b->free_result();
			return $row;
		}		
	}	
	
	
/* End of file  */
/* Location: ./application/models/ */