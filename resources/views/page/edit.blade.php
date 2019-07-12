
@extends('layouts.app')

@section('body')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Page Update here</h1>
  </div>
  <div class="card-body">
   
      <form method="post" action="{{action('PageController@update', $page->id)}}">
         <div class="form-group">
              {{@csrf_field()}}          
             <input type="hidden" name="_method" value="PATCH">
             <label for="id">Title:</label>
            <select name="title" id="title" class="form-control">
              <option value="">Select Title</option>
              <option value="{{$page->title}}">{{$page->title}}</option>
            </select>
            <input type="hidden" name="slug" value="" id="slug" class="form-control">
             
              <label for="id">Content:</label>
              <textarea class="form-control" name="content" rows="5" id="content-body">{{$page->content}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>

    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'content-body' );
    </script>

<script>
   $(document).ready(function(){
    $('#title').change(function(){
        
        var str = $(this).val();
        var trims = $.trim(str);
        var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g,'-').replace(/^-|-$/g,'');
        $('#slug').val(slug.toLowerCase() );
    });
  });
</script>
@endsection