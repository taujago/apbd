<div class="col-md-6">

<label>ANGARAN NON KEGIATAN</label>
<div id='chart_non_kegiatan' class='chart' style='height: 400px;'>ANGARAN NON KEGIATAN</div>
<script>

$(document).ready(function(){

    var myChart = Highcharts.chart('chart_non_kegiatan', {chart: {
        type: 'pie'
    },
    title: {
        text: 'ANGGARAN NON KEGIATAN'
    },
    subtitle: {
        text: 'Klik pada grafik untuk melihat data lebih detail'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '  {point.y:.1f}%'
                // format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:black">{point.name} : {point.nilai} </span> ({point.y:.2f}% )  <br/>'
    },
    series: [{
        "name": 'ANGGARAN NON KEGIATAN',
        colorByPoint: true,


        data :  <?php echo json_encode($arr_cart,JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($arr_sub,JSON_NUMERIC_CHECK);  ?>
    }

    });

});


  </script>


</div>



<div class="col-md-6">
<table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

<thead>
                                        <tr class="bg-primary text-inverse">
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">KODE</th>
                                            <th scope="col"  >URAIAN</th>
                                            <th scope="col"  >JUMLAH</th>
                                            
                                        </tr>
                                    </thead>
  <tbody>
  <?php 
  $total = 0; 
   foreach($rec_kegiatan->result() as $row): 

    $total += $row->total; 
    $tmp_array = array(
                                "Kd_Rek_1" => $row->Kd_Rek_1,
                                "Kd_Rek_2" => $row->Kd_Rek_2 ,
                                "Kd_Rek_3" => $row->Kd_Rek_3 
                                );
  ?>
<tr>
<td><?php echo $row->Kd_Rek_1.".".$row->Kd_Rek_2 .".".$row->Kd_Rek_3 ?></td>
<td><?php echo $this->cm->get_nama_rekening($tmp_array ); ?></td>
<td align="right"><?php echo number_format($row->total,0,',','.'); ?></td>
</tr>

<?php endforeach; ?>
<tr><td colspan="2"><strong>TOTAL</strong> </td><td align="right"><strong><?php echo number_format($total,0,',','.');  ?></strong></td></tr>
  </tbody>
</table>
</div>

