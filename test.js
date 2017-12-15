
$(document).ready(function(){

    var myChart = Highcharts.chart('chart_pendapatan', {chart: {
        type: 'pie'
    },
    title: {
        text: 'Alokasi Pendapatan'
    },
    subtitle: {
        text: 'Klik pada grafik untuk melihat data lebih detail'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name} {point.nilai}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },
    series: [{
        "name": "Brands",
        "colorByPoint": true,
        "data": 

            [
                   {
                      "name":"PENDAPATAN ASLI DAERAH",
                      "y":"3.85",
                      "nilai" : 5899999999,
                      "drilldown":"PENDAPATAN ASLI DAERAH"
                   },
                   {
                      "name":"DANA PERIMBANGAN",
                      "y":"83.98",
                      "nilai" : 5899999999,
                      "drilldown":"DANA PERIMBANGAN"
                   } 
                ]
        
    }]

    

    });

});