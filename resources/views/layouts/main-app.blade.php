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
  <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}" type="text/css" />
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
            <li><a href="{{url('')}}"><div>{{Lang::get('Main.Navbar.Link1')}}</div></a></li>
            <li><a href="{{url('about')}}"><div>{{Lang::get('Main.Navbar.Link2')}}</div></a></li>
            <li><a href="{{url('products')}}"><div>{{Lang::get('Main.Navbar.Link3')}}</div></a></li>
           <li><a href="{{url('services')}}"><div>{{Lang::get('Main.Navbar.Link4')}}</div></a></li>
            <li><a href="{{url('contact')}}"><div>{{Lang::get('Main.Navbar.Link5')}}</div></a></li>
            <li><a href="{{url('lang/az')}}"><img src="{{asset('images/Frontend/yangin/az.png')}}" title="Azeri" /></a></li>
            <li><a href="{{url('lang/en')}}"><img src="{{asset('images/Frontend/yangin/ingflag.png')}}" title="English" /></a></li>
            <li><a href="{{url('lang/ru')}}"><img src="{{asset('images/Frontend/yangin/ru.png')}}" title="Russian" /></a></li>
        </ul>



          </nav>

        </div>

      </div>

    </header>

@yield('content')



<!-- Footer  -->
    <footer id="footer">

      <div class="container">

        <!-- Footer Widgets  -->
        <div class="footer-widgets-wrap clearfix">
          <div class="col_two_third">
            <div class="col_one_third">
              <div class="widget clearfix">
                <p><strong>{{Lang::get('Main.Footer.cont_elaqe')}}</strong> </p>

                <div style="background: url({{asset('images/Frontend/world-map.png')}}) no-repeat center center; background-size: 100%;">
                  <address>
                    <strong>Adres:</strong><br>
                    Bakı şəh. Suraxanı ray.<br>
                    Oktay Əliyev küç. №1 <br>
                  </address>
                  <abbr title="Phone Number"><strong>Tel:</strong></abbr> 012 552 20 20<br>
                  <abbr title="Fax"><strong>Fax:</strong></abbr> 012 552 20 20<br>
                  <abbr title="Mob"><strong>Mob:</strong></abbr> 050 \ 055 \ 077 327 30 74<br>
                  <abbr title="Email Address"><strong>Email:</strong></abbr> info@qizileller.az

                </div>

              </div>

            </div>

            <div class="col_one_third">

              <div class="widget widget_links clearfix">

                <h4>{{Lang::get('Main.Footer.fotter_links')}}</h4>
 
                <ul>
                  <li><a href="{{url('')}}">{{Lang::get('Main.Navbar.Link1')}}</a></li>
                  <li><a href="{{url('about')}}">{{Lang::get('Main.Navbar.Link2')}}</a></li>
                  <li><a href="{{url('products')}}">{{Lang::get('Main.Navbar.Link3')}}</a></li>
                  <li><a href="{{url('services')}}">{{Lang::get('Main.Navbar.Link4')}}</a></li>
                  <li><a href="{{url('contact')}}">{{Lang::get('Main.Navbar.Link5')}}</a></li>

                </ul>

              </div>

            </div>

            <div class="col_one_third col_last">

              <div class="widget clearfix">
                <h4>{{Lang::get('Main.Footer.lis_title')}}</h4>

                <div id="post-list-footer">
                  <div class="spost clearfix">
                    <div class="entry-c">
                      <div class="entry-title">
                        <h4><a href="{{asset('images/Frontend/yangin/sartname/lisenziya.jpg')}}" target="_blank">{{Lang::get('Main.Footer.lis_link')}}</a></h4>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- Copyrights  -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            &copy; 2017 {{Lang::get('Main.Footer.res_huq')}} www.qizileller.az<br>
            <div class="copyright-links">Design by DaDa Creative Agency</div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <a href="#" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
            </div>

            <div class="clear"></div>

            <i class="icon-envelope2"></i> info@qizileller.az <span class="middot">&middot;</span> <i class="icon-headphones"></i> +90 (224) 493 22 21

          </div>
        </div>

      </div>


    </footer>

  </div>

  <!-- Go To Top  -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- Footer Scripts  -->
  
</div>
</body>
  <script type="text/javascript" src="{{asset('js/Frontend/functions.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
</html>


















    