<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['title']='Kategori';
		$data['datas']=$this->kategori_m->get_list_kategori();
		$this->load->view('dash/kategori_v', $data);
	}

	public function add()
	{
		$data=array();
		$data['alert']='';
		$data['title']='Add Kategori';
		$data['error']='';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_kategori', 'Kategori', 'required|trim|xss_clean|is_unique[p_kategori.kategori]');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{
				$input=array(
					'id_kategori' => null,
					'kategori' => $this->input->post('nama_kategori')
					//'keterangan' => $this->input->post('keterangan'),
				);
				$insert=$this->kategori_m->insert('p_kategori', $input);								
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['kategori']=$this->kategori_m->get_all_data('p_kategori', 'id_kategori', 'asc');
		$this->load->view('dash/kategori_add_v', $data);
	}

	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['title']='Edit Kategori';
		$data['error']='';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_kategori', 'Kategori', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{ 
				$input=array(
					'kategori' => $this->input->post('nama_kategori')
					//'keterangan' => $this->input->post('keterangan')				
				);
				$insert=$this->kategori_m->update('p_kategori', 'id_kategori', $id, $input);
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['data']=$this->kategori_m->get_single('p_kategori', 'id_kategori', $id);
		$this->load->view('dash/kategori_edit_v', $data);
	}

	public function delete($id='')
	{			
		$del=$this->kategori_m->delete('p_kategori', 'id_kategori', $id);
		if($del){
			redirect(base_url('dash').'/kategori/?alert=success') ; 			
		} 
	}	
}

/* End of file  */
/* Location: ./application/controllers/ */