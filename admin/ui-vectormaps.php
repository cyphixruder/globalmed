
<!DOCTYPE html>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/ultra-admin-html/ui-vectormaps.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:04:15 GMT -->
<head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.0
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin : Vector Maps</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
       <?php    require_once('topbar') ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="ui-profile.html">
                                <img src="data/profile/profile.png" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="ui-profile.html">Jason Bourne</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Web Developer</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class=""> 
                            <a href="index-2.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="widgets.html">
                                <i class="fa fa-th"></i>
                                <span class="title">Widgets</span><span class="label label-orange nosubmenu">HOT</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">UI Elements</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a class="" href="ui-accordion.html">Tabs & Accordions</a>
                                </li>
                                <li>
                                    <a class="" href="ui-progress.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a class="" href="ui-icons.html">Icons</a>
                                </li>
                                <li>
                                    <a class="" href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a class="" href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a class="" href="ui-notifications.html">Alert & Notifications</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tooltips.html">Tooltips & Popovers</a>
                                </li>
                                <li>
                                    <a class="" href="ui-sortable.html">Sortable Group</a>
                                </li>
                                <li>
                                    <a class="" href="ui-navbars.html">Navbars & Dropdowns</a>
                                </li>
                                <li>
                                    <a class="" href="ui-extra.html">Other Elements</a>
                                </li>
                                <li>
                                    <a class="" href="ui-carousel.html">Carousel Slider</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tree.html">Tree</a>
                                </li>
                                <li>
                                    <a class="" href="ui-panels.html">Draggable Panels</a>
                                </li>
                                <li>
                                    <a class="" href="ui-grids.html">Grids</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tiles.html">Tile Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-sliders"></i>
                                <span class="title">Forms</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a class="" href="form-components.html">Form Components</a>
                                </li>
                                <li>
                                    <a class="" href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a class="" href="form-validation.html">Form Validations</a>
                                </li>
                                <li>
                                    <a class="" href="form-fileupload.html">File Upload & Dropzone</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors.html">Editors</a>
                                </li>
                                <li>
                                    <a class="" href="form-masks.html">Input Masks</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-gift"></i>
                                <span class="title">Extra</span>
                                <span class="arrow "></span><span class="label label-orange">NEW</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a class="" href="ui-pricing.html">Pricing tables</a>
                                </li>
                                <li>
                                    <a class="" href="ui-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a class="" href="ui-login.html">Login</a>
                                </li>
                                <li>
                                    <a class="" href="ui-register.html">Registration</a>
                                </li>
                                <li>
                                    <a class="" href="ui-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="ui-members.html">Members</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a class="" href="ui-search.html">Search</a>
                                </li>
                                <li>
                                    <a class="" href="ui-blogs.html">Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-imagecrop.html">Image cropper</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tocify.html">Tocify</a>
                                </li>
                                <li>
                                    <a class="" href="ui-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a class="" href="ui-404.html">404</a>
                                </li>
                                <li>
                                    <a class="" href="ui-500.html">500</a>
                                </li>
                                <li>
                                    <a class="" href="ui-lockscreen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Mailbox</span>
                                <span class="arrow "></span><span class="label label-orange">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mail-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="mail-compose.html">Compose</a>
                                </li>
                                <li>
                                    <a class="" href="mail-view.html">View</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs.html">Chart JS</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline.html">Sparkline Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-easypiechart.html">PIE charts & Knobs</a>
                                </li>
                                <li>
                                    <a class="" href="charts-rickshaw.html">Rickshaw Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Tables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-basic.html">Basic tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data.html">Data Tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-responsive.html">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-columns"></i>
                                <span class="title">Layouts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="layout-default.html">Default Layout</a>
                                </li>
                                <li>
                                    <a class="" href="layout-collapsed.html">Collapsed Menu</a>
                                </li>
                                <li>
                                    <a class="" href="layout-chat.html">Chat Open</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed.html">Boxed Layout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open"> 
                            <a href="javascript:;">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Maps</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style='display:block;'>
                                <li>
                                    <a class="active" href="ui-vectormaps.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemaps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                                </li>
                            </ul>
                        </li>

                        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> <span class="title">Level 1.1</span> </a> </li>
                                <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                                    <ul class="sub-menu">
                                        <li > <a href="javascript:;"> <span class="title">Level 2.1</span> </a></li>
                                        <li > <a href="ujavascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a> 
                                            <ul class="sub-menu">
                                                <li > <a href="javascript:;"> <span class="title">Level 3.1</span> <span class="arrow "></span></a> 
                                                    <ul class="sub-menu">
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.1</span> </a> </li>
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.2</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li > <a href="ujavascript:;"> <span class="title">Level 3.2</span> </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New&nbsp;Orders</span>
                            <span class='total'>2,345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Visitors</span>
                            <span class='total'>345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Vector Maps</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index-2.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-vectormaps.html">Maps</a>
                                    </li>
                                    <li class="active">
                                        <strong>Vector Maps</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Vector Map</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <figure>
                                            <div id="world-map-markers" style="width: 100%; height: 400px"></div>    	
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </section></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Countries and Cities</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">




                                        <div class="tabs-vertical-env">
                                            <ul class="nav nav-tabs vertical col-lg-3 col-md-3 col-sm-3 col-xs-3 left-aligned " style="max-height:550px;overflow:auto;">

                                                <li class="active"><a href="#v-europe_mill_en" data-toggle="tab" aria-expanded="true">Europe</a></li>
                                                <li class=""><a href="#v-in_mill_en" data-toggle="tab" aria-expanded="false">India</a></li>
                                                <li class=""><a href="#v-us_aea_en" data-toggle="tab" aria-expanded="false">USA</a></li>
                                                <li class=""><a href="#v-pt_mill_en" data-toggle="tab" aria-expanded="false">Portugal</a></li>
                                                <li class=""><a href="#v-cn_mill_en" data-toggle="tab" aria-expanded="false">China</a></li>
                                                <li class=""><a href="#v-nz_mill_en" data-toggle="tab" aria-expanded="false">New Zealand</a></li>
                                                <li class=""><a href="#v-no_mill_en" data-toggle="tab" aria-expanded="false">Norway</a></li>
                                                <li class=""><a href="#v-es_mill_en" data-toggle="tab" aria-expanded="false">Spain</a></li>
                                                <li class=""><a href="#v-au_mill_en" data-toggle="tab" aria-expanded="false">Australia</a></li>
                                                <li class=""><a href="#v-fr_regions_mill_en" data-toggle="tab" aria-expanded="false">France - Regions</a></li>
                                                <li class=""><a href="#v-th_mill_en" data-toggle="tab" aria-expanded="false">Thailand</a></li>
                                                <li class=""><a href="#v-co_mill_en" data-toggle="tab" aria-expanded="false">Colombia</a></li>
                                                <li class=""><a href="#v-be_mill_en" data-toggle="tab" aria-expanded="false">Belgium</a></li>
                                                <li class=""><a href="#v-ar_mill_en" data-toggle="tab" aria-expanded="false">Argentina</a></li>
                                                <li class=""><a href="#v-ve_mill_en" data-toggle="tab" aria-expanded="false">Venezuela</a></li>
                                                <li class=""><a href="#v-it_mill_en" data-toggle="tab" aria-expanded="false">Italy</a></li>
                                                <li class=""><a href="#v-dk_mill_en" data-toggle="tab" aria-expanded="false">Denmark</a></li>
                                                <li class=""><a href="#v-at_mill_en" data-toggle="tab" aria-expanded="false">Austria</a></li>
                                                <li class=""><a href="#v-ca_lcc_en" data-toggle="tab" aria-expanded="false">Canada</a></li>
                                                <li class=""><a href="#v-nl_mill_en" data-toggle="tab" aria-expanded="false">Netherlands</a></li>
                                                <li class=""><a href="#v-se_mill_en" data-toggle="tab" aria-expanded="false">Sweden</a></li>
                                                <li class=""><a href="#v-pl_mill_en" data-toggle="tab" aria-expanded="false">Poland</a></li>
                                                <li class=""><a href="#v-de_mill_en" data-toggle="tab" aria-expanded="false">Germany</a></li>
                                                <li class=""><a href="#v-fr_mill_en" data-toggle="tab" aria-expanded="false">France - Departments</a></li>
                                                <li class=""><a href="#v-za_mill_en" data-toggle="tab" aria-expanded="false">South Africa</a></li>
                                                <li class=""><a href="#v-ch_mill_en" data-toggle="tab" aria-expanded="false">Switzerland</a></li>
                                                <li class=""><a href="#v-us-ny-newyork_mill_en" data-toggle="tab" aria-expanded="false">New York City</a></li>
                                                <li class=""><a href="#v-us-il-chicago_mill_en" data-toggle="tab" aria-expanded="false">Chicago</a></li>

                                            </ul>
                                            <div class="tab-content vertical col-lg-9 col-md-9 col-sm-9 col-xs-9 left-aligned">
                                                <div class="tab-pane fade in active" id="v-europe_mill_en"><figure><div id="europe_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-in_mill_en"><figure><div id="in_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-us_aea_en"><figure><div id="us_aea_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-pt_mill_en"><figure><div id="pt_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-cn_mill_en"><figure><div id="cn_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-nz_mill_en"><figure><div id="nz_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-no_mill_en"><figure><div id="no_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-es_mill_en"><figure><div id="es_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-au_mill_en"><figure><div id="au_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-fr_regions_mill_en"><figure><div id="fr_regions_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-th_mill_en"><figure><div id="th_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-co_mill_en"><figure><div id="co_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-be_mill_en"><figure><div id="be_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-ar_mill_en"><figure><div id="ar_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-ve_mill_en"><figure><div id="ve_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-it_mill_en"><figure><div id="it_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-dk_mill_en"><figure><div id="dk_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-at_mill_en"><figure><div id="at_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-ca_lcc_en"><figure><div id="ca_lcc_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-nl_mill_en"><figure><div id="nl_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-se_mill_en"><figure><div id="se_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-pl_mill_en"><figure><div id="pl_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-de_mill_en"><figure><div id="de_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-fr_mill_en"><figure><div id="fr_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-za_mill_en"><figure><div id="za_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-ch_mill_en"><figure><div id="ch_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-us-ny-newyork_mill_en"><figure><div id="us-ny-newyork_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                                <div class="tab-pane fade " id="v-us-il-chicago_mill_en"><figure><div id="us-il-chicago_mill_en-map" style="width: 100%; height:500px;"></div></figure></div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-ar-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-at-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-be-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-ch-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-cn-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-co-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-de-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-dk-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-es-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-fr-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-fr_regions-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-in-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-it-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-nl-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-no-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-nz-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-pl-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-pt-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-se-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-th-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-us-ny-newyork-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-ve-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-za-mill-en.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/ui-vectormaps.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:05:41 GMT -->
</html>





