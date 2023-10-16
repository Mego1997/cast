<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- blog-grid12:56:42  -->
<head>
	@foreach($cast_crew_data as $i)
		<title>{{$i->cast_crew_nameen}} | Blogs </title>
	@endforeach
{{--	<title>Modelia</title>--}}
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

{{--	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
{{--	<link rel="stylesheet" href="{{asset('css/animations.css')}}">--}}
{{--	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">--}}
{{--	<link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">--}}
{{--		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">--}}

{{--		<script src="{{asset('js/vendor/modernizr-custom.js')}}"></script>--}}

		<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon-32x32.png')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-16x16.png')}}">
		<link rel="manifest" href="{{asset('assets/images/site.webmanifest')}}">
		<link rel="mask-icon" href="{{asset('images/safari-pinned-tab.svg')}}" color="#E9204F">
		<link rel="stylesheet" href="{{asset('assets/css/normalize.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/pr.animation.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/pixeicons.css')}}" />
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animations.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}"class="color-switcher-link">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

	<div id="loader" class="preloader pr__dark">
            <span class="loading">
                <span class="txt">Loading</span>
                <span class="progress">
                    <span class="bar-loading"></span>
                </span>
            </span>
	</div><!-- Preloader End -->

    <div class="pr__mobile__nav" id="navbar-mobile" data-uk-offcanvas="overlay: true; flip: true; mode: none">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 2;"></button>
            <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                <div class="container-fluid">
                    <div style="display: block!important;" class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            @foreach($nav_main_items as $i)
                                @if($i->main_item_hassub==1)
                                    <li class="nav-item ">
                                        <a style="font-size: 25px!important;" class="nav-link" href="{{$i->main_item_href}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{$i->main_item_nameEN}}
                                        </a>
                                        <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            @foreach($nav_submain_items as $ii)
                                                @if($i->ID==$ii->main_item_id)
                                                    <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                                        <a href="../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a>
                                    </li>
                                @endif
                            @endforeach
                                <li class="nav-item ">
                                    <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Lang
                                    </a>
                                    <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                        <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="blogsAR">Arabic</a></li>
                                        <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="blogs">English</a></li>

                                    </ul>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- eof main nav -->

        </div><!-- Off Canvas Bar End -->
    </div><!-- Mobile Nav End -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div class="pr__wrapper" id="site-wrapper" style="top: 0px!important;">
        <div class="pr__hero__wrap_about pr__dark bg-img-blogs" id="site-hero" >

            <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
                <div class="uk-container">
                    <div class="inner">
                        <div class="logo">
                            <a href="/main">
                                <img style="width: 150%!important;max-width: 150%!important;" src="{{asset('images/logo.png')}}" alt="img" >
                            </a>
                        </div>

                        <div class="navbar pr-font-second">
                            <!-- main nav start -->

                            <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                                <ul >
                                    @foreach($nav_main_items as $i)
                                        @if($i->main_item_hassub==1)
                                            <li style="line-height:20px!important;" class="nav-item">
                                                <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="{{$i->main_item_href}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{$i->main_item_nameEN}}
                                                </a>
                                                <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                    @foreach($nav_submain_items as $ii)
                                                        @if($i->ID==$ii->main_item_id)
                                                            <li style="padding-top: 8px"><a class="dropdown-item" href="{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else

                                            <li style="line-height:20px!important;" class="nav-item"><a  href="../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a></li>

                                        @endif
                                    @endforeach
                                        <li style="line-height:20px!important;" class="nav-item">
                                            <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Lang
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                                                <li style="padding-top: 8px"><a class="dropdown-item" href="blogsAR">Arabic</a></li>
                                                <li style="padding-top: 8px"><a class="dropdown-item" href="blogs">English</a></li>

                                            </ul>
                                        </li>
                                </ul>

                            </nav>

                            <!-- eof main nav -->

                        </div>
                        <div class="navbar-tigger" data-uk-toggle="target: #navbar-mobile">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </header><!-- Site Header End -->


            <section class="pr__hero uk-section" id="pr__hero">
                <div class="uk-container">
                    <div class="section-inner">
                        <div class="hero-content uk-grid" data-uk-grid="">
                            <div class="uk-width-2-3@s uk-margin-auto" style="color: white">
                                <p class="title uk-text-bold uk-text-large">Home</p>
                                <h2 class="title uk-heading-hero text-uppercase" style="text-align: center; color: white">Our Blogs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- Site Hero End -->

        </div><!-- Hero Wrap End -->
    </div><!-- Site Wrapper End -->

    <div id="canvas">
        <div id="box_wrapper">

            <section class="ds s-pt-70 s-pb-40 s-pb-md-70 s-py-lg-100 s-py-xl-150">
                <div class="container">

                    <div class="row c-mb-30">
                        <div class="offset-lg-1 col-lg-10">
                            <div class="row masonry-layout" id="data-wrapper">


                            </div>
                            <div class="auto-loadSVG text-center" style="color: white;padding: 40px">
                                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                                     xml:space="preserve">
                <path fill="#fff"
                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
                            </div>

                            <div class="auto-loadNoMore text-center" style="color: white;padding: 40px">
                                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                                     xml:space="preserve">
                <path fill="#fff"
                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
                            </div>
                            <div class="auto-loadMain col-lg-12 text-center">
                                <button class="panbutton" type="button" id="submit_1">Load More</button>
                            </div>


                        </div>

                    </div>

                </div>
            </section>

        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->

    <div class="pr__wrapper" id="site-wrapper">
        <footer class="pr__footer" id="site-footer">

            <div class="pr__footer__top uk-section uk-section-large">
                <div class="section-outer">
                    <div class="uk-container">
                        <div class="section-inner">
                            <div class="columns uk-grid" data-uk-grid="">
                                <div class="pr__cta column">
                                    <div class="inner">
                                        <h2 class="title uk-h1">Let's Talk?</h2>
                                    </div>
                                </div>
                                <div class="pr__cta column">
                                    <div class="inner">
                                        <a id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle="">Make an enquiry</a>
                                    </div>
                                </div>
                                <div class="pr__social column">
                                    <div class="inner">
                                        <a href="#" class="icon pr-logo-facebook"></a>
                                        <a href="#" class="icon pr-logo-twitter"></a>
                                        <a href="#" class="icon pr-logo-instagram"></a>
                                        <a href="#" class="icon pr-logo-xing"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Inner End-->
                    </div><!-- Container End-->
                </div><!-- Outer End-->
            </div><!-- Footer Top End-->
            <div class="pr__footer__center uk-section uk-section-small ">
                <div class="uk-container">

                    <footer  class="text-left text-lg-start bg-light text-muted new-footer">


                        <!-- Section: Links  -->
                        <section style="text-align: left!important;" class="op100">
                            <div class="container text-left text-md-start mt-5">
                                <!-- Grid row -->
                                <div class="row mt-3" style="margin-left: 0px!important;margin-right: 0px!important;">
                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                                        <!-- Content -->
                                        <h6 class="text-uppercase fw-bold mb-4 op100">
                                            ABOUT
                                        </h6>
                                        <p style="font-size: 14px" >

                                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                                            dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                        <hr style="color: white;background-color: white">
                                        <p style="font-size: 14px"><iframe src="{{asset('svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;+ 20 50 233 44 79</p>

                                        <p style="font-size: 14px"><iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com</p>
                                        <p style="font-size: 14px"><iframe src="{{asset('svg/location-dot-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;18 st, Touril, Mansoura</p>


                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Links -->
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            LINKS
                                        </h6>
                                        <p>
                                            <a style="font-size: 14px" href="#" class="text-reset">Home</a>
                                        </p>
                                        <p>
                                            <a style="font-size: 14px" href="/Castingstars/about-us" class="text-reset">About Us</a>
                                        </p>
                                        <p>
                                            <a style="font-size: 14px" href="/Castingstars/blogs" class="text-reset">Blogs</a>
                                        </p>
                                        <p>
                                            <a style="font-size: 14px" href="/Castingstars/contact-us" class="text-reset">Contact Us</a>
                                        </p>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Links -->
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            EXPLORE
                                        </h6>
                                        <p>
                                            <a style="font-size: 14px" href="{{ asset('../locations-country') }}" class="text-reset">Talents</a>
                                        </p>
                                        <p>
                                            <a style="font-size: 14px" href="{{ asset('../locations-country') }}" class="text-reset">Technical</a>
                                        </p>
                                        <p>
                                            <a style="font-size: 14px" href="{{ asset('../locations-country') }}" class="text-reset">Locations</a>
                                        </p>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                        <!-- Links -->
                                        <form>
                                            <h6 class="text-uppercase fw-bold mb-4">
                                                Subscribe
                                            </h6>
                                            <p style="font-size: 14px">Subscribe to receive all new
                                            </p>
                                            <div style="height: 40px;gap: 0.5rem!important;color: #495057;" class="d-flex flex-column flex-sm-row w-100 gap-2">
                                                <input style="border-radius: 0px!important;" id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                                <a style="height: 40px;width: 15%;max-width: 15%!important;" id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle=""><iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white;max-width: 20px!important;max-height: 20px!important;"></iframe></a>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </div>
                        </section>
                        <!-- Section: Links  -->
                    </footer>

                </div>
            </div>
            <div class="pr__footer__bottom uk-section">
                <div class="section-outer">
                    <div class="uk-container">
                        <div class="section-inner">
                            <div class="columns uk-grid" data-uk-grid="">
                                <div class="logo">
                                    <a href="/Castingstars">
                                        <img src="{{asset('images/logo.png')}}" alt="img" style="width: 50%">
                                    </a>
                                </div>
                                <div class="pr__links column">
                                    <div class="inner">
                                        <a href="#">Terms of use</a>
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">Cookie Policy</a>
                                    </div>
                                </div>

                                <div class="pr__copyrights column">
                                    <div class="inner">
                                        <p>2022 © <a href="http://attractionme.net/Castingstars/">Cast&Crew</a>, All rights reserved.</p>
                                    </div>
                                </div>

                            </div>
                        </div><!-- Inner End-->
                    </div><!-- Container End-->
                </div><!-- Outer End-->
            </div><!-- Footer Bottom End-->

        </footer><!-- Site Footer End-->
    </div><!-- Site Wrapper End -->
<script>
    $('.auto-loadSVG').hide();
    $('.auto-loadNoMore').hide();

    var ENDPOINT = "{{ url('/') }}";
    var page = 1;

    infinteLoadMore(page);
    $("#submit_1").click(function () {
        page++;
        infinteLoadMore(page);
    })

    function infinteLoadMore(page) {
        $.ajax({
            url: ENDPOINT + "/blogs?page=" + page,
            datatype: "html",
            data: {

            },
            type: "get",
            beforeSend: function () {
                $('.auto-loadSVG').show();
            }
        })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-loadNoMore').html("No More");
                    $('.auto-loadNoMore').show();
                    $('.auto-loadMain').hide();
                    $('.auto-loadSVG').hide();
                    return;
                }
                $("#data-wrapper").append(response);
                $('.auto-loadSVG').hide();

            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>
    <script src="{{asset('js/compressed.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
{{--	<script src="{{asset('js/switcher.js')}}"></script>--}}
    <script src="{{asset('assets/js/anime.min.js')}}"></script>
    <script src="{{asset('assets/js/uikit.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="{{asset('assets/js/validate.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>


<!-- blog-grid12:56:42  -->
</html>
