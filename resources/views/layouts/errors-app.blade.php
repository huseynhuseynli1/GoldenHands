<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Qizil Eller') }}</title>


    <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/Frontend/bootstrap.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/dark.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/font-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/magnific-popup.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/Frontend/responsive.css')}}" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- External JavaScripts --> 
  <script type="text/javascript" src="{{asset('js/Frontend/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/Frontend/plugins.js')}}"></script>

 

</head>

<body class="stretched">
    <div id="app">
  <!-- Document Wrapper -->
  <div id="wrapper" class="clearfix">

    <!-- Header  -->
    <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">

      <div id="header-wrap">

        <div class="container clearfix">

          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

          <!-- Logo  -->
          <div id="logo">
            <a href="index-2.html" class="standard-logo" data-dark-logo="{{asset('images/Frontend/logo1.png')}}"><img src="{{asset('images/Frontend/logo1.png')}}" alt="Dalgıç"></a>
            <a href="index-2.html" class="retina-logo" data-dark-logo="{{asset('images/Frontend/logo@2x1.png')}}"><img src="{{asset('images/Frontend/logo%402x1.png')}}" alt="Dalgıç"></a>
          </div>

          <!-- Primary Navigation --> 
          <nav id="primary-menu">

        <ul>
            <li><a href="{{url('')}}"><div>Ana Səhifə</div></a></li>
            <li><a href="{{url('about')}}"><div>Haqqımızda</div></a></li>
              <li><a href="{{url('products')}}"><div>Məhsullarımız</div></a></li>
            <li><a href="{{url('contact')}}"><div>Bİzİmlə Əlaqə</div></a></li>
        </ul>



          </nav>

        </div>

      </div>

      </header>

      @yield('content')


    </div>
    </div>
</body>
  <script type="text/javascript" src="{{asset('js/Frontend/functions.js')}}"></script>
</html>