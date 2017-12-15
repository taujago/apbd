<?php 
class lapor_skpd_model extends CI_Model {
	function lapor_skpd_model(){
		parent::__construct();
	}


	function get_data_graph(){
		$tahun = $this->session->userdata("tahun");
		$sql = "select a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit, a.Nm_Unit, 

sum(case when Kd_Rek_1 = 5 and Kd_Rek_2 = 1 then Total end) as btl , 
sum(case when Kd_Rek_1 = 5 and Kd_Rek_2 = 2 then Total end) as bl , 
SUM(b.Total) as total 
			from  Ref_Unit a 
			left join dbo.Ta_Belanja_Rinc_Sub b on a.Kd_Urusan = b.Kd_Urusan 
			and a.Kd_Bidang = b.Kd_Bidang 
			and a.Kd_Unit = b.Kd_Unit 
			where b.Tahun='$tahun'  
			group by  a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit , a.Nm_Unit"; 

		$res = $this->db->query($sql); 

		$arr_title = array();
		 

		$arr_btl = array();
		$arr_bl = array();

		$arr_amchart = array(); 

		$x=0; 
		foreach($res->result() as $row) : 
			
			$arr_title[$x] = ($x+1).". ".$row->Nm_Unit; 
			// $arr_data['BELANJA LANGSUNG'][$x]
			$arr_btl[$x] = $row->btl;
			$arr_bl[$x] = $row->bl;

			$arr_amchart[$x]['nama'] = ($x+1).". ".$row->Nm_Unit; 
			$arr_amchart[$x]['btl'] = $row->btl;
			$arr_amchart[$x]['bl'] = $row->bl;

		$x++;

		endforeach;

		 
		// foreach($res->result() as $row) : 
		// $y++;
		// 	$arr_btl[$y] = $row-> 
		// endforeach;

		$arr_data = array(array("name"=>"BELANJA LANGSUNG","data"=>$arr_bl),
						  array("name"=>"BELANJA TIDAK LANGSUNG","data"=>$arr_btl)
						  );


       

		$ret['arr_title'] = $arr_title;
		$ret['arr_data'] = $arr_data; 
		$ret['arr_amchart'] = $arr_amchart; 

		$ret['record'] = $res; 
		return $ret; 
		

	}


function get_pendapatan($where){
	$this->db->select("sum(Total) as total")
	->from("Ta_Pendapatan_Rinc")
	->where($where);
	$dt = $this->db->get()->row(); 

	return $dt->total;
}


}
?>