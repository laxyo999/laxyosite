
@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
  <div class="row">
  <div class="col-md-12 head">
    
    <a href="{{url('/admin-career')}}" class="btn btn-primary">Career</a>
    <a href="{{url('/admin-vender')}}" class="btn btn-primary">Vender Registration</a>
    <a href="{{url('/admin-contact')}}" class="btn btn-primary">Contact</a>
    <a href="{{url('/admin-feedback')}}" class="btn btn-primary">Feedback</a>
  
  <a href="{{url('/admin-post')}}" class="btn btn-primary">Job Post</a>
  </div>
</div>
<div class="row">
  @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
</div> 
<div class="row pull-right"> 
<a href="{{url('/admin-post')}}" class="btn btn-success">Back</a>
</div>
<div class="row justify-content-center">
  <div class="col-md-8">
  
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Add Post</h1>

  </div>
  <div class="card-body">
  
      <form method="post" action="{{route('admin-post.store')}}">
        
          <div class="form-group">
             {{@csrf_field()}}
             <div class="row">
                 <div class="col-md-12">
                   <label for="postname">Job Title*</label>
                   <input type="text" name="jobtitle" id="jobtitle" class="form-control"value="{{old('jobtitle')}}">
                  </div> 
                  {{-- @error('jobtitle')
                      <strong>{{$message}}</strong>
                  @enderror --}}
             </div>
             <div class="row">
               <div class="col-md-12">
                 <label for="vacancy">location*</label>
                 <input type="text" name="location" id="location" class="form-control" value="{{old('location')}}">
               </div>
             </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="vacancy">Experience*</label>
                  <select name="experience" id="experience" class="form-control">
                    <option value="fresher">fresher</option>
                    <option value="1 - 15 yrs(Experience)">1 - 15 yrs(Experience)</option>
                    <option value="15+ yrs">15+ yrs</option>
                  </select>
                </div>
                <div class="col-md-6">
                     <label for="">Resume Necessary*</label>
                     <select name="resume" id="resume" class="form-control">
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                </div>
              </div>

              
              <div class="row">
                <div class="col-md-12">
                   <label for="">Salary Range*</label>
                </div>
               
                <div class="col-md-6">
                  
                    <label for="">From:</label>
          
                     <input type="text" name="salaryfrom" id="salaryfrom" class="form-control" value="{{old('salaryfrom')}}">
            
                </div>
                 
                <div class="col-md-6">
                
                    <label for="" >To:</label>
                  
                     <input type="text" name="salaryto" id="salaryto" class="form-control" value="{{old('salaryto')}}">
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                   <label for="startdate">Closing Date*</label>
                   <input type="text" name="closingdate" id="closingdate" class="form-control" value="{{old('closingdate')}}" readonly="true">
                     @if(session()->get('warning'))
                     <span class="text-danger">
                        {{ session()->get('warning') }}  
                      </span>
                    @endif
                </div>
                <div class="col-md-6">
                  <label for="startdate">Candidate Count*</label>
                  <input type="text" name="candidatecount" id="candidatecount" class="form-control" value="{{old('candidatecount')}}">
                </div>
              </div>
              
             <div class="row">
               <div class="col-md-12">
                 <label for="">Description*</label>
                 <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{old('description')}}</textarea>
               </div>
             </div>
            </div>
          <button type="submit" class="btn btn-primary">Add Post</button>
      </form>
  </div>

  </div>
</div>
</div>

</div>
<script>
   $(document).ready(function(){
      $("#closingdate").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: 0
    });
     $('#closingdate').on('keypress',function(){
         $('#closingdate').attr('readonly',true);
     });
     
   });
   
</script>
@endsection