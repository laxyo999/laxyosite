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
				<th width="5%">Id</th>
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
			</tr>
			</thead>
			
			<tbody>
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