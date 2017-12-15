<?php
class depan2 extends master_controller  {
	var $tahun; 
	function depan2(){
		parent::__construct();
		$this->tahun = $this->session->userdata("tahun");
		$this->load->model("coremodel","cm");
		// show_array($_SESSION); exit;
	}
	
	
	function index(){

		 
		$this->db->select("sum(Total) as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","1"); 
		$rs_btl = $this->db->get()->row();


		$arr_data['btl'] = number_format($rs_btl->total,0,'.',',');


		$this->db->select("sum(Total) as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","2"); 
		$rs_bl = $this->db->get()->row();


		$arr_data['bl'] = number_format($rs_bl->total,0,'.',',');



		$this->db->select("sum(Total) as total ",false)
		->from("Ta_Pembiayaan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","6")
		->where("Kd_Rek_2","2"); 
		$rs_pembiayaan = $this->db->get()->row();


		$arr_data['pembiayaan'] = number_format($rs_pembiayaan->total,0,'.',',');

		$apbd = $rs_btl->total + $rs_bl->total + $rs_pembiayaan->total; 
		$arr_data['apbd']  = number_format($apbd ,0,'.',',');


		$arr_data['tahun'] = $this->tahun;

		// show_array($arr_data);  exit;

		$content = $this->load->view("dashboard",$arr_data,true); 
		$this->set_subtitle("DASHBOARD");
		$this->set_title("DASHBOARD");
		$this->set_content($content);
		$this->render();
	}



	function grafik_anggaran_kegiatan(){
		$this->db->select("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","2")
		->group_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2,
								"Kd_Rek_3" => $row->Kd_Rek_3
								);


			$arr_cart[] = array("Anggaran"=>$this->cm->get_nama_rekening($tmp_array ),
							    "value" => ($row->total) );
		endforeach;


		// show_array($arr_cart); 


		$arr['rec_kegiatan'] = $res; 
		$arr['json_data_graph'] = json_encode($arr_cart); 
		$this->load->view("dashboard_graphic_kegiatan",$arr);
	}


	function grafik_anggaran_non_kegiatan(){
		$this->db->select("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","1")
		->group_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2,
								"Kd_Rek_3" => $row->Kd_Rek_3
								);


			$arr_cart[] = array("Anggaran"=>$this->cm->get_nama_rekening($tmp_array ),
							    "value" => ($row->total) );
		endforeach;


		// show_array($arr_cart); 


		$arr['rec_kegiatan'] = $res; 
		$arr['json_data_graph'] = json_encode($arr_cart); 
		$this->load->view("dashboard_graphic_non_kegiatan",$arr);
	}


	function grafik_anggaran_pembiayaan_keluar(){
		$this->db->select("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Pembiayaan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","6")
		->where("Kd_Rek_2","2")
		->group_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2,
								"Kd_Rek_3" => $row->Kd_Rek_3
								);


			$arr_cart[] = array("Anggaran"=>$this->cm->get_nama_rekening($tmp_array ),
							    "value" => ($row->total) );
		endforeach;


		// show_array($arr_cart); 


		$arr['rec_kegiatan'] = $res; 
		$arr['json_data_graph'] = json_encode($arr_cart); 
		$this->load->view("dashboard_graphic_pembiayaan_keluar",$arr);
	}


	function grafik_pendapatan() {
		$this->db->select("Kd_Rek_1, Kd_Rek_2, sum(Total)  as total ",false)
		->from("Ta_Pendapatan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","4")
		// ->where("Kd_Rek_2","2")
		->group_by("Kd_Rek_1, Kd_Rek_2")
		->order_by("Kd_Rek_1, Kd_Rek_2"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2 
								);


			$arr_cart[] = array("Anggaran"=>$this->cm->get_nama_rekening($tmp_array ),
							    "value" => ($row->total) );
		endforeach;


		// show_array($arr_cart); 


		$arr['rec_kegiatan'] = $res; 
		$arr['json_data_graph'] = json_encode($arr_cart); 
		$this->load->view("dashboard_graphic_pendapatan",$arr);
	}


	function grafik_pendapatan_drilldown() {

		 

		$this->db->select("sum(Total)  as total ",false)
		->from("Ta_Pendapatan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","4");  
		 
		$dt_total  = $this->db->get()->row(); 

		$total = $dt_total->total;


		$this->db->select("Kd_Rek_1, Kd_Rek_2, sum(Total)  as total ",false)
		->from("Ta_Pendapatan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","4")
		 
		->group_by("Kd_Rek_1, Kd_Rek_2")
		->order_by("Kd_Rek_1, Kd_Rek_2"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		$counter = 0;

		$arr_sub = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2 
								);

			$persen = $row->total / $total * 100; 
			$name = $this->cm->get_nama_rekening($tmp_array ); 
			$arr_cart[$counter] = array("name"=>$name, 
							    "y" => number_format($persen,2),
							    "nilai" => number_format($row->total,0,',','.'),
							    'drilldown'=>$name ) ; 


				$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
				->from("Ta_Pendapatan_Rinc")
				->where("Tahun",$this->tahun)
				->where("Kd_Rek_1",$row->Kd_Rek_1)
				->where("Kd_Rek_2",$row->Kd_Rek_2)
				 
				->group_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3")
				->order_by("Kd_Rek_1, Kd_Rek_2,Kd_Rek_3"); 
				$rs_sub = $this->db->get(); 

				$arr_sub[$counter]['name'] = $name; 
				$arr_sub[$counter]['id'] = $name; 

				$x=0; 

				foreach($rs_sub->result() as $row_sub) : 

						$tmp_array_sub = array(
								"Kd_Rek_1" => $row_sub->Kd_Rek_1,
								"Kd_Rek_2" => $row_sub->Kd_Rek_2 ,
								"Kd_Rek_3" => $row_sub->Kd_Rek_3 
								);
						$name_sub = $this->cm->get_nama_rekening($tmp_array_sub ); 
						$name_sub .= " = ". number_format($row_sub->total,0,'.',',');

						$persen_sub = $row_sub->total / $row->total * 100;

					$arr_sub[$counter]['data'][$x] = array($name_sub, number_format($persen_sub,2) );
					$x++;
				endforeach;



		$counter++;
		endforeach;


	 


		$arr['rec_kegiatan'] = $res; 
		$arr['arr_cart'] = $arr_cart; 
		$arr['arr_sub'] = $arr_sub; 

		$arr['json_data_graph'] = json_encode($arr_cart); 
		$this->load->view("dashboard_graphic_pendapatan_drilldown",$arr);
	}

}
?>