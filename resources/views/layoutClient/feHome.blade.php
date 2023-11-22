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

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title','Trang chủ') </title>
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
                            <li><a href="{{route('province', ['id'=>$province->id])}}">{{$province->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="">Khách sạn</a></li>
                <li><a href="about.html">Bài viết</a></li>
                <li><a href="about.html">Hỗ trợ</a></li>
                <li>@if (Route::has('login'))
                        @auth
                            <span class="has-children" >
                            <a href="#" class=" text-sm  text-white underline">{{\Illuminate\Support\Facades\Auth::user()->full_name}}</a>
                        <ul class="dropdown">
                            <li><a href="#">Đơn đặt phòng</a></li>
                            <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                        </ul></span>
                        @else
                            @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="text-sm text-white underline"> Đăng Nhập </a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Đăng kí</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </li>
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
                    <h1 class="mb-5"><span class="d-block"> Hãy trải nghiệm  </span> đến với <span class="typed-words"></span></h1>

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
                                    {{--                                    <div class="col-lg-8">--}}
                                    {{--                                        <label class="control control--checkbox mt-3">--}}
                                    {{--                                            <span class="caption"> Lưu tim kiếm </span>--}}
                                    {{--                                            <input type="checkbox" checked="checked" />--}}
                                    {{--                                            <div class="control__indicator"></div>--}}
                                    {{--                                        </label>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@section('search')
            <div class="col-lg-5" style="margin-bottom: -140px;">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="mb-2 text-white">Xem khách sạn </h2>
                            <p class="mb-4 lead text-white text-white-opacity">Bạn có thể lựa chọn khách sạn với danh sách chúng tôi đưa ra </p>
                            <p class="mb-0"><a href="" class="btn btn-outline-white text-white btn-md font-weight-bold">Xem khách sạn </a></p>
                        </div>
                    </div>
                </div>
            </div>
            @show
        </div>
    </div>
</div>

@section('content')
@show

<div class="site-footer">
    <div class="inner first">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="widget">
                        <h3 class="heading">Về chúng tôi</h3>
                        <p>Đem lại trải nghiệm cho khách hàng, <br>đội ngũ nhân viên chúng tôi luôn sẵn sàng hỗ trợ<br> tổng đài 1900 100xx</p>
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
                            <li class="email"><a href="#">huogthu552@gmail.com</a></li>
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
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>by<a href="#" class="link-highlight">Team-11</a> <!-- License information: https://untree.co/license/ -->Distributed By <a href="#" target="_blank" >Thu Huog</a>
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

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>

<script src="{{asset('js/typed.js')}}"></script>
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

<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>

