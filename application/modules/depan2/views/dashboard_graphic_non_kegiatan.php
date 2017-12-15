<div class="col-md-5">

<label>Anggaran Non Kegiatan</label>
<div id='chart_non_kegiatan' class='chart' style='height: 400px;'>Anggaran Non Kegiatan</div>
<script>
 
var initChartNonKegiatan = function() {
                        var chart = AmCharts.makeChart('chart_non_kegiatan', {
                            'type': 'pie',
                            'theme': 'light',
                            'fontFamily': 'Open Sans',
                            'color': '#888',                            
                            'dataProvider': <?php echo $json_data_graph; ?>,
                            'valueField': 'value',
                            'titleField': 'Anggaran',
                            'labelText': '[[percents]]%',                            
                            'labelRadius': 10,                            
                            'outlineAlpha': 0.4,
                            'depth3D': 10,
                            'balloonText': '[[title]]<br><span style=font-size:14px><b>[[value]]</b> ([[percents]]%)</span>',
                            'angle': 20,
                            'exportConfig': {
                                menuItems: [{
                                    icon: '/lib/3/images/export.png',
                                    format: 'png'
                                }]
                            }
                        });                        
                    };

    initChartNonKegiatan();  
    </script>



</div>



<div class="col-md-7">
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
								"Kd_Rek_2" => $row->Kd_Rek_2,
								"Kd_Rek_3" => $row->Kd_Rek_3
								);
  ?>
<tr>
<td><?php echo $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3 ?></td>
<td><?php echo $this->cm->get_nama_rekening($tmp_array ); ?></td>
<td align="right"><?php echo number_format($row->total,0,',','.'); ?></td>
</tr>

<?php endforeach; ?>
<tr><td colspan="2"><strong>TOTAL</strong> </td><td align="right"><strong><?php echo number_format($total,0,',','.');  ?></strong></td></tr>
  </tbody>
</table>
</div>

