<?php
class apbd_skpd extends master_controller  {
	 
	function apbd_skpd(){
		parent::__construct();
		$this->tahun = $this->session->userdata("tahun");
		$this->load->model("coremodel","cm");
		$this->load->model("apbd_skpd_model","dm");
		$this->load->helper("tanggal");
		// show_array($_SESSION); exit;
	}
	
	


	function index(){
		$arr_data = array(); 

		$input = $this->input->get();

		$arr_data['id_skpd'] = $input['id_skpd']; 
		$content = $this->load->view("apbd_skpd_view",$arr_data,true); 
		$this->set_subtitle("RINGKASAN APBD SKPD");
		$this->set_title("RINGKASAN APBD SKPD");
		$this->set_content($content);
		$this->render();
	}


	function get_result(){

		 
		 $post = $this->input->post();
		 $xtmp = explode(".", $post['id_skpd']); 

		 $arr_unit = array( 
		 	"Kd_Urusan" => $xtmp[0],
            "Kd_Bidang" => $xtmp[1],
            "Kd_Unit" => $xtmp[2]

		 	 );

		 

		$arr_data = array();

		$arr_data['total_pendapatan'] = $this->dm->get_total_pendapatan($arr_unit); 
		$arr_data['total_belanja'] = $this->dm->get_total_belanja($arr_unit); 

		$arr_by = array("Kd_Rek_1"=>6,
						"Kd_Rek_2"=>2);

		$arr_data['total_pengeluaran_pembiayaan'] = $this->dm->get_total_pembiayaan($arr_by,$arr_unit);
		$arr_by = array("Kd_Rek_1"=>6,
						"Kd_Rek_2"=>1);

		$arr_data['total_penerimaan_pembiayaan'] = $this->dm->get_total_pembiayaan($arr_by,$arr_unit);



		$arr_data['rec_pendapatan'] = $this->dm->get_pendapatan_1($arr_unit);
		$arr_data['rec_belanja'] = $this->dm->get_belanja_1($arr_unit);
		$arr_data['rec_pembiayaan'] = $this->dm->get_pembiayaan_1($arr_unit);




		// $arr_data['total_pendapatan'] = $this->get_total_pendapatan(); 


		// grapic processing 
		$arr_unit['Tahun'] = $this->session->userdata("tahun");
		

		$arr_graphic = $arr_unit; 
		$arr_graphic['Kd_Rek_1'] = 5;
		$arr_graphic['Kd_Rek_2'] = 2;



		$arr_data['graph_kegiatan'] = $this->dm->get_arr_grafik_belanja($arr_graphic); 

		$arr_graphic['Kd_Rek_1'] = 5;
		$arr_graphic['Kd_Rek_2'] = 1;

		// show_array($arr_unit); 

		$arr_data['graph_non_kegiatan'] = $this->dm->get_arr_grafik_belanja($arr_graphic); 

		// show_array($arr_data['graph_non_kegiatan']);
		// exit;


		$arr_data['arr_unit'] = $arr_unit;

		$arr_data['graph_pendapatan'] = $this->dm->get_arr_grafik_pendapatan($arr_unit); 

		// show_array($arr_data['graph_pendapatan']); exit;

		$arr_biaya = $arr_unit;
		$arr_biaya['Kd_Rek_1'] = 6;
		$arr_biaya['Kd_Rek_2'] = 2;
		$arr_data['graph_pembiayaan_keluar'] = $this->dm
				->get_arr_grafik_pembiayaan_keluar($arr_biaya); 

		$arr_biaya['Kd_Rek_1'] = 6;
		$arr_biaya['Kd_Rek_2'] = 1;
		$arr_data['graph_pembiayaan_masuk'] = $this->dm
				->get_arr_grafik_pembiayaan_keluar($arr_biaya); 


		$arr_data['graph_anggaran'] = $this->dm->get_arr_grafik_anggaran($arr_unit); 

		// show_array($arr_data['graph_anggaran']); exit;


		$arr_program = array( 
		 	"Kd_Urusan" => $xtmp[0],
            "Kd_Bidang" => $xtmp[1],
            "Kd_Unit" => $xtmp[2],
            "Tahun" => $this->tahun

		 	 );

		$arr_data['rec_program'] = $this->dm->get_data_program($arr_program);



		$content = $this->load->view("apbd_skpd_result_view",$arr_data,true); 
		echo $content;
		 
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