<?php
	// Initialize the session
    session_start();
    if(isset($_SESSION['email']) AND !empty($_SESSION['email'])){
        //'Proceed 
    }else{
        header('Location:../patients-sign-in.php');
    }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:24:35 GMT -->
<head>
	<meta charset="utf-8" />
	<title>GLOBAL-MED | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon"><i class="ion-ios-world"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p>3,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-gradient-aqua">
						<div class="stats-icon"><i class="ion-ios-upload"></i></div>
						<div class="stats-info">
							<h4>BOUNCE RATE</h4>
							<p>20.44%</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-gradient-purple">
						<div class="stats-icon"><i class="ion-ios-pie"></i></div>
						<div class="stats-info">
							<h4>UNIQUE VISITORS</h4>
							<p>1,291,922</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-gradient-orange">
						<div class="stats-icon"><i class="ion-ios-clock"></i></div>
						<div class="stats-info">
							<h4>AVG TIME ON SITE</h4>
							<p>00:12:23</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-md-8">
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Website Analytics (Last 7 Days)</h4>
						</div>
						<div class="panel-body">
							<div id="interactive-chart" class="height-sm"></div>
						</div>
					</div>
					
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
						<li class="active"><a href="#latest-post" data-toggle="tab"><i class="ion-ios-photos-outline f-s-16 m-r-5"></i> <span class="hidden-xs">Latest Post</span></a></li>
						<li class=""><a href="#purchase" data-toggle="tab"><i class="ion-ios-cart f-s-16 m-r-5"></i> <span class="hidden-xs">Purchase</span></a></li>
						<li class=""><a href="#email" data-toggle="tab"><i class="ion-ios-recording f-s-16 m-r-5"></i> <span class="hidden-xs">Email</span></a></li>
					</ul>
					<div class="tab-content" data-sortable-id="index-3">
						<div class="tab-pane fade active in" id="latest-post">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider">
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="assets/img/gallery/gallery-1.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus, adipiscing nec lacinia at, ornare ac eros.</h4>
											Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="assets/img/gallery/gallery-10.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.</h4>
											Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis, placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="assets/img/gallery/gallery-7.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h4>
											Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="assets/img/gallery/gallery-8.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h4>
											Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-pane fade" id="purchase">
							<div class="height-sm" data-scrollbar="true">
								<table class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th class="hidden-sm">Product</th>
											<th>Amount</th>
											<th>User</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="assets/img/product/product-1.png" alt=""  />
												</a>
											</td>
											<td>
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$349.00</td>
											<td><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="assets/img/product/product-2.png" alt="" />
												</a>
											</td>
											<td>
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$399.00</td>
											<td><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="assets/img/product/product-3.png" alt="" />
												</a>
											</td>
											<td>
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$499.00</td>
											<td><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="assets/img/product/product-4.png" alt="" />
												</a>
											</td>
											<td>
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$230.00</td>
											<td><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-tablet hidden-phone">
												<a href="javascript:;">
													<img src="assets/img/product/product-5.png" alt="" />
												</a>
											</td>
											<td>
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$500.00</td>
											<td><a href="javascript:;">Derick Wong</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="email">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider">
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-1.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
											<p class="m-b-5">
												Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-2.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h4></a>
											<p class="m-b-5">
												Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-3.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h4></a>
											<p class="m-b-5">
												Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-4.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h4></a>
											<p class="m-b-5">
												Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="panel panel-inverse" data-sortable-id="index-4">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Quick Post</h4>
                        </div>
                        <div class="panel-toolbar">
                            <div class="btn-group m-r-5">
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-bold"></i></a>
								<a class="btn btn-white active" href="javascript:;"><i class="fa fa-italic"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-underline"></i></a>
							</div>
                            <div class="btn-group">
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-left"></i></a>
								<a class="btn btn-white active" href="javascript:;"><i class="fa fa-align-center"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-right"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-justify"></i></a>
							</div>
                        </div>
                        <textarea class="form-control no-rounded-corner bg-silver" rows="14">Enter some comment.</textarea>
                        <div class="panel-footer text-right">
                            <a href="javascript:;" class="btn btn-white btn-sm">Cancel</a>
                            <a href="javascript:;" class="btn btn-primary btn-sm m-l-5">Action</a>
                        </div>
                    </div>
                    
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Message</h4>
						</div>
						<div class="panel-body">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider media-messaging">
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-5.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">John Doe</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nunc non eros fermentum vestibulum ut id felis. Nunc molestie libero eget urna aliquet, vitae laoreet felis ultricies. Fusce sit amet massa malesuada, tincidunt augue vitae, gravida felis.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-6.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">Terry Ng</h5>
											<p>Sed in ante vel ipsum tristique euismod posuere eget nulla. Quisque ante sem, scelerisque iaculis interdum quis, eleifend id mi. Fusce congue leo nec mauris malesuada, id scelerisque sapien ultricies.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-8.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">Fiona Log</h5>
											<p>Pellentesque dictum in tortor ac blandit. Nulla rutrum eu leo vulputate ornare. Nulla a semper mi, ac lacinia sapien. Sed volutpat ornare eros, vel semper sem sagittis in. Quisque risus ipsum, iaculis quis cursus eu, tristique sed nulla.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="assets/img/user-7.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">John Doe</h5>
											<p>Morbi molestie lorem quis accumsan elementum. Morbi condimentum nisl iaculis, laoreet risus sed, porta neque. Proin mi leo, dapibus at ligula a, aliquam consectetur metus.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="panel-footer">
							<form>
								<div class="input-group">
									<input type="text" class="form-control bg-silver" placeholder="Enter message" />
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
									</span>
								</div>
							</form>
                        </div>
					</div>
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-md-4">
					<div class="panel panel-inverse" data-sortable-id="index-6">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Analytics Details</h4>
						</div>
						<div class="panel-body p-t-0">
							<table class="table table-valign-middle m-b-0">
								<thead>
									<tr>	
										<th>Source</th>
										<th>Total</th>
										<th>Trend</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><label class="label label-danger">Unique Visitor</label></td>
										<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
										<td><div id="sparkline-unique-visitor"></div></td>
									</tr>
									<tr>
										<td><label class="label label-warning">Bounce Rate</label></td>
										<td>28.2%</td>
										<td><div id="sparkline-bounce-rate"></div></td>
									</tr>
									<tr>
										<td><label class="label label-success">Total Page Views</label></td>
										<td>1,230,030</td>
										<td><div id="sparkline-total-page-views"></div></td>
									</tr>
									<tr>
										<td><label class="label label-primary">Avg Time On Site</label></td>
										<td>00:03:45</td>
										<td><div id="sparkline-avg-time-on-site"></div></td>
									</tr>
									<tr>
										<td><label class="label label-default">% New Visits</label></td>
										<td>40.5%</td>
										<td><div id="sparkline-new-visits"></div></td>
									</tr>
									<tr>
										<td><label class="label label-inverse">Return Visitors</label></td>
										<td>73.4%</td>
										<td><div id="sparkline-return-visitors"></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="panel panel-inverse" data-sortable-id="index-7">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Visitors User Agent</h4>
						</div>
						<div class="panel-body">
							<div id="donut-chart" class="height-sm"></div>
						</div>
					</div>
					
					<div class="panel panel-inverse" data-sortable-id="index-8">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Todo List</h4>
						</div>
						<div class="panel-body p-0">
							<ul class="todolist">
								<li class="active">
									<a href="javascript:;" class="todolist-container active" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Duis a ullamcorper massa.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Phasellus bibendum, odio nec vestibulum ullamcorper.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Duis pharetra mi sit amet dictum congue.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Duis pharetra mi sit amet dictum congue.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Phasellus bibendum, odio nec vestibulum ullamcorper.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container active" data-click="todolist">
										<div class="todolist-input"><i class="ion-android-checkbox-blank"></i></div>
										<div class="todolist-title">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="panel panel-inverse" data-sortable-id="index-9">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">World Visitors</h4>
						</div>
						<div class="panel-body p-0">
							<div id="world-map" class="height-sm width-full"></div>
						</div>
					</div>
					
					<div class="panel panel-inverse" data-sortable-id="index-10">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Calendar</h4>
						</div>
						<div class="panel-body">
							<div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
						</div>
					</div>
				</div>
				<!-- end col-4 -->
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
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/dashboard.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
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

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:27:59 GMT -->
</html>
