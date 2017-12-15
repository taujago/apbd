<?php 
class pilih extends CI_Controller {
	function __construct(){
		parent::__construct(); 
		$this->load->helper("tanggal");
	}


function index() {
	$this->load->view("login");
}

function set_tahun() {
	$post = $this->input->post(); 
	// show_array($post); exit;

	$this->session->set_userdata("tahun",$post['tahun']); 
	$_SESSION['tahun'] = $post['tahun']; 
	redirect("depan");
}

}
?>