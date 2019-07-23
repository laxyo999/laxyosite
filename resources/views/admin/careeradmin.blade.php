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
		    <a href="{{url('/home')}}" class="btn btn-primary">Home</a>
		    <a href="{{url('/admin-career')}}" class="btn btn-primary">Career</a>
		    <a href="{{url('/admin-vender')}}" class="btn btn-primary">Vender Registration</a>
		    <a href="{{url('/admin-contact')}}" class="btn btn-primary">Contact</a>
		    <a href="{{url('/admin-feedback')}}" class="btn btn-primary">Feedback</a>
		  
		  <a href="{{url('/admin-post')}}" class="btn btn-primary">Job Post</a>
		  </div>
		</div>
	<div class="card">
		<table class="table table-bordered table-striped" id="careertable">
			<thead class="bg-dark" style="color: white">
				<tr>
				<th>Id</th>
				<th>Job Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Address</th>
				<th>Summary</th>
				<th>Document</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $datas)
			<tr>
				<td></td>
				<td>{{$datas['job_id']}}</td>
                  <td>{{$datas['name']}}</td>
                  <td>{{$datas['email']}}</td>
                  <td>{{$datas['mobileno']}}</td>
                  <td>{{$datas['address']}}</td>
                  <td>{{$datas['about']}}</td>
                  <td>
                  	<a href="{{route('download',['id' => $datas->id ])}}" class="btn btn-info"><span class="fa fa-download"></span> Download</a>
                  </td>
                  <td>
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $datas->id }}').submit();}"><span class="fa fa-trash"></span></a>

                  <form id="delete-form-{{ $datas->id }}" action="{{ route('cdel', ['id' => $datas->id ]) }}" method="POST" style="display: none;">
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
    $('#careertable').DataTable();
   });

</script>

@endsection