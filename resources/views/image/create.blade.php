
@extends('layouts.app')

@section('body')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Add Images</h1>
  </div>
  <div class="card-body">
  
      <form method="post" action="{{route('admin.ImgUpload.store')}}" enctype="multipart/form-data">
        
          <div class="form-group">
             {{@csrf_field()}}

             <label for="title">Title:</label>
            
             <select name="title" id="title" class="form-control dynamic" data-dependent="catg_id">
              <option value="">Select Title</option>
             @foreach($page as $select)
                <option value="{{$select->title}}">{{$select->title}}</option>
             @endforeach
           </select>
          
           <input type="hidden" name="catg_id" id="catg_id" value="" class="form-control">
        
              <label for="id">Image:</label>
               <input type="file" name="img" id="img" class="form-control">
          </div>
          <button type="submit" class="btn btn-info">Insert</button>
      </form>
  </div>
</div>
</div>

@endsection