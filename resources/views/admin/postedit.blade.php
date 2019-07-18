
@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Page Update here</h1>
  </div>
  <div class="card-body">
   
      <form method="post" action="{{action('PostController@update', $post->id)}}">
         <div class="form-group">
              {{@csrf_field()}}          
              <input type="hidden" name="_method" value="PATCH">
              <label for="postname">Job Title*</label>
              <input type="text" name="jobtitle" id="jobtitle" class="form-control" value="{{$post->jobtitle}}">
              <label for="vacancy">location*</label>
              <input type="text" name="location" id="location" class="form-control" value="{{$post->location}}">
              <label for="vacancy">Experience*</label>
              <select name="experience" id="experience" class="form-control">
                <option value="fresher">fresher</option>
                <option value="1 - 15 yrs(Experience)">1 - 15 yrs(Experience)</option>
                <option value="15+ yrs">15+ yrs</option>
              </select>
              <label for="">Description*</label>
              <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{$post->description}}</textarea>
              <label for="">Resume Necessary*</label>
               <select name="resume" id="resume" class="form-control">
                <option value="">Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <label for="">Salary Range*</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                  <div class="col-md-4">
                    <label for="" style="float: right">From:</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="salaryfrom" id="salaryfrom" value="{{$post->salaryfrom}}" class="form-control">
                   </div>
                   </div>
                </div>
                 
                <div class="col-md-6">
                  <div class="row">
                  <div class="col-md-4">
                    <label for="" style="float: right">To:</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="salaryto" id="salaryto" value="{{$post->salaryto}}" class="form-control">
                   </div>
                   </div>
                </div>
              </div>
              
              <label for="startdate">Closing Date*</label>
              <input type="date" name="closingdate" id="closingdate" value="{{$post->closingdate}}" class="form-control">
              <label for="">Candidate Count*</label>
              <input type="text" name="candidatecount" id="candidatecount" value="{{$post->candidatecount}}" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Add Post</button>
      </form>
  </div>
</div>
</div>

@endsection