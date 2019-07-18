@extends('layouts.app')
@section('body')
<head>
	<title>Vendor Registration - Laxyo Energy Limited</title>
</head>
<!--Start TITLE PAGE-->		
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Vendor Registration</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Vendor Registration</li>							
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
			<h1>Vendor <span>Registration</span></h1>			
		</div>
	</div>
</div>

<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Success!</strong> Your message has been sent to us.
	</div>
	<div class="alert alert-danger hidden" id="contactError">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Error!</strong> <span class="errorMessage">There was an error sending your message.</span>
	</div>
   @if(session('vender_message'))
   <div class="alert alert-success">
        {{ session('vender_message') }}
    </div>
   @endif
	<form id="vendorform" action="{{url('/vendorform')}}" method="POST" class="jogjaContact">
			{{csrf_field()}}
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Company Name <span style="color: #F34D2C;">*</span></label>

					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="cname" name="company_name" class="form-control" maxlength="100" value="{{old('company_name')}}" placeholder="Company Name" type="text">
						@foreach($errors->get('company_name') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Company Website</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="cweb" name="company_website" class="form-control" maxlength="100" value="{{old('company_website')}}" placeholder="Company Website" type="text" >
					</div>
				</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Contact Person Name <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="cpname" name="person_name" class="form-control" maxlength="100"  value="{{old('person_name')}}" placeholder="Contact Person Name" type="text" >
						@foreach($errors->get('person_name') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Designation <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="designation" name="designation" class="form-control" maxlength="100"  value="{{old('designation')}}" placeholder="Designation" type="text">
						@foreach($errors->get('designation') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Email <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="email" name="email" class="form-control" maxlength="100"  value="{{old('email')}}" placeholder="Email" type="email">
						@foreach($errors->get('email') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Postal Address <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="paddress" name="postal_address" class="form-control" maxlength="100"  value="{{old('postal_address')}}" placeholder="Postal Address" type="text">
						@foreach($errors->get('postal_address') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Telephone No. <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="telephone" name="telephone_no" class="form-control" maxlength="100"  value="{{old('telephone_no')}}" placeholder="Telephone No. (with area code)" type="text">
						@foreach($errors->get('telephone_no') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Mobile No. <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="mobile" name="mobile_no" class="form-control" maxlength="100"  value="{{old('mobile_no')}}" placeholder="Mobile No." type="text">
						@foreach($errors->get('mobile_no') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Fax</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="fax" name="fax" class="form-control" maxlength="100"  value="{{old('fax')}}" placeholder="Fax (with area code)" type="text">
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Nature Of Business <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<select name="nature_business" class="form-control select-cont" value="">
							<option value="0">select</option>
							@foreach($users as $user)
<option value="{{$user->nature_bussi_name}}" {{ (old("nature_business") == $user->nature_bussi_name ? "selected":"") }}>{{$user->nature_bussi_name}}</option>
									@endforeach
								
				        </select>
				         @error('nature_business')
                         <p class="text-danger">{{ $message }}</p>
                          @enderror
				        	
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Products <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<select name="products" class="form-control select-cont" value="{{old('products')}}">
				          <option value="0">Select</option>
				          @foreach($use as $uses)
									<option value="{{$uses->product_name}}"{{old('products')==$uses->product_name ? "selected":" "}}>{{$uses->product_name}}</option>
									@endforeach
				        {{--   <option>Building material</option> --}}
				         {{--  <option value="Cement">Cement</option>
				          <option value="Chemicals">Chemicals</option>
				          <option value="Civil Items">Civil Items</option>
				          <option value="Civil Works">Civil Works</option>
				          <option value="Construction Equipment">Construction Equipment</option>
				          <option value="Construction Material">Construction Material</option>
				          <option value="Coal">Coal</option>
				          <option value="Coal Handling Equipment System">Coal Handling Equipment System</option>
				          <option value="Computer">Computer</option>
				          <option value="Crane">Crane</option>
				          <option value="Hoist">Hoist</option>
				          <option value="Fabrication Works">Fabrication Works</option>
				          <option value="Fuel &amp; Lubricant">Fuel &amp; Lubricant</option>
				          <option value="Fuel Handling System">Fuel Handling System</option>
				          <option value="Furniture &amp; Fixtures">Furniture &amp; Fixtures</option>
				          <option value="Gas">Gas</option>
				          <option value="Grouting">Grouting</option>
				          <option value="House-keeping">House-keeping</option>
				          <option value="Instruments">Instruments</option>
				          <option value="Instrumentation">Instrumentation</option>
				          <option value="Office Equipment">Office Equipment</option>
				          <option value="Oil &amp; Lubricant">Oil &amp; Lubricant</option>
				          <option value="Paint &amp; Painting material">Paint &amp; Painting material</option>
				          <option value="Reinforcement Steel">Reinforcement Steel</option>
				          <option value="Safety Equipment Services">Safety Equipment Services</option>
				          <option value="Site Related Contracts">Site Related Contracts</option>
				          <option value="Software">Software</option>
				          <option value="Structural Steel">Structural Steel</option>
				          <option value="Testing Equipment">Testing Equipment</option>
				          <option value="Tools">Tools</option>
				          <option value="Vehicles">Vehicles</option>
				          <option value="Welding Equipment">Welding Equipment</option>
				          <option value="Welding Consumables">Welding Consumables</option>
				          <option value="Workshop Machinery">Workshop Machinery</option> --}}
				        </select>
				        @error('products')
                         <p class="text-danger">{{ $message }}</p>
                          @enderror
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
					<label>Existing Customers</label>
				</div>
				<div class="col-md-9 col-lg-9 col-sm-12">
					<textarea id="Existing-Customers" name="customer" rows="3" cols="51" maxlength="5000">{{old('customer')}}</textarea>
					<p><small>(Please Provide The Following Information Whichever Applicable.)</small></p>
				</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">PAN #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="pan" name="pan" class="form-control" maxlength="100" value="{{old('pan')}}" placeholder="PAN" type="text">
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">TAN #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="tan" name="tan" class="form-control" maxlength="100" value="{{old('tan')}}" placeholder="TAN" type="text" >
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">TIN #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="tin" name="tin" class="form-control" maxlength="100" value="{{old('tin')}}" placeholder="TIN" type="text">
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">SSI Registration #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="ssi" name="ssi_reg_no" class="form-control" maxlength="100" value="{{old('ssi_reg_no')}}" placeholder="SSI Registration No." type="text">
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Excise #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="excise" name="excise_no" class="form-control" maxlength="100" value="{{old('excise_no')}}" placeholder="Excise No." type="text">
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Service Tax #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="stax" name="service_tax_no" class="form-control" maxlength="100" value="{{old('service_tax_no')}}" placeholder="Service Tax No." type="text">
					</div>
				</div>
		</div>
        
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<p class="pull-right"><i style="color: #F34D2C;">* Mandatory To Be Submitted</i></p>
			</div>
		</div>
         <!--alert div success-->
	  	<div class="alert alert-success" id="vendor1"> 
		    <button type="button" class="close" data-dismiss="alert">x</button>
		    <strong>Success! </strong>Your form has been Submitted Successfully.
		</div>
		<!--alert div success-->
		<div class="row">
			<div class="col-md-12">
				<input data-loading-text="Loading..." class="btn btn-primary" value="Send Message" type="submit" name="submit">
				<input data-loading-text="" class="btn btn-success" value="Reset" type="reset">
			</div>
		</div>
	</form>
</div>

<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
</div> 
<!--END ROW-->
</div>
</section>	
{{-- <script>
      $(function () {

        $('#vendorform').on('submit', function (e) {

          e.preventDefault();
          console.log( $( this ).serialize() );

          $.ajax({
            type: 'post',
            url: 'vendor-email.php',
            data: $( this ).serialize(),
            success: function () {
            setTimeout(function() { $("#vendor1").show().fadeOut(10000); }, 500);
            $("#vendorform")[0].reset();
            }
          });

        });

      });
    </script> --}}
@endsection