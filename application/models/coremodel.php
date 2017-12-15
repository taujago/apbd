<?php
class coremodel extends CI_Model {


    



      function coremodel() {
                parent::__construct();
        }
        
      


function get_arr_rek() { 

     $arr_rek = array(
                0=>"Kd_Rek_1",
                "Kd_Rek_2",
                "Kd_Rek_3",
                "Kd_Rek_4",
                "Kd_Rek_5"


            );

    return $arr_rek; 
}
   
function get_tb_ref() { 
     $tb_ref = array(2=>"dbo.Ref_Rek_2",
                        "dbo.Ref_Rek_3",
                        "dbo.Ref_Rek_4",
                        "dbo.Ref_Rek_5",
                        );
      
    return $tb_ref; 
}
  


 
 

 

 


function get_bulan_romawi($angka) {
  $arr = array(1=>"I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII");
  return $arr[$angka];
}



function get_arr_tahun(){
  $this->db->select("distinct tahun as tahun ",false)
    ->from("dbo.Ta_Belanja_Rinc_Sub")
    ->order_by("tahun");

    $rs_tahun = $this->db->get(); 
    $arr_tahun=array(); 
    foreach($rs_tahun->result()  as $rtahun) : 
      $arr_tahun[] = $rtahun->tahun; 
    endforeach;
    return $arr_tahun; 
}
   
 function get_skpd() {
        $this->db->order_by("Nm_Unit");
        $rs = $this->db->get("dbo.Ref_Unit"); 

        $arr = array(); 
        foreach($rs->result() as $row) : 
            $arr["$row->Kd_Urusan.$row->Kd_Bidang.$row->Kd_Unit"] = $row->Nm_Unit;
        endforeach;
        return $arr;
    }



    function get_rekening(){
        $sql="select Kd_Rek_1, Kd_Rek_2, 0 as Kd_Rek_3, 0 as Kd_Rek_4, 0 as Kd_Rek_5, Nm_Rek_2 as Nm_Rek  from dbo.Ref_Rek_2
            where Kd_Rek_1 = 5 
            union 
            select Kd_Rek_1, Kd_Rek_2 , Kd_Rek_3, 0 as Kd_Rek_4, 0 as Kd_Rek_5, Nm_Rek_3 from dbo.Ref_Rek_3 
            where Kd_Rek_1 = 5 

            union 

            select Kd_Rek_1, Kd_Rek_2 , Kd_Rek_3,   Kd_Rek_4, 0 as Kd_Rek_5, Nm_Rek_4 from dbo.Ref_Rek_4 
            where Kd_Rek_1 = 5 
            union 
            select Kd_Rek_1, Kd_Rek_2 , Kd_Rek_3,   Kd_Rek_4,  Kd_Rek_5, Nm_Rek_5 from dbo.Ref_Rek_5 
            where Kd_Rek_1 = 5 "; 
        $arr = array();
        $res = $this->db->query($sql); 
        foreach($res->result() as $row) : 
            $index = $row->Kd_Rek_1."_".$row->Kd_Rek_2."_".$row->Kd_Rek_3."_".$row->Kd_Rek_4."_".$row->Kd_Rek_5;
            $arr[$index] = $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3.".".$row->Kd_Rek_4.".".$row->Kd_Rek_5." ".$row->Nm_Rek; 
        endforeach;

        return $arr; 

    }       
        

function get_nama_skpd($kode) {
    $this->db->where($kode); 

    $data = $this->db->get("dbo.Ref_Unit")->row();

    return $data->Nm_Unit;

}

function get_arr_skpd() {
    $this->db->order_by("Kd_Urusan,Kd_Bidang,Kd_Unit");
    $res = $this->db->get("Ref_Unit");

    //echo $this->db->last_query(); 
 // implode(glue, pieces)

    $arr = array();
    foreach($res->result() as $row): 
        $tmp = array(
            "Kd_Urusan" => $row->Kd_Urusan,
            "Kd_Bidang" => $row->Kd_Bidang,
            "Kd_Unit" => $row->Kd_Unit
            );

    $arr[implode(".",$tmp)] = implode(".",$tmp)." ".$row->Nm_Unit; 

    endforeach;
    return $arr;
}

function get_nama_rekening($kode){

    // show_array($kode); 
    // exit;

    $arr_rek =  $this->get_arr_rek();

    $tb_name = $this->get_tb_ref();


    $jumlah = count($kode); 
    
    $col_name = "Nm_Rek_".$jumlah;

    $this->db->select("$col_name as rekening")
    ->from($tb_name[$jumlah])->where($kode); 

    $data = $this->db->get()->row(); 

    // echo $this->db->last_query(); 
    // exit;
   

    return  $data->rekening; 


}

function get_kode_rekening($kode) {

    if($kode['Kd_Rek_1'] == "5") $kode['Kd_Rek_1'] = 2;
    else if($kode['Kd_Rek_1'] == "4") $kode['Kd_Rek_1'] = 1;
    else $kode['Kd_Rek_1'] = 3;


    $kode = implode(".", $kode); 
    return $kode;
}

}
?>
