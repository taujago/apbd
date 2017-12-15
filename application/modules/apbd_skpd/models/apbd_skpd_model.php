<?php 
  class apbd_skpd_model extends CI_Model {
  	function apbd_skpd_model () {
  		parent::__construct(); 
  	}



  	function get_total_pendapatan($where){
  		$tahun = $this->session->userdata("tahun");
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Pendapatan_Rinc");
  		$this->db->where("Tahun",$tahun); 
      $this->db->where($where);
  		$data = $this->db->get()->row();

      // echo $this->db->last_query(); exit;
  		return $data->total;
  	}

  	function get_total_belanja($where){
  		$tahun = $this->session->userdata("tahun");
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Belanja_Rinc_Sub");
  		$this->db->where("Tahun",$tahun); 
       $this->db->where($where);
  		$data = $this->db->get()->row();
  		return $data->total;
  	}

  	function get_total_pembiayaan($arr,$where){

  		$tahun = $this->session->userdata("tahun");
  		$arr['Tahun'] = $tahun;
  		$this->db->select("sum(Total) as total",false)
  		->from("Ta_Pembiayaan_Rinc");
  		$this->db->where($arr); 
      $this->db->where($where);
  		$data = $this->db->get()->row();
       // echo $this->db->last_query(); exit;
  		return $data->total;
  	}



  	function get_pendapatan_1($where){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Pendapatan_Rinc")
  		 ->where("Tahun",$tahun)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		 return $res;

  	}

  	function get_pendapatan_2($kode,$where){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, ,Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Pendapatan_Rinc")
  		 ->where($kode)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}

    function get_pendapatan_3($kode,$where){

      $tahun = $this->session->userdata("tahun");
      $kode['Tahun'] = $tahun;
       $this->db->select("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4,  sum(Total) as total")
       ->from("Ta_Pendapatan_Rinc")
       ->where($kode)
       ->where($where)
       ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4")
       ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4"); 

       $res = $this->db->get();
       return $res;

    }


  	function get_belanja_1($where){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Belanja_Rinc_Sub")
  		 ->where("Tahun",$tahun)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		  return $res;

  	}


  	function get_belanja_2($kode,$where){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Belanja_Rinc_Sub")
  		 ->where($kode)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}

    function get_belanja_3($kode,$where){

      $tahun = $this->session->userdata("tahun");
      $kode['Tahun'] = $tahun;
       $this->db->select("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4,  sum(Total) as total")
       ->from("Ta_Belanja_Rinc_Sub")
       ->where($kode)
       ->where($where)
       ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4")
       ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4"); 

       $res = $this->db->get();
       return $res;

    }


  	function get_pembiayaan_1($where){
  		$tahun = $this->session->userdata("tahun");
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, sum(Total) as total")
  		 ->from("Ta_Pembiayaan_Rinc")
  		 ->where("Tahun",$tahun)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2"); 

  		 $res = $this->db->get();
  		  return $res;

  	}


  	function get_pembiayaan_2($kode,$where){

  		$tahun = $this->session->userdata("tahun");
  		$kode['Tahun'] = $tahun;
  		 $this->db->select("Kd_Rek_1,Kd_Rek_2, ,Kd_Rek_3,  sum(Total) as total")
  		 ->from("Ta_Pembiayaan_Rinc")
  		 ->where($kode)
       ->where($where)
  		 ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3")
  		 ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3"); 

  		 $res = $this->db->get();
  		 return $res;

  	}

    function get_pembiayaan_3($kode,$where){

      $tahun = $this->session->userdata("tahun");
      $kode['Tahun'] = $tahun;
       $this->db->select("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4,  sum(Total) as total")
       ->from("Ta_Pembiayaan_Rinc")
       ->where($kode)
       ->where($where)
       ->group_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4")
       ->order_by("Kd_Rek_1,Kd_Rek_2, Kd_Rek_3, Kd_Rek_4"); 

       $res = $this->db->get();
       return $res;

    }



function get_arr_grafik_anggaran($addwhere){
     
   $where = array("Kd_Rek_1"=>5); 

    // find total 
    $this->db->select("sum(Total)  as total ",false)
    ->from("Ta_Belanja_Rinc_Sub")
    ->where($addwhere)
    ->where($where); 
    
     
    $dt_total  = $this->db->get()->row(); 

    $total = $dt_total->total;


    $this->db->select("Kd_Rek_1, Kd_Rek_2,  sum(Total)  as total ",false)
    ->from("Ta_Belanja_Rinc_Sub")
    ->where($addwhere)
    ->where($where)    
     
    ->group_by("Kd_Rek_1, Kd_Rek_2 ")
    ->order_by("Kd_Rek_1, Kd_Rek_2 "); 
    $res = $this->db->get(); 

    // echo $this->db->last_query(); exit;


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


        $this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3,    sum(Total)  as total ",false)
        ->from("Ta_Belanja_Rinc_Sub")
        ->where($where)   
        ->where($addwhere)   
        ->where("Kd_Rek_2",$row->Kd_Rek_2)

         
         
        ->group_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3")
        ->order_by("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3"); 
        $rs_sub = $this->db->get(); 

        // echo "<hr />"; 
        // echo $this->db->last_query(); 
        // echo "<hr />";

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


   


     
    $arr['arr_cart'] = $arr_cart; 
    $arr['arr_sub'] = $arr_sub; 
    
     

    return $arr; 
    

  }


function get_arr_grafik_belanja($where){
     


    // find total 
    $this->db->select("sum(Total)  as total ",false)
    ->from("Ta_Belanja_Rinc_Sub")
    ->where($where); 
    
     
    $dt_total  = $this->db->get()->row(); 

    $total = $dt_total->total;


    $this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
    ->from("Ta_Belanja_Rinc_Sub")
    ->where($where)    
     
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
        ->where($where)      
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


   


     
    $arr['arr_cart'] = $arr_cart; 
    $arr['arr_sub'] = $arr_sub; 
    
     

    return $arr; 
    

  }


function get_arr_grafik_pendapatan($where) {

     

    $this->db->select("sum(Total)  as total ",false)
    ->from("Ta_Pendapatan_Rinc")
    ->where("Tahun",$this->tahun)
    ->where($where)
    ->where("Kd_Rek_1","4");  
     
    $dt_total  = $this->db->get()->row(); 

    $total = $dt_total->total;


    $this->db->select("Kd_Rek_1, Kd_Rek_2, sum(Total)  as total ",false)
    ->from("Ta_Pendapatan_Rinc")
    ->where("Tahun",$this->tahun)
    ->where($where)
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
        ->where($where)
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


   


    // $arr['rec_kegiatan'] = $res; 
    $arr['arr_cart'] = $arr_cart; 
    $arr['arr_sub'] = $arr_sub; 

    return $arr;

     
  }



function get_arr_grafik_pembiayaan_keluar($where){
     


    $this->db->select("sum(Total)  as total ",false)
    ->from("Ta_Pembiayaan_Rinc")
    ->where("Tahun",$this->tahun)
    ->where($where);
     
    $dt_total  = $this->db->get()->row(); 

    $total = $dt_total->total;


    $this->db->select("Kd_Rek_1, Kd_Rek_2, Kd_Rek_3, sum(Total)  as total ",false)
    ->from("Ta_Pembiayaan_Rinc")
    ->where("Tahun",$this->tahun)
    ->where($where)
     
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
        ->where($where)
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


   


    
    $arr['arr_cart'] = $arr_cart; 




    $arr['arr_sub'] = $arr_sub; 

     
    return $arr;

  }


function get_data_program($where) {
  
  extract($where);

 

 $sql = "select a.Kd_Urusan, 
a.Kd_Bidang , 
a.Kd_Prog,
 b.Ket_Program ,SUM(Total) as total 
from Ta_Belanja_Rinc_Sub a 
join Ref_Program b on a.Kd_Urusan = b.Kd_Urusan 
and a.Kd_Bidang = b.Kd_Bidang 
and a.Kd_Prog = b.Kd_Prog 
where a.Kd_Urusan = '$Kd_Urusan'
and a.Kd_Bidang = '$Kd_Bidang'
and a.Kd_Unit = '$Kd_Unit'
and Tahun = $Tahun
group by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog,  b.Ket_Program
order by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog,  b.Ket_Program"; 

  $res = $this->db->query($sql); 
  // echo $this->db->last_query(); 
  return $res;
}



function get_data_kegiatan($where) {
  
  extract($where);

 

 $sql = "select a.Kd_Urusan, 
a.Kd_Bidang , 
a.Kd_Prog,
 b.Ket_Program ,SUM(Total) as total 
from Ta_Belanja_Rinc_Sub a 
join Ref_Program b on a.Kd_Urusan = b.Kd_Urusan 
and a.Kd_Bidang = b.Kd_Bidang 
and a.Kd_Prog = b.Kd_Prog 
where a.Kd_Urusan = '$Kd_Urusan'
and a.Kd_Bidang = '$Kd_Bidang'
and a.Kd_Unit = '$Kd_Unit'
and Tahun = $Tahun
group by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog,  b.Ket_Program
order by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog,  b.Ket_Program"; 


$sql = "select a.Kd_Urusan, 
a.Kd_Bidang , 
a.Kd_Prog,
a.Kd_Keg,
 b.Ket_Kegiatan ,SUM(Total) as total from Ta_Belanja_Rinc_Sub a 
join Ref_Kegiatan b 
on a.Kd_Urusan = b.Kd_Urusan 
and a.Kd_Bidang = b.Kd_Bidang 
and a.Kd_Prog = b.Kd_Prog 
and a.Kd_Keg = b.Kd_Keg

where a.Kd_Urusan = '$Kd_Urusan'
and a.Kd_Bidang = '$Kd_Bidang'
and a.Kd_Prog = '$Kd_Prog'
and a.Kd_Unit = '$Kd_Unit'
and Tahun = $Tahun

group by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog, a.Kd_Keg, b.Ket_Kegiatan
order by  a.Kd_Urusan , a.Kd_Bidang ,  a.Kd_Prog, a.Kd_Keg, b.Ket_Kegiatan"; 

  $res = $this->db->query($sql); 
  // echo $this->db->last_query(); 
  return $res;
}


}
?>