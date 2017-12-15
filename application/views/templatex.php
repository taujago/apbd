<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/pace.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Horizontal Navigation</title>
    <!-- CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="sidebar-horizontal">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand text-center">
                    <img class="logo-expand" alt="" src="<?php echo base_url(); ?>/assets/demo/logo-expand.png">
                    <img class="logo-collapse" alt="" src="<?php echo base_url(); ?>/assets/demo/logo-collapse.png">
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
            <form class="navbar-search d-none d-md-block" role="search"><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-pill bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border bg-primary">3</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Emily Lee</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Hi John!</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--offline thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Christopher Palmer</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Like the illustration and the indicator style. Best of luck ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card-->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-pill bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border bg-primary">4</span>
                            </header>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="<?php echo base_url(); ?>/assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Scott Adams</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header">New notifications <span class="badge badge-border bg-danger mr-l-10">4</span>
                            </section>
                            <ul class="list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex user--online thumb-xs"><img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="media-heading">Steve Smith</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">I slowly updated my Behance with some recent projects and finally added a case study for thus great project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="media-heading">To Do</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Meeting with Nathan McCullum on Friday 8 AM to discuss about an ongoing project ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="media-heading">Invitation accepted</span> <small>10.14.2016 @ 2:30pm</small> <span class="media-content">Your invitation for Mars has been accepted ...</span></span></a>
                                </li>
                            </ul>
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar clearfix">
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Dashboard <span class="badge badge-border bg-primary pull-right">5</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/index.html">Default</a>
                            </li>
                            <li><a href="../collapse-nav/index.html">Collapsed Nav</a>
                            </li>
                            <li><a href="../horizontal-nav-icons/index.html">Horizontal Nav Icons</a>
                            </li>
                            <li><a href="../horizontal-nav/index.html">Horizontal Nav</a>
                            </li>
                            <li><a href="../ecommerce/index.html">Ecommerce</a>
                            </li>
                            <li><a href="../real-estate/index.html">Real Estate</a>
                            </li>
                            <li><a href="../university/index.html">University</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="color-color-scheme"><span class="hide-menu">Apps</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="app-calender.html">Calendar</a>
                            </li>
                            <li><a href="app-chat.html">Chat</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Inbox</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="app-inbox.html">Mail box</a>
                                    </li>
                                    <li><a href="app-inbox-single.html">Inbox detail</a>
                                    </li>
                                    <li><a href="app-inbox-compose.html">Compose mail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Contacts</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="app-contacts.html">Contacts List</a>
                                    </li>
                                    <li><a href="app-contacts-alt.html">Contacts List Alt</a>
                                    </li>
                                    <li><a href="app-contacts-details.html">Contact details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Tables</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li><a href="tables-data-table.html">Data Table</a>
                                    </li>
                                    <li><a href="tables-bootstrap.html">Bootstrap Tables</a>
                                    </li>
                                    <li><a href="tables-responsive.html">Responsive Tables</a>
                                    </li>
                                    <li><a href="tables-editable.html">Editable Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li><a href="maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="email-templates/basic.html">Basic</a>
                                    </li>
                                    <li><a href="email-templates/billing.html">Billing</a>
                                    </li>
                                    <li><a href="email-templates/friend-request.html">Friend Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Icons</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="icons-material-design.html">Material Design</a>
                                    </li>
                                    <li><a href="icons-font-awesome.html">Font Awesome</a>
                                    </li>
                                    <li><a href="icons-mono-social.html">Social Icons</a>
                                    </li>
                                    <li><a href="icons-weather.html">Weather Icons</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Forms</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="form-elements.html">Elements</a>
                            </li>
                            <li><a href="form-material.html">Material Design</a>
                            </li>
                            <li><a href="form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="form-dropzone.html">File Upload</a>
                            </li>
                            <li><a href="form-pickers.html">Picker</a>
                            </li>
                            <li><a href="form-select.html">Select and Multiselect</a>
                            </li>
                            <li><a href="form-tags-categories.html">Tags and Categories</a>
                            </li>
                            <li><a href="form-addons.html">Addons</a>
                            </li>
                            <li><a href="form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Charts</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="charts-js.html">Chart-js</a>
                            </li>
                            <li><a href="charts-sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="charts-knob.html">Knob Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">UI Elements <span class="badge badge-border bg-primary pull-right">7</span></span></a>
                        <ul class="list-unstyled sub-menu two-li">
                            <li><a href="ui-typography.html">Typography</a>
                            </li>
                            <li><a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="ui-cards.html">Cards</a>
                            </li>
                            <li><a href="ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="ui-panels.html">Panels</a>
                            </li>
                            <li><a href="ui-accordions.html">Accordions</a>
                            </li>
                            <li><a href="ui-modals.html">Modals</a>
                            </li>
                            <li><a href="ui-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li><a href="ui-lists.html">Lists &amp; Media Object</a>
                            </li>
                            <li><a href="ui-user-cards.html">User Cards</a>
                            </li>
                            <li><a href="ui-grid.html">Grid</a>
                            </li>
                            <li><a href="ui-progress.html">Progress Bars</a>
                            </li>
                            <li><a href="ui-notifications.html">Notifications &amp; Alerts</a>
                            </li>
                            <li><a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="ui-media.html">Media</a>
                            </li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="ui-bootstrap.html">Bootstrap Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Sample Pages <span class="badge badge-border bg-info pull-right">13</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="page-blank.html">Blank Page</a>
                            </li>
                            <li><a href="page-lightbox.html">Lightbox Popup</a>
                            </li>
                            <li><a href="page-sitemap.html">Sitemap</a>
                            </li>
                            <li><a href="page-search-results.html">Search Results</a>
                            </li>
                            <li><a href="page-custom-scroll.html">Custom Scroll</a>
                            </li>
                            <li><a href="page-utility-classes.html">Utility Classes</a>
                            </li>
                            <li><a href="page-animations.html">Animations</a>
                            </li>
                            <li><a href="page-faq.html">FAQ</a>
                            </li>
                            <li><a href="page-pricing-table.html">Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Other Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="page-error-403.html">Error 403</a>
                                    </li>
                                    <li><a href="page-error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="page-error-500.html">Error 500</a>
                                    </li>
                                    <li><a href="page-error-503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-profile.html">Profile</a>
                            </li>
                            <li><a href="page-login.html">Login Page</a>
                            </li>
                            <li><a href="page-login2.html">Login Page 2</a>
                            </li>
                            <li><a href="page-register.html">Sign Up</a>
                            </li>
                            <li><a href="page-register2.html">Sign Up 2</a>
                            </li>
                            <li><a href="page-register-3-step.html">3 Step Sign Up</a>
                            </li>
                            <li><a href="page-forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li><a href="page-email-confirm.html">Confirm Email</a>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="page-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><span class="hide-menu">Widgets</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="widgets.html">Content Widgets</a>
                            </li>
                            <li><a href="widgets-statistics.html">Statistics Widgets</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Horizontal Navigation</h5>
                    <p class="mr-0 text-muted d-none d-md-inline-block">statistics, charts, events and reports</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Horizontal Navigation</li>
                    </ol>
                    <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <!-- Chart and Map Widget -->
                <div class="row">
                    <!-- Vector Map Widget -->
                    <div class="col-md-7 widget-holder">
                        <div class="widget-bg bg-facebook">
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="box-title text-inverse">Visitors Map</h5>
                                        <div class="vmap mr-b-20" style="height: 310px" data-toggle="vector-map" data-plugin-options='{"map":"usa_en", "scaleColors" : ["#ffffff" , "#03a9f3"], "valuesSrcFile": "<?php echo base_url(); ?>/assets/js/sample-usa-data.json", "color": "#ddd"}'></div>
                                        <!-- /.vmap -->
                                    </div>
                                    <!-- /.col-md-9 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Charts: Sales Statistics -->
                    <div class="col-md-5 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>New Sales</h5>
                                <ul class="widget-actions">
                                    <li class="dropdown">
                                        <div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer"><i class="list-icon material-icons color-danger">fiber_manual_record</i>  <span></span>  <i class="list-icon material-icons">expand_more</i>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">shop</i> 1481</h6><small>orders weekly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons mr-r-5 small">date_range</i> 5,678</h6><small>orders monthly</small>
                                    </div>
                                    <div class="col-4 mr-b-20 text-center">
                                        <h6 class="h5 mr-b-0 mr-t-10"><i class="list-icon material-icons small">attach_money</i> 27,321</h6><small>orders weekly</small>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div id="productLineHomeMorris" style="height: 250px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Contact, Pricing and Table Widgets -->
                <div class="row">
                    <!-- Contact Info -->
                    <div class="hidden-xs hidden-sm col-md-3 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="contact-info">
                                    <header class="text-center">
                                        <figure class="inline-block user--online thumb-lg">
                                            <img src="<?php echo base_url(); ?>/assets/demo/user-cards/6.jpg" class="rounded-circle img-thumbnail" alt="">
                                        </figure>
                                        <h4 class="mt-1"><a href="#">Emmy Wilson</a></h4>
                                        <div class="contact-info-address"><i class="material-icons list-icon">location_on</i>
                                            <p>Charlotte, NC</p>
                                        </div>
                                    </header>
                                    <footer class="clearfix"><a href="#" class="float-left btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>  <a href="#" class="float-right btn btn-default btn-rounded">Message</a>
                                    </footer>
                                </div>
                                <!-- /.contact-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Table: Order Status -->
                    <div class="col-sm-8 col-md-6 widget-holder widget-full-height">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Order Status</h5>
                                <div class="padded-reverse">
                                    <table class="table table-striped widget-status-table mr-b-5">
                                        <thead>
                                            <tr>
                                                <th class="pd-l-20">Orders</th>
                                                <th>Status</th>
                                                <th class="hidden-xs">Date</th>
                                                <th class="text-right pd-r-20">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Tarcho Tee</a>
                                                </th>
                                                <td><span class="badge badge-info text-inverse">Complete</span>
                                                </td>
                                                <td class="text-muted hidden-xs">July 31,2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Athlete Tee</a>
                                                </th>
                                                <td><span class="badge badge-danger text-inverse">Pending</span>
                                                </td>
                                                <td class="text-muted hidden-xs">April 12, 2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Namche Zip Tee</a>
                                                </th>
                                                <td><span class="badge badge-warning text-inverse">Delivered</span>
                                                </td>
                                                <td class="text-muted hidden-xs">August 3, 2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Asaar Jacket</a>
                                                </th>
                                                <td><span class="badge badge-info text-inverse">Complete</span>
                                                </td>
                                                <td class="text-muted hidden-xs">August 12, 2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Everest Zip Jacket</a>
                                                </th>
                                                <td><span class="badge badge-danger text-inverse">Pending</span>
                                                </td>
                                                <td class="text-muted hidden-xs">March 1, 2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd-l-20"><a href="#">Namche Zip Tee</a>
                                                </th>
                                                <td><span class="badge badge-warning text-inverse">Delivered</span>
                                                </td>
                                                <td class="text-muted hidden-xs">August 3, 2017</td>
                                                <td class="text-right"><a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>  <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.widget-status-table -->
                                </div>
                                <!-- /.padded-reverse -->
                            </div>
                            <!-- /.widget-body badge -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Pricing Card -->
                    <div class="hidden-xs col-sm-4 col-md-3 widget-holder widget-full-height">
                        <div class="pricing-box my-0 featured-pricing-box-2 widget-bg bg-color-scheme">
                            <header>
                                <h5>Enterprise</h5>
                                <p class="header-text">A solution for
                                    <br>professionals</p>
                            </header>
                            <hr class="bg-white">
                            <div class="pricing-box-content">
                                <ul class="list-unstyled text-center mr-b-30">
                                    <li>Built Prices</li>
                                    <li>Custom Features</li>
                                    <li>Include your branding</li>
                                </ul><a href="#" class="btn btn-lg btn-outline-default">Contact</a>
                            </div>
                        </div>
                        <!-- /.pricing-box -->
                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
                <!-- Chart Group -->
                <div class="row">
                    <!-- Charts: Tasks -->
                    <div class="col-md-4 col-sm-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h6 class="mr-t-0 mr-b-5 fw-700">Your Tasks</h6>
                                <p class="text-muted">Calculated in the last 7 days</p>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="progress-stats-round text-center">
                                            <input data-plugin="knob" data-width="90" data-height="90" data-bgcolor="#ebeff2" data-fgcolor="#fb9678" data-displayinput="false" value="62" data-readonly="true" data-thickness=".05"> <i class="list-icon material-icons color-primary">loyalty</i>
                                            <h4 class="color-primary mr-tb-10">62%</h4>
                                            <h6 class="mr-b-5 mr-t-0">Satisfaction Rate</h6><small>54% Average</small>
                                        </div>
                                        <div class="mr-tb-20" id="homeSparkline1"></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="progress-stats-round text-center">
                                            <input data-plugin="knob" data-width="90" data-height="90" data-bgcolor="#ebeff2" data-fgcolor="#03a9f3" data-displayinput="false" value="86" data-readonly="true" data-thickness=".05"> <i class="list-icon material-icons color-info">developer_board</i>
                                            <h4 class="color-info mr-tb-10">86%</h4>
                                            <h6 class="mr-b-5 mr-t-0">Productivity Goal</h6><small>82% average</small>
                                        </div>
                                        <div class="mr-t-20" id="homeSparkline2"></div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Charts: Projects -->
                    <div class="col-md-4 col-sm-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h6 class="mr-t-0 mr-b-5 fw-700">Your Projects</h6>
                                <p class="text-muted">Calculated in the last 30 days</p>
                                <div id="siteVisitMorris" style="margin-left:-15px; margin-right:-15px; height: 270px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Charts: Sales -->
                    <div class="col-md-4 col-sm-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h6 class="mr-t-0 mr-b-5 fw-700">Your Sales</h6>
                                <p class="text-muted">A general overview of your sales</p>
                                <div id="barMorrisDashboard" style="margin-left:-15px; margin-right:-15px; height: 270px"></div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.user -->
                <!-- Weather and Knob Widget -->
                <div class="row">
                    <!-- Weather Widget -->
                    <div class="col-md-8 col-sm-12 widget-holder">
                        <div class="widget-bg pd-0">
                            <div class="widget-body clearfix">
                                <div class="weather-card-image">
                                    <figure style="background-image: url('<?php echo base_url(); ?>/assets/demo/weather-image/weather-city.jpg')">
                                        <figcaption class="image-name">
                                            <h6 class="text-uppercase mr-l-20 text-white">Weather Forecast</h6><span class="text-white"><i class="wi wi-day-cloudy"></i> 37 <sup>o</sup></span>
                                        </figcaption>
                                    </figure>
                                    <div class="weather-footer d-flex justify-content-center text-center">
                                        <div>
                                            <h6 class="mt-0">Sun</h6><i class="wi wi-day-cloudy text-primary"></i>
                                            <br><span>32<sup>o</sup></span>
                                        </div>
                                        <div>
                                            <h6 class="mt-0">Mon</h6><i class="wi wi-day-cloudy text-danger"></i>
                                            <br><span>40<sup>o</sup></span>
                                        </div>
                                        <div>
                                            <h6 class="mt-0">Tue</h6><i class="wi wi-day-cloudy text-info"></i>
                                            <br><span>25<sup>o</sup></span>
                                        </div>
                                        <div>
                                            <h6 class="mt-0">Wed</h6><i class="wi wi-day-cloudy text-success"></i>
                                            <br><span>37<sup>o</sup></span>
                                        </div>
                                        <div>
                                            <h6 class="mt-0">Thu</h6><i class="wi wi-day-cloudy text-warning"></i>
                                            <br><span>15<sup>o</sup></span>
                                        </div>
                                        <div>
                                            <h6 class="mt-0">Fri</h6><i class="wi wi-day-cloudy"></i>
                                            <br><span>21<sup>o</sup></span>
                                        </div>
                                    </div>
                                    <!-- /.weather-footer -->
                                </div>
                                <!-- /.weather-card-image -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Knob Widget -->
                    <div class="col-md-4 col-sm-6 ml-sm-auto widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="knob-widget text-center">
                                    <header>
                                        <p class="color-success mr-b-0 mr-t-10">Total Budget</p>
                                        <h2 class="mr-t-5 fw-100">&dollar;24,879</h2>
                                    </header>
                                    <hr>
                                    <section>
                                        <input data-plugin="knob" data-width="170" data-height="170" data-linecap="round" data-fgcolor="#51d2b7" value="75" data-skin="tron" data-angleoffset="360" data-readonly="true" data-displayinput="false" data-thickness=".15"> <i class="list-icon fa fa-usd"></i>
                                    </section>
                                    <ul class="list-unstyled list-inline mr-t-20">
                                        <li class="list-inline-item">
                                            <h4 class="mr-t-0">75<small>&#037;</small></h4>
                                            <p class="color-success mr-b-0">Completed</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mr-t-0">25<small>&#037;</small></h4>
                                            <p class="color-danger mr-b-0">Remaining</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <!-- Other Widgets -->
                <div class="row">
                    <!-- Doughnut Widget -->
                    <div class="col-md-4 col-sm-6 ml-sm-auto widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="doughnut-widget">
                                    <div style="height: 220px">
                                        <canvas id="doughnutWidget" height="170"></canvas>
                                    </div>
                                    <section class="text-center">
                                        <h5 class="mr-t-0 mr-b-5 h2">142</h5><small class="text-uppercase">Total<br>Orders</small>
                                    </section>
                                </div>
                                <hr>
                                <div class="doughnut-widget-details">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-circle mr-r-5" style="color: #03a9f3"></i> Processed</li>
                                        <li><i class="fa fa-circle mr-r-5" style="color: #38d57a"></i> Cancel</li>
                                        <li><i class="fa fa-circle mr-r-5" style="color: #ffcc02"></i> Pending</li>
                                        <li><i class="fa fa-circle mr-r-5" style="color: #e6614f"></i> Extra</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Calender -->
                    <div class="col-lg-4 col-md-6 col-sm-12 widget-holder">
                        <div class="widget-bg bg-color-scheme color-white pd-0">
                            <div class="widget-body clearfix">
                                <div class="" data-toggle="clndr">
                                    <script type="text/template" class="template">
                                        <div class="clndr-controls mr-b-20 clearfix">
                                          	                <h5 class="clndr-title float-left mr-tb-0">Time Machine</h5>
                                          	                <div class="float-right">
                                          	                  <div class="clndr-previous-button float-left"><i class="material-icons">chevron_left</i></div>
                                          	                  <div class="clndr-next-button float-right"><i class="material-icons">chevron_right</i></div>
                                          	                </div>
                                          	                <div class="text-right current-month text-uppercase"><%= month.substr(0,3) %> <%= year %></div>
                                          	              </div>
                                          	              <div class="clndr-grid">
                                          	                <div class="days"> <% _.each(days, function(day) { %> <div class="text-center <%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div> <% }); %> </div>
                                          	              </div><!-- /.clndr-grid --> <% if( !_.isEmpty(extras.selectedDay.events) ) { %> <div class="event-listing row">
                                          	                  <div class="col-3 col-sm-3">
                                          	                    <div class="selected-date">
                                          	                      <span class="date"><%= moment(extras.selectedDay.date._d).format("D") %></span>
                                          	                      <span class="color-color-scheme"><%= moment(extras.selectedDay.date._d).format("Do").substr(-2) %></span>
                                          	                    </div><!-- /.selected-date -->
                                          	                  </div><!-- /.col-3 -->
                                          	                  <div class="col-9 col-sm-9"> <% _.each(extras.selectedDay.events, function(event) { %> <div class="event-item">
                                          	                        <span class="event-item-time"><%= moment(event.date).format("kk:mm") %></span>
                                          	                        <span class="event-item-title"><%= event.title %></span>
                                          	                        <span class="event-item-icon color-color-scheme"><i class="material-icons md-18"><%= event.icon%></i></span>
                                          	                      </div> <% }); %> </div><!-- /.col-9 -->
                                          	                </div><!-- /.event-listing --> <% } %>
                                    </script>
                                    <script type="text/json" class="events">
                                        {
                                          								"events" : [
                                          									{
                                          										"date": "2017-09-14T13:00:00+05:30",
                                          										"title": "Friends Golf Meet",
                                          										"icon": "golf_course"
                                          									},
                                          									{
                                          										"date": "2017-09-25T10:00:00+05:30",
                                          										"title": "Alumini Awards",
                                          										"icon": "school"
                                          									},
                                          									{
                                          										"date": "2017-09-25T13:00:00+05:30",
                                          										"title": "Meeting",
                                          										"icon": "business_center"
                                          									},
                                          									{
                                          										"date": "2017-09-04T08:00:00+05:30",
                                          										"title": "Friends Reunion",
                                          										"icon": "face"
                                          									},
                                          									{
                                          										"date": "2017-09-04T21:00:00+05:30",
                                          										"title": "Beach Party",
                                          										"icon": "beach_access"
                                          									},
                                          									{
                                          										"date": "2017-09-13T13:00:00+05:30",
                                          										"title": "Friends Golf Meet",
                                          										"icon": "golf_course"
                                          									},
                                          									{
                                          										"date": "2017-09-26T10:00:00+05:30",
                                          										"title": "Alumini Awards",
                                          										"icon": "school"
                                          									},
                                          									{
                                          										"date": "2017-09-24T10:00:00+05:30",
                                          										"title": "Alumini Awards",
                                          										"icon": "school"
                                          									},
                                          									{
                                          										"date": "2017-09-24T13:00:00+05:30",
                                          										"title": "Meeting",
                                          										"icon": "business_center"
                                          									}
                                          								]
                                          							}
                                    </script>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Weather -->
                    <div class="col-md-4 col-sm-6 widget-holder">
                        <div class="widget-bg pd-0">
                            <div class="widget-body clearfix">
                                <div class="weather-card-image-dark text-inverse" style="background-image: url(<?php echo base_url(); ?>/assets/demo/weather-image/weather-cloud.jpg)"><i class="wi wi-showers"></i>
                                    <div class="weather-caption"><span class="h1 fw-300 sub-heading-font-family"><span class="color-color-scheme">75&deg;</span></span>
                                        <h5 class="mr-t-10">Cloudy Skies<br><small class="opacity-06">Sicklervilte, New Jersey</small></h5>
                                    </div>
                                    <div class="weather-date bg-color-scheme text-inverse text-center"><span>May<br><strong>21</strong></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h3>Chat</h3>
                    <p class="text-muted">You can chat with your family and friends in this space.</p>
                </div>
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Online</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Julein Renvoye">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--online thumb-xs" data-chat-user="Eddie Lebanovkiy">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--away thumb-xs" data-chat-user="Cameron Moll">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--busy thumb-xs" data-chat-user="Trent Walton">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
                <div class="chat-list">
                    <h6 class="sidebar-chat-subtitle">Offline</h6>
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Julien Renvoye">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <span class="name">Julien Renvoye</span>  <span class="username">@jrenvoye</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Eddie Lebaovskiy">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" class="rounded-circle" alt=""> <span class="name">Eddie Lebanovskiy</span>  <span class="username">@elebano</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Cameron Moll">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user3.jpg" class="rounded-circle" alt=""> <span class="name">Cameron Moll</span>  <span class="username">@cammoll</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Bill S Kenny">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user7.jpg" class="rounded-circle" alt=""> <span class="name">Bill S Kenny</span>  <span class="username">@billsk</span> 
                        </a>
                        <a href="javascript:void(0)" class="list-group-item user--offline thumb-xs" data-chat-user="Trent Walton">
                            <img src="<?php echo base_url(); ?>/assets/demo/users/user6.jpg" class="rounded-circle" alt=""> <span class="name">Trent Walton</span>  <span class="username">@trentwalton</span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <button type="button" class="minimize" aria-label="Minimize"><span aria-hidden="true"><i class="material-icons">expand_more</i></span>
                    </button> <span class="user-name">John Doe</span>
                </div>
                <!-- /.card-header -->
                <div class="card-block custom-scroll">
                    <div class="messages custom-scroll-content scrollbar-enabled">
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="<?php echo base_url(); ?>/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Lorem ipsum dolor sit amet?</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Etiam rhoncus. Maecenas tempus, tellus eget condi mentum rhoncus</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="<?php echo base_url(); ?>/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <img src="<?php echo base_url(); ?>/assets/demo/chat-message.jpg" alt=""> <small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="current-user-message">
                            <img class="user-image" width="30" height="30" src="<?php echo base_url(); ?>/assets/demo/users/user1.jpg" alt="">
                            <div class="message">
                                <p>Maecenas nec odio et ante tincidunt tempus.</p><small>10:00 am</small>
                            </div>
                            <!-- .,message -->
                        </div>
                        <!-- /.current-user-message -->
                        <div class="other-user-message">
                            <img class="user-image" width="30" height="30" src="<?php echo base_url(); ?>/assets/demo/users/user2.jpg" alt="">
                            <div class="message">
                                <p>Donec sodales :)</p><small>10:00 am</small>
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.other-user-message -->
                    </div>
                    <!-- /.messages -->
                    <form action="javascript:void(0)" method="post">
                        <textarea name="message" style="resize: none" placeholder="Type message and hit enter"></textarea>
                        <ul class="list-unstyled list-inline chat-extra-buttons">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">insert_emoticon</i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="material-icons">attach_file</i></a>
                            </li>
                        </ul>
                        <button class="btn btn-color-scheme btn-circle submit-btn" type="submit"><i class="material-icons">send</i>
                        </button>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center clearfix">2017 © Oscar Admin brought to you by UnifatoThemes</footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.77/jquery.form-validator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/charts/utils.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/charts/excanvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/1.1.1/mithril.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/theme-widgets/widgets.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clndr/1.4.7/clndr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>