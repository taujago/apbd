<?php
class perbandingan_belanja extends master_controller  {
	 
	function perbandingan_belanja(){
		parent::__construct();
		$this->tahun = $this->session->userdata("tahun");
		$this->load->model("coremodel","cm");
		$this->load->model("perbandingan_belanja_model","dm");
		$this->load->helper("tanggal");
		// show_array($_SESSION); exit;
	}
	
	


	function index(){
		$arr_data = array(); 

		$input = $this->input->get();

		$arr_data['arr_belanja'] = $this->cm->get_rekening();

		$arr_data['id_skpd'] = $input['id_skpd']; 
		$content = $this->load->view("perbandingan_belanja_view",$arr_data,true); 
		$this->set_subtitle("RINGKASAN APBD SKPD");
		$this->set_title("RINGKASAN APBD SKPD");
		$this->set_content($content);
		$this->render();
	}


	function get_result(){

		 
		 $post = $this->input->post(); 

	 
		 $arr_data = array();


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
		 	$tmp_where[] = $arr_index[$a+1] . " = " . $b; 



		 endforeach;

	  


		 $condition = implode(" and ",$tmp_where); 

		 // echo $condition; 


		 // hitung total 
		 $this->db->select("sum(Total) as total ")
		 ->from("Ta_Belanja_Rinc_Sub")
		 ->where("Tahun",$this->tahun)
		 ->where($where); 

		 $dt = $this->db->get()->row(); 

		 $total = $dt->total;



		 $sql = "select a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit, a.Nm_Unit, 

sum(case when  $condition   then Total end) as jumlah , 
 
SUM(b.Total) as total 
			from  Ref_Unit a 
			left join dbo.Ta_Belanja_Rinc_Sub b on a.Kd_Urusan = b.Kd_Urusan 
			and a.Kd_Bidang = b.Kd_Bidang 
			and a.Kd_Unit = b.Kd_Unit 
			where b.Tahun='$this->tahun'  
			group by  a.Kd_Urusan, a.Kd_Bidang, a.Kd_Unit , a.Nm_Unit"; 


		// show_array($arr_data['graph_anggaran']); exit;

		$res = $this->db->query($sql);
		// echo $this->db->last_query(); 
		//  exit;


		$arr_graph = array(); 
		$x=0; 
		foreach($res->result() as $row):
			$x++;
			$persen = $row->jumlah / $total * 100; 
			$arr_graph[] = array("name"=> "$x. $row->Nm_Unit ". rupiah($row->jumlah) ,
								 "nomor" => $x,
								  // "y" => $row->jumlah
								   "y" => number_format($persen,2) 

								  ); 
		endforeach;

		$arr_data['graph_data'] = $arr_graph;
		$arr_data['total'] = $total;
		$arr_data['rec'] = $res; 
		$arr_data['nama_rekening'] = $this->cm->get_nama_rekening($where); 
		// exit;

		$content = $this->load->view("perbandingan_belanja_result_view",$arr_data,true); 
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