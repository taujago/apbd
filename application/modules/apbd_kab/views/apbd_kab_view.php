<style type="text/css">
    .judul {
        color: #000 !important;
    }

    .xscroll {
    width: 100%;
    overflow-x: auto;
    white-space: nowrap;


}
.tebal {
    font-weight: bold;
}
</style>
<div class="widget-list">
                
 

<div class="row">

<div class="col-md-12 mr-b-30">
    <div class="card card-outline-default">
    <div class="card-header"><h5 class="card-title mt-0 mb-3 judul">RINGKASAN APBD KABUPATEN SUMBAWA BARAT TAHUN ANGGARAN <?php echo $this->tahun; ?> </h5></div>
        <div class="card-body">

          <table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

            <thead>
               <tr class="bg-primary text-inverse">
              <TH  width="10%" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" align="center">NOMOR URUT</TH>
                  <TH  width="70%" align="center">URAIAN </TH>
                  <TH  width="20%" align="center">JUMLAH </TH>
              </TR>
            </thead>
            <tbody>
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
                    $rec_pendapatan_sub = $this->dm->get_pendapatan_2($tmp_arr_kode); 
                    foreach($rec_pendapatan_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr  ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>

            <tr class="tebal"><td>&nbsp;</td><td> </td><td align="right"> </td></tr>
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
                    $rec_belanja_sub = $this->dm->get_belanja_2($tmp_arr_kode); 
                    foreach($rec_belanja_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr  ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>


            <tr class="tebal"><td>&nbsp;</td><td align="right"> SURPLUS/(DEFISIT) </td><td align="right"><?php echo rupiah($total_pendapatan - $total_belanja);  ?> </td></tr>
            <tr class="tebal"><td>&nbsp;</td><td> </td><td align="right"> </td></tr>
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
                    $rec_pembiayaan_sub = $this->dm->get_pembiayaan_2($tmp_arr_kode); 
                    foreach($rec_pembiayaan_sub->result() as $row_sub) : 
                         $tmp_arr_kode_sub = array(
                         "Kd_Rek_1" => $row_sub->Kd_Rek_1 , 
                         "Kd_Rek_2" => $row_sub->Kd_Rek_2 , 
                         "Kd_Rek_3" => $row_sub->Kd_Rek_3
                    );
                  $kode_sub = $this->cm->get_kode_rekening($tmp_arr_kode_sub); 
                  $nama_sub = $this->cm->get_nama_rekening($tmp_arr_kode_sub); 


                ?>
                <tr  ><td><?php echo $kode_sub; ?> </td>
                <td><?php echo $nama_sub; ?> </td>
                <td align="right"><?php echo rupiah($row_sub->total) ?></td>
                    </td>
                </tr>

                <?php endforeach; ?>
             <!-- end of sub -->

            <?php endforeach; ?>
            <tr class="tebal"><td>&nbsp;</td><td align="right"> PEMBIAYAAN NETTO </td><td align="right"><?php 
                
               $netto =  $total_penerimaan_pembiayaan - $total_pengeluaran_pembiayaan;

            echo rupiah($netto);  ?> </td></tr>
             <tr class="tebal"><td>&nbsp;</td><td align="right"> SISA LEBIH PEMBIAYAAN ANGGARAN TAHUN BERKENAAN</td><td align="right"><?php 
                
               $silpa = rupiah(($total_pendapatan - $total_belanja) + $netto ); 

            echo rupiah($silpa);  ?> </td></tr>
            </tbody>

        </div>
    </div>         
    </div>
</div> 


                 
</div> <!-- /.widget-list -->
           

 