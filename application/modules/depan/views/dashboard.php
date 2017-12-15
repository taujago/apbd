<style type="text/css">
    .judul {
        color: #000 !important;
    }

    .xscroll {
    width: 100%;
    overflow-x: auto;
    white-space: nowrap;
}
</style>
<div class="widget-list">
                

                <div class="row">
                    <div   id="click_pendapatan" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-facebook text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>PENDAPATAN </h6>
                                    <h3 class="h1"><span class="counter"><?php echo $pendapatan; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>

                     <div id="click_non_kegiatan" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-success text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>BELANJA TIDAK LANGSUNG  </h6>
                                    <h3 class="h1"><span class="counter"><?php echo $btl; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>


                    <div   id="click_kegiatan" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-primary text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>BELANJA LANGSUNG  </h6>
                                    <h3 class="h1"><span class="counter"><?php echo $bl; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>

                   <div id="click_penerimaan_pembiayaan" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-color-scheme text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>PENERIMAAN  PEMBIAYAAN   </h6> 
                                    <h3 class="h1"><span class="counter"><?php echo $penerimaan_pembiayaan; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>

                    <div id="click_pembiayaan_pengeluaran" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-warning text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>PENGELUARAN PEMBIAYAAN   </h6> 
                                    <h3 class="h1"><span class="counter"><?php echo $pembiayaan; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                     <div id="click_pendapatan" class="col-md-4 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-facebook text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>TOTAL APBD  </h6> 
                                    <h3 class="h1"><span class="counter"><?php echo $apbd; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                </div>



<div class="row" id="box_grafik_pendapatan">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PENDAPATAN</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_drilldown">
           
        </div>

        </div>



        </div>
         
    </div>
</div>



<div class="row" id="box_grafik_belanja">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK BELANJA  </h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_belanja">
           
        </div>

        </div>



        </div>
         
    </div>
</div>


<div class="row" id="box_grafik_non_kegiatan">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK BELANJA TIDAK LANGSUNG</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_non_kegiatan">
           
        </div>

        </div>



        </div>
         
    </div>
</div>


<div id="box_grafik_kegiatan" class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK  BELANJA  LANGSUNG</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_kegiatan">
           
        </div>

        </div>



        </div>
         
    </div>
</div>





<div class="row" id="box_grafik_penerimaan_pembiayaan">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PENERIMAAN PEMBIAYAAN </h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_penerimaan_pembiayaan">
           
        </div>

        </div>



        </div>
         
    </div>
</div>


<div class="row" id="box_grafik_pengeluaran_pembiayaan">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PENGELUARAN PEMBIAYAAN </h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_pembiayaan_pengeluaran">
           
        </div>

        </div>



        </div>
         
    </div>
</div>


<!-- <div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PENDAPATAN</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_pendapatan">
           
        </div>

        </div>



        </div>
         
    </div>
</div> -->


 




</div>
                 
            </div>
            <!-- /.widget-list -->


<script type="text/javascript">
    
    $(document).ready(function(){




        $("#click_pendapatan").click(function(e){
             e.preventDefault(); 
            //  $('html,body').animate({scrollTop: $("#grafik_non_kegiatan").offset().top},'slow');
            ScrollTo("box_grafik_pendapatan"); 
            return false;
         });


        $("#click_kegiatan").click(function(e){
            
            // $('html,body').animate({scrollTop: $("#grafik_kegiatan").offset().top},'slow');
            // ScrollTo("box_grafik_kegiatan"); 

             e.preventDefault(); 
            $('html,body').animate({
            scrollTop: $("#box_grafik_kegiatan").offset().top},
            'slow');
            return false;
        });


         $("#click_non_kegiatan").click(function(e){
             e.preventDefault(); 
            //  $('html,body').animate({scrollTop: $("#grafik_non_kegiatan").offset().top},'slow');
             $('html,body').animate({
            scrollTop: $("#box_grafik_non_kegiatan").offset().top},
            'slow');
            // ScrollTo("box_grafik_non_kegiatan"); 
            return false;
         });

         $("#click_penerimaan_pembiayaan").click(function(e){
             e.preventDefault(); 
            //  $('html,body').animate({scrollTop: $("#grafik_non_kegiatan").offset().top},'slow');
             $('html,body').animate({
            scrollTop: $("#box_grafik_penerimaan_pembiayaan").offset().top},
            'slow');
            // ScrollTo("box_grafik_non_kegiatan"); 
            return false;
         });



         

          $("#click_pembiayaan_pengeluaran").click(function(e){
             e.preventDefault(); 
            //  $('html,body').animate({scrollTop: $("#grafik_non_kegiatan").offset().top},'slow');
            ScrollTo("box_grafik_pengeluaran_pembiayaan"); 
            return false;
         });

        
 
        $.ajax({
            url : '<?php echo site_url("depan/grafik_pendapatan_drilldown") ?>',
            success : function(htmldata) {
                 $("#grafik_drilldown").html(htmldata); 
            }
        });

        $.ajax({
            url : '<?php echo site_url("depan/grafik_belanja") ?>',
            success : function(htmldata) {
                 $("#grafik_belanja").html(htmldata); 
            }
        });



        $.ajax({
            url : '<?php echo site_url("depan/grafik_anggaran_kegiatan") ?>',
            success : function(htmldata) {
                 $("#grafik_kegiatan").html(htmldata); 
            }
        });

        $.ajax({
            url : '<?php echo site_url("depan/grafik_anggaran_non_kegiatan") ?>',
            success : function(htmldata) {
                 $("#grafik_non_kegiatan").html(htmldata); 
            }
        });


             
 

         $.ajax({
            url : '<?php echo site_url("depan/grafik_penerimaan_pembiayaan") ?>',
            success : function(htmldata) {
                 $("#grafik_penerimaan_pembiayaan").html(htmldata); 
            }
        });


        


        $.ajax({
            url : '<?php echo site_url("depan/grafik_anggaran_pembiayaan_keluar") ?>',
            success : function(htmldata) {
                 $("#grafik_pembiayaan_pengeluaran").html(htmldata); 
            }
        });
        


});

</script>
