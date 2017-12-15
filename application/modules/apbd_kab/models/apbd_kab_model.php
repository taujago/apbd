<?php 
  class apbd_kab_model extends CI_Model {
  	function apbd_kab_model () {
  		parent::__construct(); 
  	}



  	function get_total_pendapatan(){
  		$tahun = $this->session->userdata("tahun");
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Pendapatan_Rinc");
  		$this->db->where("Tahun",$tahun); 
  		$data = $this->db->get()->row();
  		return $data->total;
  	}

  	function get_total_belanja(){
  		$tahun = $this->session->userdata("tahun");
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Belanja_Rinc_Sub");
  		$this->db->where("Tahun",$tahun); 
  		$data = $this->db->get()->row();
  		return $data->total;
  	}

  	function get_total_pembiayaan($arr){

  		$tahun = $this->session->userdata("tahun");
  		$arr['Tahun'] = $tahun;
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Pembiayaan_Rinc");
  		$this->db->where($arr); 
  		$data = $this->db->get()->row();
  		return $data->total;
  	}



  	function get_pendapatan_1(){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Pendapatan_Rinc")
  		 ->where("Tahun",$tahun)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		 return $res;

  	}

  	function get_pendapatan_2($kode){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, ,Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Pendapatan_Rinc")
  		 ->where($kode)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}


  	function get_belanja_1(){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Belanja_Rinc_Sub")
  		 ->where("Tahun",$tahun)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		  return $res;

  	}


  	function get_belanja_2($kode){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, ,Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Belanja_Rinc_Sub")
  		 ->where($kode)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}


  	function get_pembiayaan_1(){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Pembiayaan_Rinc")
  		 ->where("Tahun",$tahun)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		  return $res;

  	}


  	function get_pembiayaan_2($kode){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, ,Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Pembiayaan_Rinc")
  		 ->where($kode)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}




  }

?>