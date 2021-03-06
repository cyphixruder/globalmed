<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/email_compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:29:31 GMT -->
<head>
	
	<?php	include_once "headlinks.php" ?>
	
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<?php	include_once "header.php" ?>
		
		<?php	include_once "sidebar.php" ?>
		
		<!-- begin #content -->
		<div id="content" class="content content-full-width">
		    <!-- begin vertical-box -->
		    <div class="vertical-box">
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column width-250">
		            <!-- begin wrapper -->
                    <div class="wrapper bg-silver text-center">
                        <a href="email_compose.php" class="btn btn-success p-l-40 p-r-40 btn-sm">
                            Compose
                        </a>
                    </div>
		            <!-- end wrapper -->
		            <!-- begin wrapper -->
                    <div class="wrapper">
                        <p><b>FOLDERS</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li><a href="email_inbox_v2.html"><i class="ion-email m-r-5"></i> Inbox <span class="badge pull-right">52</span></a></li>
                            <li><a href="email_inbox_v2.html"><i class="ion-flag m-r-5"></i> Important</a></li>
                            <li><a href="email_inbox_v2.html"><i class="ion-paper-airplane m-r-5"></i> Sent</a></li>
                            <li><a href="email_inbox_v2.html"><i class="ion-edit m-r-5"></i> Drafts</a></li>
                            <li><a href="email_inbox_v2.html"><i class="ion-trash-b m-r-5"></i> Trash</a></li>
                        </ul>
                        <p><b>LABEL</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm m-b-0">
                            <li><a href="javascript:;"><i class="ion-record f-s-10 m-r-5 text-inverse"></i> Admin</a></li>
                            <li><a href="javascript:;"><i class="ion-record f-s-10 m-r-5 fa-circle text-primary"></i> Designer & Employer</a></li>
                            <li><a href="javascript:;"><i class="ion-record f-s-10 m-r-5 fa-circle text-success"></i> Staff</a></li>
                            <li><a href="javascript:;"><i class="ion-record f-s-10 m-r-5 fa-circle text-warning"></i> Sponsorer</a></li>
                            <li><a href="javascript:;"><i class="ion-record f-s-10 m-r-5 fa-circle text-danger"></i> Client</a></li>
                        </ul>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column">
		            <!-- begin wrapper -->
                    <div class="wrapper bg-silver-lighter">
		                <!-- begin btn-toolbar -->
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a href="inbox_v2.html" class="btn btn-white btn-sm p-l-20 p-r-20"><i class="ion-ios-folder"></i></a>
                                <a href="inbox_v2.html" class="btn btn-white btn-sm p-l-20 p-r-20"><i class="ion-trash-b"></i></a>
                            </div>
                        </div>
		                <!-- end btn-toolbar -->
                    </div>
		            <!-- end wrapper -->
		            <!-- begin wrapper -->
                    <div class="wrapper">
                        <div class="p-30 bg-white">
                            <!-- begin email form -->
                            <form action="http://seantheme.com/" method="POST" name="email_to_form">
                                <!-- begin email to -->
                                <label class="control-label">To:</label>
                                <div class="m-b-15">
                                    <ul id="email-to" class="inverse">
                                        <li>bootstrap@gmail.com</li>
                                        <li>google@gmail.com</li>
                                    </ul>
                                </div>
                                <!-- end email to -->
                                <!-- begin email subject -->
                                <label class="control-label">Subject:</label>
                                <div class="m-b-15">
                                    <input type="text" class="form-control" />
                                </div>
                                <!-- end email subject -->
                                <!-- begin email content -->
                                <label class="control-label">Content:</label>
                                <div class="m-b-15">
                                    <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"></textarea>
                                </div>
                                <!-- end email content -->
                                <button type="submit" class="btn btn-primary p-l-40 p-r-40">Send</button>
                            </form>
                            <!-- end email form -->
                        </div>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		    </div>
		    <!-- end vertical-box -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="ion-ios-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="green" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="ion-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<script src="assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="assets/js/email-compose.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			EmailCompose.init();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/email_compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:29:35 GMT -->
</html>
