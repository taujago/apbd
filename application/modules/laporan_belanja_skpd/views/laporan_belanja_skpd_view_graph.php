<hr />


<div class="row">
<div class="col-md-12">
<!-- <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><strong>Perbandingan Porsi Belanja SKPD <?php echo $nama_skpd ?> Tahun <?php echo $tahun; ?></strong></h3>
  </div>
  <div class="panel-body"> -->


  <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">Perbandingan Porsi Belanja SKPD <?php echo $nama_skpd ?> Tahun <?php echo $tahun; ?></h5></div>
        <div class="card-body">

     <div class="row">

                    <div class="col-md-6" id="view" style="height:350px;"></div>                   
                    <div class="col-md-6" id="tabels" style="height:350px;">
                       
                    <table class="table table-hover">
                      <tr>
                      <td align="center"><strong> BELANJA </strong></td> 
                      <td align="center"><strong>TOTAL</strong></td> 
                      <td align="center"><strong> % </strong></td></tr>

                      <?php 
                         foreach($result as $row): 

                          $persen = $row['y'] / $total * 100;

                      ?>
                      <tr>
                      <td><?php echo $row['name'] ?></td>
                      <td align="right"><?php echo ribuan($row['y']) ?></td>
                      <td align="right"><?php echo number_format($persen,2) ?></td></tr>

                      <?php endforeach; ?>

                      <tr>
                      <td>TOTAL </td>
                      <td align="right"><?php echo ribuan($total) ?></td>
                      <td align="right"></td></tr>
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
            text: 'Perbandingan Belanja Dinas <?php echo $nama_skpd; ?> Tahun Anggaran <?php echo $tahun;  ?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
            name: 'Persentase',
            colorByPoint: true,
            data: 

              <?php echo json_encode($result); ?>
            
        }]
    });
      
 


});  


</script>
 