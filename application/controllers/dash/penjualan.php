<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penjualan_m');
		$this->load->model('model_m');
        $this->load->library('auth');
        $this->auth->check();
	}
	
	public function index()
	{
		$data=array();
		$data['title']='Penjualan';
        //$data['produk_open']='open';
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}

        if(isset($_GET['hal'])){$hal=$_GET['hal'];}
        else {$hal='';}

        $dataPerhalaman=10;
        ($hal=='')?$nohalaman = 1:$nohalaman = $hal;
        $offset = ($nohalaman - 1) * $dataPerhalaman;
        $off = abs( (int) $offset);
        $data['offset']=$offset;
		$data['error']='';
        if(!isset($_GET['s'])){
            $jmldata=$this->penjualan_m->count_all_penjualan();
            $data['paginator']=$this->penjualan_m->page($jmldata, $dataPerhalaman, $hal);
            $data['datas']=$this->penjualan_m->get_penjualan($dataPerhalaman, $off);
            $data['s']='';            
            $data['sal']='';;
            $data['fr']='';
            $data['to']='';
        }else{
            $jmldata=$this->penjualan_m->count_all_penjualan_by(
                $_GET['s'],
                $_GET['sal'],
                $_GET['fr'],
                $_GET['to']
            );
            $data['paginator']=$this->penjualan_m->page($jmldata, $dataPerhalaman, $hal);
            $data['datas']=$this->penjualan_m->get_penjualan_by(
                $_GET['s'],
                $_GET['sal'],
                $_GET['fr'],
                $_GET['to'],
                $dataPerhalaman,
                $off
            );
            $data['s']=$_GET['s'];
            $data['sal']=$_GET['sal'];            
            $data['fr']=$_GET['fr'];
            $data['to']=$_GET['to'];
        }
		
        $data['sales'] = $this->penjualan_m->getSales();        
		$this->load->view('dash/penjualan_v', $data);
	}
	
	public function detail($id = '')
    {
       
        $data = array();
        $data['title'] = 'Penjualan';
        $data['alert'] = '';
        $this->penjualan_m->update('penjualan', 'id_penjualan', $id, array('statusjual' => '1'));
        
        $data['penjualan']      = $this->penjualan_m->get_data_by_id($id);
        $data['datas']      = $this->penjualan_m->get_detail_data($id);
                
        $this->load->view('dash/penjualan_detail_v', $data);
    }
	
	public function report()
	{
		$data=array();
		$data['title']='Laporan Penjualan';
		$data['type'] = 0;
        //$data['produk_open']='open';
		if(isset($_GET['alert'])){$data['alert']=$_GET['alert'];}
		else{$data['alert']='';}

		if(isset($_GET['type'])){$data['type']=$_GET['type'];}        
		
		$data['error']='';
        $data['datas']= null;
		$data['fr']='';
		$data['to']='';
		if($data['type'] == 1){
			if(empty($_GET['fr']) and empty($_GET['to']) or  empty($_GET['sal'])){			   
			   $data['sal']='';            			   
			}else{
				$res=$this->penjualan_m->get_chart_view_sales( $_GET['sal'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['sal']=$_GET['sal'];            
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->tgl,
						'total' => $this->penjualan_m->get_penjualan_by_tgl($d->tgl)
					);
				}
			}
		} elseif ($data['type'] == 2){
			if(!empty($_GET['fr']) and !empty($_GET['to'])){
				$res=$this->penjualan_m->get_chart_all_sales($_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->username,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 3){
			if(!empty($_GET['fr']) and !empty($_GET['to'])){
				$res=$this->penjualan_m->get_chart_all_day($_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->tgl,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 4){
			$data['yr'] = '';
			if(!empty($_GET['yr'])){
				$res=$this->penjualan_m->get_chart_all_month($_GET['yr']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['yr']=$_GET['yr'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $this->penjualan_m->bulan($d->tgl),
						'total' => $d->total
					);
				}
			}
			$data['year'] = $this->penjualan_m->get_year();
		} elseif ($data['type'] == 5){
			if(empty($_GET['fr']) or empty($_GET['to']) or empty($_GET['sal'])){			   
			   $data['sal']='';            			   
			}else{
				$res=$this->penjualan_m->get_chart_sales_model( $_GET['sal'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['sal']=$_GET['sal'];            
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->nama_model,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 6){
			$data['kategori'] = $this->model_m->get_all_data('kategori', 'id_kategori', 'asc');
			$data['subkategori'] = '';
			$data['model'] = '';
			$data['kat'] = '';
			$data['subkat'] = '';
			$data['mod'] = '';
			
			if(!empty($_GET['kat'])){
				$data['kat'] = $_GET['kat'];
				$data['subkategori'] = $this->model_m->get_subkategori($_GET['kat'],'res');		
			}
			if(!empty($_GET['subkat'])){
				$data['subkat'] = $_GET['subkat'];
				$data['model'] = $this->model_m->get_model($_GET['subkat'],'res');		
			}
			if(!empty($_GET['mod'])){
				$data['mod'] = $_GET['mod'];
			}
			if(!empty($_GET['fr']) and !empty($_GET['to'])){
				$res=$this->penjualan_m->get_chart_model_sales($data['kat'],$data['subkat'],$data['mod'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->username,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 7){
			$data['kategori'] = $this->model_m->get_all_data('kategori', 'id_kategori', 'asc');
			$data['subkategori'] = '';
			$data['model'] = '';
			$data['kat'] = '';
			$data['subkat'] = '';
			$data['mod'] = '';			
			if(!empty($_GET['kat'])){
				$data['kat'] = $_GET['kat'];
				$data['subkategori'] = $this->model_m->get_subkategori($_GET['kat'],'res');		
			}
			if(!empty($_GET['subkat'])){
				$data['subkat'] = $_GET['subkat'];
				$data['model'] = $this->model_m->get_model($_GET['subkat'],'res');		
			}
			if(!empty($_GET['mod'])){
				$data['mod'] = $_GET['mod'];
			}
			if(empty($_GET['sal'])){			   
			   $data['sal']='';            			   
			}elseif(!empty($_GET['fr']) and !empty($_GET['to']) and (isset($_GET['kat']))){
				$data['sal'] = $_GET['sal'];
				$res=$this->penjualan_m->get_chart_model_sales_harian($data['sal'],$data['kat'],$data['subkat'],$data['mod'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					/*if(!empty($_GET['kat'])){$dta = $d->nama_kategori;}
					if(!empty($_GET['subkat'])){$dta = $d->nama_subkategori;} 
					if(!empty($_GET['mod'])){$dta = $d->nama_model;}*/
					$data['datas'][] = array(
						'tgl' => $d->tgl,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 8){
			$data['kategori'] = $this->model_m->get_all_data('kategori', 'id_kategori', 'asc');
			$data['subkategori'] = '';
			$data['model'] = '';
			$data['kat'] = '';
			$data['subkat'] = '';
			$data['mod'] = '';
			
			if(!empty($_GET['kat'])){
				$data['kat'] = $_GET['kat'];
				$data['subkategori'] = $this->model_m->get_subkategori($_GET['kat'],'res');		
			}
			if(!empty($_GET['subkat'])){
				$data['subkat'] = $_GET['subkat'];
				$data['model'] = $this->model_m->get_model($_GET['subkat'],'res');		
			}
			if(!empty($_GET['mod'])){
				$data['mod'] = $_GET['mod'];
			}
			if( !empty($_GET['fr']) and !empty($_GET['to']) and (isset($_GET['kat'])) ){
				$res=$this->penjualan_m->get_chart_model_harian($data['kat'],$data['subkat'],$data['mod'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$data['datas'][] = array(
						'tgl' => $d->tgl,
						'total' => $d->total
					);
				}
			}
		} elseif ($data['type'] == 9){
			$data['kategori'] = $this->model_m->get_all_data('kategori', 'id_kategori', 'asc');
			$data['subkategori'] = '';
			$data['model'] = '';
			$data['kat'] = '';
			$data['subkat'] = '';		
			if(!empty($_GET['kat'])){
				$data['kat'] = $_GET['kat'];
				$data['subkategori'] = $this->model_m->get_subkategori($_GET['kat'],'res');		
			}
			if(!empty($_GET['subkat'])){
				$data['subkat'] = $_GET['subkat'];				
			}
			if(!empty($_GET['fr']) and !empty($_GET['to']) and (isset($_GET['kat']))){
				$res=$this->penjualan_m->get_chart_model($data['kat'],$data['subkat'],$_GET['fr'],$_GET['to']);
				if(count($res) == 0){
					$data['datas'] = null;
				}
				$data['fr']=$_GET['fr'];
				$data['to']=$_GET['to'];
				foreach($res as $d){
					$dta = $d->nama_kategori;
					if(!empty($_GET['kat'])){$dta = $d->nama_subkategori;} 
					if(!empty($_GET['subkat'])){$dta = $d->nama_model;}
					$data['datas'][] = array(
						'tgl' => $dta,
						'total' => $d->total
					);
				}
			}
		}
		
        $data['sales'] = $this->penjualan_m->getSales();        
		$this->load->view('dash/chart_penjualan_v', $data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
