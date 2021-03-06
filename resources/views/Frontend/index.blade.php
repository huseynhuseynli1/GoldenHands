@extends('layouts/main-app')


@section('content')
 


        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
             
                @foreach($slider as $sliders)

                    <div class="swiper-slide dark" style="background-image: url({{ asset('images/Frontend/yangin/'. $sliders->path.'') }}">
{{--                         <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">{{$sliders->img_title}}</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">{{$sliders->img_head}}</p>
                            </div>
                        </div> --}}
                    </div>

                    @endforeach

                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div id="slide-number">
                    <div id="slide-number-current"></div><span>/</span>
                    <div id="slide-number-total"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <script>
                jQuery(document).ready(function ($) {
                    var swiperSlider = new Swiper('.swiper-parent', {
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        autoplay: 4000,
                        speed: 600,
                        loop: true,
                        onSwiperCreated: function (swiper) {
                            $('[data-caption-animate]').each(function () {
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if (toAnimateDelay) {
                                    toAnimateDelayTime = Number(toAnimateDelay) + 750;
                                } else {
                                    toAnimateDelayTime = 750;
                                }
                                if (!$toAnimateElement.hasClass('animated')) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function () {
                                        $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function (swiper) {
                            $('#slide-number-current').html(swiper.activeLoopIndex + 1);
                            $('[data-caption-animate]').each(function () {
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function (swiper) {
                            $('#slider').find('.swiper-slide').each(function () {
                                if ($(this).find('video').length > 0) {
                                    $(this).find('video').get(0).pause();
                                }
                                if ($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').pauseYTP();
                                }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function () {
                                if ($(this).find('video').length > 0) {
                                    if ($(this).find('video').get(0).currentTime != 0) $(this).find('video').get(0).currentTime = 0;
                                }
                                if ($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').getPlayer().seekTo($(this).find('.yt-bg-player').attr('data-start'));
                                }
                            });
                            if ($('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0) {
                                $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play();
                            }
                            if ($('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0) {
                                $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP();
                            }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function () {
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if (toAnimateDelay) {
                                    toAnimateDelayTime = Number(toAnimateDelay) + 300;
                                } else {
                                    toAnimateDelayTime = 300;
                                }
                                if (!$toAnimateElement.hasClass('animated')) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function () {
                                        $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function (e) {
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function (e) {
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });

                    $('#slide-number-current').html(swiperSlider.activeLoopIndex + 1);
                    $('#slide-number-total').html($('#slider').find('.swiper-slide:not(.swiper-slide-duplicate)').length);
                });
            </script>

        </section>

        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">


                    <div class="col_one_third nobottommargin">
                        <div class="feature-box fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-stack i-alt"></i></a>
                            </div>
                            <h3>{{Lang::get('Main.Services.ser1_title')}}</h3>
                            <p>{{Lang::get('Main.Services.ser1_body')}}</p>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-tint i-alt"></i></a>
                            </div>
                            <h3>{{Lang::get('Main.Services.ser2_title')}}</h3>
                            <p>{{Lang::get('Main.Services.ser2_body')}}</p>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-text-width i-alt"></i></a>
                            </div>
                            <h3>{{Lang::get('Main.Services.ser3_title')}}</h3>
                            <p>{{Lang::get('Main.Services.ser3_body')}}</p>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="line"></div>

                    <div id="oc-clients-full" class="owl-carousel image-carousel">
        


        @foreach($partner as  $partners)
        
        <a href="#"><img src="{{ asset('images/Frontend/yangin/ref/'.$partners->path.'') }}" alt="Clients"></a>

        @endforeach

                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {

                            var ocClients = $("#oc-clients-full");

                            ocClients.owlCarousel({
                                items: 6,
                                margin: 30,
                                loop: true,
                                nav: false,
                                autoplay: true,
                                dots: false,
                                autoplayHoverPause: true,
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    480: {
                                        items: 3
                                    },
                                    768: {
                                        items: 4
                                    },
                                    992: {
                                        items: 5
                                    },
                                    1200: {
                                        items: 6
                                    }
                                }
                            });

                        });
                    </script>

                </div>

            </div>

        </section>
        <!-- #content end -->

    @endsection