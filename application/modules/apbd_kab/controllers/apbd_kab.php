<?php
class apbd_kab extends master_controller  {
	var $tahun; 
	function apbd_kab(){
		parent::__construct();
		$this->tahun = $this->session->userdata("tahun");
		$this->load->model("coremodel","cm");
		$this->load->model("apbd_kab_model","dm");
		$this->load->helper("tanggal");
		// show_array($_SESSION); exit;
	}
	
	
	function index(){

		 
		 
		// show_array($arr_data);  exit;
		$arr_data = array();

		$arr_data['total_pendapatan'] = $this->dm->get_total_pendapatan(); 
		$arr_data['total_belanja'] = $this->dm->get_total_belanja(); 

		$arr_by = array("Kd_Rek_1"=>6,
						"Kd_Rek_2"=>2);

		$arr_data['total_pengeluaran_pembiayaan'] = $this->dm->get_total_pembiayaan($arr_by);
		$arr_by = array("Kd_Rek_1"=>6,
						"Kd_Rek_2"=>1);

		$arr_data['total_penerimaan_pembiayaan'] = $this->dm->get_total_pembiayaan($arr_by);



		$arr_data['rec_pendapatan'] = $this->dm->get_pendapatan_1();
		$arr_data['rec_belanja'] = $this->dm->get_belanja_1();
		$arr_data['rec_pembiayaan'] = $this->dm->get_pembiayaan_1();




		// $arr_data['total_pendapatan'] = $this->get_total_pendapatan(); 

		$content = $this->load->view("apbd_kab_view",$arr_data,true); 
		$this->set_subtitle("RINGKASAN APBD KABUPATEN");
		$this->set_title("RINGKASAN APBD KABUPATEN");
		$this->set_content($content);
		$this->render();
	}



	function grafik_anggaran_kegiatan(){
		 


		// find total 
		$this->db->select("sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","2"); 
		 
		$dt_total  = $this->db->get()->row(); 

		$total = $dt_total->total;


		$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","2") 
		 
		->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		$counter = 0;

		$arr_sub = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2 ,
								"Kd_Rek_3" => $row->Kd_Rek_3 
								);

			$persen = $row->total / $total * 100; 
			$name = $this->cm->get_nama_rekening($tmp_array ); 
			$arr_cart[$counter] = array("name"=>$name, 
							    "y" => number_format($persen,2),
							    "nilai" => number_format($row->total,0,',','.'),
							    'drilldown'=>$name ) ; 


				$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4,  sum(Total)  as total ",false)
				->from("Ta_Belanja_Rinc_Sub")
				->where("Tahun",$this->tahun)
				->where("Kd_Rek_1",$row->Kd_Rek_1)
				->where("Kd_Rek_2",$row->Kd_Rek_2)
				->where("Kd_Rek_3",$row->Kd_Rek_3)
				 
				->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4")
				->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4"); 
				$rs_sub = $this->db->get(); 

				$arr_sub[$counter]['name'] = $name; 
				$arr_sub[$counter]['id'] = $name; 

				$x=0; 

				foreach($rs_sub->result() as $row_sub) : 

						$tmp_array_sub = array(
								"Kd_Rek_1" => $row_sub->Kd_Rek_1,
								"Kd_Rek_2" => $row_sub->Kd_Rek_2 ,
								"Kd_Rek_3" => $row_sub->Kd_Rek_3 , 
								"Kd_Rek_4" => $row_sub->Kd_Rek_4 
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
		
		 

		 
		$this->load->view("dashboard_graphic_kegiatan",$arr);

	}


	function grafik_anggaran_non_kegiatan(){
		$this->db->select("sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","1"); 
		 
		$dt_total  = $this->db->get()->row(); 

		$total = $dt_total->total;


		$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Belanja_Rinc_Sub")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","5")
		->where("Kd_Rek_2","1") 
		 
		->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		$counter = 0;

