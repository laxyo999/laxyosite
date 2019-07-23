@extends('layouts.app')
@section('title','Career - Laxyo Energy Limited')
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
			@foreach($post as $post)
			<div class="col-md-4">
				<div class="card">
					<div class="card-title bg-dark" style="color: white;text-align: center;">
						<h4>{{$post->jobtitle}}</h4>
					</div>
					<div class="card-body">
						<p><b>Job Title:</b> {{$post->jobtitle}} </p>
						<p><b>Location:</b> {{$post->location}}</p>
						<p><b>Experience:</b> {{$post->experience}}</p>
						<p><b>Description:</b> {{$post->description}}</p>
						<p><b>Resume Necessary:</b> {{$resume = $post->resume}}</p>
						<p><b>Salary :</b> <span>{{$post->salaryfrom}}</span> To <span>{{$post->salaryto}}</span></p>
						<p><b>Closing Date:</b> <span style="color: red">{{ \Carbon\Carbon::parse($post->closingdate)->format('d-m-Y')}}</span></p>
						<p><b>Candidate Count:</b> {{$post->candidatecount}}</p>
					</div>
					<div class="card-footer">
						<a class="apply" href="/career-form-apply/{{$post->id}}">
						  Apply Now
						</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
        
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>
<div class="modal fade" id="applyform">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apply Here</h4>
        <button type="button" class="" data-dismiss="modal">&times;</button>
      </div>
      <form id="careerform" action="{{ action('CareerController@submit') }}" method="post" class="form" enctype="multipart/form-data">
      	@csrf
      <!-- Modal body -->
      <div class="modal-body">
               
      

      <!-- Modal footer -->
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
                        
    </div>
  </div>
</div>
<script>
      
	$('#applyform').on('shown.bs.modal', function (event) {
        	// console.log('hello');
        	  var button = $(event.relatedTarget); // Button that triggered the modal
			  var id= button.data('id');
              var resume=button.data('resume');

			  var modal = $(this)
			  //modal.find('.modal-title').text('New message to ' + recipient)
			  modal.find('.modal-body #job_id').val(id);
			  modal.find('.modal-body #file1').val(resume);

			  var fileid = $('#file1').val();
		        // console.log(fileid);
		         if (fileid == 'Yes') 
		         {
		         	$('#upload').show();
		         }else{
		         	$('#upload').hide();
		         }
		});
	
</script>
</section>	
@endsection