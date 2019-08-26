<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class auth_m extends My_Model{
	
	function __construct() {
		parent::__construct();		
	}	
	function cek_login($user,$pass){		
		$sql = "SELECT * FROM user WHERE username='$user' AND password = '".md5($pass)."' and status = 1 and level = 1";
		$res = $this->db->query($sql);
		if($res->num_rows() == 1){			
			return true;
		} else {
			return false;
		}				
	}
	
	function get_user_by($user){		
		$res = $this->db->query("SELECT * FROM user WHERE username='$user'");
		$r = $res->row();		
		$res->free_result();
		return $r;
	}
	
	function get_user(){
    	if($this->session->userdata('admin_session')){
    		//$data=$this->get_single('user', 'id_user', $this->session->userdata('admin_session')->id_user);
			$sql = $this->db->query('SELECT * FROM user WHERE id_user="'.$this->session->userdata('admin_session')->id_user.'"');
			$data = $sql->row();
    	}
    	return $data;
    }
	
	function check() {
        if (!$this->session->userdata('admin_session')) {
            redirect(base_url(), 'refresh');
        }
    }
}

/* End of file user_model.php */
/* Location: ./application/models/user_Model.php */