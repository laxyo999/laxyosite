@extends('layouts.app')
@section('body')
<head>
	<title>Career - Laxyo Energy Limited</title>
</head>
<!--Start TITLE PAGE-->		
<section class="title_page bg_3">			
<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Career</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Career</li>							
</ul>						
</nav>					
</div>				
</div>			
</div>		
</section>		
<!--End TITLE PAGE-->				
<section class="content sb_right">			
<div class="container">				
<div class="row">					
	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
		<div class="intro_box">
			<h1>Career <span>With Us</span></h1>
		</div>
	</div>
</div>


	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<section>
		<div class="row">
			<!-- <div class="title_content">             
		    	<h3>Career</h3>            
		    </div>  -->           
		    <div class="infrastructure"> 
			    <div class="col-sm-12 col-md-12">
                    <!--<p><strong><em>Enhenyero INC.</em></strong> as one of the biggest Engineering Company in the World we have 6 other branches worldwide. As we continue to grow, we are planning to expand more of our branches from time to time. Visit the nearest branch in you place and make you Engineering Project done right. </p>

                    <div class="clearfix"></div>
                    <div class="smallspacer"></div> -->

                    <form id="careerform" action="" method="post" class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" name="fullname" placeholder="Your Full Name" type="text" required="required">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="email" placeholder="Your Email" type="text" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" maxlength="10"  name="number" placeholder="Your Mobile Number" type="text" required="required">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="address" placeholder="Your Address" type="text" required="required">
                            </div>
                        </div>
                    	<textarea class="form-control" rows="6" name="textarea" placeholder="Tell Us Amazing about You..."></textarea>
                    	
                    	<div>
	                        <div class="form-group">
	                            <label for="exampleInputFile">Attached Resume Here</label>
	                            <input id="filename" name="file" type="file">
	                            <p class="help-block">Attach .doc, .pdf files only (Min of 3MB)</p>
	                        </div>
	                    </div>
	                    <!--alert div success-->
					  	<div class="alert alert-success" id="career1"> 
						    <button type="button" class="close" data-dismiss="alert">x</button>
						    <strong>Success! </strong>Your form has been Submitted Successfully.
						</div>
						<!--alert div success-->
	                    <button type="submit" class="btn btn-primary en-btn">Send Details</button>
                    </form>

                </div><br/>
				<br/>
				<div>
				
				 <b> NOTE : Physical presence with original documents is mandatory at Indore office , during the recruitment process.
Telephonic conversation will not be considered for final selection. </b>
			    </div>   
		    </div>  
		</div>
	</section>		
	          
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>
</section>	
@endsection