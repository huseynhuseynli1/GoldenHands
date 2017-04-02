@extends('layouts/main-app')


@section('content')



<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url({{ URL::asset('images/Frontend/yangin/bina.png') }}) ; background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{Lang::get('Main.Navbar.Link2')}}</h1>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

<div class="content-wrap">

	<div class="container clearfix">

		<div class="col_five_sixth">

			<div class="heading-block fancy-title nobottomborder title-bottom-border">
				<h4>QIZIL ƏLLəR </h4>
			</div>

			<p>{{Lang::get('Main.About.about_info')}}</p>

        </div>



	</div>

	<div class="container clearfix">

		<div class="clear"></div>

		<div class="heading-block center">
			<h4>{{Lang::get('about.partners')}}</h4>
		</div>



<ul class="clients-grid grid-6 nobottommargin clearfix">
        @foreach($partner as  $partners)

        
              <li><a href="#"><img src="{{ asset('images/Frontend/yangin/ref/'.$partners->path.'') }}" alt="Clients"></a></li>


        @endforeach
	</ul>

</div>



</div>

</section><!-- #content end -->




@endsection