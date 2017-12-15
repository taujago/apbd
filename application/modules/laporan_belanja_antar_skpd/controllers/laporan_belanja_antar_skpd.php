<?php 
class laporan_belanja_antar_skpd extends master_controller {

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


		$content = $this->load->view("laporan_belanja_antar_skpd_view",$data,true);
	 

		$this->set_subtitle("GRAPHIC PENGGUNAAN ANGGARAN BELANJ  PER SKPD ");
		$this->set_title("GRAPHIC PENGGUNAAN ANGGARAN  BELANJ PER SKPD ");
		$this->set_content($content);
		$this->render();
	}





	function query() { 

		$post = $this->input->post(); 

		$tahun = $this->session->userdata("tahun");

		// show_array($post); 

		// proses kode belanja menjadi array 
		$arr_index = array(1=>"Kd_Rek_1",
		 						"Kd_Rek_2",
		 						"Kd_Rek_3",
		 						"Kd_Rek_4",
		 						"Kd_Rek_5");

		 $tmp_id_belanja = explode("_", $post['id_belanja']); 
		 $tmp_where = array() ;


		 $where = array(); 
		 foreach($tmp_id_belanja as $a =>$b) : 


		 	if($b==0) {
		 		 
		 		continue;
		 	}


		 	$where[$arr_index[$a+1]] = $b;
		 	// $tmp_where[] = $arr_index[$a+1] . " = " . $b; 



		 endforeach;

		 // show_array($where); 
		 $arr_graph=array(); 
		 $arr_unit=array(); 
		 $n=0; 

		 $jumlah = 0; 
		 foreach($post['id_unit'] as $kode) : 

		 	$tmp_kode = explode(".",  $kode); 
		 	$arr_where[$n]=array("Kd_Urusan"=>$tmp_kode[0],
		 		  			 "Kd_Bidang"=>$tmp_kode[1],
		 		  			 "Kd_Unit"=>$tmp_kode[2]

		 			     );

		 	// show_array($arr_where[$n]); 


		 	$this->db->select("sum(Total) as total")
		 	->from("Ta_Belanja_Rinc_Sub")
		 	->where($where)
		 	->where("Tahun",$tahun)
		 	->where($arr_where[$n]);
		 	$dt = $this->db->get()->row(); 
		 	// echo $this->db->last_query()."<br />";

		 	$arr_graph[] = array("name"=>$this->dm->get_nama_skpd($arr_where[$n]).
		 						" (".rupiah($dt->total).")", 
		 						 "y" =>$dt->total,
		 						 "nama" => $this->dm->get_nama_skpd($arr_where[$n]), 
		 						 "jumlah" =>$dt->total
		 					); 
		 	$n++;
		 	$jumlah += $dt->total; 
		 endforeach;

		 $arr_data = array();
		 $arr_data['tahun'] = $tahun;
		 $arr_data['arr_graph'] = $arr_graph; 

		 $arr_data['keterangan'] = "Perbandingan Belanja ".$this->dm->get_nama_rekening($where) . " Pada ".  $this->keterangan($arr_where); 
		 // show_array($arr_data);
		 // exit;
 // total 
		 $this->db->select("sum(Total) as total")
		 	->from("Ta_Belanja_Rinc_Sub")
		 	->where($where)
		 	->where("Tahun",$tahun); 
		 	 
		 	$dt = $this->db->get()->row(); 

		 $arr_graph_lainnya = $arr_graph; 
		 $total = $dt->total - $jumlah; 
		 $arr_graph_lainnya[] =  array("name"=>"SKPD LAINNYA" .
		 						" (".rupiah($total).")", 
		 						 "y" =>$total,
		 						 "nama"=>"SKPD LAINNYA",
		 						 "jumlah" =>$total
		 					); 

		 $arr_data['arr_graph_lainnya'] = $arr_graph_lainnya; 


		 $this->load->view("laporan_belanja_antar_skpd_view_graph",$arr_data); 



	}


function keterangan($arr) {

	// show_array($arr); 

	$jumlah = count($arr); 
	$str = "";

	foreach($arr as $x =>$val): 

		if($x==0) {
			$str = $this->dm->get_nama_skpd($val); 
		}

		// 	$str .=", ".$this->dm->get_nama_skpd($val); 
		// }
		if($x>0 and $x < ($jumlah-1)) {
			$str .=", ".$this->dm->get_nama_skpd($val); 
		}

		if($x == ($jumlah - 1)) {
			$str .=" dan  ".$this->dm->get_nama_skpd($val); 
		}

	endforeach;

	// echo $str; 
	return $str;

}


}
?>