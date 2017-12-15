<?php
class informasi extends master_controller  {
	 
	function informasi(){
		parent::__construct();
		$this->tahun = $this->session->userdata("tahun");
		 
	}
	
	


	function index(){
		$arr_data = array(); 

	 

		 

	 
		$content = $this->load->view("informasi_view",$arr_data,true); 
		$this->set_subtitle("RINGKASAN APBD SKPD");
		$this->set_title("RINGKASAN APBD SKPD");
		$this->set_content($content);
		$this->render();
	}

 
}
?>