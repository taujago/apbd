<div id="container">
</div>

<hr /> 

<table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

        <thead>
                <tr class="bg-primary text-inverse">
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">NO</th>
                    <th scope="col" align="center"  >NAMA SKPD</th>                
                    
                    <th scope="col" align="center"  >JUMLAH</th>
                     <th scope="col" align="right"  >%</th>
                    
                </tr>
        </thead>
<TBODY>
<?php 
$n=0; 
$all_total = 0 ;
foreach($rec->result() as $row ):  
  $n++; 
   $persen = $row->jumlah / $total * 100;
   $all_total += $row->jumlah;
?>
<tr>
  <td><?php echo $n; ?> </td>
  <td><?php echo $row->Nm_Unit; ?> </td>
  <td align="right"><?php echo rupiah($row->jumlah); ?> </td>
  <td align="right"><?php echo number_format($persen,2) ?> % </td>
</tr>
<?php 
endforeach;
?> 
<tr>
  <td>  </td>
  <td> <b> TOTAL KESELURUHAN </b> </td>
  <td align="right"> <b> <?php echo rupiah($all_total); ?></b>  </td>
  <td align="right"> </td>
</tr>
</TBODY>
</table>
<script type="text/javascript">
  
// Radialize the colors
$(document).ready(function(){ 


Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'PERBANDINGAN PORSI ANGGARAN BELANJA :  <?php echo $nama_rekening; ?> '
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: ' {point.nomor} ( {point.percentage:.1f} % )',
                // format: '  {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'SKPD',
        data:  <?php echo json_encode($graph_data,JSON_NUMERIC_CHECK); ?>
    }]
});

}); 

</script>