<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/pace.css">
    <script src="<?php echo base_url("assets/js") ?>/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/img/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>STATISTIK APBD KABUPATEN SUMBAWA BARAT</title>
    <!-- CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    
 <!--    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo base_url("assets/css") ?>/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/morris.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/jqvmap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/slick.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="<?php echo base_url("assets/js") ?>/modernizr.min.js"></script>

<script src="<?php echo base_url("assets/js") ?>/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/js") ?>/jquery-ui.min.js"></script>
    <script src="<?php echo base_url("assets/js") ?>/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/jquery.form-validator.min.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/mediaelementplayer.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script> -->
    <script src="<?php echo base_url("assets/js"); ?>/perfect-scrollbar.jquery.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/sweetalert2.min.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url("assets/js"); ?>/jquery.waypoints.min.js"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script> -->
    <script src="<?php echo base_url(); ?>/assets/vendors/charts/utils.js"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script> -->
    <script src="<?php echo base_url(); ?>/assets/vendors/charts/excanvas.js"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/1.1.1/mithril.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/theme-widgets/widgets.js"></script> -->
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script> -->
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/clndr/1.4.7/clndr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script> -->
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script> -->



    <script src="<?php echo base_url(); ?>/assets/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>



<script src="<?php echo base_url("assets/js"); ?>/highcharts.js"></script>
<script src="<?php echo base_url("assets/js"); ?>/data.js"></script>
<script src="<?php echo base_url("assets/js"); ?>/drilldown.js"></script>



</head>

<body class="sidebar-horizontal">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            

               <div class="navbar-header">
                <a href="<?php echo base_url(); ?>" class="logo-brand">
                    <img class="logo-expand" alt="" src="<?php echo base_url(); ?>/assets/img/logo-homepage.png">
                    <img class="logo-collapse" alt="" src="<?php echo base_url(); ?>/assets/img/logo-collapse.png">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->

             <ul class="nav navbar-nav d-none d-lg-block">
                 <li><a href="#"><strong>TAHUN ANGGARAN <?php echo $this->session->userdata("tahun"); ?> </strong> </a> </li>
                
                 
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
             
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar clearfix">
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="<?php echo base_url(); ?>"><i class="list-icon material-icons">home</i> <span class="hide-menu">BERANDA <span class="badge badge-border bg-primary pull-right">5</span></span></a>
                        
                    </li>


                   <!--   <li class="current-page menu-item-has-children"><a href="<?php echo site_url("apbd_kab"); ?>"><i class="list-icon material-icons">list</i> <span class="hide-menu">APBD </a>
                        
                    </li> -->

                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="color-color-scheme"><i class="list-icon material-icons">list</i> <span class="hide-menu">APBD</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="<?php echo site_url("apbd_kab") ?>">RINGKASAN APBD</a>
                            </li>
                            <li><a href="<?php echo site_url("laporan_skpd") ?>">PAGU APBD MENURUT ORGANISASI </a>
                            </li>
                           <!--  <li><a href="<?php echo site_url("laporan_skpd") ?>">DPA SEMUA SKPD </a>
                            </li>
                            <li><a href="<?php echo site_url("apbd_skpd") ?>">DPA PER SKPD</a>
                            </li> -->
                             
                            
                        </ul>
                    </li>


   <li class="current-page menu-item-has-children"><a href="<?php echo site_url("apbd_skpd") ?>"><i class="list-icon material-icons">list</i> <span class="hide-menu">DPA SKPD </a>
                        
                    </li>




                     
                     
                    
                    <li class="current-page menu-item-has-children"><a href="#"><i class="list-icon material-icons">receipt</i> <span class="hide-menu">KOMPOSISI DAN ALOKASI BELANJA <span class="badge badge-border bg-primary pull-right">5</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="<?php echo site_url("laporan_belanja_skpd") ?>">  PORSI BELANJA PER SKPD</a>
                            </li>

                             <li><a href="<?php echo site_url("laporan_belanja_antar_skpd") ?>">  PORSI BELANJA ANTAR SKPD</a>
                            </li>

                            <li><a href="<?php echo site_url("perbandingan_belanja") ?>">BELANJA TERHADAP SKPD </a>
                            </li>
                            
                             
                            
                        </ul>
                    </li>    

                  <!--   <li class="current-page menu-item-has-children"><a href="#"><i class="list-icon material-icons">equalizer</i> <span class="hide-menu">LAPORAN REALISASI <span class="badge badge-border bg-primary pull-right">5</span></span></a>
                        
                    </li>    -->
                    


                     
                    <li class="current-page menu-item-has-children"><a href="<?php echo site_url("pilih"); ?>"><i class="list-icon material-icons">power_settings_new</i> <span class="hide-menu">GANTI TAHUN ANGGARAN </a>
                        
                    </li>  
                    <li class="current-page menu-item-has-children"><a href="<?php echo site_url("informasi") ?>"><i class="list-icon material-icons">info_outline</i> <span class="hide-menu">INFORMASI </a>
                        
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
             
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            
            <?php echo $content; ?>

        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
         
        <!-- CHAT PANEL -->
         
   <!--  </div>
   
    <footer class="footer text-center clearfix">2017 © Oscar Admin brought to you by UnifatoThemes</footer>
    </div> -->
   
    
</body>

</html>