<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_m');
		$this->load->model('kategori_m');
        $this->load->library('auth');
		$this->load->model('user_m');
        $this->auth->check();
	}

	public function index()
	{
		$data=array();
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}
		
		if(isset($_GET['hal'])){$hal=$_GET['hal'];}
        else {$hal=1;}
		
		$dataPerhalaman=10;        
        $offset = ($hal - 1) * $dataPerhalaman;
        $off = abs( (int) $offset);
        $data['offset']=$offset;
		if(isset($_GET['s'])){ 
			$data['s']=$_GET['s'];
		} else{
			$data['s'] = '';
		}
		if(isset($_GET['idk'])){ 
			$data['idk']=$_GET['idk'];
		} else{
			$data['idk'] = '';
		}
		
		$jmldata=$this->berita_m->get_total_info_admin($data['s'],$data['idk']);
		$data['paginator']=$this->berita_m->page($jmldata, $dataPerhalaman, $hal);
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['title']='Info dari Member';
		$data['data']=$this->berita_m->get_info_admin($data['s'],$dataPerhalaman,$off,$data['idk']);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/info_v', $data);
	}

	public function view($id='')
	{
		$data=array();
		$data['title']='Detail Info Member';
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['data']=$this->berita_m->detail_berita_admin($id);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/info_view_v', $data);
	}

	public function delete($id='')
	{
		$del=$this->berita_m->delete('p_berita', 'id_berita', $id);
		if($del) redirect(base_url('dash').'/info?alert=success');
		else redirect(base_url('dash').'/info?alert=failed');
	}		
}

/* End of file  */
/* Location: ./application/controllers/ */