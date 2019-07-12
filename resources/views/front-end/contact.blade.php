@extends('layouts.app')
@section('body')
<head>
	<title>Contact - Laxyo Energy Limited</title>
</head>
<!-- End Header -->		
<!--Start TITLE PAGE-->	
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
        <div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
          <div class="intro_box">
            <h1>Contact <span>Us</span></h1>
          </div>
        </div>
      </div>
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

			<form id="contactForm" action=""  method="POST" class="jogjaContact">
				<div class="row">

					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<label>Your Name <span style="color: #F34D2C;">*</span></label>
							<input id="name" name="name" class="form-control" maxlength="100" value="" type="text" required >
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Your E-Mail <span style="color: #F34D2C;">*</span></label>
							<input id="email" name="email" class="form-control" maxlength="100"  value="" type="email" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<label>Your Address <span style="color: #F34D2C;">*</span></label>
							<input id="address" name="address" class="form-control" maxlength="100"  value="" type="text" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Your City <span style="color: #F34D2C;">*</span></label>
							<input id="city" name="city" class="form-control" maxlength="100"  value="" type="text" required>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>PIN</label>
							<input id="pin" name="pin" class="form-control" maxlength="100" value="" type="text" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Select State <span style="color: #F34D2C;">*</span></label>
							<select id="state" name="state" class="form-control select-cont" required>
								<option>Select State</option>
								<option>Andhra Pradesh</option>
								<option>Arunachal Pradesh</option>
								<option>Assam</option>
								<option>Bihar</option>
								<option>Chandigarh</option>
								<option>Chhattisgarh</option>
								<option>Dadra and Nagar Haveli</option>
								<option>Daman and Diu</option>
								<option>Delhi</option>
								<option>Goa</option>
								<option>Gujarat</option>
								<option>Haryana</option>
								<option>Himachal Pradesh</option>
								<option>Jammu and Kashmir</option>
								<option>Jharkhand</option>
								<option>Karnataka</option>
								<option>Kerala</option>
								<option>Lakshadweep</option>
								<option>Madhya Pradesh</option>
								<option>Maharashtra</option>
								<option>Manipur</option>
								<option>Meghalaya</option>
								<option>Mizoram</option>
								<option>Nagaland</option>
								<option>Odisha</option>
								<option>Puducherry</option>
								<option>Punjab</option>
								<option>Rajasthan</option>
								<option>Sikkim</option>
								<option>Tamil Nadu</option>
								<option>Telangana</option>
								<option>Tripura</option>
								<option>Uttar Pradesh</option>
								<option>Uttarakhand</option>
								<option>West Bengal</option>	
							</select> 
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Country <span style="color: #F34D2C;">*</span></label>
							<input id="country" name="country" class="form-control" maxlength="100" value="" type="text" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Phone No.(With Area Code) <span style="color: #F34D2C;">*</span></label>
							<input id="contact" name="contact" class="form-control" maxlength="100"  value="" type="text" required>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Mobile No. <span style="color: #F34D2C;">*</span></label>
							<input id="mobile" name="mobile" class="form-control" maxlength="100"  value="" type="text" required>
						</div>
					</div>
				</div>
				
				<div class="row mrgb_20">
					<div class="form-group">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<label>Comments <span style="color: #F34D2C;">*</span></label>
							<textarea id="message" name="message" rows="4" cols="51"  maxlength="5000" required></textarea>
						</div>
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
						<input data-loading-text="Loading..." class="btn btn-primary" value="Send Message" type="submit" name="submit">
						<input data-loading-text="" class="btn btn-success" value="Reset" type="reset">
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

@endsection
