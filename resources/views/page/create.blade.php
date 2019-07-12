
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
    <h1>Add Pages</h1>
  </div>
  <div class="card-body">
  
      <form method="post" action="{{route('admin.Page.store')}}">
        
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
        
              <input type="hidden" name="slug" id="slug" class="form-control">
             
              <label for="id">Content:</label>
              <textarea class="form-control" name="content" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Insert</button>
      </form>
  </div>
</div>
</div>
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