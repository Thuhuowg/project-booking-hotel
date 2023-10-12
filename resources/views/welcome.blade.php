

@extends('layoutClient.feHome')
@section('content')


<div class="untree_co-section count-numbers py-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="9313">0</span>
                    </div>
                    <span class="caption">Số chuyến đi </span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="8492">0</span>
                    </div>
                    <span class="caption">Khách hàng</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="" data-number="100">0</span>
                    </div>
                    <span class="caption">Đội ngũ nhân viên</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="counter-wrap">
                    <div class="counter">
                        <span class="">5 <i class="icon-star"></i> </span>

                    </div>
                    <span class="caption">Đánh giá </span>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="untree_co-section">
    <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-lg-7"><h2 class="section-title text-center">Các địa điểm nổi bật</h2></div>
        </div>

{{--        <div class="owl-carousel owl-3-slider">--}}

{{--            <div class="item">--}}
{{--                <a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">--}}
{{--                    <div class="media-text">--}}
{{--                        <h3>Pragser Wildsee</h3>--}}
{{--                        <span class="location">Italy</span>--}}
{{--                    </div>--}}
{{--                    <img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="item">--}}
{{--                <a class="media-thumb" href="images/hero-slider-2.jpg" data-fancybox="gallery">--}}
{{--                    <div class="media-text">--}}
{{--                        <h3>Oia</h3>--}}
{{--                        <span class="location">Greece</span>--}}
{{--                    </div>--}}
{{--                    <img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="item">--}}
{{--                <a class="media-thumb" href="images/hero-slider-3.jpg" data-fancybox="gallery">--}}
{{--                    <div class="media-text">--}}
{{--                        <h3>Perhentian Islands</h3>--}}
{{--                        <span class="location">Malaysia</span>--}}
{{--                    </div>--}}
{{--                    <img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}


{{--            <div class="item">--}}
{{--                <a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">--}}
{{--                    <div class="media-text">--}}
{{--                        <h3>Rialto Bridge</h3>--}}
{{--                        <span class="location">Italy</span>--}}
{{--                    </div>--}}
{{--                    <img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="item">--}}
{{--                <a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">--}}
{{--                    <div class="media-text">--}}
{{--                        <h3>San Francisco, United States</h3>--}}
{{--                        <span class="location">United States</span>--}}
{{--                    </div>--}}
{{--                    <img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">--}}
{{--                </a>--}}
{{--            </div>--}}
@foreach($provinces as $province)
            <div class="item mt-5">
                <a class="media-thumb" href="{{$province->image}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>{{$province->name}}</h3>
{{--                        <span class="location">Switzerland</span>--}}
                    </div>
                    <img src="{{$province->image}}" alt="Image" class="img-fluid" width="1110px">
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>


<div class="untree_co-section testimonial-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="section-title text-center mb-5">Đánh giá về trải nghiệm</h2>

                <div class="owl-single owl-carousel no-nav">
                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Bùi Đào Đại Nghĩa</h3>

                        <blockquote>
                            <span>Đánh giá:</span> <span class="text-success">tốt</span>
                            <p>&ldquo;Tôi rât hài lòng về trải nghệm đặt phòng của trang web&rdquo;</p>
                        </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Lukas Devlin</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Kayla Bryant</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


{{--<div class="untree_co-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center text-center mb-5">--}}
{{--            <div class="col-lg-6">--}}
{{--                <h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">--}}
{{--                <div class="media-1">--}}
{{--                    <a href="#" class="d-block mb-3"><img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid"></a>--}}
{{--                    <span class="d-flex align-items-center loc mb-2">--}}
{{--							<span class="icon-room mr-3"></span>--}}
{{--							<span>Italy</span>--}}
{{--						</span>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <div>--}}
{{--                            <h3><a href="#">Rialto Mountains</a></h3>--}}
{{--                            <div class="price ml-auto">--}}
{{--                                <span>$520.00</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">--}}
{{--                <div class="media-1">--}}
{{--                    <a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>--}}
{{--                    <span class="d-flex align-items-center loc mb-2">--}}
{{--							<span class="icon-room mr-3"></span>--}}
{{--							<span>United States</span>--}}
{{--						</span>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <div>--}}
{{--                            <h3><a href="#">San Francisco</a></h3>--}}
{{--                            <div class="price ml-auto">--}}
{{--                                <span>$520.00</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">--}}
{{--                <div class="media-1">--}}
{{--                    <a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>--}}
{{--                    <span class="d-flex align-items-center loc mb-2">--}}
{{--							<span class="icon-room mr-3"></span>--}}
{{--							<span>Malaysia</span>--}}
{{--						</span>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <div>--}}
{{--                            <h3><a href="#">Perhentian Islands</a></h3>--}}
{{--                            <div class="price ml-auto">--}}
{{--                                <span>$750.00</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">--}}
{{--                <div class="media-1">--}}
{{--                    <a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>--}}

{{--                    <span class="d-flex align-items-center loc mb-2">--}}
{{--							<span class="icon-room mr-3"></span>--}}
{{--							<span>Switzerland</span>--}}
{{--						</span>--}}

{{--                    <div class="d-flex align-items-center">--}}
{{--                        <div>--}}
{{--                            <h3><a href="#">Lake Thun</a></h3>--}}
{{--                            <div class="price ml-auto">--}}
{{--                                <span>$520.00</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-lg-6">
                <figure class="img-play-video">
                    <a id="play-video" class="video-play-button" href="https://www.youtube.com/shorts/Lu-UCKVcj5I" data-fancybox>
                        <span></span>
                    </a>
                    <img src="images/test.jpg" alt="Image" class="img-fluid rounded-20">
                </figure>
            </div>

            <div class="col-lg-5">
                <h2 class="section-title text-left mb-4">Đặt phòng dễ dàng hơn với Tour_21 </h2>
                <p>Tận hưởng 1 chuyến đi cùng chúng tôi </p>

                <p class="mb-4">Quy mô các khách sạn</p>

                <ul class="list-unstyled two-col clearfix">
                    <li>HANZ Hanoi de Maison Grand</li>
                    <li>Ivy Hotel & Apartment</li>
                    <li>Le House Boutique Hotel</li>
                    <li>Riverside Bamboo Resort Hoi An</li>
                    <li>The Hotel Nicecy</li>
                    <li>Lasera Hotel</li>

                </ul>
                <p class="mb-4">Hãy cùng trải nghiệm với Tour_21 ngay thôi !</p>
                <p><a href="#" class="btn btn-primary">Đăng kí</a></p>


            </div>
        </div>
    </div>
</div>


@endsection
{{--<div class="py-5 cta-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-md-12">--}}
{{--                <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>--}}
{{--                <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>--}}
{{--                <p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

