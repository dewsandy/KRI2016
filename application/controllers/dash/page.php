<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('page_m');
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
		$data['title']='Halaman';
		$data['data']=$this->page_m->get_page_admin();
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/page_v', $data);
	}
	
	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['error'] = '';
		$data['title']='Edit Halaman';
		if($this->input->post('simpan')){			
			$this->load->library('form_validation');            
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Konten', 'required');			
            if ($this->form_validation->run() == FALSE){
                $data['error'] = validation_errors();
            }else{
				/*$img = $this->input->post('curr_img');
                if($_FILES['banner_image']['name']!=''){
                    $file = explode('/',$this->input->post('curr_img'));
                    @unlink('asset/upload/page/'.$file[3]);
                    $img = $this->_doupload_file('banner_image','asset/upload/page/');
                }*/				
				$input=array(
					'judul' => $this->input->post('title'),					
					'id_user' => $this->auth->_ci->session->userdata('admin_session'),									
					'isi' => $this->input->post('content')
					//'image'  => $img
				);
				$insert=$this->page_m->update('p_page', 'id_page', $id, $input);												
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';							
			}						
		}
		$data['data']=$this->page_m->detail_page_admin($id);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/page_edit_v', $data);
	}
	
	
	public function _doupload_file($name,$target)
	{
		$img						= $name;
		$config['file_name']  		= preg_replace("/[^0-9a-zA-Z ]/", "", $_FILES[$img]['name']).date('dmYHis');
		$config['upload_path'] 		= $target;
		$config['overwrite'] 		= FALSE;
		$config['allowed_types'] 	= '*';
		$config['max_size']			= '50060';
		$config['max_width']  		= '10000';
		$config['max_height']  		= '10000';			
		$config['remove_spaces']  	= TRUE; 

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
			
		if ( ! $this->upload->do_upload($img)){
			$return['error'] 	 = $this->upload->display_errors();
			$return['file_name'] = '';
		}else{
			$data = array('upload_data' => $this->upload->data());								
			$return['error'] 	 = '-';
			$return['file_name'] = $data['upload_data']['file_name'];					
		}
		$this->upload->file_name = '';
		
		if($return['file_name']==''){
			//return $return['error'];
			return '-';
		}else{
			return $target.$return['file_name'];
		}
	}
}

/* End of file  */
/* Location: ./application/controllers/ */