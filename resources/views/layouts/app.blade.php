<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>GACAP</title>
  <link rel = "icon" href =  "/images/acap_mini.png"

type = "image/x-icon"> 

  <!-- Styles -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body class="app">

     @include('admin.partials.spinner')
<div >

    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv p-3" style='background-image: url("/images/bg.jpg")'>
        
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 scrollable pos-r" style='min-width: 320px;background-color:#fff;'>
        @yield('content')
      </div>
    </div> 
  </div>
</body>
</html>
