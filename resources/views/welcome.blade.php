
<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Trang chủ</title>
</head>

<body>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="{{route('home')}}" class="logo m-0">Tour_21 <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="active"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="has-children">
                    <a href="#">Địa điểm</a>
                    <ul class="dropdown">
                        <li><a href="elements.html">Elements</a></li>
                        @foreach($provinces as $province)
                        <li><a href="#">{{$province->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('hotel')}}">Khách sạn</a></li>
                <li><a href="about.html">Bài viết</a></li>
                <li><a href="about.html">Hỗ trợ</a></li>
                <li><a href="contact.html">Đăng nhập/ Đăng ký </a></li>
            </ul>

            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>


<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="intro-wrap">
                    <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span class="typed-words"></span></h1>

                    <div class="row">
                        <div class="col-12">
                            <form class="form">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <select name="" id="" class="form-control custom-select">
                                            @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                        <input type="text" class="form-control" name="daterange">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                        <input type="text" class="form-control" placeholder="# số người">
                                    </div>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                        <input type="submit" class="btn btn-primary btn-block" value="Tìm kiếm">
                                    </div>
                                    <div class="col-lg-8">
                                        <label class="control control--checkbox mt-3">
                                            <span class="caption"> Lưu tim kiếm </span>
                                            <input type="checkbox" checked="checked" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" style="margin-bottom: -140px;">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="mb-2 text-white">Xem khách sạn </h2>
                            <p class="mb-4 lead text-white text-white-opacity">Bạn có thể lựa chọn khách sạn với danh sách chúng tôi đưa ra </p>
                            <p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Xem khách sạn </a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{--<div class="untree_co-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row mb-5 justify-content-center">--}}
{{--            <div class="col-lg-6 text-center">--}}
{{--                <h2 class="section-title text-center mb-3">Our Services</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row align-items-stretch">--}}
{{--            <div class="col-lg-4 order-lg-1">--}}
{{--                <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>--}}
{{--            </div>--}}

{{--            <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >--}}

{{--                <div class="feature-1 d-md-flex">--}}
{{--                    <div class="align-self-center">--}}
{{--                        <span class="flaticon-house display-4 text-primary"></span>--}}
{{--                        <h3>Beautiful Condo</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="feature-1 ">--}}
{{--                    <div class="align-self-center">--}}
{{--                        <span class="flaticon-restaurant display-4 text-primary"></span>--}}
{{--                        <h3>Restaurants & Cafe</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >--}}

{{--                <div class="feature-1 d-md-flex">--}}
{{--                    <div class="align-self-center">--}}
{{--                        <span class="flaticon-mail display-4 text-primary"></span>--}}
{{--                        <h3>Easy to Connect</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="feature-1 d-md-flex">--}}
{{--                    <div class="align-self-center">--}}
{{--                        <span class="flaticon-phone-call display-4 text-primary"></span>--}}
{{--                        <h3>24/7 Support</h3>--}}
{{--                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

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
                        <span class="" data-string="10/10">0</span>
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
            <div class="item">
                <a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>{{$province->name}}</h3>
{{--                        <span class="location">Switzerland</span>--}}
                    </div>
                    <img src="{{$province->image}}" alt="Image" class="img-fluid">
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
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Adam Aderson</h3>
                        <blockquote>
                            <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
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
                    <a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU" data-fancybox>
                        <span></span>
                    </a>
                    <img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid rounded-20">
                </figure>
            </div>

            <div class="col-lg-5">
                <h2 class="section-title text-left mb-4">Đặt phòng dễ dàng hơn với Tour_21 </h2>
                <p>content</p>

                <p class="mb-4">content2</p>

                <ul class="list-unstyled two-col clearfix">
                    <li>Các đối tác</li>
                    <li>Airlines</li>
                    <li>Car Rentals</li>
                    <li>Cruise Lines</li>
                    <li>Hotels</li>
                    <li>Railways</li>
                    <li>Travel Insurance</li>
                    <li>Package Tours</li>
                    <li>Insurance</li>
                    <li>Guide Books</li>
                </ul>
                <p class="mb-4">Hãy cùng trải nghiệm với Tour_21 ngay thôi !</p>
                <p><a href="#" class="btn btn-primary">Đăng kí</a></p>


            </div>
        </div>
    </div>
</div>



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

<div class="site-footer">
    <div class="inner first">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="widget">
                        <h3 class="heading">Về chúng tôi</h3>
                        <p>content</p>
                    </div>
                    <div class="widget">
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
{{--                            <li><a href="#"><span class="icon-linkedin"></span></a></li>--}}
{{--                            <li><a href="#"><span class="icon-dribbble"></span></a></li>--}}
{{--                            <li><a href="#"><span class="icon-pinterest"></span></a></li>--}}
{{--                            <li><a href="#"><span class="icon-apple"></span></a></li>--}}
                            <li><a href="#"><span class="icon-google"></span></a></li>
                        </ul>
                    </div>
                </div>
{{--                <div class="col-md-6 col-lg-2 pl-lg-5">--}}
{{--                    <div class="widget">--}}
{{--                        <h3 class="heading">Pages</h3>--}}
{{--                        <ul class="links list-unstyled">--}}
{{--                            <li><a href="#">Blog</a></li>--}}
{{--                            <li><a href="#">About</a></li>--}}
{{--                            <li><a href="#">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-2">--}}
{{--                    <div class="widget">--}}
{{--                        <h3 class="heading">Resources</h3>--}}
{{--                        <ul class="links list-unstyled">--}}
{{--                            <li><a href="#">Blog</a></li>--}}
{{--                            <li><a href="#">About</a></li>--}}
{{--                            <li><a href="#">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-4 col-lg-4" >
                    <div class="widget">
                        <h3 class="heading">Liên hệ </h3>
                        <ul class="list-unstyled quick-info links">
                            <li class="email"><a href="#">mail@example.com</a></li>
                            <li class="phone"><a href="#">034548xxxx</a></li>
                            <li class="address"><a href="#"> số xx, quận Hà Đông, tp Hà Nội </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="inner dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>

<script src="js/typed.js"></script>
<script>
    $(function() {
        var slides = $('.slides'),
            images = slides.find('img');

        images.each(function(i) {
            $(this).attr('data-id', i + 1);
        })

        var typed = new Typed('.typed-words', {
            strings: ["Hà Nội."," Đà Nẵng."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true,
            preStringTyped: (arrayPos, self) => {
                arrayPos++;
                console.log(arrayPos);
                $('.slides img').removeClass('active');
                $('.slides img[data-id="'+arrayPos+'"]').addClass('active');
            }

        });
    })
</script>

<script src="js/custom.js"></script>

</body>

</html>
