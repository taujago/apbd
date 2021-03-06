<script>
$(function () {

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
      
});  


</script>
