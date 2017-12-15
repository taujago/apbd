<?php
class master_controller extends CI_Controller {

var $pilihan; 
	function master_controller() {
		parent::__construct();  


	$tahun = $this->session->userdata("tahun");
	// show_array($userdata); exit;

		if(empty($tahun) ) {
			redirect('pilih/');
		} 
		
		
	 
		// $this->userdata = $this->session->userdata("userdata");
		 
		
	}

	function set_content($str) {
		$this->content['content'] = $str;
	}
	
	function set_title($str) {
		$this->content['title'] = $str;
	}
	
	function set_subtitle($str) {
		$this->content['subtitle'] = $str;
	}
	
	function render(){
		$arr = array();		 
		$this->load->view("template",$this->content );
		
	}


	function render_baru(){
		$arr = array();		 
		$this->load->view("template_baru",$this->content );
		
	}

	function render_polisi(){
		$arr = array();		 
		$this->load->view("template_polisi",$this->content );
		
	}



	function render_polres(){
		$arr = array();		 
		$this->load->view("template_polres",$this->content );
		
	}
//$this->format(array("arr_kolom"=>$arr_kolom,"bold"=>true,"baris"=>$i,"align"=>"center"));
 

function get_nama_skpd($kode) {
	$this->db->where($kode); 

	$data = $this->db->get("dbo.Ref_Unit")->row();

	return $data->Nm_Unit;

}

function get_nama_rekening($kode){

	$arr_rek =  $this->arr_rek;

	$tb_name = $this->tb_ref;


	$jumlah = count($kode); 
	
	$col_name = "Nm_Rek_".$jumlah;

	$this->db->select("$col_name as rekening")
	->from($tb_name[$jumlah])->where($kode); 

	$data = $this->db->get()->row(); 
	// show_array($data);

	// echo $this->db->last_query(); 
	// echo  $data->rekening; 

	return  $data->rekening; 


}



}

?>
