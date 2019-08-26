<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('agenda_m');
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
		if(isset($_GET['tgl'])){ 
			$data['tgl']=$_GET['tgl'];
		} else{
			$data['tgl'] = '';
		}
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}
		
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['title']='agenda';
		$jmldata=$this->agenda_m->get_list_agenda_total($data['s'],$data['tgl']);
		$data['paginator']=$this->agenda_m->page($jmldata, $dataPerhalaman, $hal);		
		$data['datas']=$this->agenda_m->get_list_agenda($data['s'],$dataPerhalaman,$offset,$data['tgl']);
		$this->load->view('dash/agenda_v', $data);
	}

	public function add()
	{
		$data=array();
		$data['alert']='';
		$data['title']='Tambah Agenda';
		$data['error']='';
		if($this->input->post('simpan')){			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('agenda', 'agenda', 'required|trim|xss_clean|is_unique[p_agenda.agenda]');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{
				$input=array(
					'id_agenda' => null,
					'agenda' => $this->input->post('agenda'),
					'tanggal' => date("Y-m-d",strtotime($this->input->post('tanggal'))),
					'keterangan' => $this->input->post('keterangan')				
				);
				$insert=$this->agenda_m->insert('p_agenda', $input);								
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));		
		$this->load->view('dash/agenda_add_v', $data);
	}

	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['title']='Edit agenda';
		$data['error']='';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('agenda', 'agenda', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{ 
				$input=array(
					'agenda' => $this->input->post('agenda'),
					'tanggal' => date("Y-m-d",strtotime($this->input->post('tanggal'))) ,
					'keterangan' => $this->input->post('keterangan')				
				);
				$insert=$this->agenda_m->update('p_agenda', 'id_agenda', $id, $input);
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));		
		$data['data']=$this->agenda_m->get_single('p_agenda', 'id_agenda', $id);
		$this->load->view('dash/agenda_edit_v', $data);
	}

	public function delete($id='')
	{			
		$del=$this->agenda_m->delete('p_agenda', 'id_agenda', $id);
		if($del){
			redirect(base_url('dash').'/agenda/?alert=success') ; 			
		} 
	}	
}

/* End of file  */
/* Location: ./application/controllers/ */