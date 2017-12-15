<link href="<?php echo base_url("assets/css") ?>/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url("assets/js") ?>/select2.min.js"></script>


<div class="widget-list">
                
 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">LAPORAN PERBANDINGAN PORSI  BELANJA ANTAR SKPD SKPD</h5></div>
        <div class="card-body">


<form id="perbandingan" >

	<div class="form-group">
    <label   for="id_belanja">BELANJA 
    </label>
     
      <?php 

        echo form_dropdown("id_belanja",$arr_belanja, '','id="id_belanja" class="form-control col-md-7 col-xs-12 js-example-basic-single"') ?> 
      	
    
  </div>


<div class="row">
<div class="col-md-5">
   <div class="form-group">
    <label   for="id_unit">SKPD
    </label>
    <div>
    <?php echo form_dropdown("data_id_unit",$arr_unit, '','id="data_id_unit" class="form-control col-md-7 col-xs-12"') ?> 
    </div>
   <!--  <div class="col-md-1">
       <a href="#" id="tambah" class="btn btn-primary">Tambah </a>
    </div> -->
  </div>
  </div>

<div class="col-md-1">
<br /> 
<a href="#" id="tambah" class="btn btn-success btn-block">Tambah </a>
<a href="#" id="hapus" class="btn btn-danger btn-block">Hapus </a>
</div>

<div class="col-md-5">
  <div class="form-group">
    <label  for="id_unit">SKPD YANG DIPILIH  
    </label>
    <div  >
      	 
      	 <select multiple name="id_unit[]" id="id_unit" class="form-control">
      	 </select>

    </div>
    
  </div>
</div>

 
<button class="btn btn-primary ">TAMPILKAN </button>


</div>
 

</form>


         </div>
    </div>         
    </div>
</div> 

<div id="hasil">
</div>


<script type="text/javascript">

$(document).ready(function(){

$("#id_belanja, #data_id_unit").select2();

$("#tambah").click(function(e){
   		// return !$('#cari_rekening option:selected').appendTo('#kode_rekening'); 
   		$('#data_id_unit option:selected').appendTo('#id_unit'); 
   		  
   		e.preventDefault();
   });


   $("#hapus").click(function(e){
   		 $('#id_unit option:selected').remove(); 
   		// return !$('#kode_rekening option:selected').remove(); 
   		 $('#id_unit option').prop('selected', true);
   		e.preventDefault();
   });


$("#perbandingan").submit(function(){

   		$('#id_unit option').prop('selected', true);

   		$.ajax({
   			url :'<?php echo site_url("laporan_belanja_antar_skpd/query") ?>',
   			type : 'post',
   			data : $(this).serialize(), 
   			success : function(htmldata) {
   				console.log(htmldata);
   				$("#hasil").html(htmldata); 
   			}
   		});
   		return false;
   });

	
}
);


</script>