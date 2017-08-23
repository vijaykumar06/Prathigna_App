@extends('layout.app')
@section('body_content')
	<?php $userval=$user;?>
	<!--<br/><br/><br/><br/><br/>-->
	<div id="content">
			<div class="container-fluid">
				<div class="row" style="padding:0px; background-color:#f8f8f8 ">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" id="right-side" >
						<h3 style="font-weight: normal; line-height: 33px; color: #fff; margin-bottom: 20px;"><br /><br />Create PRATHIGNA.COM Account</h3>
						<ul class="featureList">
							<li class="tick">Classic Job Posting   |   Premium Job Posting   |    Elite Job Posting
							</li>
							<li class="tick">Job Posting has been split into three categories, each with their own set of benefits and tapping different categories of Job Seekers.</li>
							<li class="tick">Each provides a different level of publicity and attracts candidates with varied success rates.</li>
							<li class="tick">This is our Starter offering equiped with various criterias enabling an effective Job Search. Our job postings supports upto 60 customizable fields which we believe would be able to handle any required customization that you would throw at it to showcase a Job Profile with any criteria with ease.</li>
							<li class="tick">Get instant queries over Phone, Email and SMS</li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" style="padding:6%; " style="float:right">
						
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<center>
								<p style="font-weight:bolder;text-align:center;">QUICK REGISTRATION</p>
								<button type="button" class="btn btn-facebook waves-effect waves-light" style="padding:6px;">
									<i class="fa fa-facebook m-r-5"></i> Facebook
								</button>
								<button type="button" class="btn btn-linkedin waves-effect waves-light" style="padding:6px;">
									<i class="fa fa-linkedin m-r-5"></i> Linkedin
								</button>
								<button type="button" class="btn btn-google-plus waves-effect waves-light" style="padding:6px;">
									<i class="fa fa-google-plus m-r-5"></i> Google+
								</button><br /><br />
							</center>
							{!! Form::open(['action' => 'AccountLoginController@login','method'=>'POST', 'class'=>'form-horizontal','id'=>'form_id']) !!}
							
								<div class="col-xs-12">
									@include('nav.messages')
									<p style="font-weight:bolder;text-align:center;">JOBSEEKER LOGIN</p>
								</div>
								{{ Form::hidden('user', $userval) }}
								<div class="form-group ">
									<div class="col-xs-12">
										{{Form::text('emailormob','',['class'=>'form-control', 'placeholder'=>'Email/Mobile'])}}
										
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-xs-12">
										{{Form::text('password','',['class'=>'form-control', 'placeholder'=>'Password'])}}
										
									</div>
								</div>
								
								
								
								<div class="form-group account-btn text-center">
									<div class="col-xs-12" >
										 {{Form::submit('submit',['class'=>'btn w-md btn-danger btn-bordered waves-effect waves-light widthstyle', 'id'=>'btn_id'])}}
										
									</div>
								</div>
								
							{!! Form::close() !!}
							
							
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
				@endsection
			