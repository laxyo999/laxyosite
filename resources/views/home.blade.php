@extends('layouts.admin')

@section('content')
<style>
    #uper{
        margin-bottom: 40px;
    }
</style>
<div class="container-fluid">
    <div class="row" id="uper">
          <div class="col-md-12 head">
            <a href="{{url('/home')}}" class="btn btn-primary">Home</a>
            <a href="{{url('/admin-career')}}" class="btn btn-primary">Career</a>
            <a href="{{url('/admin-vender')}}" class="btn btn-primary">Vender Registration</a>
            <a href="{{url('/admin-contact')}}" class="btn btn-primary">Contact</a>
            <a href="{{url('/admin-feedback')}}" class="btn btn-primary">Feedback</a>
          
            <a href="{{url('/admin-post')}}" class="btn btn-primary">Job Post</a>
          </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
