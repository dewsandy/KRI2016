<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
        $this->load->library('auth');        
	}

	public function index()
	{        
		$this->auth->check();
		$data['alert']      = '';
		$data['title']      = 'user';
		$data['datas']      = $this->user_m->view_all_admin(1000,0);
		$data['datas2']     = $this->user_m->view_all_member(1000,0);		
        $data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/user_v', $data);
	}

	public function admin(){
        $this->auth->check();
		$data=array();
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}
		
		$data['title'] = 'dash';
		//$data['datas'] = $this->user_m->view_all_admin(1000,0);
				if(isset($_GET['hal'])){$hal=$_GET['hal'];}
                else {$hal='';}

                $dataPerhalaman=10;
                ($hal=='')?$nohalaman = 1:$nohalaman = $hal;
                $offset = ($nohalaman - 1) * $dataPerhalaman;
                $off = abs( (int) $offset);
                $data['offset']=$offset;
                
                if(!isset($_GET['s'])){
                    $jmldata=$this->user_m->count_all_admin();
                    $data['paginator']=$this->user_m->page($jmldata, $dataPerhalaman, $hal);
                    $data['datas'] = $this->user_m->view_all_admin($dataPerhalaman,$off);
                    $data['s']='';                    
                }else{
                    $jmldata=$this->user_m->count_all_admin_search($_GET['s']);
                   $data['paginator']=$this->user_m->page($jmldata, $dataPerhalaman, $hal);
                    $data['datas']=$this->user_m->get_admin_by_search(
                        $_GET['s'],
                        $dataPerhalaman,
                        $off
                    );
                    $data['s']=$_GET['s'];                   
                }
		$this->load->view('dash/user_admin_v', $data);
	}	

    public function member(){
        $this->auth->check();
		$data=array();
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}
                
                 if(isset($_GET['hal'])){$hal=$_GET['hal'];}
                else {$hal='';}

                $dataPerhalaman=10;
                ($hal=='')?$nohalaman = 1:$nohalaman = $hal;
                $offset = ($nohalaman - 1) * $dataPerhalaman;
                $off = abs( (int) $offset);
                $data['offset']=$offset;
                
                if(!isset($_GET['s'])){
                    $jmldata=$this->user_m->count_all_member();
                    $data['paginator']=$this->user_m->page($jmldata, $dataPerhalaman, $hal);
                    $data['datas'] = $this->user_m->view_all_member($dataPerhalaman,$off);
                    $data['s']='';                    
                }else{
                    $jmldata=$this->user_m->count_all_member_search($_GET['s']);
                   $data['paginator']=$this->user_m->page($jmldata, $dataPerhalaman, $hal);
                    $data['datas']=$this->user_m->get_member_by_search(
                        $_GET['s'],
                        $dataPerhalaman,
                        $off
                    );
                    $data['s']=$_GET['s'];                   
                }
                //$data['status'] = $this->user_m->get_status();
        //$data['datas']     = $this->user_m->view_all_member(1000,0);				
		$data['title'] = 'Member';
		$this->load->view('dash/user_member_v', $data);
	}
	
	public function myprofile(){
        $this->auth->check();		
		$data=array();		
		$data['success']='';
		$data['error']='';
		$data['title']='Profile';
		if($this->input->post('simpan')){
			$input=array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),				
				'email' => $this->input->post('email')
			);
			$update=$this->user_m->update('user', 'id_user', $this->auth->_ci->session->userdata('admin_session'), $input);
			// echo $update;exit;			
			if($update){$data['success']='success';}else{$data['error']='Failed';}
		}
		$data['data']=$this->user_m->get_single('user', 'id_user', $this->auth->_ci->session->userdata('admin_session'));
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/user_profil_v', $data);
	}
	
	public function profile($id=''){
                $this->auth->check();
		if($id==''){redirect(base_url('dash/dashboard'));}		
		$data=array();
		$data['success']='';
		$data['error']='';
		$data['title']='Profile';
		if($this->input->post('simpan')){
			$input=array(
				'username' => $this->input->post('username'),
				'nama_user' => $this->input->post('nama_user'),				
				'alamat_user' => $this->input->post('alamat'),
				'notelp_user' => $this->input->post('telpon')
			);
			$update=$this->user_m->update('user', 'id_user', $this->session->userdata('admin_session')->id_user, $input);
			// echo $update;exit;			
			if($update){$data['success']='success';}else{$data['error']='Failed';}
		}
		$data['data']=$this->user_m->get_single('user', 'id_user', $this->session->userdata('admin_session')->id_user);
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/user_profil_v', $data);
	}

	public function setting(){
                $this->auth->check();
		$data=array();
		$data['success']='';
		$data['error']='';
		$data['title']      = 'Setting';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('old_password', 'Old Password', 'required');
			$this->form_validation->set_rules('password', 'New Password', 'required|matches[passconf]|min_length[6]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi password', 'required');			
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}
		    else{
		    	$cek_password=$this->user_m->cek_password($this->auth->_ci->session->userdata('admin_session'), md5($this->input->post('old_password')));
		    	if($cek_password>0){
		    		$ganti=$this->user_m->update('user', 'id_user', $this->auth->_ci->session->userdata('admin_session'), array('password'=>md5($this->input->post('password'))));
		    		if($ganti){$data['success']='Password berhasil diganti.';}else{$data['error']='Failed';}
		    	} else {
		    		$data['error']= 'Password Anda salah';
		    	}
		    }
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$data['data']=$this->user_m->get_single('user', 'id_user', $this->auth->_ci->session->userdata('admin_session'));		
		$this->load->view('dash/user_setting_v', $data);
	}
	
	public function add()
	{
        $this->auth->check();
		$data=array();
		$data['add']='dash';
		$data['success']='';
		$data['error']='';
		$data['edit'] = '';
		$data['title']='Add User';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|is_unique[user.username]');
			$this->form_validation->set_rules('nama_user', 'Name User', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}
		    else{
				$input=array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'nama' => $this->input->post('nama_user'),
					'email' => $this->input->post('alamat'),					
                    'status' => 1,
					'id_group' => 1 //$this->input->post('id_level')
				);
				$insert=$this->user_m->insert('user', $input);
				if($insert)	{
                    $data['success']='success';
                    $_POST = array();
                } else {
                    $data['error']='failed';
                }
		    }
		}
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/user_add_v', $data);
	}

	public function edit($id='')
	{
        $this->auth->check();
		$data=array();
		$data['edit']='dash';
		$data['success']='';
		$data['error']='';
		$data['title']='Edit User';
		if($this->input->post('simpan')){
			$this->load->library('form_validation');
			// $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
			$this->form_validation->set_rules('nama_user', 'Name User', 'required');;
			$this->form_validation->set_rules('status', 'Status', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}
		    else{
		    // if($this->user_m->cek_username($id, $this->input->post('username'))==0){
			$input=array(
				// 'username' => $this->input->post('username'),
				'nama_user' => $this->input->post('nama_user'),
				'alamat_user' => $this->input->post('alamat'),
				'notelp_user' => $this->input->post('telpon'),
                'status' => $this->input->post('status'),
				'level' => 0		
			);
			if($this->input->post('id_status')==0){
				$status = 'deleted';
			} else {
				$status = 'verifed';
			}
            $this->db->trans_begin();
			$insert=$this->user_m->update('user', 'id_user', $id, $input);
            $log = $this->user_m->insert('user_status_log', array(
                'id_user' => $id, 
                'id_admin' => $this->session->userdata('admin_session')->id_user, 
                'status' => $status,
                'date_added' => date('Y-m-d H:i:s')
                ));
            
            if ($this->db->trans_status() === TRUE) {
                $this->db->trans_commit();
                $data['success'] = 'success';                    
            } else {
                $data['error'] = 'failed';
                $this->db->trans_rollback();                    
            }

			// }else {
			// 	$data['error']='Username already exist.';
			// }
			}
		}
		$data['data']=$this->user_m->get_single('user', 'id_user', $id);
		$this->load->view('dash/user_edit_v', $data);
	}       	

	public function del($id='', $page='')
	{
		
		$del = $this->user_m->delete('user', 'id_user', $id);
    	if ($del){
            if($page=='dash') redirect(base_url('dash').'/user/dash/?alert=success');
			if($page=='member') redirect(base_url('dash').'/user/member/?alert=success');
		}		
	}
	
	public function active($id='', $page='')
	{
		
		$del = $this->user_m->update('user', 'id_user', $id, array('status'=>1));
    	if ($del){
            if($page=='dash') redirect(base_url('dash').'/user/dash/?alert=success');
			if($page=='member') redirect(base_url('dash').'/user/member/?alert=success');
		} 	
	}
		
	public function banned($id='', $page='')
	{
		
		$del = $this->user_m->update('user', 'id_user', $id, array('status'=>2));
    	if ($del){
            if($page=='dash') redirect(base_url('dash').'/user/dash/?alert=success');
			if($page=='member') redirect(base_url('dash').'/user/member/?alert=success');
		}		
	}


	public function add_member() {
        $this->auth->check();
        $data = array();
		$data['edit'] = 'member';
        $data['add'] = 'member';
        $data['success'] = '';
        $data['error'] = '';
        $data['title'] = 'Add Member';
        if ($this->input->post('simpan')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|is_unique[user.username]');
			$this->form_validation->set_rules('nama_user', 'Name User', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['error'] = validation_errors();
            } else {

                $input = array(
                    'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'nama' => $this->input->post('nama_user'),
					'email' => $this->input->post('alamat'),
                    'status' => 1,
					'id_group' => 2 //$this->input->post('id_level')
                );
                $insert1 = $this->user_m->insert('user', $input);
                if ($insert1)
                    $data['success'] = 'success';
                else
                    $data['error'] = 'failed';
            }
        }
		$data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
        $this->load->view('dash/user_add_v', $data);
    }

    public function edit_member($id = '') {
        $this->auth->check();
        $data = array();
        $data['edit'] = 'member';
        $data['success'] = '';
        $data['error'] = '';
        $data['title'] = 'Edit Sales';        
        
        if ($this->input->post('simpan')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_user', 'Name User', 'required');;
			$this->form_validation->set_rules('status', 'Status', 'required');
			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}
		    else{
		    // if($this->user_m->cek_username($id, $this->input->post('username'))==0){
			$input=array(
				// 'username' => $this->input->post('username'),
				'nama_user' => $this->input->post('nama_user'),
				'alamat_user' => $this->input->post('alamat'),
				'notelp_user' => $this->input->post('telpon'),
                'status' => $this->input->post('status'),
				'level' => 1		
			);
			if($this->input->post('id_status')==0){
				$status = 'deleted';
			} else {
				$status = 'verifed';
			}
            $this->db->trans_begin();
			$insert=$this->user_m->update('user', 'id_user', $id, $input);
            $log = $this->user_m->insert('user_status_log', array(
                'id_user' => $id, 
                'id_admin' => $this->session->userdata('admin_session')->id_user, 
                'status' => $status,
                'date_added' => date('Y-m-d H:i:s')
                ));
            
                if ($this->db->trans_status() === TRUE) {
                    $this->db->trans_commit();
                    $data['success'] = 'success';                    
                } else {
                    $data['error'] = 'failed';
                    $this->db->trans_rollback();                    
                }
            }
        }
        $data['data'] = $this->user_m->get_single('user', 'id_user', $id);
        $this->load->view('dash/user_edit_v', $data);
    }

    public function login() {
        if ($this->session->userdata('admin_session')) {

            redirect(base_url('home'));
        }
        $this->load->view('dash/user_login_v');
    }

    public function dologin() {
        $this->load->library('form_validation');
        $data['error'] = FALSE;

        //#1 Set Form Validation

        $this->form_validation->set_rules('username', 'Username', 'xss_clean|required');
        $this->form_validation->set_rules('password', 'Password', 'xss_clean|required');

        if ($this->form_validation->run($this) == FALSE) {
            //#2 Display Error Message
            $data['error'] = validation_errors();
        } else {
            $username = $this->input->post("username");
            $pass = md5($this->input->post('password'));

            $user = $this->user_m->get_user_login($username, $pass);
            if(!empty ($user)){
                $this->auth->save($user);
//                var_dump($_SESSION['admin_session']);
                redirect(base_url() . "dash/dashboard");
            }
            else{
                $data['error'] = "Check your Username & Password";
            }
        }

        $this->load->view('dash/user_login_v', $data);
    }

    public function logout(){
    	 $this->auth->destroy();
    }
    
    function _mail_win()
    {
        $config = Array(
            'protocol' => $this->config->item('protocol'),
            'smtp_host' => $this->config->item('smtp_host'),
            'smtp_port' => $this->config->item('smtp_port'),
            'smtp_user' => $this->config->item('smtp_user'),
            'smtp_pass' => $this->config->item('smtp_pass'),
            'mailtype' => $this->config->item('mailtype'),
            'charset' => $this->config->item('charset'),
            'smtp_crypto' => $this->config->item('smtp_crypto')
        );
        return $config;
    }

    function _mail_unix()
    {
        $config = array(
            'mailtype' => $this->config->item('mailtype'),
            'charset' => $this->config->item('charset')
        );
        return $config;
    }
    
    
}

/* End of file  */
/* Location: ./application/controllers/ */
