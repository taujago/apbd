<!--   <script src="<?php echo base_url(); ?>/assets/js/amcharts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/serial.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/light.js"></script>

 -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<div class="widget-list">
                
 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">GRAFIK APBD PADA SEMUA SKPD </h5></div>
        <div class="card-body">



<div class="row">
 <div class="col-md-12">

<div class="tabs tabs-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"><a class="nav-link" href="#home-tab-bordered-1" data-toggle="tab" aria-expanded="true">TABEL DATA</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#profile-tab-bordered-1" data-toggle="tab" aria-expanded="true">GRAFIK</a>
                                        </li>
                             
                                    </ul>
                                    <!-- /.nav-tabs -->
<div class="tab-content">
                                        <div class="tab-pane active" id="home-tab-bordered-1">
                                            <table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                <thead>
                <tr class="bg-primary text-inverse">
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">NO</th>

                    <th scope="col" align="center"  >NAMA SKPD</th>
                    <th scope="col" align="center"  >PENDAPATAN</th>
                    <th scope="col" align="right" colspan="2"  >BELANJA TIDAK LANGSUNG</th>
                     
                    <th scope="col" align="right"  colspan="2" >BELANJA LANGSUNG</th>
                    
                    <th scope="col" align="center"  >JUMLAH</th>
                    
                </tr>
                </thead>
                <TBODY>
                <?php 
                $n=0; 
                foreach($graph['record']->result() as $row  ) :  
                    $n++;

                    $arr = array(
                            "Kd_Urusan" =>$row->Kd_Urusan,
                            "Kd_Bidang" =>$row->Kd_Bidang,
                            "Kd_Unit" =>$row->Kd_Unit
                        );
                    $kode = implode(".", $arr); 

                    $persen_btl = $row->btl/$row->total*100;
                    $persen_bl = $row->bl/$row->total*100;

                    $arr['Tahun'] = $tahun;
                    $pendapatan = $this->dm->get_pendapatan($arr); 

                ?>
                    <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo  anchor("apbd_skpd/?id_skpd=$kode",$row->Nm_Unit); ?></td>
                        <td align="right"><?php echo rupiah($pendapatan); ?></td>

                        <td align="right"><?php echo rupiah($row->btl); ?></td>
                        <td align="right">(<?php echo number_format($persen_bl,2); ?> %)</td>
                        <td align="right"><?php echo rupiah($row->bl); ?></td>
                        <td align="right">(<?php echo number_format($persen_btl,2); ?> %)</td>
                        <td align="right"><?php echo rupiah($row->total); ?></td>
                    </tr>
                <?php endforeach; ?>
                </TBODY>
                </table>
</div> <!-- end of tab content --> 
                                        <div class="tab-pane" id="profile-tab-bordered-1">
                                             <div id="chartdiv" class="col-md-12" style="height: 2500px"> </div>
             
          </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <!-- /.tab-content -->
                                </div>


 </div>
</div>




          <div class="row">
          
         <!--  <div id="view" class="col-md-12"> </div>
          	 
          </div>

          <div id="graph" class="col-md-12" style="height: 2000px"> </div>
             
          </div> -->

         

         



          <div class="row">
          <div class="col-md-12">




          </div>
          </div>
          



        </div>
    </div>         
    </div>
</div> 


                 
</div> <!-- /.widget-list -->

<script>
$(function () {
/*
$('#view').highcharts({
        
chart: {
        type: 'column'
    },
    title: {
        text: 'GRAFIK APBD PER SKPD'
    },
    subtitle: {
        text: 'GRAFIK APBD PER SKPD TAHUN <?php echo $tahun; ?>'
    },
    xAxis: {
        categories: [

          <?php 

            foreach($data as $val) : 
                echo "'".$val['skpd']."',";
            endforeach;

          ?>
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah '
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Jumlah APBD :  ',
            data: [
        
                <?php 

                foreach($data as $val) : 
                    echo $val['total'].",";
                endforeach;

                 ?>      
        
            ]

        }

        




        ]

    });
 


// graphic kedua 

// Highcharts.chart('container', {
 $('#graph').highcharts({   
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Historic World Population by Region'
    },
    subtitle: {
        text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
    },
    xAxis: {
        categories: <?php echo json_encode($graph['arr_title']) ?>,
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series:  <?php echo json_encode($graph['arr_data'],JSON_NUMERIC_CHECK) ?>
});

*/ 

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
     "theme": "light",
    "categoryField": "nama",
    "rotate": true,
    "startDuration": 1,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left"
    },
    "trendLines": [],
    "graphs": [
        {
            "balloonText": "BELANJA TIDAK LANGSUNG :[[value]]",
            "fillAlphas": 0.8,
            "id": "AmGraph-1",
            "lineAlpha": 0.2,
            "title": "BELANJA TIDAK LANGSUNG",
            "type": "column",
            "valueField": "btl"
        },
        {
            "balloonText": "BELANJA LANGSUNG :[[value]]",
            "fillAlphas": 0.8,
            "id": "AmGraph-2",
            "lineAlpha": 0.2,
            "title": "BELANJA LANGSUNG",
            "type": "column",
            "valueField": "bl"
        }
    ],
    "guides": [],
    "valueAxes": [
        {
            "id": "ValueAxis-1",
            "position": "top",
            "axisAlpha": 0
        }
    ],
    "allLabels": [],
    "balloon": {},
    "titles": [],
    "dataProvider": <?php echo json_encode($graph['arr_amchart'],JSON_NUMERIC_CHECK);  ?>,
    "export": {
        "enabled": true
     }

});



});  




</script>


<!-- Styles -->
<style>
#chartdiv {
    width       : 100%;
    
    font-size   : 12px;
}                       
</style>

<!-- Resources -->
 <!-- amchart -->
  
    <!-- end of amchart -->

<!-- Chart code -->
<script>

</script>

<!-- HTML -->
