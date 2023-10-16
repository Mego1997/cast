<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- personal-modal-page12:57:30  -->
<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_nameen}} | {{$data->location_nameEN}}</title>
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

    <link rel="apple-touch-icon" sizes="180x180" href="../public/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/assets/images/favicon-16x16.png">
    <link rel="manifest" href="../public/assets/images/site.webmanifest">
    <link rel="mask-icon" href="../public/images/safari-pinned-tab.svg" color="#E9204F">
    <link rel="stylesheet" href="../public/assets/css/normalize.min.css" />
    <link rel="stylesheet" href="../public/assets/css/pr.animation.css" />
    <link rel="stylesheet" href="../public/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../public/assets/css/uikit.min.css" />
    <link rel="stylesheet" href="../public/assets/css/fonts.css" />
    <link rel="stylesheet" href="../public/assets/css/pixeicons.css" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/animations.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/main.css" class="color-switcher-link">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="../public/assets/css/style.css" rel="stylesheet">


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

                        <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                            <a href="/Castingstars">Home</a>
                        </li>
                        <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                            <a href="/Castingstars/about-us">About Us</a>
                        </li>
                        <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                            <a href="/Castingstars/contact-us">Contact</a>
                        </li>
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link"
                               href="#" id="navbarDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul style="background-color: black!important;text-align: center;"
                                class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/talent-country">Talents</a>
                                </li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/services-country">Technical</a>
                                </li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/locations-country">Locations</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link"
                               href="#" id="navbarDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Register
                            </a>
                            <ul style="background-color: black!important;text-align: center;"
                                class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/model-register">Talents</a>
                                </li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/service-register">Technical</a>
                                </li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/locations-register">Locations</a>
                                </li>

                            </ul>
                        </li>
                        <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                            <a href="/Castingstars/blogs">Blogs</a>
                        </li>
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link"
                               href="#" id="navbarDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Lang
                            </a>
                            <ul style="background-color: black!important;text-align: center;"
                                class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/locations-countryAR">Arabic</a>
                                </li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item"
                                        href="/Castingstars/locations-country">English</a>
                                </li>

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
                            <img style="width: 150%!important;max-width: 150%!important;" src="../public/images/logo.png" alt="img">
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul>
                                <li style="line-height:20px!important;" class="nav-item"><a href="/Castingstars">Home</a></li>
                                <li style="line-height:20px!important;" class="nav-item"><a href="/Castingstars/about-us">About Us</a></li>
                                <li style="line-height:20px!important;" class="nav-item"><a href="/Castingstars/contact-us">Contact</a></li>
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link "
                                       href="#" id="navbarDarkDropdownMenuLink" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                        class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/talent-country">Talents</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/services-country">Technical</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/locations-country">Locations</a></li>
                                    </ul>
                                </li>
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link "
                                       href="#" id="navbarDarkDropdownMenuLink" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Register
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                        class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/model-register">Talent</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/service-register">Technical</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="/Castingstars/locations-register">Location</a></li>
                                    </ul>
                                </li>
                                <li style="line-height:20px!important;" class="nav-item"><a href="/Castingstars/blogs">Blogs</a></li>
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link "
                                       href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        Lang
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                        class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">

                                        <li style="padding-top: 8px"><a class="dropdown-item"
                                                                        href="../locations-countryAR">Arabic</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../locations-country">English</a>
                                        </li>

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

        <section class="ds single-model s-pt-70 s-pb-40 s-pb-sm-70 s-py-lg-100 s-py-xl-150 c-mb-30 c-gutter-50">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="vertical-item content-padding item-gallery">
                            <div class="model border-rad-5">
                                <div class="model-images">
                                    <div class="model-figure">
                                        <div data-thumb="../public/images/gellery_rectengular/{{$data->location_profileimg1}}">
                                            <a href="../public/images/gellery_rectengular/{{$data->location_profileimg1}}">
                                                <img src="../public/images/gellery_rectengular/{{$data->location_profileimg1}}" alt="img" data-caption="" data-large_image_width="555" data-large_image_height="555">
                                            </a>
                                        </div>
                                        <div data-thumb="../public/images/gellery_rectengular/{{$data->location_profileimg2}}">
                                            <a href="../public/images/gellery_rectengular/{{$data->location_profileimg2}}">
                                                <img src="../public/images/gellery_rectengular/{{$data->location_profileimg2}}" alt="img" data-caption="" data-large_image_width="555" data-large_image_height="555">
                                            </a>
                                        </div>
                                        <div data-thumb="../public/images/gellery_rectengular/{{$data->location_profileimg3}}">
                                            <a href="../public/images/gellery_rectengular/{{$data->location_profileimg3}}">
                                                <img src="../public/images/gellery_rectengular/{{$data->location_profileimg3}}" alt="img" data-caption="" data-large_image_width="555" data-large_image_height="555">
                                            </a>
                                        </div>
                                        <div data-thumb="../public/images/gellery_rectengular/{{$data->location_profileimg4}}">
                                            <a href="../public/images/gellery_rectengular/{{$data->location_profileimg4}}">
                                                <img src="../public/images/gellery_rectengular/{{$data->location_profileimg4}}" alt="img" data-caption="" data-large_image_width="555" data-large_image_height="555">
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="item-content">
                                    <ul class="model-data">
                                        <li>
                                            <span class="title">Area</span>
                                            <span class="data">{{$data->area}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Location Type</span>
                                            <span class="data">{{$data->location_type}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Country</span>
                                            <span class="data">{{$data->AllCountries->name_en}}</span>
                                        </li>

                                    </ul>
                                </div>

                                <div class="model-slider-thumbs">
                                    <ul class="slides">
                                        <li>
                                            <img src="../public/images/gellery_rectengular/{{$data->location_profileimg1}}" alt="img" width="95" height="95">
                                        </li>
                                        <li>
                                            <img src="../public/images/gellery_rectengular/{{$data->location_profileimg2}}" alt="img" width="95" height="95">
                                        </li>
                                        <li>
                                            <img src="../public/images/gellery_rectengular/{{$data->location_profileimg3}}" alt="img" width="95" height="95">
                                        </li>
                                        <li>
                                            <img src="../public/images/gellery_rectengular/{{$data->location_profileimg4}}" alt="img" width="95" height="95">
                                        </li>
                                    </ul>
                                </div>



                                <p class="social-icons text-center pt-30 mb-0">
                                    <a href="{{$data->Socialfacebook }}" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
                                    <a href="{{$data->Socialinstagram }}" class="fa fa-instagram color-bg-icon rounded" title="instagram"></a>
                                    <a href="{{$data->Socialtwitter }}" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
                                    <a href="{{$data->Socialyoutube }}" class="fa fa-youtube color-bg-icon rounded" title="youtube"></a>
                                </p>
                                <div class="fw-divider-space hidden-below-md mt-35"></div>
                                <ul class="feature-list text-center">
                                    <li>
                                        <p>{{$data->address}}</p>
                                    </li>
                                    <li>
                                        <a href="#">info@attractionme.net</a>
                                    </li>
                                    <li>
                                        +2 010 147 890 52
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-lg-6">
                        <h2 class="entry-title">{{$data->location_nameEN}}</h2>
                        <h2 class="entry-title">The Owner {{$data->location_o_nameEN}}</h2>
                        <div class="fw-divider-space hidden-below-lg mt--10"></div>
                        <p>
                            {{$data->location_desc}}
                        </p>

                        <div class="embed-responsive embed-responsive-3by2">
                            <a href="{{$data->videolink}}" class="embed-placeholder">
                                <img src="../public/images/gellery_rectengular/{{$data->location_profileimg1}}" alt="img">
                            </a>
                        </div>
                        <h4 class="pt-10">Contact Our Location</h4>

                        <form action="{{url('query')}}" class="pt-10" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input title="name" name="OMName" type="hidden" class="form-control" value="{{$data->location_nameEN}}" >
                            </div>
                            <div class="form-group">
                                <input title="name" name="OFullName" type="text" class="form-control" placeholder="full name" required>
                            </div>
                            <div class="form-group">
                                <input title="phone" name="OPhone" type="tel" class="form-control" placeholder="phone number" required>
                            </div>
                            <div class="form-group">
                                <input title="email" name="OEmail" type="email" class="form-control" placeholder="email address" required>
                            </div>
                            <div class="form-group">
                                <textarea title="message" name="OMassage" cols="30" rows="5" placeholder="your message" required></textarea >
                                <button type="submit" class="btn-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="fw-divider-space hidden-below-lg mt-25"></div>
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
                                        <a style="font-size: 14px" href="/Castingstars/models" class="text-reset">Blogs</a>
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
                                    <img src="../public/images/logo.png" alt="img" style="width: 50%">
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

<script src="../public/js/compressed.js"></script>
<script src="../public/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="../public/assets/js/anime.min.js"></script>
<script src="../public/assets/js/uikit.min.js"></script>

<script src="../public/assets/js/validate.js"></script>
<script src="../public/assets/js/main.js"></script>
</body>
</html>
