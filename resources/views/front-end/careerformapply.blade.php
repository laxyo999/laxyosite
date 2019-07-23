@extends('layouts.app')
@section('title','Career Form For Apply - Laxyo Energy Limited')

	
<style>
	.card{
		height: 400px;
		margin-bottom: 20px;
	}
</style>
<!--Start TITLE PAGE-->	
@section('body')	
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
		
<div class="container">				
<div class="row">					
	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
		<div class="intro_box">
			<h1>Career <span>With Us</span></h1>
		</div>
	</div>
</div>


	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<div class="row">
			<div class="col-md-12">
		        @if ($errors->any())
			      <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			              <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			      </div><br />
			    @endif
                @if(session()->get('success'))
				    <div class="alert alert-success">
				      {{ session()->get('success') }}  
				    </div><br />
				@endif  
			</div>
		</div>
		<div class="row">
			 <div class="col-md-12">
		
			 <form id="careerform" action="{{ action('CareerController@submit') }}" method="post" class="form" enctype="multipart/form-data">
      	     <div class="card form-group">
      	     @csrf
      	     <div class="card-header bg-primary">
      	     	Career Apply Form
      	     </div>
      	     <div class="card-body">
              		 
		      	      <input type="hidden" id="job_id" class="form-control" name="job_id" value="{{$post->id}}">
		             
                     <div class="row">
             			<div class="col-md-6">
                        <input class="form-control" name="name" placeholder="Your Full Name" type="text" required="required">
	                    </div>
	                    <div class="col-md-6">
	                        <input class="form-control" name="email" placeholder="Your Email" type="text" required="required">
                    	</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" maxlength="10"  name="mobileno" placeholder="Your Mobile Number" type="text" required="required">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="address" placeholder="Your Address" type="text">
                            </div>
                        </div>
                        
                    	<textarea class="form-control" rows="6" name="about" placeholder="Tell Us Amazing about You..."></textarea>
                    
                         
                         @if($post->resume == 'Yes')
                                 <div class="col-md-12">
			                        <div class="form-group">
			                            <label for="exampleInputFile">Attached Resume Here</label>
			                            <input id="file" name="file" type="file">
			                            <p class="help-block">Attach .doc, .pdf files only (Min of 3MB)</p>
			                        </div>
			                        </div>
			                 
			              @else
			               
			                 	<div class="col-md-12">
			                 		Not Need
			                 	</div>
			                
			              @endif
			            
			        </div> 
			        <div class="card-footer">
			        	<button type="submit" class="btn btn-primary">Send Details</button>
			        	<button type="reset" class="btn btn-danger">Cancel</button>
			        </div> 
      	     </div>	
      	    
      	     </form>
      	     
      	    </div>
		</div>
        
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>

@endsection