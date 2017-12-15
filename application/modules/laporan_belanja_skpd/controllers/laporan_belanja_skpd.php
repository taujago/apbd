<?php 
class laporan_belanja_skpd extends master_controller {

var $arr_rek; 
var $tb_ref; 
	function __construct(){
		parent::__construct(); 
		$this->load->model("coremodel","dm");
		$this->load->helper("tanggal");
		 $this->arr_rek = $this->dm->get_arr_rek();
 
		 $this->tb_ref = $this->dm->get_tb_ref(); 
	}
	

	

 


	function index(){


		$data['arr_unit'] = $this->dm->get_skpd();

		$data['arr_belanja'] = $this->dm->get_rekening();


		$content = $this->load->view("laporan_belanja_skpd_view",$data,true);
	 

		$this->set_subtitle("GRAPHIC PENGGUNAAN ANGGARAN BELANJ  PER SKPD ");
		$this->set_title("GRAPHIC PENGGUNAAN ANGGARAN  BELANJ PER SKPD ");
		$this->set_content($content);
		$this->render();
	}





	function query() {
		$post = $this->input->post();

		$post['tahun'] = $this->session->userdata("tahun");

		// show_array($post); 

		$arr_rek =  $this->arr_rek;

		// show_array($arr_rek); 
		// exit;

		$str=array();

		$elm = 0 ;

		$arr_kode=array();
		$arr_condition = array();
		foreach($post['kode_rekening'] as $b => $val ) : 

			$tmp = explode("_", $val); 	 

			$c=0;
			  
			foreach($tmp as $a => $x) {
			 	
			 	if($x==0) break; 

				$arr_kode[$elm][$c] = $x;  

				$arr_condition[$elm][$arr_rek[$c]] = $x;

			 $c++;
			}

			// echo "<hr /> ";
			$elm++;

		endforeach;

		// show_array($arr_kode); 
		// show_array($arr_condition); 


		/// baru cacah kode nya 
		$arr_unit = explode(".", $post['id_unit']); 

		$arr_result=array();

		$y=0;

		$total_belanja = 0 ;
		foreach($arr_condition as $a =>$b){

			// show_array($b);
			$rek_nama = $this->get_nama_rekening($b); 

			// echo "$rek_nama"; 

			$b['Kd_Urusan'] = $arr_unit[0];
			$b['Kd_Bidang'] = $arr_unit[1];
			$b['Kd_Unit'] = $arr_unit[2]; 
			$b['tahun'] = $post['tahun'];

		   $this->db->select("sum(total) as total",false)
		   ->from("dbo.Ta_Belanja_Rinc_Sub")
		   ->where($b); 
		   $data = $this->db->get()->row(); 
		  
		   $arr_result[$y]['name'] = $rek_nama; 
		   $arr_result[$y]['y'] = floor($data->total); 
		   $total_belanja += floor($data->total); 

		   $y++;
		}

		// cari totalnya 
		$wtotal['Kd_Urusan'] = $arr_unit[0];
		$wtotal['Kd_Bidang'] = $arr_unit[1];
		$wtotal['Kd_Unit'] = $arr_unit[2]; 
		$wtotal['tahun'] = $post['tahun'];
		$this->db->select("sum(total) as total",false)
		   ->from("dbo.Ta_Belanja_Rinc_Sub")
		   ->where($wtotal); 
	    $total = $this->db->get()->row(); 
	    
	    // $y++; 

	    // show_array($arr_result); 
	   
	    $arr_result[$y]['name'] = "Lainnya"; 
	    $arr_result[$y]['y'] = floor($total->total) - $total_belanja; 


		// show_array($arr_result);  
		// exit; 


		$xdata['result'] = $arr_result; 

		$kode_unit['Kd_Urusan'] = $arr_unit[0];
		$kode_unit['Kd_Bidang'] = $arr_unit[1];
		$kode_unit['Kd_Unit'] = $arr_unit[2]; 

		$xdata['nama_skpd'] = $this->get_nama_skpd($kode_unit); 
		$xdata['tahun'] = $post['tahun'] ; 
		$xdata['total'] = floor($total->total); 


		/// perbandingan dengan semua total SKPD 
		// $arr_skpd_result = $arr_result; 

		// cari total belanja di semua SKPD 
		
		// show_array($arr_condition); // exit ;

		// $kode_unit adalah untuk SKPD 
		$arr_skpd = array(); 


		 
		foreach($arr_condition as $row): 

			$rname = $row;

			$count = 0 ;

			$row['Kd_Urusan'] = $arr_unit[0];
			$row['Kd_Bidang'] = $arr_unit[1];
			$row['Kd_Unit'] = $arr_unit[2]; 
			$row['tahun']  = $post['tahun'];
			 $this->db->select("sum(total) as total",false)
			->from("dbo.Ta_Belanja_Rinc_Sub")
			->where($row); 

			$dt = $this->db->get()->row(); 

		 

			$arr_skpd[implode("_", $row)]['rekening'] = $this->get_nama_rekening($rname); 
			$arr_skpd[implode("_", $row)]['data'][$count]['name'] =  $this->get_nama_rekening($rname); 
			$arr_skpd[implode("_", $row)]['data'][$count]['y'] =  floor($dt->total);

		 

			$wtotal = $rname; 
			$wtotal['tahun'] = $post['tahun']; 

			 

			 $this->db->select("sum(total) as total",false)
			->from("dbo.Ta_Belanja_Rinc_Sub")
			->where($wtotal); 

			$dt_total = $this->db->get()->row(); 

			// echo "sql total ". $this->db->last_query();  
			$selisih  = floor($dt_total->total) - floor($dt->total);
			$count++; 
			$arr_skpd[implode("_", $row)]['total'] =  floor($dt_total->total); 


			$arr_skpd[implode("_", $row)]['data'][$count]['name'] =  $this->get_nama_rekening($rname). " SKPD Lain"; 
			$arr_skpd[implode("_", $row)]['data'][$count]['y'] =  $selisih; 

		endforeach;

	 





		$xdata['arr_skpd'] = $arr_skpd; 

		 $this->db->select("sum(total) as total",false)
			->from("dbo.Ta_Belanja_Rinc_Sub")
			->where("tahun",$post['tahun']); 

		$dt_apbd = $this->db->get()->row(); 

		$total_apbd = floor($dt_apbd->total); 

		// echo "total apbd ". $total_apbd; 

		$arr_apbd = array(); 

		$z=0; 



		foreach($arr_skpd as $x => $y) : 
			 
		 	$index = "apbd_".$x; 
			$arr_apbd[$index]['rekening']				= $y['rekening']; 
			$arr_apbd[$index]['total'] 					=  $total_apbd; 
			$arr_apbd[$index]['data'][0]['name']  		=  $y['data'][0]['name'];
			$arr_apbd[$index]['data'][0]['y']  		=  $y['data'][0]['y'];
			 
			$arr_apbd[$index]['data'][1]['name']  		=  $y['data'][1]['name']; 
		    $arr_apbd[$index]['data'][1]['y']  		= $total_apbd -  $y['data'][0]['y'];
			 

		 	$z++; 
		endforeach;
		// $arr_skpd;
		// show_array($arr_skpd); 
		// show_array($arr_apbd); 
		// exit;

		$xdata['arr_apbd'] =  $arr_apbd; 

		$this->load->view("laporan_belanja_skpd_view_graph",$xdata);

 		

	}


}
?>