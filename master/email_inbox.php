<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:29:29 GMT -->
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
			<div class="p-20">
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			        <form>
			            <div class="input-group m-b-15">
                            <input type="text" class="form-control input-sm input-white" placeholder="Search Mail" />
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-primary" type="button"><i class="ion-ios-search-strong"></i></button>
                            </span>
                        </div>
			        </form>
			        <div class="hidden-sm hidden-xs">
                        <h5 class="m-t-20">Email</h5>
                        <ul class="nav nav-pills nav-stacked nav-inbox">
                            <li class="active">
                                <a href="#">
                                    <i class="ion-email fa-fw m-r-5"></i> Inbox (10)
                                </a>
                            </li>
                            <li><a href="#"><i class="ion-paper-airplane fa-fw m-r-5"></i> Sent</a></li>
                            <li><a href="#"><i class="ion-edit fa-fw m-r-5"></i> Draft</a></li>
                            <li><a href="#"><i class="ion-trash-b fa-fw m-r-5"></i> Trash</a></li>
                            <li><a href="#"><i class="ion-archive fa-fw m-r-5"></i> Archive</a></li>
                            <li><a href="email_compose.php"><i class="ion-ios-compose fa-fw m-r-5"></i> Compose</a></li>
                        </ul>
                    </div>
                </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-10">
                    <div class="email-btn-row hidden-xs">
                        <a href="email_compose.php" class="btn btn-sm btn-inverse"><i class="ion-plus m-r-5"></i> New</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Reply</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Delete</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Archive</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Junk</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Swwep</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Move to</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Categories</a>
                    </div>
			        <div class="email-content">
                        <table class="table table-email">
                            <thead>
                                <tr>
                                    <th class="email-select"><a href="#" data-click="email-select-all"><i class="ion-android-checkbox-blank"></i></a></th>
                                    <th colspan="2">
                                        <div class="dropdown">
                                            <a href="#" class="email-header-link" data-toggle="dropdown">View All <i class="fa fa-angle-down m-l-5"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="#">All</a></li>
                                                <li><a href="#">Unread</a></li>
                                                <li><a href="#">Contacts</a></li>
                                                <li><a href="#">Groups</a></li>
                                                <li><a href="#">Newsletters</a></li>
                                                <li><a href="#">Social updates</a></li>
                                                <li><a href="#">Everything else</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                    <th class="text-nowrap">
                                        <div class="dropdown">
                                            <a href="#" class="email-header-link" data-toggle="dropdown">Arrange by <i class="fa fa-angle-down m-l-5"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="#">Date</a></li>
                                                <li><a href="#">From</a></li>
                                                <li><a href="#">Subject</a></li>
                                                <li><a href="#">Size</a></li>
                                                <li><a href="#">Conversation</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Maecenas ultrices interdum leo, eu aliquam diam mattis sed.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Stefie Chin
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Etiam pretium neque vitae vulputate fermentum.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Alan Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Duis et justo in nisl tristique lobortis id at ligula.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Yu Ming Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Harvinder Signh
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Aliquam diam risus, condimentum ut diam in, fermentum euismod sem.
                                    </td>
                                    <td class="email-date">12/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Fiona Loh
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Praesent dapibus ultricies magna, ac laoreet ante pellentesque nec. 
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Derrick Tew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Nullam eget nibh et dui vestibulum aliquam vitae a lacus.
                                    </td>
                                    <td class="email-date">10/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Terry Dew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Nulla eget placerat ante, sed hendrerit felis. Praesent vitae convallis erat.
                                    </td>
                                    <td class="email-date">09/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        John Doe
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">08/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Stefie Chin
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Etiam pretium neque vitae vulputate fermentum.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Alan Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Duis et justo in nisl tristique lobortis id at ligula.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Yu Ming Tan
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Fiona Loh
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Praesent dapibus ultricies magna, ac laoreet ante pellentesque nec. 
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Derrick Tew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Nullam eget nibh et dui vestibulum aliquam vitae a lacus.
                                    </td>
                                    <td class="email-date">10/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Terry Dew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Nulla eget placerat ante, sed hendrerit felis. Praesent vitae convallis erat.
                                    </td>
                                    <td class="email-date">09/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        John Doe
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Sed dapibus nec velit eget pulvinar. Etiam id erat in eros imperdiet tempus.
                                    </td>
                                    <td class="email-date">08/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Leap Motion
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Ut tristique dapibus nibh, sed scelerisque magna vehicula a.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                                <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><i class="ion-android-checkbox-blank"></i></a></td>
                                    <td class="email-sender">
                                        Stefie Chin
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="ion-folder f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="ion-trash-b f-s-18"></i></a>
                                        <a href="#" class="email-btn" data-click="email-highlight"><i class="ion-ios-flag f-s-18"></i></a> 
                                        Etiam pretium neque vitae vulputate fermentum.
                                    </td>
                                    <td class="email-date">11/4/2014</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="email-footer clearfix">
                            737 messages
                            <ul class="pagination pagination-sm m-t-0 m-b-0 pull-right">
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
			        </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
			</div>
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
	<script src="assets/js/inbox.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Inbox.init();
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

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/email_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2017 12:29:30 GMT -->
</html>
