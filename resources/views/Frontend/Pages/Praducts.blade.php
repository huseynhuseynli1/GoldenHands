@extends('layouts/main-app')


@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>{{Lang::get('Main.Navbar.Link3')}}</h1>
			</div>

		</section><!-- #page-title end -->

	<!-- Content
	============================================= -->
<section id="content">

  <div class="content-wrap">

   <div class="container clearfix">

		<!-- Portfolio Items
		============================================= -->
<div id="portfolio" class="portfolio-3 clearfix">
	@foreach($product as $products)
	<article class="portfolio-item pf-media pf-icons">
		<div class="portfolio-image">
			<a href="portfolio-single.html">
				<img src="{{ asset('images/Frontend/yangin/resertifikalar/'.$products->path.'') }}" alt="Open Imagination">
			</a>
			<div class="portfolio-overlay">
				<a href="{{ asset('images/Frontend/yangin/resertifikalar/'.$products->overlay_path.'') }}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
			</div>
		</div>
{{-- 		<div class="portfolio-desc">
			<h3>{{$products->img_name}}</h3>
		</div> --}}
	</article>
	@endforeach




		</div><!-- #portfolio end -->
       </div>

  </div>

</section><!-- #content end -->








@endsection