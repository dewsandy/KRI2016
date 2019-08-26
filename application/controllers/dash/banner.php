<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  banner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('banner_m');
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
		$data['title']='Banner';				
		$data['datas']=$this->banner_m->get_list_banner();
		$this->load->view('dash/banner_v', $data);
	}

	public function add()
	{
		$data=array();
		$data['alert']='';
		$data['title']='Tambah Banner';
		$data['error']='';
		if($this->input->post('simpan')){
			/*$this->load->library('form_validation');
			$this->form_validation->set_rules('banner_image', 'Gambar', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{*/
				$input=array(					
					'banner' => $this->_doupload_file('banner_image','asset/upload/banner/')						
				);
				$insert=$this->banner_m->insert('p_banner', $input);								
				$data['alert']='success'; 				
			//}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));						
		$this->load->view('dash/banner_add_v', $data);
	}

	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['title']='Edit banner & Staff';
		$data['error']='';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			/*$this->form_validation->set_rules('banner_image', 'Gambar', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			} else{ */
				$img = $this->input->post('curr_img');
                if($_FILES['banner_image']['name']!=''){
                    $file = explode('/',$this->input->post('curr_img'));
                    @unlink('asset/upload/banner/'.$file[3]);
                    $img = $this->_doupload_file('banner_image','asset/upload/banner/');
                }	
				$input=array(
					'banner' => $img				
				);;
				$insert=$this->banner_m->update('p_banner', 'id_banner', $id, $input);
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			//}			
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));	
		$data['data']=$this->banner_m->get_single('p_banner', 'id_banner', $id);
		$this->load->view('dash/banner_edit_v', $data);
	}

	public function delete($id='')
	{			
		$data=$this->banner_m->get_single('p_banner', 'id_banner', $id);
		$del=$this->banner_m->delete('p_banner', 'id_banner', $id);
		$file = explode('/',$data->banner);
		if($del){
			@unlink('asset/upload/banner/'.$file[3]);
			redirect(base_url('dash').'/banner/?alert=success') ; 			
		} 
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