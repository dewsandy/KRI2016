<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class penjualan_m extends My_Model{   
	public function __construct(){
		parent ::__construct();
	}
	
	
	function count_all_penjualan(){
		$sql="select * from penjualan a join user b on a.id_sales = b.id_user";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}
	
	function get_penjualan($lim,$off){				
		$sql="select a.*,b.* from penjualan a join user b on a.id_sales = b.id_user
			  GROUP BY a.id_penjualan
			  ORDER BY id_penjualan desc
			  LIMIT $off,$lim";
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function count_all_penjualan_by($s,$sal,$fr,$to){
		$sql="select a.*,b.* from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan  = a.id_penjualan ";
		$sql.=" WHERE ( a.faktur LIKE '%$s%' or a.nama_customer LIKE '%$s%') ";
		if(!empty($sal)){
			$sql.=" AND a.id_sales = $sal ";
		}
		
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		$sql.="GROUP BY a.id_penjualan ";
		$q=$this->db->query($sql);
		$data=$q->num_rows();
		$q->free_result();
		return $data;
	}
	
	function get_penjualan_by($s,$sal,$fr,$to,$lim,$off){				
		$sql="select a.*,b.* from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan ";
		$sql.=" WHERE ( a.faktur LIKE '%$s%' or a.nama_customer LIKE '%$s%') ";
		if(!empty($sal)){
			$sql.=" AND a.id_sales = $sal ";
		}
		
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		
		$sql.="GROUP BY a.id_penjualan  ORDER BY id_penjualan desc
			  LIMIT $off,$lim";
			  
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function input_log($id,$m){
		$m = json_encode($m);
		$b = $this->db->query("INSERT INTO log(id_user,message) VALUES('$id','$m')"); 		
	}	
	
	function get_data_by_id($id){
		$b = $this->db->query("select a.*,b.* from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan WHERE a.id_penjualan=$id GROUP BY a.id_penjualan");
		$r = $b->row();
		$b->free_result();
		return $r;
	}
	
	function getSales(){
		$sql=	"select * from user where level = 1 AND status = 1 ORDER BY id_user DESC";
		$q=$this->db->query($sql);
		$data = $q->result();
		$q->free_result();
		return $data;
	}
	
	function get_detail_data($id,$tipe='res'){
		if($tipe == 'tot'){
			$sql = 'select sum(p.harga) as total ';
		} else {
			$sql = 'select * ';
		}
		$sql.=" from penjualan_detail p join  model a  on a.id_model = p.id_model join subkategori b on a.id_subkategori = b.id_subkategori join
			   kategori c on c.id_kategori = b.id_kategori
			  where p.id_penjualan=$id ORDER BY a.id_model asc";
		$q=$this->db->query($sql);
		if($tipe == 'res'){
		 	$data=$q->result();
		} else if($tipe == 'num'){
		 	$data=$q->num_rows();
		} elseif($tipe == 'tot'){
		 	$data=$q->row()->total;
		} 
		
		$q->free_result();
		return $data;
	}
	//*Chart Tipe 1*//
	function get_chart_view_sales($sal,$fr,$to){
		$sql="select DATE(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan";
		$sql.=" WHERE a.id_sales = $sal ";				
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		
		$sql.="GROUP BY DATE(a.tanggal) ORDER BY DATE(a.tanggal) asc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}	
	
	function get_penjualan_by_tgl($fr){
		$sql="select SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan";
		$fr = strftime("%Y-%m-%d",strtotime($fr));
		$sql.=" WHERE DATE(a.tanggal) = '$fr' ";		
		$q=$this->db->query($sql);
		$data=$q->row();
		$q->free_result();
		if(empty($data->total)){
			return 0;
		} else {
			return $data->total;
		}
	}
	
	//*Chart Tipe 2*//
	function get_chart_all_sales($fr,$to){
		$sql="select b.id_user,b.username,b.nama_user,SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan ";		
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.="WHERE DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		
		$sql.="GROUP BY a.id_sales ORDER BY a.id_sales asc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	//*Chart Tipe 3*//
	function get_chart_all_day($fr,$to){
		$sql="select DATE(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan ";		
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.="WHERE DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		
		$sql.="GROUP BY DATE(a.tanggal) ORDER BY DATE(a.tanggal) asc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	
	//*Chart Tipe 4*//
	function get_year(){
		$sql="select YEAR(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan ";			
		$sql.="GROUP BY YEAR(a.tanggal) ORDER BY YEAR(a.tanggal) desc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function get_chart_all_month($fr){
		$sql="select MONTH(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan ";				
		$fr = strftime("%Y-%m-%d",strtotime($fr));
		$sql.="WHERE YEAR(a.tanggal) = '$fr' ";		
		
		$sql.="GROUP BY MONTH(a.tanggal) ORDER BY DATE(a.tanggal) asc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	function bulan($t){
		switch ($t){
			case 1 : return 'Januari'; break;
			case 2 : return 'Februari'; break;
			case 3 : return 'Maret'; break;
			case 4 : return 'April'; break;
			case 5 : return 'Mei'; break;
			case 6 : return 'Juni'; break;
			case 7 : return 'Juli'; break;
			case 8 : return 'Agustus'; break;
			case 9 : return 'September'; break;
			case 10 : return 'Oktober'; break;
			case 11 : return 'Nopember'; break;
			case 12 : return 'Desember'; break;
		}
	}
	
	//*Chart Tipe 5*//
	
	function get_chart_sales_model($sal,$fr,$to){
		$sql="select d.nama_model, SUM(c.harga) AS total  from penjualan a join user b on a.id_sales = b.id_user
			  join penjualan_detail c on c.id_penjualan = a.id_penjualan join model d on c.id_model = d.id_model";
		$sql.=" WHERE a.id_sales = $sal ";				
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		
		$sql.="GROUP BY c.id_model ORDER BY DATE(a.tanggal) asc";			 
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	//*Chart Tipe 6*//
	
	function get_chart_model_sales($kat,$subkat,$mod,$fr,$to){
		$sql="select d.nama_model,e.nama_subkategori,f.nama_kategori,b.nama_user,b.username, SUM(c.harga) AS total  from penjualan a join user b on 
			  a.id_sales = b.id_user join penjualan_detail c on c.id_penjualan = a.id_penjualan join model d on c.id_model = d.id_model
			  join subkategori e on e.id_subkategori = d.id_subkategori join kategori f on e.id_kategori = f.id_kategori";				
		if(!empty($kat)){
			$sql.=" WHERE f.id_kategori = $kat";
		} else if(!empty($subkat)){
			$sql.=" WHERE e.id_subkategori = $subkat";
		} else if(!empty($mod)){
			$sql.=" WHERE d.id_model = $mod";
		}
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}		
		$sql.="GROUP BY a.id_sales ORDER BY DATE(a.tanggal) asc";			 
		
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	//*Chart Tipe 7*//
	
	function get_chart_model_sales_harian($sal,$kat,$subkat,$mod,$fr,$to){
		$sql="select DATE(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on 
			  a.id_sales = b.id_user join penjualan_detail c on c.id_penjualan = a.id_penjualan join model d on c.id_model = d.id_model
			  join subkategori e on e.id_subkategori = d.id_subkategori join kategori f on e.id_kategori = f.id_kategori";				
		$sql.=" WHERE a.id_sales = $sal ";				
		if(!empty($kat)){
			$sql.=" AND f.id_kategori = $kat";
		} else if(!empty($subkat)){
			$sql.=" AND e.id_subkategori = $subkat";
		} else if(!empty($mod)){
			$sql.=" AND d.id_model = $mod";
		}
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}		
		$sql.="GROUP BY DATE(a.tanggal) ORDER BY DATE(a.tanggal) asc";			 
		
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	//*Chart Tipe 8*//
	
	function get_chart_model_harian($kat,$subkat,$mod,$fr,$to){
		$sql="select DATE(a.tanggal) as tgl, SUM(c.harga) AS total  from penjualan a join user b on 
			  a.id_sales = b.id_user join penjualan_detail c on c.id_penjualan = a.id_penjualan join model d on c.id_model = d.id_model
			  join subkategori e on e.id_subkategori = d.id_subkategori join kategori f on e.id_kategori = f.id_kategori";				
		if(!empty($kat)){
			$sql.=" WHERE f.id_kategori = $kat";
		} else if(!empty($subkat)){
			$sql.=" WHERE e.id_subkategori = $subkat";
		} else if(!empty($mod)){
			$sql.=" WHERE d.id_model = $mod";
		}
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" AND DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}		
		$sql.="GROUP BY DATE(a.tanggal) ORDER BY DATE(a.tanggal) asc";			 
		
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
	
	//*Chart Tipe 9*//
	function get_chart_model($kat,$subkat,$fr,$to){
		$sql="select d.nama_model,e.nama_subkategori,f.nama_kategori,b.nama_user,b.username, SUM(c.harga) AS total  from penjualan a join user b on 
			  a.id_sales = b.id_user join penjualan_detail c on c.id_penjualan = a.id_penjualan join model d on c.id_model = d.id_model
			  join subkategori e on e.id_subkategori = d.id_subkategori join kategori f on e.id_kategori = f.id_kategori";				
		if(!empty($fr) and !empty($to)){
			$fr = strftime("%Y-%m-%d",strtotime($fr));
            $to = strftime("%Y-%m-%d",strtotime($to));
			$sql.=" WHERE DATE(a.tanggal) BETWEEN '$fr' AND '$to' ";
		}
		if(!empty($kat)){
			$sql.=" AND f.id_kategori = $kat GROUP BY e.id_subkategori";
		} else if(!empty($subkat)){
			$sql.=" AND e.id_subkategori = $subkat GROUP BY d.id_model";
		} else {
			$sql.="GROUP BY f.id_kategori";
		}				
		$sql.=" ORDER BY DATE(a.tanggal) asc";			 
		
		$q=$this->db->query($sql);
		$data=$q->result();
		$q->free_result();
		return $data;
	}
}	