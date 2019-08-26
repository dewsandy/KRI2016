<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class berita extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $this->load->model('agenda_m');
        $this->load->model('kategori_m');
        $this->load->model('berita_m');
        $this->load->model('banner_m');
        $this->load->model('page_m');
        $this->load->model('tag_m');
    }

	public function index(/*$k='',$s=''*/)
	{        
		$data=array();		
		$data['title'] = 'Blog Berita | Kontes Robot Indonesia 2016';		
		$data['side_berita'] = $this->berita_m->get_berita_admin('',6,0);		
		$data['side_tag'] = $this->tag_m->get_list_kategori_web('total',20);
		$data['side_agenda'] = $this->agenda_m->get_agenda(date('Y-m-d',now()));
		$data['side_kategori'] = $this->kategori_m->get_list_kategori_web('kategori');
		$data['foot_berita'] = $this->berita_m->get_berita_admin('',4,0);		
		$data['foot_agenda'] = $this->agenda_m->get_agenda_today(date('Y-m-d',now()));
		$data['foot_kategori'] = $this->kategori_m->get_list_kategori_web('total',2);		
		$data['foot_tag'] = $this->tag_m->get_list_kategori_web('total',5);
		$data['web']=$this->agenda_m->get_single('p_web', 'id', 1);		
		$data['berita_m'] = $this->berita_m;		
		
		if(isset($_GET['hal'])){$hal=htmlspecialchars($_GET['hal']);}
        else {$hal=1;}
		$dataPerhalaman=9;        
        $offset = ($hal - 1) * $dataPerhalaman;
        $off = abs( (int) $offset);
        $data['offset']=$offset;		
		if(isset($idk)){ 
			$data['idk']=$idk;
		} else{
			$data['idk'] = '';
		}		
		$jmldata=$this->berita_m->get_total_berita_admin('',$data['idk']);
		$data['paginator']=$this->berita_m->page2($jmldata, $dataPerhalaman, $hal);
		$data['kategori'] = $this->kategori_m->get_list_kategori();		
		$data['data']=$this->berita_m->get_berita_admin('',$dataPerhalaman,$off,$data['idk']);			
		
		$this->load->view('berita', $data);	
	}
	
	public function cari_post(){
		redirect(base_url('berita').'/cari/'.$_POST['s']);
	}
	
	public function cari($s='')
	{        
		$data=array();		
		$data['title'] = 'Mencari : '.$s.' | Kontes Robot Indonesia 2016';		
		$data['side_berita'] = $this->berita_m->get_berita_admin('',6,0);		
		$data['side_tag'] = $this->tag_m->get_list_kategori_web('total',20);
		$data['side_agenda'] = $this->agenda_m->get_agenda(date('Y-m-d',now()));
		$data['side_kategori'] = $this->kategori_m->get_list_kategori_web('kategori');
		$data['foot_berita'] = $this->berita_m->get_berita_admin('',4,0);		
		$data['foot_agenda'] = $this->agenda_m->get_agenda_today(date('Y-m-d',now()));
		$data['foot_kategori'] = $this->kategori_m->get_list_kategori_web('total',2);		
		$data['foot_tag'] = $this->tag_m->get_list_kategori_web('total',5);
		$data['web']=$this->agenda_m->get_single('p_web', 'id', 1);		
		$data['berita_m'] = $this->berita_m;		
		
		if(isset($_GET['hal'])){$hal=htmlspecialchars($_GET['hal']);}
        else {$hal=1;}
		$dataPerhalaman=9;        
        $offset = ($hal - 1) * $dataPerhalaman;
        $off = abs( (int) $offset);
        $data['offset']=$offset;
		if(isset($s)){ 
			$data['s']=$s;
		} else{
			$data['s'] = '';
		}				
		$jmldata=$this->berita_m->get_total_berita_admin($data['s'],'');
		$data['paginator']=$this->berita_m->page2($jmldata, $dataPerhalaman, $hal);
		$data['kategori'] = $this->kategori_m->get_list_kategori();		
		$data['data']=$this->berita_m->get_berita_admin($data['s'],$dataPerhalaman,$off,'');					
		$this->load->view('berita', $data);	
	}
	
	public function detail($id){
		$data=array();		
		$data['side_berita'] = $this->berita_m->get_berita_admin('',6,0);		
		$data['side_tag'] = $this->tag_m->get_list_kategori_web('total',20);
		$data['side_agenda'] = $this->agenda_m->get_agenda(date('Y-m-d',now()));
		$data['side_kategori'] = $this->kategori_m->get_list_kategori_web('kategori');
		$data['foot_berita'] = $this->berita_m->get_berita_admin('',4,0);		
		$data['foot_agenda'] = $this->agenda_m->get_agenda_today(date('Y-m-d',now()));
		$data['foot_kategori'] = $this->kategori_m->get_list_kategori_web('total',2);		
		$data['foot_tag'] = $this->tag_m->get_list_kategori_web('total',5);
		$data['web']=$this->agenda_m->get_single('p_web', 'id', 1);		
		$data['berita_m'] = $this->berita_m;						
		$data['page']=$this->berita_m->detail_berita($id);
		$data['tag'] = $this->tag_m->get_data_by_id($data['page']->id_berita);
		if(empty($data['page']))			
			$data['title']='Not Found';
		else
			$data['title']=$data['page']->judul;
		$data['title'].=' | Kontes Robot Indonesia 2016';
		$this->load->view('detail_berita', $data);
	}
		/*;	
	
	public function cari($idk='',$s=''){
		$data=array();		
		$data['side_berita'] = $this->berita_m->get_berita_admin('',3,0);		
		$data['side_kategori'] = $this->kategori_m->get_list_kategori_web('kategori');
		$data['foot_berita'] = $this->berita_m->get_berita_admin('',2,0);		
		$data['foot_agenda'] = $this->agenda_m->get_agenda_today(date('Y-m-d',now()));
		$data['foot_kategori'] = $this->kategori_m->get_list_kategori_web('total',2);		
		if(isset($_GET['hal'])){$hal=htmlspecialchars($_GET['hal']);}
        else {$hal=1;}
		$dataPerhalaman=10;        
        $offset = ($hal - 1) * $dataPerhalaman;
        $off = abs( (int) $offset);
        $data['offset']=$offset;
		if(isset($s)){ 
			$data['s']=$s;
		} else{
			$data['s'] = '';
		}		
		if(isset($idk)){ 
			$data['idk']=$idk;
		} else{
			$data['idk'] = '';
		}		
		$jmldata=$this->berita_m->get_total_berita_admin($data['s'],$data['idk']);
		$data['paginator']=$this->berita_m->page($jmldata, $dataPerhalaman, $hal);
		$data['kategori'] = $this->kategori_m->get_list_kategori();
		$data['title']='Berita';
		$data['data']=$this->berita_m->get_berita_admin($data['s'],$dataPerhalaman,$off,$data['idk']);
		$x = 1;
		$data['data1'] = array();
		$data['data2'] = array();
		foreach($data['data'] as $d){
			if($x % 2 == 0)
				$data['data2'][] = $d;
			else 
				$data['data1'][] = $d;
			$x++;
		}		
		$this->load->view('berita', $data);
	}
	
	
	*/
	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */