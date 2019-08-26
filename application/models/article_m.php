<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
        
        function get_all_article()
        {
            $sql = "select *from tbl_article where publish != '3' order by id_article desc";
            $q = $this->db->query($sql);
            $data = $q->result();
            $q->free_result();
            return $data;
        }
        
	function get_article_user($id = '', $limit = '', $offset = '')
        {
            $sql = "select *from tbl_article where id_user='" . $id . "' order by id_article desc limit " . $offset . "," . $limit . "";
            $q = $this->db->query($sql);
            $data = $q->result();
            $q->free_result();
            return $data;
        }
        
        function get_article_single($id_article='', $id_user){
		$sql="select * from tbl_article where md5(id_article)='".$id_article."' and md5(id_user)='".$id_user."'";
		$q=$this->db->query($sql);
		$data=$q->row();
		$q->free_result();
		return $data;
	}
        
        function delete_user($id_article='', $id_user=''){		
        $this->db->where('md5(id_article)', $id_article);
        $this->db->where('md5(id_user)', $id_user);
        $this->db->delete('tbl_article');
        return $this->db->affected_rows();
	}
        
        function get_article_publish($limit = '', $offset = '')
        {
            $sql = "select a.*, b.username, b.image from tbl_article a, tbl_user b where a.id_user = b.id_user AND a.publish='1' order by a.id_article desc limit " . $offset . "," . $limit . "";
            $q = $this->db->query($sql);
//            echo $sql;
            $data = $q->result();
            $q->free_result();
            return $data;
        }
        
        function get_article_slug($slug){
		$sql="select a.*, b.username, b.image from tbl_article a left join tbl_user b on a.id_user = b.id_user
            where a.article_slug ='".$slug."'";
		$q=$this->db->query($sql);
		$data=$q->row();
		$q->free_result();
		return $data;
	}
}

/* End of file  */
/* Location: ./application/models/ */