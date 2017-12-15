<div class="tabs tabs-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"><a class="nav-link" href="#home-tab-bordered-1" data-toggle="tab" aria-expanded="true">RINGKASAN DPA</a>
                                        </li>

                                         <li class="nav-item"><a class="nav-link" href="#program-kegiatan-tab" data-toggle="tab" aria-expanded="true">PROGRAM KEGIATAN</a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="#profile-tab-bordered-1" data-toggle="tab" aria-expanded="true">GRAFIK</a>
                                        </li>
                                         
                                    </ul>
                                    <!-- /.nav-tabs -->
                                    
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home-tab-bordered-1">
                                           
<!-- BEGIN OFCONTENT TABEL --> 


<table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

            <thead>
               <tr class="bg-primary text-inverse">
              <TH  width="10%" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" align="center">NOMOR URUT</TH>
                  <TH  width="70%" align="center">URAIAN </TH>
                  <TH  width="20%" align="center">JUMLAH </TH>
              </TR>
            </thead>
            <tbody>
            
            <?php 
                if($rec_pendapatan->num_rows() > 0 ) : 
            ?>
            <tr class="tebal"><td>1</td><td>PENDAPATAN </td><td align="right"><?php echo rupiah($total_pendapatan); ?></td></tr>

            <?php 
                foreach($rec_pendapatan->result() as $row_pendapatan):
                  $tmp_arr_kode = array(
                         "Kd_Rek_1" => $row_pendapatan->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_pendapatan->Kd_Rek_2
                    );
                  $kode = $this->cm->get_kode_rekening($tmp_arr_kode); 
                  $nama = $this->cm->get_nama_rekening($tmp_arr_kode); 

            ?>
            <tr class="tebal"><td><?php echo $kode; ?> </td>
                <td><?php echo $nama; ?> </td>
                <td align="right"><?php echo rupiah($row_pendapatan->total) ?></td>
             </td>
             </tr>

             <!-- sub -->
                <?php 
                    $rec_pendapatan_sub = $this->dm->get_pendapatan_2($tmp_arr_kode,$arr_unit); 
                    foreach($rec_pendapatan_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr class="tebal" ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                    <!-- begin of sub of sub --> 
                    <?php 
                        $rec_pendapatan_sub_3 = $this->dm->get_pendapatan_3($tmp_arr_kode_sub,$arr_unit); 
                        foreach($rec_pendapatan_sub_3->result() as $row_sub3) : 
                             $tmp_arr_kode_sub3 = array(
                             "Kd_Rek_1" => $row_sub3->Kd_Rek_1 , 
                             "Kd_Rek_2" => $row_sub3->Kd_Rek_2 , 
                             "Kd_Rek_3" => $row_sub3->Kd_Rek_3,
                             "Kd_Rek_4" => $row_sub3->Kd_Rek_4
                        );
                      $kode_sub3 = $this->cm->get_kode_rekening($tmp_arr_kode_sub3); 
                      $nama_sub3 = $this->cm->get_nama_rekening($tmp_arr_kode_sub3); 


                    ?>
                    <tr  ><td><?php echo $kode_sub3; ?> </td>
                    <td><?php echo $nama_sub3; ?> </td>
                    <td align="right"><?php echo rupiah($row_sub3->total) ?></td>
                        </td>
                    </tr>

                        <?php endforeach; ?>

                    <!-- end of sub of sub --> 



                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>

            <tr class="tebal"><td>&nbsp;</td><td> </td><td align="right"> </td></tr>
            <?php endif; ?>

            <tr class="tebal"><td>2</td><td>BELANJA </td><td align="right"><?php echo rupiah($total_belanja); ?></td></tr>


            <?php 
                foreach($rec_belanja->result() as $row):
                  $tmp_arr_kode = array(
                         "Kd_Rek_1" => $row->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row->Kd_Rek_2
                    );
                  $kode = $this->cm->get_kode_rekening($tmp_arr_kode); 
                  $nama = $this->cm->get_nama_rekening($tmp_arr_kode); 

            ?>
            <tr class="tebal"><td><?php echo $kode; ?> </td>
                <td><?php echo $nama; ?> </td>
                <td align="right"><?php echo rupiah($row->total) ?></td>
             </td>
             </tr>

             <!-- sub -->
                <?php 
                    $rec_belanja_sub = $this->dm->get_belanja_2($tmp_arr_kode,$arr_unit); 
                    foreach($rec_belanja_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr class="tebal"  ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                    <!-- begin of sub of sub --> 
                    <?php 
                        $rec_belanja_sub_3 = $this->dm->get_belanja_3($tmp_arr_kode_sub,$arr_unit); 
                        foreach($rec_belanja_sub_3->result() as $row_sub3) : 
                             $tmp_arr_kode_sub3 = array(
                             "Kd_Rek_1" => $row_sub3->Kd_Rek_1 , 
                             "Kd_Rek_2" => $row_sub3->Kd_Rek_2 , 
                             "Kd_Rek_3" => $row_sub3->Kd_Rek_3,
                             "Kd_Rek_4" => $row_sub3->Kd_Rek_4
                        );
                      $kode_sub3 = $this->cm->get_kode_rekening($tmp_arr_kode_sub3); 
                      $nama_sub3 = $this->cm->get_nama_rekening($tmp_arr_kode_sub3); 


                    ?>
                    <tr  ><td><?php echo $kode_sub3; ?> </td>
                    <td><?php echo $nama_sub3; ?> </td>
                    <td align="right"><?php echo rupiah($row_sub3->total) ?></td>
                        </td>
                    </tr>

                        <?php endforeach; ?>

                    <!-- end of sub of sub --> 


                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>


            <tr class="tebal"><td>&nbsp;</td><td align="right"> SURPLUS/(DEFISIT) </td><td align="right"><?php echo rupiah($total_pendapatan - $total_belanja);  ?> </td></tr>
            <tr class="tebal"><td>&nbsp;</td><td> </td><td align="right"> </td></tr>


            <?php 

             if($rec_pembiayaan->num_rows() > 0 ) : 
            ?>

            <tr class="tebal"><td>3</td><td>PEMBIAYAAN </td><td align="right"></td></tr>


            <?php 
                foreach($rec_pembiayaan->result() as $row):
                  $tmp_arr_kode = array(
                         "Kd_Rek_1" => $row->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row->Kd_Rek_2
                    );
                  $kode = $this->cm->get_kode_rekening($tmp_arr_kode); 
                  $nama = $this->cm->get_nama_rekening($tmp_arr_kode); 

            ?>
            <tr class="tebal"><td><?php echo $kode; ?> </td>
                <td><?php echo $nama; ?> </td>
                <td align="right"><?php echo rupiah($row->total) ?></td>
             </td>
             </tr>

             <!-- sub -->
                <?php 
                    $rec_pembiayaan_sub = $this->dm->get_pembiayaan_2($tmp_arr_kode,$arr_unit); 
                    foreach($rec_pembiayaan_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr class="tebal"  ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                <!-- begin of sub of sub --> 
                    <?php 
                        $rec_pembiayaan_sub_3 = $this->dm->get_pembiayaan_3($tmp_arr_kode_sub,$arr_unit); 
                        foreach($rec_pembiayaan_sub_3->result() as $row_sub3) : 
                             $tmp_arr_kode_sub3 = array(
                             "Kd_Rek_1" => $row_sub3->Kd_Rek_1 , 
                             "Kd_Rek_2" => $row_sub3->Kd_Rek_2 , 
                             "Kd_Rek_3" => $row_sub3->Kd_Rek_3,
                             "Kd_Rek_4" => $row_sub3->Kd_Rek_4
                        );
                      $kode_sub3 = $this->cm->get_kode_rekening($tmp_arr_kode_sub3); 
                      $nama_sub3 = $this->cm->get_nama_rekening($tmp_arr_kode_sub3); 


                    ?>
                    <tr  ><td><?php echo $kode_sub3; ?> </td>
                    <td><?php echo $nama_sub3; ?> </td>
                    <td align="right"><?php echo rupiah($row_sub3->total) ?></td>
                        </td>
                    </tr>

                        <?php endforeach; ?>

                    <!-- end of sub of sub --> 



                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>

            <?php 
            $netto = 0 ;
             $netto =  $total_penerimaan_pembiayaan - $total_pengeluaran_pembiayaan;
              
            ?>

            <tr class="tebal"><td>&nbsp;</td><td align="right"> PEMBIAYAAN NETTO </td><td align="right"><?php 
                
              

            echo rupiah($netto);  ?> </td></tr>
            <?php 
               endif; // jika pembiayaan ada 
               $netto = isset($netto)?$netto:0;
            $silpa = ($total_pendapatan - $total_belanja) + $netto; 
            
            ?>


             <tr class="tebal"><td>&nbsp;</td><td align="right"> SISA LEBIH PEMBIAYAAN ANGGARAN TAHUN BERKENAAN</td><td align="right"><?php 
                
             // echo "silpa ".($total_pendapatan - $total_belanja) + $netto ."<br/>";

               // $silpa = rupiah( $silpa); 

             echo rupiah($silpa);  
            ?> </td></tr>
            
            </tbody>
             

           </table>





<!-- END OF TABLE CONTENT  --> 

                                        </div>
<div class="tab-pane" id="program-kegiatan-tab">


<table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

            <thead>
               <tr class="bg-primary text-inverse">
              <TH  width="10%" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" align="center">NOMOR URUT</TH>
                  <TH  width="70%" align="center">PROGRAM KEGIATAN </TH>
                  <TH  width="20%" align="center">JUMLAH </TH>
              </TR>
            </thead>
            <tbody>
<?php 
foreach($rec_program->result() as $row ) : 

  // $arr = array("Kd_Urusan")

      $arr_program = array( 
            "Kd_Urusan" =>    $row->Kd_Urusan,
            "Kd_Bidang" =>    $row->Kd_Bidang,
            "Kd_Unit" =>      $arr_unit['Kd_Unit'],
            "Kd_Prog"   =>    $row->Kd_Prog, 
            "Tahun" =>        $this->tahun

       );

?>

<tr class="tebal">
  <td><?php echo $row->Kd_Urusan.".".$row->Kd_Bidang.".".$row->Kd_Prog  ?></td>
  <td><?php echo $row->Ket_Program ?> </td>
  <td align="right"><?php echo rupiah($row->total); ?></td>

</tr>

    <?php 

      $rec_kegiatan = $this->dm->get_data_kegiatan($arr_program); 
      foreach($rec_kegiatan->result() as $row_kegiatan) : 
    ?>
  <tr  >
    <td><?php echo $row_kegiatan->Kd_Urusan.".".$row_kegiatan->Kd_Bidang.".".$row_kegiatan->Kd_Prog.".".$row_kegiatan->Kd_Keg  ?></td>
    <td><?php echo $row_kegiatan->Ket_Kegiatan ?> </td>
    <td align="right"><?php echo rupiah($row_kegiatan->total); ?></td>

  </tr>


    <?php endforeach; ?>


<?php endforeach; ?>
            </tbody> 

 </table>         

</div>      




<div class="tab-pane" id="profile-tab-bordered-1">


<!-- BEGIN OF GRAPHIC -->
<div class="row">





<div class="col-md-4">
 
<div id='chart_pendapatan' class='chart' style='height: 400px;'>PENDAPATAN</div>

</div>


<div class="col-md-4">
 
<div id='chart_anggaran' class='chart' style='height: 400px;'>BELANJA</div>

</div>


<div class="col-md-4">
 
<div id='chart_non_kegiatan' class='chart' style='height: 400px;'>BELANJA TIDAK LANGSUNG</div>

</div>


<div class="col-md-4">
 
<div id='chart_kegiatan' class='chart' style='height: 400px;'>BELANJA LANGSUNG</div>

</div>


 
<div class="col-md-4">
 

 
<div id='chart_pembiayaan_masuk' class='chart' style='height: 400px;'>PENERIMAAN PEMBIAYAAN</div>

</div>


<div class="col-md-4">
<div id='chart_pembiayaan_keluar' class='chart' style='height: 400px;'>PENGELUARAN PEMBIAYAAN</div>

</div>




</div>




<!-- END OF GRAPHIC  -->                                            
                                        </div>
                                         
                                    </div>
                                    <!-- /.tab-content -->
                                </div>




<script type="text/javascript">
$(document).ready(function(){

    // begin of chart kegiatan 
    var myChart = Highcharts.chart('chart_kegiatan', {chart: {
        type: 'pie'
    },
    title: {
        text: 'BELANJA LANGSUNG'
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
        "name": 'BELANJA LANGSUNG',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_kegiatan['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_kegiatan['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart kegitan; 



    // begin of chart non  kegiatan 
    var myChart = Highcharts.chart('chart_non_kegiatan', {chart: {
        type: 'pie'
    },
    title: {
        text: 'BELANJA TIDAK LANGSUNG'
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
        "name": 'BELANJA TIDAK LANGSUNG',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_non_kegiatan['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_non_kegiatan['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart non  kegitan; 


    // begin of chart pendapatan
    var myChart = Highcharts.chart('chart_pendapatan', {chart: {
        type: 'pie'
    },
    title: {
        text: 'PENDAPATAN'
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
        "name": 'PENDAPATAN',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_pendapatan['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_pendapatan['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart pendapatan; 


    // begin of chart pembiayaan keluar 
    var myChart = Highcharts.chart('chart_pembiayaan_keluar', {chart: {
        type: 'pie'
    },
    title: {
        text: 'PENGELUARAN PEMBIAYAAN'
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
        "name": 'PENGELUARAN PEMBIAYAAN',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_pembiayaan_keluar['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_pembiayaan_keluar['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart pendapatan; 


    // begin of chart pembiayaan MASUK 
    var myChart = Highcharts.chart('chart_pembiayaan_masuk', {chart: {
        type: 'pie'
    },
    title: {
        text: 'PENERIMAAN PEMBIAYAAN'
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
        "name": 'PENERIMAAN PEMBIAYAAN',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_pembiayaan_masuk['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_pembiayaan_masuk['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart masuk; 



    

  // begin of chart anggaran 
    var myChart = Highcharts.chart('chart_anggaran', {chart: {
        type: 'pie'
    },
    title: {
        text: 'BELANJA'
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
        "name": 'BELANJA',
        colorByPoint: true,


        data :  <?php echo json_encode($graph_anggaran['arr_cart'],JSON_NUMERIC_CHECK); ?>

    }]

    ,
    "drilldown": {
        series:  <?php echo json_encode($graph_anggaran['arr_sub'],JSON_NUMERIC_CHECK);  ?>
    }

    });
    // end of chart anggaran; 

});
</script>

          



 