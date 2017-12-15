<link href="<?php echo base_url("assets/css") ?>/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url("assets/js") ?>/select2.min.js"></script>


<div class="widget-list">
                
 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">LAPORAN PERBANDINGAN PORSI  BELANJA PER SKPD</h5></div>
        <div class="card-body">


<form id="perbandingan" >

	<div class="form-group">
    <label   for="id_unit">SKPD
    </label>
     
      	<?php echo form_dropdown("id_unit",$arr_unit, '','id="id_unit" class="form-control col-md-7 col-xs-12"') ?> 
    
  </div>


<div class="row">
<div class="col-md-5">
   <div class="form-group">
    <label   for="id_unit">BELANJA
    </label>
    <div>
      	<?php 

      	echo form_dropdown("cari_rekening",$arr_belanja, '','id="cari_rekening" class="form-control col-md-7 col-xs-12 js-example-basic-single"') ?> 
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
    <label  for="id_unit">BELANJA YANG DIPILIH  
    </label>
    <div  >
      	 
      	 <select multiple name="kode_rekening[]" id="kode_rekening" class="form-control">
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

$("#id_unit, #cari_rekening").select2();

$("#tambah").click(function(e){
   		// return !$('#cari_rekening option:selected').appendTo('#kode_rekening'); 
   		$('#cari_rekening option:selected').appendTo('#kode_rekening'); 
   		  
   		e.preventDefault();
   });


   $("#hapus").click(function(e){
   		 $('#kode_rekening option:selected').remove(); 
   		// return !$('#kode_rekening option:selected').remove(); 
   		 $('#kode_rekening option').prop('selected', true);
   		e.preventDefault();
   });


$("#perbandingan").submit(function(){

   		$('#kode_rekening option').prop('selected', true);

   		$.ajax({
   			url :'<?php echo site_url("laporan_belanja_skpd/query") ?>',
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