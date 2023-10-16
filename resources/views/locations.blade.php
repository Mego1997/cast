<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_nameen}} | Locations</title>
    @endforeach
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link rel="apple-touch-icon" sizes="180x180" href="../{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="../{{asset('assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="../{{asset('assets/images/favicon-16x16.png')}}">
    <link rel="manifest" href="../{{asset('assets/images/site.webmanifest')}}">
    <link rel="mask-icon" href="../{{asset('images/safari-pinned-tab.svg')}}" color="#E9204F">
    <link rel="stylesheet" href="../{{asset('assets/css/normalize.min.css')}}" />
    <link rel="stylesheet" href="../{{asset('assets/css/pr.animation.css')}}" />
    <link rel="stylesheet" href="../{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="../{{asset('assets/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="../{{asset('assets/css/fonts.css')}}" />
    <link rel="stylesheet" href="../{{asset('assets/css/pixeicons.css')}}" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="../{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="../{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="../{{asset('css/main.css')}}"class="color-switcher-link">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="../{{asset('assets/css/style.css')}}" rel="stylesheet">

    <style>
        option:hover{
            background-color: #E9204F;
        }
    </style>
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
                                    <a style="font-size: 25px!important;" class="nav-link" href="../{{$i->main_item_href}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{$i->main_item_nameEN}}
                                    </a>
                                    <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($nav_submain_items as $ii)
                                            @if($i->ID==$ii->main_item_id)
                                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                                    <a href="../../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a>
                                </li>
                            @endif
                        @endforeach
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lang
                            </a>
                            <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../locations-countryAR">Arabic</a></li>
                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../locations-country">English</a></li>

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
    <div class="pr__hero__wrap pr__dark"  id="site-hero">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/Castingstars">
                            <img style="width: 150%!important;max-width: 150%!important;" src="../{{asset('images/logo.png')}}" alt="img" >
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul >
                                @foreach($nav_main_items as $i)
                                    @if($i->main_item_hassub==1)
                                        <li style="line-height:20px!important;" class="nav-item">
                                            <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="../{{$i->main_item_href}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{$i->main_item_nameEN}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;" class="nav-item"><a  href="../../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a></li>

                                    @endif
                                @endforeach
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Lang
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../locations-countryAR">Arabic</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../locations-country">English</a></li>

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

    </div><!-- Hero Wrap End -->
</div><!-- Site Wrapper End -->

<div id="canvas">
    <div id="box_wrapper">
        <section class="ds gallery-4 s-py-70 s-py-lg-100 s-py-xl-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 animate" data-animation="fadeInDown" data-delay="150">

                        <!-- Search Box Fillters-->
                        <div class="parent" data-animation="fadeInDown" data-delay="150" >
                            <div class="child1">
                                <div class="widget widget_search">
                                    <h3 class="widget-title">Search</h3>
                                    <form role="search" method="get" class="search-form" action="http://webdesign-finder.com/">
                                        <label for="search-form-widget">
                                            <span class="screen-reader-text">Search for:</span>
                                        </label>
                                        <input type="search" id="search" class="search-field" placeholder="search keyword" name="search" value="">
                                        <button class="search-submit WSB">
                                            <span class="screen-reader-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Eof Search Box Fillters-->

                        <!-- Check Box Fillters-->
                        <div class="row isotope-wrapper  parent RCF" data-animation="fadeInDown" data-delay="150" id="Checkfilters">

                            <!-- Type Fillters-->
                            <div class="col-md-3 col-sm-6 child TYP" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <!--onfocus="this.size=10;" onblur="this.size=0;" onchange=" this.blur()"  onchange='this.size=1; this.blur();-->

                                    <select name="Type" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Type" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="-1" onfocus='handleonfocus(this)' onblur='handleonblur(this)'>Type</option>
                                        @foreach($AllTypes as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" onfocus='handleonfocus(this)' onblur='handleonblur(this)'>{{$i->type_nameEN}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- State Fillters-->
                            <div class="col-md-3 col-sm-6 child RSTL" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Governorate" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="state-dropdown" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="-1">State</option>
                                        @if( $CID == 59)
                                            @foreach($AllStates as $i)
                                                <option class="Statedropdown" value="{{$i->id}}">{{$i->governorate_name_en}}</option>
                                            @endforeach
                                        @else
                                            @foreach($all_states as $i)
                                                <option class="Statedropdown" value="{{$i->id}}">{{$i->name_en}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <!-- City Fillters-->
                            <div class="col-md-3 col-sm-6 child CIT" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="City" id="city-dropdown" onfocus='handleonfocus(this)' onblur='handleonblur(this)' class="postform" style="text-align: center!important;">

                                        @if( $CID == 59)
                                            <option hidden class="Statedropdown" value="">City</option>
                                        @endif
                                    </select>
                                </div>

                            </div>
                            <!-- Area Fillters-->
                            <div class="col-md-3 col-sm-6 child ARE" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Area" onfocus='handleonfocus(this)' onblur='handleonblur(this)'  id="Area" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="">Area</option>
                                        <option class="Statedropdown" value="50to100">50 To 100</option>
                                        <option class="Statedropdown" value="100to200">100 To 200</option>
                                        <option class="Statedropdown" value="200to300">200 To 300</option>
                                        <option class="Statedropdown" value="300to400">300 To 400</option>
                                        <option class="Statedropdown" value="400to500">400 To 500</option>
                                        <option class="Statedropdown" value="500+">500 +</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Eof Check Box Fillters-->

                        <!-- Locations View-->
                        <div id="AllLocations">
                            <div id="data-wrapper" class="row " >


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
                            <div class="auto-loadSe col-lg-12 text-center">
                                <button class="panbutton" type="button" id="submit_2">Load More</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
            <div class="fw-divider-space hidden-xs hidden-above-lg mt-30"></div>
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
                                    <p style="font-size: 14px"><iframe src="../{{asset('svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;+ 20 50 233 44 79</p>

                                    <p style="font-size: 14px"><iframe src="../{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com</p>
                                    <p style="font-size: 14px"><iframe src="../{{asset('svg/location-dot-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;18 st, Touril, Mansoura</p>


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
                                        <a style="font-size: 14px" href="{{ asset('../talent-country') }}" class="text-reset">Talents</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="{{ asset('../services-country') }}" class="text-reset">Technical</a>
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
                                            <a style="height: 40px;width: 15%;max-width: 15%!important;" id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle=""><iframe src="../{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white;max-width: 20px!important;max-height: 20px!important;"></iframe></a>
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
                                    <img src="../{{asset('images/logo.png')}}" alt="img" style="width: 50%">
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
    <div id="pr__contact__form" class="pr__contact__form uk-modal-full" data-uk-modal="">
        <div class="uk-modal-dialog" data-uk-height-viewport="">
            <div class="form-outer">
                <div class="uk-container uk-container-xsmall">
                    <div class="form-inner uk-position-relative">
                        <button class="uk-modal-close-full" type="button" data-uk-close="ratio: 2;" style="color: black"><span>Close</span>
                        </button>
                        <h2 class="uk-modal-title uk-h1">Let's Talk?</h2>
                        <p>Let’s make something awesome togheter</p>
                        <form class="pr__contact pr__form" action="includes/sendemail.php">
                            <div class="pr__form__group">
                                <label for="name">Your Name <span class="required">*</span></label>
                                <input class="pr-input" id="name" name="name" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="email">Your E-Mail <span class="required">*</span></label>
                                <input class="pr-input" id="email" name="email" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="subject">Your Subject <span class="required">*</span></label>
                                <input class="pr-input" id="subject" name="subject" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="message">Your message <span class="required">*</span></label>
                                <textarea class="pr-textarea" id="message" name="message"></textarea>
                            </div>
                            <p class="pr__form__group uk-margin-large" style="margin-bottom: 100px">
                                <button class="uk-button uk-button-large uk-button-primary" type="submit">Send message
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Contact Form Popup End -->
</div><!-- Site Wrapper End -->
<script src="../{{asset('js/compressed.js') }}"></script>
<script src="../{{asset('js/main.js') }}"></script>
<!-- All Fillters Scripts -->
<script type="text/javascript">
    $('.auto-loadSVG').hide();
    $('.auto-loadNoMore').hide();
    $('.auto-loadSe').hide();


    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    var CID= "{{ $CID }}";


    infinteLoadMore(page);
    $("#submit_1").click(function () {
        page++;
        infinteLoadMore(page);
    })

    function infinteLoadMore(page) {
        $.ajax({
            url: ENDPOINT + "/locations/"+CID+"?page=" + page,
            datatype: "html",
            data: {
                CID:CID

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
    var search ;
    var fcity = [];
    var fgov = [];
    var ftype=[];
    var fmax_area;
    var fmin_area;
    var ENDPOINT = "{{ url('/') }}";
    page2 = 1;
    $("#submit_2").click(function () {
        page2++;
        infinteLoadMore2(page2);

    })
    function infinteLoadMore2(page2) {


        $.ajax({
            url: ENDPOINT + "/search-locations?page=" + page2,
            datatype: "html",
            data: {
                search:search,
                ftype:ftype,
                fcity:fcity,
                fgov:fgov,
                fmax_area:fmax_area,
                fmin_area:fmin_area,
                CID:CID

            },
            type: "get",
            beforeSend: function () {
                $('.auto-loadll').show();
            }
        })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-loadNoMore').html("No More");
                    $('.auto-loadSe').hide();
                    $('.auto-loadNoMore').show();
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
    /**********************************************************Sliders Script************************************************************/
    /***Sliders and Serach Fillters Script**/
    $(document).ready(function(){
        /**************Search Box Script*************/
        $('#search').keyup(function () {
            $('.auto-loadSe').show();
            var search1 = $('#search').val();
            search=search1;
            if(search==""){
                $("#data-wrapper").empty().html();
                page = 1;
                infinteLoadMore(page)
                $('.auto-loadSVG').hide();
                $('.auto-loadNoMore').hide();
                $('.auto-loadSe').hide();
                $('.auto-loadMain').show();
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fgov:fgov,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
        })
        /**************Search Box Script*************/
        /**************Type Search Data Script*************/
        $('#Type').on('change', function() {
            var city_id = this.value;
            ftype = [];
            ftype.push(city_id);


            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('search-locations')}}",
                data: {
                    search:search,
                    ftype:ftype,
                    fcity:fcity,
                    fgov:fgov,
                    fmax_area:fmax_area,
                    fmin_area:fmin_area,
                    CID:CID

                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(page2);
                }
            })
        });
        /**************Type Search Data Script*************/
        /**************City Search Data Script*************/
        $('#city-dropdown').on('change', function() {
            $('.auto-loadSe').show();
            var city_id = this.value;
            fcity=[];
            fcity.push(city_id);
            $.ajax({
                type: "get",
                url: "{{URL::to('search-locations')}}",
                data: {
                    search:search,
                    ftype:ftype,
                    fcity:fcity,
                    fgov:fgov,
                    fmax_area:fmax_area,
                    fmin_area:fmin_area,
                    CID:CID

                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(page2);
                }
            })
        });
        /**************City Search Data Script*************/
        /**************Area Search Data Script*************/
        var area_id
        $('#Area').on('change', function() {
            var area = this.value;
            area_id=area;
            $('.auto-loadSe').show();
            if(area_id=="50to100"){
                fmax_area=100;
                fmin_area=50;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
            else if(area_id=="100to200"){
                fmax_area=200;
                fmin_area=100;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
            else if(area_id=="200to300"){
                fmax_area=300;
                fmin_area=200;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
            else if(area_id=="300to400"){
                fmax_area=400;
                fmin_area=300;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
            else if(area_id=="400to500"){
                fmax_area=500;
                fmin_area=400;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
            else if(area_id=="500+"){
                fmax_area=5000000;
                fmin_area=400;
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-locations')}}",
                    data: {
                        search:search,
                        ftype:ftype,
                        fcity:fcity,
                        fmax_area:fmax_area,
                        fmin_area:fmin_area,
                        CID:CID

                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(page2);
                    }
                })
            }
        });
        /**************Type Search Data Script*************/
        /**************Get City Box Script*************/
        $('#state-dropdown').on('change', function() {
            $('.auto-loadSe').show();
            var governorate_id = this.value;

            fgov=[];
            fgov.push(governorate_id);
            $("#city-dropdown").html('');
            $.ajax({
                url:"{{url('get-cities-by-state')}}",
                type: "POST",
                data: {

                    governorate_id: governorate_id,
                    CID:CID,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',

                success: function(result){
                    if(CID==59){
                        $.each(result.AllCities,function(key,value){
                            $("#city-dropdown").append('<option class="Statedropdown" value="'+value.id+'">'+value.city_name_en+'</option>');
                        });
                    }else{

                    }
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('search-locations')}}",
                        data: {
                            search:search,
                            ftype:ftype,
                            fcity:fcity,
                            fgov:fgov,
                            fmax_area:fmax_area,
                            fmin_area:fmin_area,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(page2);
                        }
                    })

                }
            });
        });
        /**************Get City Box Script*************/

    });
    /***Sliders and Serach Fillters Script**/
    function handleonfocus(x) {
        x.style.backgroundColor ="#E9204F";
    }
    function handleonblur(x) {
        x.style.backgroundColor ="white";
    }
</script>
<!-- EOF All Fillters Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="../{{asset('assets/js/anime.min.js')}}"></script>
<script src="../{{asset('assets/js/uikit.min.js')}}"></script>

<script src="../{{asset('assets/js/validate.js')}}"></script>
<script src="../{{asset('assets/js/main.js')}}"></script>
</body>
</html>
