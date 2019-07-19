@extends('layouts.admin')
@section('content')
<style>
	.head{
      padding-bottom: 20px;
	}
</style>

<div class="container-fluid">
	<div class="row">
  <div class="col-md-12 head">
    
    <a href="{{url('/admin-career')}}" class="btn btn-primary">Career</a>
    <a href="{{url('/admin-vender')}}" class="btn btn-primary">Vender Registration</a>
    <a href="{{url('/admin-contact')}}" class="btn btn-primary">Contact</a>
    <a href="{{url('/admin-feedback')}}" class="btn btn-primary">Feedback</a>
  
  <a href="{{url('/admin-post')}}" class="btn btn-primary">Job Post</a>
  </div>
</div>
	<div class="card">
		<table class="table table-bordered table-striped" id="vendertable">
			<thead class="bg-dark" style="color: white;text-align: center;">
				<tr style="width: 100%;">
				<th width="3%">Id</th>
				<th width="5%">Company Name</th>
				<th width="5%">Company Website</th>
				<th width="5%">Contact Person Name</th>
				<th width="5%">Designation</th>
				<th width="5%">Email</th>
				<th width="10%">Postal Address</th>
				<th width="5%">Telephone No.</th>
				<th width="5%">Mobile No.</th>
				<th width="5%">Fax</th>
				<th width="5%">Nature Of Business</th>
				<th width="5%">Products</th>
				<th width="5%">Existing Customers</th>
				<th width="5%">PAN</th>
				<th width="5%">TAN</th>
				<th width="5%">TIN</th>
				<th width="5%">SSI Registration</th>
				<th width="5%">Excise</th>
				<th width="5%">Service Tax</th>
				<th width="2%">Action</th>
			</tr>
			</thead>
			     
			<tbody>
				@foreach($data as $vender)
				<tr>
					<td>{{$vender->id}}</td>
					<td>{{$vender->company_name}}</td>
					<td>{{$vender->company_website}}</td>
					<td>{{$vender->person_name}}</td>
					<td>{{$vender->designation}}</td>
					<td>{{$vender->email}}</td>
					<td>{{$vender->postal_address}}</td>
					<td>{{$vender->telephone_no}}</td>
					<td>{{$vender->mobile_no}}</td>
					<td>{{$vender->fax}}</td>
					<td>{{$vender->nature_business}}</td>
					<td>{{$vender->products}}</td>
					<td>{{$vender->customers}}</td>
					<td>{{$vender->pan}}</td>
					<td>{{$vender->tan}}</td>
					<td>{{$vender->tin}}</td>
					<td>{{$vender->ssi_reg_no}}</td>
					<td>{{$vender->excise_no}}</td>
					<td>{{$vender->service_tax_no}}</td>
					<td>
						<a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
		                  document.getElementById('delete-form-{{ $vender->id }}').submit();}"><span class="fa fa-trash"></span></a>

		                  <form id="delete-form-{{ $vender->id }}" action="{{ route('venderdel', ['id' => $vender->id ]) }}" method="POST" style="display: none;">
		                      @csrf
		                      @method('delete')
		                  </form>
					</td>
				</tr>
				@endforeach
			</tbody>

		</table>

	</div>
	
</div>
<script>

  $(document).ready(function() {
    $('#vendertable').DataTable();
   });

</script>

@endsection