		$arr_sub = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2 ,
								"Kd_Rek_3" => $row->Kd_Rek_3 
								);

			$persen = $row->total / $total * 100; 
			$name = $this->cm->get_nama_rekening($tmp_array ); 
			$arr_cart[$counter] = array("name"=>$name, 
							    "y" => number_format($persen,2),
							    "nilai" => number_format($row->total,0,',','.'),
							    'drilldown'=>$name ) ; 


				$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4,  sum(Total)  as total ",false)
				->from("Ta_Belanja_Rinc_Sub")
				->where("Tahun",$this->tahun)
				->where("Kd_Rek_1",$row->Kd_Rek_1)
				->where("Kd_Rek_2",$row->Kd_Rek_2)
				->where("Kd_Rek_3",$row->Kd_Rek_3)
				 
				->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4")
				->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4"); 
				$rs_sub = $this->db->get(); 

				$arr_sub[$counter]['name'] = $name; 
				$arr_sub[$counter]['id'] = $name; 

				$x=0; 

				foreach($rs_sub->result() as $row_sub) : 

						$tmp_array_sub = array(
								"Kd_Rek_1" => $row_sub->Kd_Rek_1,
								"Kd_Rek_2" => $row_sub->Kd_Rek_2 ,
								"Kd_Rek_3" => $row_sub->Kd_Rek_3 , 
								"Kd_Rek_4" => $row_sub->Kd_Rek_4 
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
		// show_array($arr_cart);
		// show_array($arr_sub);

		// exit;

		$this->load->view("dashboard_graphic_non_kegiatan",$arr);
	}


	function grafik_anggaran_pembiayaan_keluar(){
		 


		$this->db->select("sum(Total)  as total ",false)
		->from("Ta_Pembiayaan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","6")
		->where("Kd_Rek_2","2");
		 
		$dt_total  = $this->db->get()->row(); 

		$total = $dt_total->total;


		$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
		->from("Ta_Pembiayaan_Rinc")
		->where("Tahun",$this->tahun)
		->where("Kd_Rek_1","6")
		->where("Kd_Rek_2","2")
		 
		->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3")
		->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3"); 
		$res = $this->db->get(); 


		$arr_cart = array(); 

		$counter = 0;

		$arr_sub = array(); 

		foreach($res->result() as $row) : 

			$tmp_array = array(
								"Kd_Rek_1" => $row->Kd_Rek_1,
								"Kd_Rek_2" => $row->Kd_Rek_2 ,
								"Kd_Rek_3" => $row->Kd_Rek_3 
								);

			$persen = $row->total / $total * 100; 
			$name = $this->cm->get_nama_rekening($tmp_array ); 
			$arr_cart[$counter] = array("name"=>$name, 
							    "y" => number_format($persen,2),
							    "nilai" => number_format($row->total,0,',','.'),
							    'drilldown'=>$name ) ; 


				$this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4,  sum(Total)  as total ",false)
				->from("Ta_Pembiayaan_Rinc")
				->where("Tahun",$this->tahun)
				->where("Kd_Rek_1",$row->Kd_Rek_1)
				->where("Kd_Rek_2",$row->Kd_Rek_2)
				->where("Kd_Rek_3",$row->Kd_Rek_3)
				 
				->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4")
				->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,Kd_Rek_4"); 
				$rs_sub = $this->db->get(); 

				$arr_sub[$counter]['name'] = $name; 
				$arr_sub[$counter]['id'] = $name; 

				$x=0; 

				foreach($rs_sub->result() as $row_sub) : 

						$tmp_array_sub = array(
								"Kd_Rek_1" => $row_sub->Kd_Rek_1,
								"Kd_Rek_2" => $row_sub->Kd_Rek_2 ,
								"Kd_Rek_3" => $row_sub->Kd_Rek_3 , 
								"Kd_Rek_4" => $row_sub->Kd_Rek_4 
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