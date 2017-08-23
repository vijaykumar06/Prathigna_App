@extends('layout.app')
@section('body_content')
<!-- Section -->
		<div id="content">
			<section class="h-lg dark">
				
				<div class="bg-parallax" data-parallax="scroll" data-image-src="{{asset('css/img/photos/classic_bg03.jpg')}}"></div>
				<div class="v-top">
					<div class="container">
						<div class="row">
							<div class="col-md-11" style="padding:0px;margin:0px;">
								<p style="float:right;padding:0px;margin:0px;margin-top:-20px;margin-right:20px;">
									<a href="#">Advance Search</a>
								</p>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-1"></div>
							<div class="col-md-10">
								
								<form class="validate-form" >
									<div class="row">
										
										<nav class="navbar navbar-default" style="border-radius: 30px;">
											<div class="nav nav-justified navbar-nav">
												
												<form class="navbar-form navbar-search" role="search">
													<div class="input-group">
														
														<div class="input-group-btn ">
															<button type="button" class="btn btn-search btn-default dropdown-toggle" data-toggle="dropdown" style="background-color: #fff;color: #000; border:1px solid#c5c3c3;margin-top: 3px; margin-left: 3px;">
																<i class="ti-search"></i>
																<span class="label-icon">Search</span>
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu pull-left" role="menu">
																<li>
																	<a href="#">
																		<i class="ti-search"></i>
																		<span class="label-icon">All Jobs</span>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="ti-search"></i>
																		<span class="label-icon">IT Jobs</span>
																	</a>
																</li>
															</ul>
														</div>
														<div class="col-md-6 col-xs-12" style="padding:0px">
															<input type="text" class="form-control" placeholder="Keywords/Keyskills/Industry/Designation" style="margin-top: 3px; margin-left:2px;">
														</div>
														<div class="col-md-3" style="padding:0px">
															<input type="text" class="form-control" placeholder="Location" style="margin-top: 3px; margin-left:4px;">
														</div>
														<div class="col-md-3" style="padding:0px">
															<select  class="form-control" placeholder="Experience" style="margin-top: 3px; margin-left:6px;" >
																<option>Experience</option>
																<option>0 - 1 Yrs</option>
																<option>2 Yrs</option>
																<option>3 Yrs</option>
																<option>4 Yrs</option>
																<option>5 Yrs</option>
																<option>6 Yrs</option>
															</select>
														</div>
														
														
														
														<div class="input-group-btn">
															<button type="button" class="btn btn-search btn-default" style="background-color: #fff;color: #000; border:1px solid#c5c3c3; margin-top: 3px; margin-right: 3px; margin-left:8px;">
																GO
															</button>
															
															
														</div>
													</div>  
												</form>   
												
											</div>
										</nav>
										
										
										<div class="col-md-12">
											<p>
												ALL Jobs | 
												IT Jobs |
												Jobs by Company |
												Jobs by Cities |
												Jobs by Designation |
												Jobs by Experience |
												Jobs by Skill |
												Jobs by IIT/IIM |
												Walkin Jobs |
												Startup Jobs
											</p>
										</div>
									</div>
									
								</form>
							</div>
							<div class="col-md-1"></div> 
						</div>
					</div>
				</div>
				
				
				<div class="v-bottom">
					<div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3">
						<div class="v-bottom text-center">
							<a href="#" class="icon icon-xs"><i class="fa fa-facebook"></i></a>
							<a href="#" class="icon icon-xs"><i class="fa fa-twitter"></i></a>
							<a href="#" class="icon icon-xs"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</section>
			
			
			<section style="padding:0px; padding-bottom:20px; padding-top:20px;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="carousel" data-items="15" data-pagination="true" data-navigation="true" data-autoplay="true" data-interval="1000" data-ride="1000">
								<!-- Feature -->
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/1.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/2.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/3.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/4.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/5.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/6.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/7.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/8.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/9.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/10.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/11.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/12.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/13.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/14.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/15.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/16.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/17.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/18.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/19.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/20.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/21.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/22.png')}}" /></div>
								<div class="feature" style="margin-bottom:0px;padding:5px;"><img src="{{asset('css/img/company-logos/23.png')}}" /></div>
								
								
								
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>
				
				
			</section>
			<section id="services" style="padding-top:30px;">
				
				
				
				<div class="modal fade" id="modalImageBg" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content dark bg-dark">
							<div class="bg-image" style="height:600px;"><img src="{{asset('css/img/photos/classic_bg04.jpg')}}"  alt=""></div>
							<div class="modal-body">
								<div class="col-md-8">
									<h4><br />Register Now</h4>
									<p>This is our Starter offering equiped with various criterias enabling an effective Job Search. </p>
									
								</div>
								<div class="col-md-4" style="float:right;">
									<span class="icon icon-xl icon-primary" style="font-size:80px;margin-left: 86px;
    margin-top: 17px;"><span class="ti-receipt"></span></span>
								</div>
								<div class="col-md-12" align="center">
								<p style="font-weight:bolder;" align="center">QUICK REGISTRATION</p>
								</div>
								<div class="clearfix"></div>
								<center>
									
									<button type="button" class="btn btn-facebook waves-effect waves-light" style="padding:6px;">
										<i class="fa fa-facebook m-r-5"></i> Facebook
									</button>
									<button type="button" class="btn btn-linkedin waves-effect waves-light" style="padding:6px;">
										<i class="fa fa-linkedin m-r-5"></i> Linkedin
									</button>
									<button type="button" class="btn btn-google-plus waves-effect waves-light" style="padding:6px;">
										<i class="fa fa-google-plus m-r-5"></i> Google+
									</button><br>or<br>
								</center>
								<div class="col-md-6">
									<input type="text" placeholder="Email" class="form-control" /><br />
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Mobile No." class="form-control" /><br />
								</div>
								<div class="col-md-6">
									<input type="password" placeholder="Password" class="form-control" /><br />
								</div>
								
								<div class="col-md-6">
									<input type="password" placeholder="Confirm Password" class="form-control" /><br />
								</div>
								
								<div class="col-md-12" style="margin-bottom:40px;">
									<div class="input-group image-preview" data-original-title="" style="padding: 14px;
									padding-bottom: 13px;s" title="" >
										<input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
										<span class="input-group-btn">
											<!-- image-preview-clear button -->
											<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
												<span class="glyphicon glyphicon-remove"></span> Clear
											</button>
											<!-- image-preview-input -->
											<div class="btn btn-default image-preview-input" style="padding-bottom: 14px; border-radius: 0px;
    background-color: #318cda;">
												
												<span class="image-preview-input-title" style="color:#000;"><i class="ti-file"></i> Upload CV</span>
												<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"> <!-- rename it -->
											</div>
										</span>
									</div>
								</div>
								<div class="col-sm-6">
									<!-- Checkbox -->
									<div class="checkbox">
										<input type="checkbox" id="cb_1">
										<label for="cb_1">Agree to <a href="#" style="text-decoration: underline;">Terms & Conditions </a> </label>
									</div>
									
								</div>
								<div class="col-md-6">
									<a href="#" class="btn btn-primary btn-lg pull-right">Submit</a><br /><br />
								</div>
								
								
							</div>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
						</div>
					</div>
				</div>
				
				
				
				
				
				
				<div class="container text-center">
					<h2 class="mb-5">Not Sure How To Search?</h2>
					<p class="text-muted">Let Us Help You Start.</p>
					<div class="row">
						<!-- Feature -->
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/executive.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">SALES EXECUTIVE</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/software developer.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">WEB DEVELOPERS</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/managerial.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">MANAGERIAL</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/nurse.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">NURSE</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/pilot.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">PILOT</h6>
							</div>
						</div>
						
						
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/freelance.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">FREELANCERS</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/security-army.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">SECURITY</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/recruiter.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">RECRUITER</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/tellecaller male.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">TELECALLERS</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/F&B.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">F & B</h6>
							</div>
						</div>
						
						
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/bluecollor.png')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">BLUE COLLOR</h6>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="feature feature-1">
								<img src="{{asset('css/img/executive female.ico')}}" style="padding:20px; padding-bottom:0px; width: 120px" />
								<hr  style="border-bottom: 1px solid #ccc; width:50%; margin-top: 3px;" />
								<h6 class="mb-5" style="margin-top: -15px;">MARKETING</h6>
							</div>
						</div>
						
						
						
						
					</div>
					<div class="col-md-4"></div>
					
					<div class="col-md-4">
						<button class="btn w-md btn-success btn-bordered waves-effect waves-light" type="submit" style="width:100%;">View All Categories</button>
					</div>
					
					
				</div>
				
			</section>
			<section id="services" style="padding-top:30px;padding-bottom:30px; background-color:#8ee299;">
				
				<div class="container text-center">
					<h2 class="mb-5" style="color:#146ba9">Auto Alert</h2>
					<p class="text-muted">In a hurry, Let us do the heavy lifting. Jobs will come straight to your inbox.</p>
					<div class="row">
						
						<div class="form-group col-md-4">
							<input type="text" class="form-control input-2" placeholder="Email Id" />
						</div>
						<div class="form-group col-md-4">
							<input type="text" class="form-control input-2" placeholder="keyWord/KeySkills" />
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control input-2" placeholder="Experience(Yrs)">
						</div>
						<div class="form-group col-md-2">
							<input type="text" class="form-control input-2" placeholder="Location(City)">
						</div>
						<div class="clearfix"></div>
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<button class="btn w-md btn-info btn-bordered waves-effect waves-light" type="submit" style="width:100%;">Submit</button>
						</div>
						
						
						
					</div>
					
					
					
				</div>
				
			</section>
			<section id="services" style="padding-top:30px;padding-bottom:30px; background-color:#fff;">
				
				<div class="container text-center">
					<h2 class="mb-5" style="color:#146ba9">TOP JOBS</h2>
					<p class="text-muted">We bring to you the best of jobs from the best of the Companies.</p>
					<div class="row">
						
						<nav class="navbar navbar-default" style="border-radius: 30px;">
							<div class="nav nav-justified navbar-nav">
								<div class="input-group">
									<div class="col-md-6" style="padding:0px">
										<input type="text" class="form-control valid" placeholder="Keywords/Keyskills/Industry/Designation" style="margin-top: 3px; margin-left:2px; border-top-left-radius:30px;border-bottom-left-radius:30px;" aria-invalid="false">
									</div>
									<div class="col-md-3" style="padding:0px">
										<input type="text" class="form-control valid" placeholder="Location" style="margin-top: 3px; margin-left:4px;" aria-invalid="false">
									</div>
									<div class="col-md-3" style="padding:0px">
										<select class="form-control valid" placeholder="Experience" style="margin-top: 3px; margin-left:6px;" aria-invalid="false">
											<option>Experience</option>
											<option>0 - 1 Yrs</option>
											<option>2 Yrs</option>
											<option>3 Yrs</option>
											<option>4 Yrs</option>
											<option>5 Yrs</option>
											<option>6 Yrs</option>
										</select>
									</div>
									<div class="input-group-btn">
										<button type="button" class="btn btn-search btn-default" style="background-color: #203667;color: #fff; border:1px solid#c5c3c3; margin-top: 3px; margin-right: 3px; margin-left:8px;">
											Search
										</button>
									</div>
								</div>  
							</div>
						</nav>
						
						<div class="col-lg-12">
							
							
							
							<!-- Nav tabs -->
							<ul class="nav nav-pills mb-30" role="tablist">
								<li class=""><a href="#topjob_1" role="tab" data-toggle="tab" aria-expanded="false">Non IT </a></li>
								<li class=""><a href="#topjob_2" role="tab" data-toggle="tab" aria-expanded="false">IT JOBS</a></li>
								<li class="active"><a href="#topjob_3" role="tab" data-toggle="tab" aria-expanded="true">FMCG</a></li>
								<li><a href="#topjob_4" role="tab" data-toggle="tab" aria-expanded="true">MEDICAL</a></li>
							</ul>
							
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade" id="topjob_1">
									<p class="lead">Ultricies vitae volutpat faucibus, tincidunt sed felis. Fusce egestas ornare fermentum. Aliquam faucibus sapien eu est faucibus semper.</p>
									<p>Aliquam sed ipsum nec lorem elementum mollis id sit amet nulla. Morbi viverra in lorem sit amet viverra. Morbi venenatis, augue nec feugiat porttitor, urna leo placerat erat, nec iaculis felis sem nec odio. Curabitur sodales est in diam elementum, vitae congue neque bibendum. Sed rhoncus quam sit amet consectetur finibus. Curabitur ac scelerisque ex. Cras lectus tellus, suscipit non aliquet ut, tristique vel nibh.</p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="topjob_2">
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper ante quis vestibulum ullamcorper. Aenean libero nunc, ultricies vitae volutpat faucibus, tincidunt sed felis. Fusce egestas ornare fermentum. .</p>
									<p>Aliquam sed ipsum nec lorem elementum mollis id sit amet nulla. Morbi viverra in lorem sit amet viverra. Morbi venenatis, augue nec feugiat porttitor, urna leo placerat erat, nec iaculis felis sem nec odio. Curabitur sodales est in diam elementum, vitae congue neque bibendum. Sed rhoncus quam sit amet consectetur finibus. Curabitur ac scelerisque ex. Cras lectus tellus, suscipit non aliquet ut, tristique vel nibh.</p>
								</div>
								<div role="tabpanel" class="tab-pane fade active in" id="topjob_3">
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-5">
											<p style="font-weight:bold;float:left;" align="left">
												COMPNANY<br />
												LOCATION<br />
												EXPERIENCE<br />
												CTC<br />
											</p>
										</div>
										<div class="col-md-7">
											<p align="left">
												: Accenture<br />
												: Bangalore<br />
												: 2-3yrs<br />
												: 1 Lac<br />
											</p>
										</div>
									</div>
									
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="topjob_4">
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper ante quis vestibulum ullamcorper. Aenean libero nunc, ultricies vitae volutpat faucibus, tincidunt sed felis. Fusce egestas ornare fermentum. Aliquam faucibus sapien eu est faucibus semper.</p>
									<p>Aliquam sed ipsum nec lorem elementum mollis id sit amet nulla. Morbi viverra in lorem sit amet viverra. Morbi venenatis, augue nec feugiat porttitor, urna leo placerat erat, nec iaculis felis sem nec odio. Curabitur sodales est in diam elementum, vitae congue neque bibendum.</p>
								</div>
								
								
							</div>
							
						</div>	
						
					</div>
					
					
					
				</div>
				
			</section>
		</div>
		<nav id="side-panel" class="left bg-dark dark" style="width:22vw;">
			<div class="nav-side-menu">
				<div class=""><img src="{{asset('css/img/logo-white.png')}}" style="height:70px; margin-top: 5px; margin-left: -100px;"></div>
				<div class="menu-list">
					
					<ul id="menu-content" class="menu-content collapse in">
						
						<li data-toggle="collapse" data-target="#new" class="collapsed">
							<a href="#"> Jobs <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="new">
							<li>New New 1</li>
							<li>New New 2</li>
							<li>New New 3</li>
						</ul>
						<li data-toggle="collapse" data-target="#service" class="collapsed">
							<a href="#"> Services <span class="arrow"></span></a>
						</li>  
						<ul class="sub-menu collapse" id="service">
							<li>New Service 1</li>
							<li>New Service 2</li>
							<li>New Service 3</li>
						</ul>
						<li>
							<a href="#">
								Recruiter Services
							</a>
						</li>
						
						<li>
							<a href="#">
								Top Employers
							</a>
						</li>
						<li>
							<a href="#">
								Top Recruiters
							</a>
						</li>
						<li>
							<a href="#">
								Companies
							</a>
						</li>
						<li>
							<a href="#">
								Recruiters
							</a>
						</li>
					</ul>
				</div>
				<form action="#" id="sign-up-form-2" class="sign-up-form validate-form" method="POST" >
					
					<div class="col-md-8">
						<input type="email" name="MERGE0"  value="" class="form-control input-2 input-sm error" placeholder="Advance Search" required="" >
					</div>
					<div class="col-md-1">
						<button type="submit" class="btn btn-filled btn-sm btn-submit btn-block pull-left"><span><i class="ti-search" style="margin-left: -5px;"></i></span></button>
					</div>
				</form>
				<div class="clearfix"></div>
				<div style="margin: 20px;border: 1px solid#fff;padding: 20px; border-radius: 20px;">
					<p align="left">
						For Help ?<br />
						Email:<br /> support@support.com<br /><br />
						Call: <br />
						(+123) 123 456 789
					</p>
				</div>
				
			</div>
			
			<a href="#" class="close hidden-xs hidden-sm" data-toggle="side-panel" style="right: 15px;"><i class="ti-close"></i></a>
			<a href="#" class="close hidden-md hidden-lg" data-toggle="side-panel" style="right: -200px;"><i class="ti-close"></i></a>
		</nav>
		<div class="side-panel-overlay bg-dark"></div>
@endsection