<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $this->load->model('agenda_m');
        $this->load->model('kategori_m');
        $this->load->model('berita_m');
        $this->load->model('banner_m');
        $this->load->model('page_m');
        $this->load->model('tag_m');
    }

	public function index()
	{        
		$data=array();
		$data['title']='Kontes Robot Indonesia 2016 | Politeknik Elektronika Negeri Surabaya';        		
		$data['foot_berita'] = $this->berita_m->get_berita_admin('',4,0);						
		$data['foot_tag'] = $this->tag_m->get_list_kategori_web('total',5);
		$data['web']=$this->agenda_m->get_single('p_web', 'id', 1);
		$data['banner'] = $this->banner_m->get_list_banner();
		$data['pens'] = $this->page_m->detail_page('pens');
		$data['kri'] = $this->page_m->detail_page('kri');
		$data['kompetisi'][] = $this->page_m->detail_page('krpai');
		$data['kompetisi'][] = $this->page_m->detail_page('krai');
		$data['kompetisi'][]  = $this->page_m->detail_page('krsbi');
		$data['kompetisi'][]  = $this->page_m->detail_page('krsti');
		
		//$data['kompetisi'][]  = $this->page_m->detail_page('ersb');
		$data['berita_m'] = $this->berita_m;
		$this->load->view('index2', $data);
	}

}


/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */