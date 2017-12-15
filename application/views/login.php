<!DOCTYPE html>
<html lang="en">

<head>
    <script src="<?php echo base_url("assets/js") ?>/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
 <link href="<?php echo base_url("assets/css") ?>/sweetalert2.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url("assets/css") ?>/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/mediaelementplayer.min.css" rel="stylesheet" type="text/css">

     <link href="<?php echo base_url("assets/css") ?>/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css") ?>/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="<?php echo base_url("assets/js") ?>/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(<?php echo base_url(); ?>/assets/demo/night.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center">
                <a href="index.html">
                    <img alt="" src="<?php echo base_url(); ?>assets/img/logo-login.png">
                </a>
            </div>
            <!-- /.navbar-header -->
            <form method="post" class="form-material" action="<?php echo  site_url("pilih/set_tahun") ?>">
                <div class="form-group">
                    <?php 
                    $arr_tahun['2016'] = 2016; 
                    $arr_tahun['2017'] = 2017; 
                    $arr_tahun['2018'] = 2018; 
                    echo form_dropdown("tahun",$arr_tahun,'','class="form-control"'); 
                    ?>
                    <label for="example-email">TAHUN</label>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-block btn-lg btn-success ripple" type="submit">  MASUK</button>
                </div>
                 
                <!-- /.form-group -->
            </form>
            <!-- /.form-material -->
            
            
            <!-- /.btn-list -->
            <footer class="col-sm-12 text-center">
                <hr>
                <p>Badan Pendapatan dan Keuangan Daerah <br /> KABUPATEN SUMBAWA BARAT</b></a>
                </p>
            </footer>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/material-design.js"></script>
</body>

</html>