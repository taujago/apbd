<link href="<?php echo base_url("assets/css") ?>/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url("assets/js") ?>/select2.min.js"></script>

<div class="widget-list">
                
 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">RINGKASAN ANGGARAN PER SKPD TAHUN ANGGARAN <?php echo $this->session->userdata("tahun"); ?> </h5></div>
        <div class="card-body">


          <div class="row">
          <div class="col-md-10">
          <?php
          	$arr_skpd  = $this->cm->get_arr_skpd();
          	echo form_dropdown("id_skpd",$arr_skpd,$id_skpd,'class="form-control" id="id_skpd"') ; 
          ?>
          </div>
          <div class="col-md-2">
            <button id="btn_tampil" class="btn btn-success btn-block">TAMPILKAN</button>
          </div> 
          </div>

          <hr /> 

          <div class="row">
          <div class="col-md-12" id="hasil"> </div>
          </div>



        </div>
    </div>         
    </div>
</div> 


                 
</div> <!-- /.widget-list -->
           
<script type="text/javascript">
	

<?php 
  if(!empty($id_skpd)) {
    ?>

     get_data(); 

    <?php 
  }
?>

$(document).ready(function(){
	$('#id_skpd').select2();





	$("#btn_tampil").click(function(e){


		get_data(); 


		e.PreventDefault();
	});


});


function get_data(){

  $("#hasil").html('<center><img src="<?php echo base_url("assets/img/ajax-loader.gif") ?>"><br /> Loading.... </center>');
  $.ajax({
      url : '<?php echo site_url("apbd_skpd/get_result") ?>',
      type : 'post',
      data : {id_skpd : $("#id_skpd").val()}, 
      success : function(htmldata) {
        $("#hasil").html(htmldata);
      }
    });
}
</script>