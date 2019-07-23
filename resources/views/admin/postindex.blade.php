@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
  .navbar{
    margin-bottom: 50px;
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
<div class="row">
  <div class="col-md-12"  >
    <a href="{{route('admin-post.create')}}" class="btn btn-primary" style="float: right">Add New Post</a>
  </div>
  </div>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
  <table class="table table-striped table-bordered bg-light text-center" id="posttable">
    <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td style="width: 5%">ID</td>
          <td style="width: 10%">Job Title</td>
          <td style="width: 10%">Location</td>
          <td style="width: 10%">Experience</td>
          <td style="width: 20%">Description</td>
          <td style="width: 5%">Resume Necessary</td>
          <td style="width: 20%" colspan="2">Salary Range</td>
          <td style="width: 5%">Closing Date</td>

          <td style="width: 5%">Candidate Count</td>
          <td style="width: 10%">Action</td>
        </tr>
        <tr>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 20%"></td>
          <td style="width: 5%"></td>
          <td style="width: 10%">From</td>
          <td style="width: 10%">To</td>
          <td style="width: 5%"></td>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
        </tr>
    </thead>
    <tbody>
           @foreach($post as $posts)
            <tr>
             <td>{{$posts->id}}</td>
             <td>{{$posts->jobtitle}}</td>
             <td>{{$posts->location}}</td> 
             <td>{{$posts->experience}}</td>
             <td>{{$posts->description}}</td>
             <td>{{$posts->resume}}</td>
             <td>{{$posts->salaryfrom}}</td>
             <td>{{$posts->salaryto}}</td>
             <td>{{$posts->closingdate}}</td>
             <td>{{$posts->candidatecount}}</td> 
             <td>
               <a href="admin-post/{{$posts->id}}/edit" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $posts->id }}').submit();}"><span class="fa fa-trash"></span></a>

                  <form id="delete-form-{{ $posts->id }}" action="{{ route('admin-post.destroy', $posts->id) }}" method="POST" style="display: none;">
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
    $('#posttable').DataTable();
   });

</script>
@endsection