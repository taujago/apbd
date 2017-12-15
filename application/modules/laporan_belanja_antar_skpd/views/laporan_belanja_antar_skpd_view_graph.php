<hr />




<div class="row">
<div class="col-md-12">
<!-- <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><strong>Perbandingan Porsi Belanja SKPD <?php echo $nama_skpd ?> Tahun <?php echo $tahun; ?></strong></h3>
  </div>
  <div class="panel-body"> -->


  <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul"><?php echo $keterangan;  ?></h5></div>
        <div class="card-body">

<div class="row">

  <div class="col-md-6" id="view" style="height:400px;"></div> 

  <div class="col-md-6">

    <table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

<thead>
                                        <tr class="bg-primary text-inverse">
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">NO.</th>
                                            <th scope="col"  >SKPD</th>
                                            <th scope="col"  >JUMLAH</th>
                                            
                                        </tr>
                                    </thead>

<TBODY>
<?php 

// arr_graph
// arr_graph_lainnya
$total = 0; 
$n=0;
foreach($arr_graph as $row) : 
$n++;
$total += $row['jumlah']; 
?>
<tr>
  <td><?php echo $n;  ?></td>
  <td><?php echo $row['nama'] ?></td>
  <td align="right"><?php echo rupiah($row['jumlah']) ?></td>
</tr>
<?php 
endforeach;
?>
<td> </td>
  <td><STRONG>TOTAL</STRONG> </td>
  <td align="right"><strong><?php echo rupiah($total) ?></strong></td>
</TBODY>
</table>


  </div>




</div>   
<div class="row" style="margin : 30px auto">
<div class="col-md-12">
<hr /> 
 
</div>
</div> 
      



<div class="row">    

  <div class="col-md-6" id="view_lainnya" style="height:400px;"></div> 
  <div class="col-md-6">
    
<table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

<thead>
                                        <tr class="bg-primary text-inverse">
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">NO.</th>
                                            <th scope="col"  >SKPD</th>
                                            <th scope="col"  >JUMLAH</th>
                                            
                                        </tr>
                                    </thead>

<TBODY>
<?php 

// arr_graph
// arr_graph_lainnya
$total = 0; 
$n=0;
foreach($arr_graph_lainnya as $row) : 
$n++;
$total += $row['jumlah']; 
?>
<tr>
  <td><?php echo $n;  ?></td>
  <td><?php echo $row['nama'] ?></td>
  <td align="right"><?php echo rupiah($row['jumlah']) ?></td>
</tr>
<?php 
endforeach;
?>
<td> </td>
  <td><STRONG>TOTAL</STRONG> </td>
  <td align="right"><strong><?php echo rupiah($total) ?></strong></td>
</TBODY>
</table>




  </div>                 
 
</div>

  </div>
</div>

</div>
</div>
 

 <script>
$(function () {
 


$('#view').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'PERBANDINGAN BELANJA ANTAR SKPD'
    },
    tooltip: {
        pointFormat: '{series.y} {series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
 
    series: [{
        name: 'Belanja',
        colorByPoint: true,
        data: <?php echo json_encode($arr_graph,JSON_NUMERIC_CHECK) ?> 
        
    }]
});

 


$('#view_lainnya').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'PERBANDINGAN BELANJA PADA SEMUA SKPD'
    },
    tooltip: {
        pointFormat: '{series.y} {series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
 
    series: [{
        name: 'Persentase ',
        colorByPoint: true,
        data: <?php echo json_encode($arr_graph_lainnya,JSON_NUMERIC_CHECK) ?> 
        
    }]
});


});  


</script>
 