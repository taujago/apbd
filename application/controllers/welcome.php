<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends master_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper("tanggal");
	}


	function index(){



		// $sql= 'select SUM(Total) as pendapatan from dbo.Ta_Pendapatan_Rinc 
		// 		where Tahun=2016'; 
	
		// $data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		// $arr['pendapatan'] = $data->pendapatan; 



		

		// $sql= 'select SUM(Total) as belanja from dbo.Ta_Belanja_Rinc_Sub 
		// 		where Tahun=2016'; 
	
		// $data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		// $arr['belanja'] = $data->belanja; 


		// $sql= 'select SUM(Total) as pembiayaan from dbo.Ta_Pembiayaan_Rinc 
		// 		where Tahun=2016'; 
	
		// $data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		// $arr['pembiayaan'] = $data->pembiayaan; 


		$tahun = 2016;

		$content = $this->load->view("welcome_view",array("tahun"=>$tahun),true);
	 

		$this->set_subtitle("SETTING SYSTEM");
		$this->set_title("SETTING SYSTEM");
		$this->set_content($content);
		$this->render();


	}


 function query(){
 	

 	$tahun = $this->input->post('tahun'); 

 	$sql= "select SUM(Total) as pendapatan from dbo.Ta_Pendapatan_Rinc 
				where Tahun=$tahun"; 
	
		$data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		$arr["pendapatan"] = $data->pendapatan; 



		

		$sql= "select SUM(Total) as belanja from dbo.Ta_Belanja_Rinc_Sub 
				where Tahun=$tahun"; 
	
		$data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		$arr["belanja"] = $data->belanja; 


		$sql= "select SUM(Total) as pembiayaan from dbo.Ta_Pembiayaan_Rinc 
				where Tahun=$tahun"; 
	
		$data = $this->db->query($sql)->row(); //  $this->db->get("dbo.Ta_Pendapatan_Rinc")-> 
		$arr["pembiayaan"] = $data->pembiayaan; 



		$sql = "select  Tahun,SUM(total) total  from dbo.Ta_Belanja_Rinc_Sub 
				group by Tahun "; 

		$rs_tahun = $this->db->query($sql); 

		$arr_tahun = array(); 

		foreach($rs_tahun->result() as $row ) :

				$arr_tahun[] = array("tahun"=>$row->Tahun,"total"=>floor($row->total)); 

		endforeach;

		$arr['arr_tahun'] = $arr_tahun; 

		$this->load->view("welcome_query",$arr);



 }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */