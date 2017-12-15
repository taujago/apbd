<?php 
class laporan_skpd extends master_controller {
	function laporan_skpd(){
		parent::__construct(); 
		$this->load->helper("tanggal");
		$this->load->model("coremodel","cm");
		$this->load->model("lapor_skpd_model","dm");
	}


	function index(){
		$tahun = $this->session->userdata("tahun");

		// $sql = "select a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit, a.Nm_Unit, SUM(b.Total) as total 
		// 	from  Ref_Unit a 
		// 	left join dbo.Ta_Belanja_Rinc_Sub b on a.Kd_Urusan = b.Kd_Urusan 
		// 	and a.Kd_Bidang = b.Kd_Bidang 
		// 	and a.Kd_Unit = b.Kd_Unit 
		// 	where b.Tahun='$tahun'  
		// 	group by  a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit , a.Nm_Unit";


	 // 	$res = $this->db->query($sql); 
	 // 	$arr=array();

	 // 	$n=0; 
	 // 	foreach($res->result() as $row ) : 
	 // 		$n++; 

	 // 		$arr[$n] = array("skpd"=>$row->Nm_Unit,"total"=>floor($row->total)); 

	 // 		// echo $row->total." ". number_format($row->total,0)  ."<br />"; 
	 // 	endforeach;

	 // 	$arr_data['data'] = $arr; 
	 	$arr_data['tahun'] = $tahun; 
	 	// $arr_data['rec_skpd'] = $res; 



	 	$arr_data['graph'] = $this->dm->get_data_graph();

	 	// show_array($arr_data['graph']); 
	 	// exit;


		$content = $this->load->view("laporan_skpd_view",$arr_data,true);
	 

		$this->set_subtitle("GRAPHIC PENGGUNAAN ANGGARAN PER SKPD ");
		$this->set_title("GRAPHIC PENGGUNAAN ANGGARAN PER SKPD ");
		$this->set_content($content);
		$this->render();
	}


	 
}
?>