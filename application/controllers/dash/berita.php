<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class berita extends CI_Controller {

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
		
		$jmldata=$this->berita_m->get_total_berita_admin($data['s'],$data['idk']);
		$data['paginator']=$this->berita_m->page($jmldata, $dataPerhalaman, $hal);
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['title']='Berita';
		$data['data']=$this->berita_m->get_berita_admin($data['s'],$dataPerhalaman,$off,$data['idk']);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/berita_v', $data);
	}

	public function add()
	{
		$data=array();
		$data['alert']='';		
		$data['error'] = '';
		$data['title']='Tambah Berita';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');            
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Konten', 'required');
			$this->form_validation->set_rules('summary', 'Summary', 'required');
            if ($this->form_validation->run() == FALSE){
                $data['error'] = validation_errors();
            }else{ 								
				$input=array(
					'judul' => $this->input->post('title'),
					'slug_judul' => $this->berita_m->format_uri($this->input->post('title')),
					'id_user' => $this->auth->_ci->session->userdata('admin_session'),				
					'id_kategori' => $this->input->post('idk'),				
					'overview' => $this->input->post('summary'),
					'full' => $this->input->post('content'),
					'image'  => $this->_doupload_file('banner_image','asset/upload/berita/')
				);
				$insert=$this->berita_m->insert('p_berita', $input);
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';
			}		
		}
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/berita_add_v', $data);
	}

	public function edit($id='')
	{
		$data=array();
		$data['alert']='';
		$data['error'] = '';
		$data['title']='Edit Berita';
		if($this->input->post('simpan')){			
			$this->load->library('form_validation');            
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Konten', 'required');
			$this->form_validation->set_rules('summary', 'Summary', 'required');
            if ($this->form_validation->run() == FALSE){
                $data['error'] = validation_errors();
            }else{
				$img = $this->input->post('curr_img');
                if($_FILES['banner_image']['name']!=''){
                    $file = explode('/',$this->input->post('curr_img'));
                    @unlink('asset/upload/berita/'.$file[3]);
                    $img = $this->_doupload_file('banner_image','asset/upload/berita/');
                }				
				$input=array(
					'judul' => $this->input->post('title'),
					'slug_judul' => $this->berita_m->format_uri($this->input->post('title')),
					'id_user' => $this->auth->_ci->session->userdata('admin_session'),				
					'id_kategori' => $this->input->post('idk'),				
					'overview' => $this->input->post('summary'),
					'full' => $this->input->post('content'),
					'image'  => $img
				);
				$insert=$this->berita_m->update('p_berita', 'id_berita', $id, $input);												
				if($insert)	$data['alert']='success';
				else $data['alert']='failed';							
			}						
		}
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['data']=$this->berita_m->detail_berita_admin($id);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/berita_edit_v', $data);
	}
	public function view($id='')
	{
		$data=array();
		$data['title']='Detail Berita';
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['data']=$this->berita_m->detail_berita_admin($id);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/berita_view_v', $data);
	}

	public function delete($id='')
	{
		$del=$this->berita_m->delete('p_berita', 'id_berita', $id);
		if($del) redirect(base_url('dash').'/berita?alert=success');
		else redirect(base_url('dash').'/berita?alert=failed');
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