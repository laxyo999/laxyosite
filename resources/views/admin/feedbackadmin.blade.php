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
		<table class="table table-bordered table-striped" id="feedbacktable">
			<thead class="bg-dark" style="color: white;text-align: center;">
				<tr style="width: 100%;">
				<th style="width: 5%;">Id</th>
				<th style="width: 15%;">Name</th>
				<th style="width: 15%;">Email</th>
				<th style="width: 10%;">Mobile Number</th>
				<th style="width: 15%;">Subject</th>
				<th style="width: 30%;">Message</th>
				<th style="width: 10%;">Action</th>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $datas)
			<tr>
				<td>{{$datas['id']}}</td>
                  <td>{{$datas['name']}}</td>
                  <td>{{$datas['email']}}</td>
                  <td>{{$datas['phone2']}}</td>
                  <td>{{$datas['subject']}}</td>
                  <td>{{$datas['message']}}</td>
                  
                  <td>
                   
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $datas->id }}').submit();}"><span class="fa fa-trash"></span></a>

                  <form id="delete-form-{{ $datas->id }}" action="{{ route('fdel', ['id' => $datas->id ]) }}" method="POST" style="display: none;">
                      @csrf
                      @method('delete')
                  </form>
                  </td>
                  </td>
                 </tr>
                 @endforeach 
      			</tbody>

		</table>

	</div>

</div>
<script>

  $(document).ready(function() {
    $('#feedbacktable').DataTable();
   });

</script>

@endsection