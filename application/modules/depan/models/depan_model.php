<?php 
class depan_model extends CI_Model {
	function depan_model(){
		parent::__construct(); 
	}




function get_total_pembiayaan(){
	$tahun = $this->session->userdata("tahun");

	$this->db->select("sum(Total) as total ",false)
		->from("Ta_Pendapatan_Rinc")
		->where("Tahun",$tahun)		 
		->where("Kd_Rek_1","4"); 
		$res = $this->db->get()->row();

		// echo $this->db->last_query(); 
		// echo $res->total; 

		//exit;

	return $res->total;
}


function get_penerimaan_pembiayaan() {
	$tahun = $this->session->userdata("tahun");
	$this->db->select("sum(Total) as total ",false)
		->from("Ta_Pembiayaan_Rinc")
		->where("Tahun",$tahun)
		->where("Kd_Rek_1","6")
		->where("Kd_Rek_2","1"); 
	$data = $this->db->get()->row();
	return $data->total;
}

}
?>