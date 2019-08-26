<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prestasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prestasi_m');
        $this->load->library('auth');
		$this->load->model('user_m');
        $this->auth->check();
	}

	public function index()
	{		
		$data=array();
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
		if(isset($_GET['tkt'])){ 
			$data['tkt']=$_GET['tkt'];
		} else{
			$data['tkt'] = '';
		}
		if(isset($_GET['thn'])){ 
			$data['thn']=$_GET['thn'];
		} else{
			$data['thn'] = '';
		}
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}
		
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['title']='Prestasi';
		$data['tahun'] = $this->prestasi_m->get_tahun();		
		$data['tingkat'] = array('Regional','Provinsi','Nasional','Internasional');
		$jmldata=$this->prestasi_m->get_list_prestasi_total($data['s'],$data['thn'],$data['tkt']);
		$data['paginator']=$this->prestasi_m->page($jmldata, $dataPerhalaman, $hal);		
		$data['datas']=$this->prestasi_m->get_list_prestasi($data['s'],$dataPerhalaman,$offset,$data['thn'],$data['tkt']);
		$this->load->view('dash/prestasi_v', $data);
	}

	public function add()
	{
		$data=array();
		$data['alert']='';
		$data['title']='Tambah Prestasi';
		$data['error']='';
		if($this->input->post('simpan')){
			$data['title']='2 Tambah Prestasi';
			$this->load->library('form_validation');
			$this->form_validation->set_rules('prestasi', 'prestasi', 'required|trim|xss_clean|is_unique[p_prestasi.prestasi]');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{
				$input=array(
					'id_prestasi' => null,
					'prestasi' => $this->input->post('prestasi'),
					'tahun' => $this->input->post('tahun'),
					'tingkat' => $this->input->post('tingkat'),
					'jenis' => $this->input->post('jenis')					
				);
				$insert=$this->prestasi_m->insert('p_prestasi', $input);								
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));		
		$data['tingkat'] = array('Regional','Provinsi','Nasional','Internasional');
		$data['jenis'] = array('Umum','Mahasiswa','Dosen','Prodi');
		$this->load->view('dash/prestasi_add_v', $data);
	}

	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['title']='Edit prestasi';
		$data['error']='';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('prestasi', 'prestasi', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{ 
				$input=array(
					'prestasi' => $this->input->post('prestasi'),
					'tahun' => $this->input->post('tahun'),
					'tingkat' => $this->input->post('tingkat'),
					'jenis' => $this->input->post('jenis')					
				);;
				$insert=$this->prestasi_m->update('p_prestasi', 'id_prestasi', $id, $input);
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['tingkat'] = array('Regional','Provinsi','Nasional','Internasional');
		$data['jenis'] = array('Umum','Mahasiswa','Dosen','Prodi');
		$data['data']=$this->prestasi_m->get_single('p_prestasi', 'id_prestasi', $id);
		$this->load->view('dash/prestasi_edit_v', $data);
	}

	public function delete($id='')
	{			
		$del=$this->prestasi_m->delete('p_prestasi', 'id_prestasi', $id);
		if($del){
			redirect(base_url('dash').'/prestasi/?alert=success') ; 			
		} 
	}	
}

/* End of file  */
/* Location: ./application/controllers/ */