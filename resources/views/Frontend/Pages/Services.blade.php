@extends('layouts/main-app')


@section('content')

<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>{{Lang::get('Main.Navbar.Link4')}}</h1>
	</div>

</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Shop
			============================================= -->
			<div id="shop" class="product-1 clearfix">


<div class="product clearfix">
<div class="product-image">
	<a href="{{ asset('images/Frontend/yangin/sprinkler.png') }}" data-lightbox="image"><img src="{{ asset('images/Frontend/yangin/sprinkler.png') }}" alt="Checked Short Dress"></a>

</div>


         <div class="product-desc">


	<div class="product-title"><h3>Köpük Tankları</h3></div>


            	<p>Köpük; basınçlı su + Köpük Konsantresi + Hava karışımından mekanik olarak elde edilen, yağ veya sudan daha düşük yoğunlukta, düşey veya yatay yüzeylere yapışabilen, yanan sıvının üzerinde bir örtü meydana getirerek havanın içeri girmesini, patlayabilen gazların dışarı çıkmasını önleyen, bu özelliklerini uzun süre devam ettiren, küçük kabarcıklardan meydana gelen kararlı bir kütledir. Köpük; Sıvı madde yangınlarının en ideal söndürme maddesidir. </p>

		  </div>
	       </div>
	</div><!-- #shop end -->
        </div>
</div>
</section><!-- #content end -->

	<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


@endsection