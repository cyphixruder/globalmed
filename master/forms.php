<?php   
        //
        //die($_SESSION['firstname']);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_wizards_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:32:41 GMT -->
<head>
	
	<?php	include_once "headlinks.php" ?>
	<style>
        .first{
           margin: 3px 0px 20px;
           padding: 0px 50px;
       }
       .first h3{
           text-align: center;
           color: #acacac;
           font-size: 40px;
           font-weight: 400;
       }
       .first .second{
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
       }
       .first .second .form-element input{
           display: none;
       }
       .first .second .form-element .emp{
           object-fit: cover;
       }
       .lit{
          font-size: xx-large;
          position: absolute;
          margin-top: 200px;
          color: white;
          background: #3d3d29;
          text-align: center;
          background: rgba(0, 0, 0, 0.7);
          width: 250px;
          cursor: pointer;
          height: 7vh;
       }
       .emp{
        box-shadow: 0px 0px 20px 5px rgba(100, 100, 100, 0.3);
       }
       .form-control{
           height: 5vh;
       }
       .btn-success{
           width: 120px;
           height: 5vh;
           font-size: 20px;
           margin-top: 70px;
       }
    </style>
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
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Profile</a></li>
				<li class="active">Identification</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Wizards + Validation <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Form Wizards</h4>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" name="form-wizard">
								<div id="wizard">
									<ol>
										<li class="col-sm-3">
										    Identification 
										</li>
										<li class="col-sm-3">
										    Contact Information
										</li>
										<li class="col-sm-3">
										    Medical Information
										</li>
										<li class="col-sm-3">
										    Display
										</li>
									</ol>
									<!-- begin wizard step-1 -->
									<div class="wizard-step-1">
                                        <fieldset>
                                            <legend class="pull-left width-full">Identification</legend>
                                            <!-- begin row -->
                                            <div class="row" style="margin: 0 70px;">
                                                <!-- begin col-4 -->
                                                <div class="col-md-6">
													<div class="form-group block1">
														<label>First Name</label>
														<input type="text" name="firstname" placeholder="First Name" class="form-control" value="<?php    echo $_SESSION['firstname'] ?>" disabled>
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lastname" placeholder="Last Name" class="form-control" data-parsley-group="wizard-step-1" value="<?php    echo $_SESSION['lastname'] ?>" disabled>
													</div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" placeholder="email" class="form-control" data-parsley-group="wizard-step-1" value="<?php    echo $_SESSION['email'] ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Gender</label>
                                                    <select class="form-control form-control-lg" aria-label=".form-select-lg example">
                                                        <option selected>Select your gender</option>
                                                        <option value="m">Male</option>
                                                        <option value="f">Female</option>
                                                        <option value="i">I don't know</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                <input type="text" name="phone" placeholder="Phone number" class="form-control" data-parsley-group="">
                                                </div> -->
                                                <!-- end col-4 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									<!-- begin wizard step-2 -->
									<div class="wizard-step-2">
										<fieldset>
											<legend class="pull-left width-full">Contact Information</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"/>
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Email Address</label>
														<input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email"/>
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div class="wizard-step-3">
										<fieldset>
											<legend class="pull-left width-full">Login</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="wizard-step-3"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                                
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
									</div>
									<!-- end wizard step-3 -->
									<!-- begin wizard step-4 -->
                                    <div class="container burst" style="height: 50vh; text-align: center;">
                                        <div class="first">
                                            <h3>Profile Picture Upload</h3>
                                                <div class="second">
                                                    <div class="form-element mb-3">
                                                        <input class="form-control" type="file" onchange="displayImage(this)" id="profileImage">
                                                        <label for="file-1" id="file-1-preview"></label>
                                                        <img src="assets/img/images.png" alt="" id="profileDisplay" class="emp" width="250em;">
                                                    </div>
                                                        <span onclick="triggerClick()" class="lit">+</span>
                                                </div>
                                        </div>
                                        <button class="btn btn-success" type="submit">Finish</button>
                                    </div>
									<!-- end wizard step-4 -->
								</div>
							</form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
          
		
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
	<script src="assets/plugins/parsley/dist/parsley.js"></script>
	<script src="assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== BEGIN TELEPHONE JS ================== -->
         <script src="build/js/intlTelInput.js"></script>
    <!-- ================== END TELEPHONE JS ================== -->
	<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {

      utilsScript: "build/js/utils.js",
    });
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});

        function triggerClick() {
        document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
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

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_wizards_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:32:42 GMT -->
</html>
