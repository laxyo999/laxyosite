@extends('layouts.app')

@section('title','Contact - Laxyo Energy Limited')

@section('body')
 
<head>
	<title>Contact - Laxyo Energy Limited</title>
</head>
<!-- End Header -->		
<!--Start TITLE PAGE-->	
@section('body')
<section class="title_page bg_3">     


	<div class="container">       
		<div class="row">         
			<div class="col-lg-12 col-md-12 col-sm-12">           
				<h2>Contact</h2>         
				<nav id="breadcrumbs">              
					<ul>                
						<li><a href="{{url('/')}}">Home</a></li> 
						<li>Contact</li>             
					</ul>           
				</nav>          
			</div>        
		</div>      
	</div>    
</section> 	

<!--End TITLE PAGE-->
<!-- Start Contact Page -->		
<section class="content contact">			

	<div class="container">
		<div class="row">
			<div class="col-12 col-12 col-12 effect-slide-bottom in">
				<div class="intro_box">
					<h1>Contact <span>Us</span></h1>
				</div>
			</div>
		</div>
		@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
		<div class="row">					
			<div class="col-lg-9 col-md-9 col-sm-12">						
				<div class="title_content">							
					<h3>Let's keep in touch</h3>						
				</div>						
				<p>Reach out to us and we'll respond as soon as possible.</p>

				<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> Your message has been sent to us.
				</div>
				<div class="alert alert-danger hidden" id="contactError">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Error!</strong> <span class="errorMessage">There was an error sending your message.</span>
				</div>

				<form id="contactForm" action="{{url('/submitmyform')}}"  method="POST" class="jogjaContact">
					{{csrf_field()}}
					<div class="row">

						
							<div class="col-lg-6 col-md-6 col-sm-12">
								<label>Your Name <span style="color: #F34D2C;">*</span></label>
								<input id="name" name="name" class="form-control" maxlength="100" value="{{ old('name') }}" type="text"  >
								
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<label>Your E-Mail <span style="color: #F34D2C;">*</span></label>
								<input id="email" name="email" class="form-control" maxlength="100"  value="{{ old('email') }}" type="email">
								@foreach($errors->get('email') as $error)
								<span class="text-danger">{{$error}}</span>
								@endforeach
							</div>	
						
					</div>
					<div class="row">
						
							<div class="col-md-6 col-lg-6 col-sm-6">
								<label>Your Address</label>
								<input id="address" name="address" class="form-control" maxlength="100"  value="{{ old('address') }}" type="text">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<label>PIN<span style="color: #F34D2C;">*</span></label>
								<input id="pin" name="pin" class="form-control" maxlength="100" value="{{old('pin')}}" type="text">
								@foreach($errors->get('pin') as $error) 
								<span class="text-danger">{{$error}}</span>
								@endforeach
							</div>
					
					</div>

					<div class="row">
							
							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Your Country</label>
								<select id="country" name="country" class="form-control dynamic" data-dependent="state">
									<option>Select Country</option>
									@foreach($country_list as $country)
									<option value="{{$country->country_code}}">{{$country->country_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Select State</label>
								<select id="state" name="state" class="form-control select-cont " value="">
									<option>Select State</option>
									
								</select> 
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>city</label>
								<select id="city" name="city" class="form-control select-cont " value="">
									<option class="form-control">Select City</option>
									
								</select>
							</div>
						
					</div>
					<div class="row">
						
							<div class="col-lg-6 col-md-6 col-sm-6">
								<label>Phone No.(With Area Code) <span style="color: #F34D2C;">*</span></label>
								<input id="contact" name="contact" class="form-control" maxlength="100"  value="{{old('contact')}}" type="text">
								@foreach($errors->get('contact') as $error)
								<span class="text-danger">{{$error}}</span>
								@endforeach
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<label>Mobile No. <span style="color: #F34D2C;">*</span></label>
								<input id="mobile" name="mobile" class="form-control" maxlength="100"  value="{{ old('mobile') }}" type="text">
								@foreach($errors->get('mobile') as $error)
								<span class="text-danger">{{$error}}</span>
								@endforeach
							</div>
					
					</div>

					<div class="row mrgb_20">
							
								<div class="col-md-12 col-lg-12 col-sm-12">
									<label>Comments </label>
						<textarea id="message" name="message" rows="4" cols="51"  maxlength="5000"type="text" placeholder="Comment..">{{old('message')}}</textarea>
								</div>
							
					</div>
					<!--alert div success-->
					<div class="alert alert-success" id="contact12" style="display:none;"> 
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong>Success! </strong>Contact Form Submit Successfully.
					</div>
					<!--alert div success-->
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<p class="pull-right"><i style="color: #F34D2C;">* Mandatory To Be Submitted</i></p>
						</div>

					
				   </div>
				   <div class="row">
				   	<div class="col-md-12">
				   		<button class="btn btn-success" type="submit" id="">Send Details</button>
				   		<input type="reset" class="btn btn-danger" value="Cancel">
				   	</div>
				   </div>

                </form>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 well">

				<div class="widget_content" style="padding-top:15px">
					<div class="title_content">
						<h3>Regd. Off. - Ratlam</h3>
					</div>

					<ul class="widget_info_contact">
						<li> <i class="fa fa-map-marker"></i><p>Laxyo Tower, 46/1 T.I.T. Road, Ratlam (MP) 457001 </p></li>
						<li><i class="fa fa-phone-square"></i><p>+91-7412-232432</p></li>
						<li><i class="fa fa-fax"></i><p>+91-7412-232432</p></li>
					</ul>
				</div>
				<div class="widget_content">
					<div class="title_content">
						<h3>Corp. Off. - Indore</h3>
					</div>

					<ul class="widget_info_contact">
						<li><i class="fa fa-map-marker"></i><p>Laxyo House, Plot No.2, County Park, MR-5, Mahalaxmi Nagar, Indore (MP) 452010</p></li>
						<li><i class="fa fa-phone-square"></i><p>+91-731-4043798</p></li>
						<li><i class="fa fa-envelope"></i><p>info@laxyo.com</p></li>

					</ul>
				</div>
				<div class="widget_content">
					<div class="title_content">
						<h3>Reg. Off. - Chittorgarh</h3>
					</div>

					<ul class="widget_info_contact">
						<li><i class="fa fa-map-marker"></i><p>CF-5, Madhav Nagar, Chanderia, Dist. Chittorgarh, (Raj.) 312021 </p></li>
						<li><i class="fa fa-phone-square"></i><p>+91-1474-256710</p></li>
					</div>
					<div class="widget_content">
						<div class="title_content">
							<h3>Social Media</h3>
						</div>
						<ul class="widget_social">
							<li><a class="fb" href="https://www.facebook.com/laxyoGroup/" data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twtr" href="https://twitter.com/LaxyoGroup" data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>

							<li><a class="linkedin" href="https://in.linkedin.com/in/laxyo-group-21242a118" data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

						</ul>
					</div>
				</div>

			</div> 
			<!--END ROW-->
		</div>
	</section>
	<!-- End Contact Page -->

<script type="text/javascript">
	$(document).ready(function(){
		$("#country").blur(function(){
			var country_id = $(this).val();
		 
		$.ajax({ 
			type:"GET",
			url:"{{url('/getStateList')}}?country_id="+country_id,
			success:function(data)
			{	
				//console.log('in loop',data);
				if(data){
					$("#state").empty();
					$("#state").append('<option>Select</option>');
					$.each(data,function(k,v){
						$("#state").append('<option value="'+v.state_code+'">'+v.state_name+'</option>');
					});
				}else{
					$("#state").empty();
				}
			}
		});
	});
		$("#state").blur(function(){
			var state_id=$(this).val();
			$.ajax({ 
				type:"GET",
				url:"{{url('/getCityList')}}?state_id="+state_id,
				success:function(data)
				{	
					if(data){
					$("#city").empty();
					$("#state").append('<option>Select</option>');
					$.each(data,function(k,v){
						$("#city").append('<option value="'+v.city_code+'">'+v.city_name+'</option>');
					});
				}else{
					$("#city").empty();
				}

				}
			});
		});
	});
</script>

	@endsection