<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_m extends My_Model{
	protected $table = "tbl_user";
    
	public function __construct(){
		parent ::__construct();
	}
	
	public function get_user_by_id($id){
		$sql = "SELECT * FROM user WHERE id_user = $id";
		$b   = $this->db->query($sql);
		$row = $b->row();
		$b->free_result();
		return $row;
	}
	
	public function cek_old_pass($id,$pass){
		$b = $this->db->query("SELECT * FROM user WHERE id_user='$id' AND password='$pass'");
		if($b->num_rows == 0){
			return false;
		} else {
			return true;
		}
	}
	
	function get_news($tgl){
		$sql = "SELECT * FROM news WHERE tanggal>'$tgl' ORDER BY id_news DESC";
		$b = $this->db->query($sql);
		$row = $b->result();
		$b->free_result();
		return $row;
	}
		
	function get_user_login($_username, $_password) {
        $sql = "select * from user 
            where id_group = 1 AND (username='" . $_username . "') 
            AND password = '" . $_password . "' AND status = 1";
        $query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
            return $query->row()->id_user;
        }
    }
	
	function view_all_admin($limit='', $offset=''){
		$sql=	"select * from user where id_group = 1 ORDER BY id_user DESC limit ".$offset.",".$limit."";
		$q=$this->db->query($sql);
		$data = $q->result();
		$q->free_result();
		return $data;
	}
        
    function view_all_member($limit='', $offset=''){
		$sql=	"select * from user where id_group = 2 ORDER BY id_user DESC limit ".$offset.",".$limit."";
		$q=$this->db->query($sql);
		$data = $q->result();
		$q->free_result();
		return $data;
	}
	
	function count_all_member_search($s=''){
            $sql = "select count(*) as jumlah from (select * from user where id_group = 2 ";
			$sql.="AND ( username LIKE '%$s%' or nama LIKE '%$s%')";
            $sql .= " group by id_user) as x";
            $q = $this->db->query($sql);
            $data = $q->row();
            $q->free_result();
            return $data->jumlah;
	}
	
	function get_member_by_search($s='',$limit,$offset){
            $sql = "select * from user where id_group = 2 ";
			$sql.="AND ( username LIKE '%$s%' or nama LIKE '%$s%')";
            $sql .= " group by id_user desc LIMIT " . $offset . ", " . $limit . "";
            $q = $this->db->query($sql);
            $data = $q->result();
            $q->free_result();
            return $data;
	}
	
	function count_all_member(){
            $sql = "select count(*) as jumlah from user WHERE id_group = 2 ";
            $q = $this->db->query($sql);
            $data = $q->row();
            $q->free_result();
            return $data->jumlah;
    }
	
	function count_all_admin_search($s=''){
            $sql = "select count(*) as jumlah from (select * from user where id_group = 1  ";
			$sql.="AND ( username LIKE '%$s%' or nama LIKE '%$s%')";
            $sql .= " group by id_user) as x";
            $q = $this->db->query($sql);
            $data = $q->row();
            $q->free_result();
            return $data->jumlah;
	}
	
	function get_admin_by_search($s='',$limit,$offset){
            $sql = "select * from user where id_group = 1 ";
			$sql.="AND ( username LIKE '%$s%' or nama LIKE '%$s%')";
            $sql .= " group by id_user desc LIMIT " . $offset . ", " . $limit . "";
            $q = $this->db->query($sql);
            $data = $q->result();
            $q->free_result();
            return $data;
	}
	
	function count_all_admin(){
            $sql = "select count(*) as jumlah from user WHERE id_group = 1";
            $q = $this->db->query($sql);
            $data = $q->row();
            $q->free_result();
            return $data->jumlah;
    }
	
	function cek_password($id='', $pass=''){
		$sql="SELECT COUNT(*) AS jumlah FROM user WHERE id_user='".$id."' AND password='".$pass."' ";
		$q=$this->db->query($sql);
		$data = $q->row();
		$q->free_result();
		return $data->jumlah;
	}	
}