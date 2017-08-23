<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
		
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('search/assets/images/favicon.png')}}">
        <!-- App title -->
		<title>Prathigna.com</title>
		
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery.steps/css/jquery.steps.css')}}" />
		
        <!-- App css -->
        <link href="{{asset('search/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('search/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('plugins/switchery/switchery.min.css')}}">
		
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
        <script src="{{asset('search/assets/js/modernizr.min.js')}}"></script>
		
		<!-- Plugins css-->
        <link href="{{asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
		
		
		
		<!-- -->
        <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
		
		<style>
		#active-register
		{
		padding-left:0px; 
		background-color:#7fc1fc; 
		padding-bottom:20px; 
		padding-top:20px;
		}
		#register
		{
		padding-left:0px; 
		background-color:#e0e1e2; 
		padding-bottom:20px; 
		padding-top:20px;
		border-bottom: 1px solid#8e8989;
		}
		
		
		</style>
		
		
	</head>
	
	
    <body class="fixed-left">
		
        <!-- Begin page -->
        <div id="wrapper">
			
            <!-- Top Bar Start -->
            <div class="topbar">
				
                <!-- LOGO -->
                <div class="topbar-left">
                    
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{asset('search/assets/images/logo.png')}}" alt="" height="60">
						</span>
                        <i>
                            <img src="{{asset('search/assets/images/favicon.png')}}" alt="" height="40">
						</i>
					</a>
				</div>
				
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
						
                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
								</button>
							</li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
									class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
								</form>
							</li>
                            <li class="hidden-xs">
                                <a href="#" class="menu-item">New</a>
							</li>
                            <li class="dropdown hidden-xs">
                                <a data-toggle="dropdown" class="dropdown-toggle menu-item" href="#" aria-expanded="false">English
								<span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
								</ul>
							</li>
						</ul>
						
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success">4</span>
								</a>
								
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
											</div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
											</div>
										</a>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
											</div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
											</div>
										</a>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
											</div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
											</div>
										</a>
									</li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
									</li>
								</ul>
							</li>
							
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-email"></i>
                                    <span class="badge up bg-danger">8</span>
								</a>
								
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Messages</h5>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="{{asset('search/assets/images/users/avatar-2.jpg')}}" alt="">
											</div>
                                            <div class="user-desc">
                                                <span class="name">Patricia Beach</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
											</div>
										</a>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="{{asset('search/assets/images/users/avatar-3.jpg')}}" alt="">
											</div>
                                            <div class="user-desc">
                                                <span class="name">Connie Lucas</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
											</div>
										</a>
									</li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="{{asset('search/assets/images/users/avatar-4.jpg')}}" alt="">
											</div>
                                            <div class="user-desc">
                                                <span class="name">Margaret Becker</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
											</div>
										</a>
									</li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Messages</a></p>
									</li>
								</ul>
							</li>
							
                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                    <i class="mdi mdi-settings"></i>
								</a>
							</li>
							
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('search/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
								</a>
								
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, John</h5>
									</li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
								</ul>
							</li>
							
						</ul> <!-- end navbar-right -->
						
					</div><!-- end container -->
				</div><!-- end navbar -->
			</div>
            <!-- Top Bar End -->
			
			
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
					
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>
							
                            
							
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-search"></i><span> Search </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="admin-sweet-alert.html">General Search</a></li>
                                    <li><a href="admin-widgets.html">Advanced Search</a></li>
                                    <li><a href="admin-nestable.html">Boolean Search</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
					
                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
					<p class="">Email: <br/> <span class="text-custom">support@support.com</span></p>
					<p class="m-b-0">Call: <br/> <span class="text-custom">(+123) 123 456 789</span></p>
					</div>
					
				</div>
                <!-- Sidebar -left -->
				
			</div>
            <!-- Left Sidebar End -->
             <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                	@yield('content')
                </div>
            </div>
        </div>
		<!-- END wrapper -->
		
		
		
		<script>
			var resizefunc = [];
		</script>
		
		<!-- jQuery  -->
		<script src="{{asset('search/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('search/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('search/assets/js/detect.js')}}"></script>
		<script src="{{asset('search/assets/js/fastclick.js')}}"></script>
		<script src="{{asset('search/assets/js/jquery.blockUI.js')}}"></script>
		<script src="{{asset('search/assets/js/waves.js')}}"></script>
		<script src="{{asset('search/assets/js/jquery.slimscroll.js')}}"></script>
		<script src="{{asset('search/assets/js/jquery.scrollTo.min.js')}}"></script>
		<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
		
		<!--Form Wizard-->
		<script src="{{asset('plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>
		<script type="text/javascript" src="{{asset('plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
		
		<!-- App js -->
		<script src="{{asset('search/assets/js/jquery.core.js')}}"></script>
		<script src="{{asset('search/assets/js/jquery.app.js')}}"></script>
		
		<!--wizard initialization-->
		<script src="{{asset('search/assets/pages/jquery.wizard-init.js')}}" type="text/javascript"></script>
		
		
		<script src="{{asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/multiselect/js/jquery.multi-select.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
		<script src="{{asset('plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
		
		<script type="text/javascript" src="{{asset('plugins/autocomplete/jquery.mockjax.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/autocomplete/countries.js')}}"></script>
		<script type="text/javascript" src="{{asset('search/assets/pages/jquery.autocomplete.init.js')}}"></script>
		
		<script type="text/javascript" src="{{asset('search/assets/pages/jquery.form-advanced.init.js')}}"></script>
		
		
		<script src="{{asset('plugins/moment/moment.js')}}"></script>
     	<script src="{{asset('plugins/timepicker/bootstrap-timepicker.js')}}"></script>
     	<script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
     	<script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
     	<script src="{{asset('plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
     	<script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
		
		<script src="{{asset('search/assets/pages/jquery.form-pickers.init.js')}}"></script>
		
		<!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		
		<!--  Init -->
        <script src="{{asset('search/assets/pages/jquery.gmaps.js')}}"></script>
		
		<!-- main file -->
        <script src="{{asset('plugins/gmaps/gmaps.min.js')}}"></script>
		
	</body>
</html>	