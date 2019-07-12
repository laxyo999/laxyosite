
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
    <h1>Page Update here</h1>
  </div>
  <div class="card-body">
   
      <form method="post" action="{{action('ImgUploadController@update', $page->id)}}">
         <div class="form-group">
              {{@csrf_field()}}          
             <input type="hidden" name="_method" value="PATCH">
             <label for="id">Title:</label>
            <select name="title" id="title" class="form-control">
               <option value="{{$page->title}}">{{$page->title}}</option>
            </select>
           <input type="hidden" name="catg_id" id="catg_id">
             
              <label for="id">Image:</label>
              <input type="file" name="img" id="img" class="form-control" value="images/{{$page->imagepath}}">
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
</div>
@endsection