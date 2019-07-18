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
		<table class="table table-bordered table-striped" id="contacttable">
			<thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
				<tr style="">
				<th width="2%">Id</th>
				<th width="10%">name</th>
				<th width="10%">Email</th>
				<th width="10%">Address</th>
				<th width="10%">City</th>
				<th width="5%">Pin</th>
				<th width="10%">State</th>
				<th width="5%">Country</th>
				<th width="10%">Contact</th>
				<th width="5%">Mobile</th>
				<th width="10%">Message</th>
				<th width="5%">Action</th>
			</tr>
			</thead>
			<tbody>
			 <tr>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 	<td></td>
			 </tr>
      		</tbody>

		</table>

	</div>
	
</div>

<script>

  $(document).ready(function() {
    $('#contacttable').DataTable();
   });

</script>
@endsection