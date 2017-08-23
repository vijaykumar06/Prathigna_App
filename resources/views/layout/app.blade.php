<!DOCTYPE html>
<html lang="en" data-cookies-popup="true">
	<head>
		
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<!-- Title -->
		<title>Prathigna.com</title>
		
		<!-- Favicons -->
		<link rel="shortcut icon" href="{{asset('css/img/favicon.png')}}">
		<link rel="apple-touch-icon" href="{{asset('css/img/favicon_60x60.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('css/img/favicon_76x76.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('css/img/favicon_120x120.png')}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('css/img/favicon_152x152.png')}}">
		
		<!-- Google Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
		
		<!-- CSS Styles -->
		<link rel="stylesheet" href="{{asset('css/css/styles.css')}}" />
		
		<!-- CSS Base -->
		<link id="theme" rel="stylesheet" href="{{asset('css/css/themes/theme-classic.css')}}" />
		
		<style>
			#right-side{
			
			height:600px;
			background-image: url("{{asset('css/img/job-seekers.jpg')}}");
			background-color:hsl(220, 72%, 13%);
			background-repeat:no-repeat;
			background-size: 100% 100%;
			color:#fff;
			font-weight: normal;
			color: #fff;
			
			padding-left:60px;
			margin-top:70px;
			}
		</style>
		
		<style>
			.featureList, .featureList ul {
			margin-top: 0;
			padding-left: 2em;
			list-style-type: none;
			line-height: 40px;
			}
			.featureList li:before {
			position: absolute;
			margin-left: -1.3em;
			font-weight: bold;
			}
			.featureList li.tick:before {
			content: "\2713";
			color: white;
			}
			.featureList li.cross:before {
			content: "\2717";
			color: crimson;
			}
			#form_id
			{

				box-shadow: 3px 3px 4px #888888;
				padding:4%; 
				background-color:#fff;
			}
			#btn_id
			{
				width:100%;
				
    			border: 1px solid #f5707a;
			}
		</style>
		<style>
			.image-preview-input {
			position: relative;
			overflow: hidden;
			margin: 0px;    
			color: #333;
			background-color: #fff;
			border-color: #ccc;    
			}
			.image-preview-input input[type=file] {
			position: absolute;
			top: 0;
			right: 0;
			margin: 0;
			padding: 0;
			font-size: 20px;
			cursor: pointer;
			opacity: 0;
			filter: alpha(opacity=0);
			}
			.image-preview-input-title {
			margin-left:2px;
			}
		</style>
	</head>
	
	<body class="header-absolute">
		
		<!-- Loader -->
		<div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
		<!-- Loader / End -->
		
		<!-- Header -->
		<header id="header" class="absolute fullwidth light">
			<div id="top-bar" style="height:40px;">
				<div class="container">
					<div class="module left" style="line-height:40px;">
						<ul class="list-inline">
							<li><i class="i-before ti-time text-primary"></i>Welcome to PRATHIGNA.COM | End to your Job Search</li>
						</ul>
					</div>
					<div class="module right" style="line-height:40px;">
						
						<ul class="list-inline">
							
							<li><i class="i-before ti-email text-primary"></i>info@prathigna.com</li>
							<li><i class="i-before ti-mobile text-primary"></i>+48 22 212-32-21</li>
							<li><span style="background-color:#f91c05; color:#fff; padding:7px; border-radius:20px; padding-left: 16px; padding-right: 16px; font-size:12px; ">Recruiter Zone</span></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Navigation Bar -->
			<div id="nav-bar">
				
				<!-- Logo -->
				<a class="logo-wrapper" href="index.html">
					<img class="logo logo-dark" src="{{asset('css/img/logo-dark.png')}}" alt="Okno">		
				</a>
				
				<nav class="module-group left" style="margin-left: -50px;">
					
					<!-- Panel -->
					<div class="module left">
						<span class="trigger" data-toggle="side-panel"><i class="ti-menu"></i></span>
					</div>
					
				</nav>
				
				<nav id="side-panel" class="bg-dark dark">
					<div class="side-panel-wrapper">
						
						<!-- Widget - Newsletter -->
						<div class="widget widget-newsletter" >
							<button class="btn w-md btn-danger btn-bordered waves-effect waves-light" >Recruiter Zone</button>
							
						</div>
						
						<!-- Widget - Follow -->
						
					</div>
					<a href="#" class="close" data-toggle="side-panel"><i class="ti-close"></i></a>
				</nav>
				
				<nav class="module-group right">
					
					<!-- Primary Menu -->
					<div class="module menu left">
						<ul id="nav-primary" class="nav nav-primary">
						
							<li class="has-megamenu">
							<a href="#"><button class="btn w-md btn-danger btn-bordered waves-effect waves-light" type="submit" style="width:100%;">Register</button></a>
								
							
								<div class="megamenu">
									<div class="row">
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('seeker_register')}}"><center><img src="{{asset('css/img/mr.png')}}"><br /><span>Job Seeker</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('recruiter_register')}}"><center><img src="{{asset('css/img/js2.png')}}"><br /><span>Recruiter</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('company_register')}}"><center><img src="{{asset('css/img/company.png')}}"><br /><span>Company</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('consultancy_register')}}"><center><img src="{{asset('css/img/consultancy.png')}}"><br /><span>Consultancy</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('freelancer_register')}}"><center><img src="{{asset('css/img/freelancer.png')}}"><br /><span>FreeLancers</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('advertise_register')}}"><center><img src="{{asset('css/img/advitiser.png')}}"><br /><span>Advertise</span></center></a></li>
											</ul>
										</div>
										
									</div>
								</div>
							</li>
							<li><a href="#" target="_blank">Home</a></li>
							
							<li class="has-megamenu">
								<a href="#">Jobs</a>
								<div class="megamenu">
									<div class="row banner-last">
										<div class="col-md-2 menu">
											<h6>Function</h6>
											<ul>
												<li><a href="page-careers.html">Marketing</a></li>
												<li><a href="page-contact-1.html">Sales</a></li>
												<li><a href="page-contact-2.html">Finance</a></li>
												<li><a href="page-contact-3.html">Engineering </a></li>
												<li><a href="page-contact-3.html">HR </a></li>
												<li><a href="page-contact-3.html">Logistics </a></li>
												<li><a href="page-contact-3.html">Tele-calling </a></li>
												<li><a href="page-contact-3.html">Software </a></li>
												<li><a href="page-contact-3.html">Manufacturing </a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<h6>Location</h6>
											<ul>
												<li><a href="page-services-1.html">Bangalore</a></li>
												<li><a href="page-services-2.html">Hyderbad</a></li>
												<li><a href="page-services-3.html">Delhi</a></li>
												<li><a href="page-services-3.html">Mumbai</a></li>
												<li><a href="page-services-3.html">Chennai</a></li>
												<li><a href="page-services-3.html">Ahmadabad</a></li>
												<li><a href="page-services-3.html">Gurgoan</a></li>
												<li><a href="page-services-3.html">Noida</a></li>
												<li><a href="page-services-3.html">Pune</a></li>
												<li><a href="page-services-3.html">Kolkata</a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<h6>Industry</h6>
											<ul>
												<li><a href="page-login.html">IT</a></li>
												<li><a href="page-login.html">Advertising</a></li>
												<li><a href="page-login.html">FMCG</a></li>
												<li><a href="page-login.html">Health Care</a></li>
												<li><a href="page-login.html">Hospitality</a></li>
												<li><a href="page-login.html">Media</a></li>
												<li><a href="page-login.html">Petro-Chemical</a></li>
												<li><a href="page-login.html">Real-Estate</a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<h6>Role</h6>
											<ul>
												<li><a href="layout-fullwidth.html">Accountant</a></li>
												<li><a href="layout-fullwidth-wide.html">Civil Engineer</a></li>
												<li><a href="layout-sidebar-right.html">Data Analyst</a></li>
												<li><a href="layout-sidebar-left.html">Electrical Engineer</a></li>
												<li><a href="layout-sidebar-both.html">Graphic Designing</a></li>
												<li><a href="layout-sidebar-left-double.html">Sales Executive</a></li>
												<li><a href="layout-sidebar-right-double.html">IT Support</a></li>
												<li><a href="layout-blank.html">Marketing Manager</a></li>
												<li><a href="layout-blank.html">QA-Analyst</a></li>
												<li><a href="layout-blank.html">Software Developer</a></li>
											</ul>
										</div>
										<div class="col-md-4 banner dark h-300">
											<div class="bg-image"><img src="{{asset('css/img/photos/docs-banner-bg.jpg')}}" alt=""></div>
											<div class="v-center p-20">
												<h2 class="font-secondary mb-0">Resume Priority</h2>
												<p class="lead text-muted">A Really Helpful Service</p>
												<a href="documentation.html" target="_blank" class="btn btn-filled btn-sm btn-primary">Check it out!</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							<li class="has-dropdown">
								<a href="#">Services</a>
								<ul>
									<li class="has-dropdown">
										<a href="#">Paid Services</a>
										<ul>
											<li><a href="portfolio-contained-2cols.html">Resume Writting</a></li>
											<li><a href="portfolio-contained-2cols.html">Resume Blast</a></li>
											<li><a href="portfolio-contained-2cols.html">Resume Priority</a></li>
											<li><a href="portfolio-contained-2cols.html">Cover Letter</a></li>
										</ul>
									</li>
									<li class="has-dropdown">
										<a href="#">Free Services</a>
										<ul>
											<li><a href="portfolio-wide-2cols.html">Job Alert</a></li>
											<li><a href="portfolio-wide-3cols.html">Candidate Tools</a></li>
											<li><a href="portfolio-wide-4cols.html">Interview Guide</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="#">Read</a>
								<ul>
									<li >
										<a href="#">Blog</a>
										
									</li>
									<li >
										<a href="#">Forum</a>
										
									</li>
									<li >
										<a href="#">Resources</a>
										
									</li>
								</ul>
							</li>
							
							
							<li class="has-megamenu">
							<a href="#">Login</a>
								
							
								<div class="megamenu">
									<div class="row">
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('seeker_login')}}"><center><img src="{{asset('css/img/mr.png')}}"><br /><span>Job Seeker</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('recruiter_login')}}"><center><img src="{{asset('css/img/js2.png')}}"><br /><span>Recruiter</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('company_login')}}"><center><img src="{{asset('css/img/company.png')}}"><br /><span>Company</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('consultancy_login')}}"><center><img src="{{asset('css/img/consultancy.png')}}"><br /><span>Consultancy</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('freelancer_login')}}"><center><img src="{{asset('css/img/freelancer.png')}}"><br /><span>FreeLancers</span></center></a></li>
											</ul>
										</div>
										<div class="col-md-2 menu">
											<ul>
												<li><a href="{{url('advertise_login')}}"><center><img src="{{asset('css/img/advitiser.png')}}"><br /><span>Advertise</span></center></a></li>
											</ul>
										</div>
										
									</div>
								</div>
							</li>
						</ul>
					</div>
					
					<!-- Language Menu -->
					
					
					<!-- Shopping Cart -->
					<div class="module shopping-cart has-popup left">
						<span class="trigger"><i class="ti-shopping-cart"></i></span>
						<div class="popup cart">
							<ul class="cart-items">
								<li>
									<a href="#" class="image"><img src="{{asset('css/img/shop/product01.jpg')}}" alt=""></a>
									<div class="content">
										<a href="#">The Camera</a>
										<span class="price">$39.98</span>
									</div>
								</li>
								<li>
									<a href="#" class="image"><img src="{{asset('css/img/shop/product02.jpg')}}" alt=""></a>
									<div class="content">
										<a href="#">The Glasses</a>
										<span class="price">$39.98</span>
									</div>
								</li>
							</ul>
							<div class="cart-bottom">
								<a href="shop-cart.html" class="btn btn-filled btn-primary btn-sm btn-block">Go to Cart <i class="i-after ti-arrow-right"></i></a>
							</div>
						</div>
						<span class="notification">2</span>
					</div>
					
					<!-- Search -->
					<div class="module search left">
						<span class="trigger" data-toggle="search-bar"><i class="ti-search"></i></span>
					</div>
					
				</nav>
				
				<!-- Menu Toggle -->
				<div class="menu-toggle">
					<a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
				</div>
				
			</div>
			
			<!-- Notification Bar -->
			<div id="notification-bar"></div>
			
			<!-- Search Bar -->
			<div id="search-bar">
				<form id="search-form">
					<input class="search-bar-input" type="text" placeholder="Search: Keywords / Keyskills / Industry / Designation">
					<button class="search-bar-submit"><i class="ti-search"></i></button>
				</form>
				<a href="#" class="search-bar-close" data-toggle="search-bar"><i class="ti-close"></i></a>
			</div>
			
		</header>
		<!-- Header / End -->
		
		
				@yield('body_content')
		
		
		<footer id="footer" class="dark bg-secondary">
    
	<div class="container">
			<div class="row">

				<div class="col-md-2 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
					<h6 class="text-uppercase text-muted" align="left">Job Seekers</h6>
						<ul style="list-style-type: none;text-decoration:none; float:left; text-align:left; padding-left:0px;">
							<li><a href="#">Login</a></li>
							<li><a href="#">Register</a></li>
							<li><a href="#">Resume Boosting</a></li>
							<li><a href="#">Cover Letter</a></li>
							<li><a href="#">Resume Writing</a></li>
							<li><a href="#">Job Alerts</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
					<h6 class="text-uppercase text-muted" align="left">Employers</h6>
						<ul style="list-style-type: none;text-decoration:none; float:left; text-align:left; padding-left:0px;">
							<li><a href="#">Recruiter Login</a></li>
							<li><a href="#">Recruiter Registration</a></li>
							<li><a href="#">Company Login</a></li>
							<li><a href="#">Company Registration</a></li>
							<li><a href="#">Sales</a></li>
							<li><a href="#">Recruiter's Services</a></li>
							<li><a href="#">Advertise with us</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
					<h6 class="text-uppercase text-muted" align="left">Jobs</h6>
						<ul style="list-style-type: none;text-decoration:none; float:left; text-align:left; padding-left:0px;">
							<li><a href="#">Startup Jobs</a></li>
							<li><a href="#">Walkin Jobs</a></li>
							<li><a href="#">MNC Jobs</a></li>
							<li><a href="#">IIT/IIM Jobs</a></li>
							<li><a href="#">IT Jobs</a></li>
							<li><a href="#">Medicine Jobs</a></li>
							<li><a href="#">Jobs by Company</a></li>
							<li><a href="#">Jobs by Skill</a></li>
							<li><a href="#">Jobs by Industry</a></li>
							<li><a href="#">Job by Role</a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-md-2 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
					<h6 class="text-uppercase text-muted" align="left">Support</h6>
						<ul style="list-style-type: none;text-decoration:none; float:left; text-align:left; padding-left:0px;">
							<li><a href="#">Forum</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Book a Call Back</a></li>
							<li><a href="#">Chat With Us</a></li>
							<li><a href="#">Raise a Ticket</a></li>
							<li><a href="#">Documentation</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Report A Bug</a></li>
						</ul>
					</div>
				</div>

				

				

				

				<div class="col-md-3">
					<!-- Widget - Newsletter -->
					<div class="widget widget-newsletter">
						<h6 class="text-uppercase text-muted">Subscribe Us</h6>
						<form action="http://suelo.us12.list-manage1.com/subscribe/post-json" id="sign-up-form" class="sign-up-form validate-form" method="POST"
							data-message-error="Opps... Something went wrong - please try again later"
							data-message-success="Yeah! You will recieve a confirmation email soon..."
						>
							<input type="hidden" name="u" value="ed47dbfe167d906f2bc46a01b">
                    		<input type="hidden" name="id" value="24ac8a22ad">
							<input type="email"  name="MERGE0" size="25" value="" class="form-control input-2 input-sm" placeholder="Your e-mail..." required>
							<button type="submit" class="btn btn-filled btn-sm btn-submit btn-block"><span>Sign Up</span></button>
						</form>
						
					</div>
					<!-- Widget - Contact -->
					<div class="widget widget-contact">
						<h6 class="text-uppercase text-muted">News Letters</h6>
						<div id="instagram-feed" class="instagram-grid clearfix" data-limit="6"></div>
						
					</div>
					<div class="widget widget-follow">
						<h6 class="text-uppercase">Follow Us</h6>
						<a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
						<a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
						<a href="#" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>

			</div>
			<hr class="sep-line">
			<div class="row pt-50 pb-50">
				<div class="col-sm-6 text-muted">
					Copyright Prathigna.com 2017©. All rights reserved.<br>
					Made with love by Prathigna.Com WB-Team 
				</div>
				<div class="col-sm-6 text-right">
					<ul class="nav nav-inline nav-sm mt-10">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Opportunities</a></li>
						<li><a href="#">Work with us</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</div>

</footer>
		<!-- Footer / End -->
		
		<!-- JS Libraries -->
		<script src="{{asset('js/js/jquery-1.12.3.min.js')}}"></script>
		
		<!-- JS Plugins -->
		<script src="{{asset('js/js/plugins.js')}}"></script>
		
		<!-- JS Core -->
		<script src="{{asset('js/js/core.js')}}"></script>
		<script>
			$(function(){
				
				$(".input-group-btn .dropdown-menu li a").click(function(){
					
					var selText = $(this).html();
					
					//working version - for single button //
					//$('.btn:first-child').html(selText+'<span class="caret"></span>');  
					
					//working version - for multiple buttons //
					$(this).parents('.input-group-btn').find('.btn-search').html(selText);
					
				});
				
			});
		</script>
		<script>
			$('.carousel').carousel({
				interval: 100;
			});
		</script>
		
		<script>
			$(window).load(function(){
				setTimeout(function(){
					$('#modalImageBg').modal('show');
				}, 10);});
		</script>
		<script>
		$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Upload CV"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
		</script>
	</body>
	
</html>
