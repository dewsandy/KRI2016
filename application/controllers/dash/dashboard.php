<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $this->load->library('auth');
        $this->auth->check();
		$this->load->model('user_m');
    }

	public function index()
	{        
		$data=array();
		$data['title']='Dashboard';
        $data['user'] = $this->user_m->get_user_by_id($this->auth->_ci->session->userdata('admin_session'));
		$this->load->view('dash/index', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */