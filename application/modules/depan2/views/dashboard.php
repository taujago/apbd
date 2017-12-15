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
                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-facebook text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>ANGGARAN KEGIATAN  </h6>
                                    <h3 class="h1"><span class="counter"><?php echo $bl; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>

                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-facebook text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>ANGGARAN NON  KEGIATAN  </h6>
                                    <h3 class="h1"><span class="counter"><?php echo $btl; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>

                    <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                        <div class="widget-bg bg-facebook text-inverse">
                            <div class="widget-body">
                                <div class="widget-counter">
                                    <h6>PEMBIAYAAN PENGELUARAN  </h6> 
                                    <h3 class="h1"><span class="counter"><?php echo $pembiayaan; ?></span></h3> 
                                </div>
                                <!-- /.widget-counter -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                     <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
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




<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK ANGGARAN KEGIATAN</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_kegiatan">
           
        </div>

        </div>



        </div>
         
    </div>
</div>


<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK ANGGARAN NON KEGIATAN</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_non_kegiatan">
           
        </div>

        </div>



        </div>
         
    </div>
</div>



<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PEMBIAYAAN PENGELUARAN</h5>
            
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


 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
        <div class="card-header">
            <h5 class="card-title mt-0 mb-3 judul">DATA DAN GRAFIK PENDAPATAN DRILLDOWN</h5>
            
        </div>
        <div class="card-body">

        <div class="row" id="grafik_drilldown">
           
        </div>

        </div>



        </div>
         
    </div>
</div>



</div>
                 
            </div>
            <!-- /.widget-list -->


<script type="text/javascript">
    
    $(document).ready(function(){

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
            url : '<?php echo site_url("depan/grafik_anggaran_pembiayaan_keluar") ?>',
            success : function(htmldata) {
                 $("#grafik_pembiayaan_pengeluaran").html(htmldata); 
            }
        });

        //   $.ajax({
        //     url : '<?php echo site_url("depan/grafik_pendapatan") ?>',
        //     success : function(htmldata) {
        //          $("#grafik_pendapatan").html(htmldata); 
        //     }
        // });


        $.ajax({
            url : '<?php echo site_url("depan/grafik_pendapatan_drilldown") ?>',
            success : function(htmldata) {
                 $("#grafik_drilldown").html(htmldata); 
            }
        });





});

</script>
