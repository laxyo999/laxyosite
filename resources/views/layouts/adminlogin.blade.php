<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     @yield('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    
    <!-- Fonts -->

    <link rel="dns-prefetch" href="{{url('//fonts.gstatic.com')}}">
    <link href="{{url('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
   
  
<!-- Styles -->
   <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  


    <!-- Styles -->
</head>
<body style="padding-top: 100px;padding-bottom: 50px;background: whitesmoke">
	    @yield('content')
     
   
         @yield('js')
</body>
</html>
