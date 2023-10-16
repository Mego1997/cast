<!DOCTYPE html>
<html lang="zxx">
<head>
    @foreach($cast_crew_data as $i)
        <title>{{$i->cast_crew_nameen}} | Home Page</title>
    @endforeach
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#E9204F">
    <meta name="theme-color" content="#E9204F">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('images/safari-pinned-tab.svg')}}" color="#E9204F">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/pr.animation.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/pixeicons.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body class="home front-page">

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
        <!-- main nav start -->
        <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light"
             data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
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
                                    <a href="../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a>
                                </li>
                            @endif
                        @endforeach
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lang
                            </a>
                            <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="AR">Arabic</a></li>
                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="#">English</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- eof main nav -->

    </div><!-- Off Canvas Bar End -->
</div><!-- Mobile Nav End -->

<div class="pr__wrapper" id="site-wrapper">

    <div class="pr__hero__wrap pr__dark bg-img-home" id="site-hero">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('images/logo.png')}}" alt="img">
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

                                        <li style="padding-top: 8px"><a class="dropdown-item" href="AR">Arabic</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="#">English</a></li>

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
                        <div class="uk-width-2-3@s">

                            <hr class="line pr__hr__primary">
                            <h2 style="text-align: left!important;" class="title uk-heading-hero">The gate of your <br>
                                next project <br>Talented & Crew.</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Site Hero End -->

        <section class="pr__features uk-section uk-padding-remove-bottom" id="pr_features">
            <div class="uk-container">
                <div class="section-inner">
                    <div class="items-listing features-boxes uk-grid uk-grid-match uk-grid-medium uk-child-width-1-3@m"
                         data-uk-grid="">
                        <div class="item feature-box ">
                            <div class="inner">
                                <div id="CastPink" class="CastPink">
                                    <img style="display: none;" id="CastPink1"
                                         src="{{asset('assets/images/CastWhite.png')}}" class="img-bottom"
                                         alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/CastPink.png')}}" class="img-top"
                                         alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">Talents</h3>
                                <p class="description">It is a long established fact that a reader will be distracted by
                                    the readable content of a page.</p>
                                <a href="{{ asset('../talent-country') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box">
                            <div class="inner">
                                <div id="CastPink" class="CastPink">
                                    <img style="display: none;" id="CastPink1"
                                         src="{{asset('assets/images/CrewWhite.png')}}" class="img-bottom"
                                         alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/CrewPink.png')}}" class="img-top"
                                         alt="Card Front">
                                </div>
                                <h3 class="title uk-h4">Technical</h3>
                                <p class="description">There are many variations of passages of available, but the
                                    majority alteration in some form.</p>
                                <a href="{{ asset('../services-country') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box">
                            <div class="inner">
                                <div id="CastPink" class="CastPink">
                                    <img style="display: none;" id="CastPink1"
                                         src="{{asset('assets/images/LocationWhite.png')}}" class="img-bottom"
                                         alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/LocationPink.png')}}"
                                         class="img-top" alt="Card Front">
                                </div>
                                <h3 class="title uk-h4">Locations</h3>
                                <p class="description">The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour.</p>
                                <a href="{{ asset('../locations-country') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Section: Features End -->

    </div><!-- Hero Wrap End -->

    <div class="pr__content" id="site-content">


        <hr class="pr__vr__section">
        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients">
            <div class="uk-container">
                <div class="section-outer">
                    <div class="uk-flex uk-flex-middle uk-grid uk-grid-large" data-uk-grid="">
                        <div class="right uk-width-expand">
                            <div class="section-heading">
                                <div class="inner">
                                    <div class="left">
                                        <h2 class="title uk-h1">About us</h2>
                                        <span class="subtitle pr__heading__secondary">From all over the world</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-inner">
                                <div class="item client-box style-one">
                                    <div class="outer">
                                        <div class="inner">
                                            <p class="description">We are motivated by the satisfaction of our clients.
                                                Put your trust in us and share
                                                in our growth Asset Management is made up of a team of expert, committed
                                                and experienced people with a passion for
                                                financial markets. Our goal is to achieve continuous and sustainable
                                                growth of our clients.</p>

                                            <a class="button uk-button uk-button-large uk-button-default uk-margin-top"
                                               href="about-us">Getting Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left uk-width-2-5@m uk-flex-first">
                            <div class="item client-box style-one client-image">
                                <div class="image pr__image__cover pr__ratio__portrait"
                                     data-src="public/images/aboutus.jpg" data-uk-img=""></div>
                            </div>
                        </div>
                    </div><!-- Grid End -->
                </div><!-- Outer End -->
            </div><!-- Container End -->
        </section><!-- Section: Clients End -->

        <hr class="pr__vr__section">
        <section class="pr__blog pr__section pr__dark section-slider uk-section uk-section-large" id="pr__blog">
            <div class="section-outer">
                <div class="section-heading pr__center">
                    <div class="uk-container">
                        <div class="inner">
                            <div class="center">
                                <h2 class="title uk-h1">Latest News.</h2>
                                <span class="subtitle pr__heading__secondary">Latest Community News</span>
                            </div>
                        </div>
                    </div><!-- Container End -->
                </div><!-- Heading End -->
                <div class="section-inner">
                    <div class="uk-container uk-container-no">
                        <div class="blog-listing style-one blog-slider owl-carousel" data-items="4" data-loop="true"
                             data-center="true" data-margin="30" data-autoplay="true" data-dots="true">
                            @foreach($MainBlogs as $i)
                                <article class="post type-post">
                                    <div class="outer">
                                        <div class="featured-image">
                                            <div class="image pr__image__cover"
                                                 data-src="{{asset('images/blog/'.$i->blog_img)}}" data-uk-img="{{asset('images/blog/'.$i->blog_img)}}"></div>
                                        </div>
                                        <div class="inner">

                                            <h3 class="title uk-h5"><a
                                                    href="{{ asset('../single-blog/'.$i->ID) }}">{{($i->blog_titelEN)}}</a>
                                            </h3>

                                            <a href="{{ asset('../single-blog/'.$i->ID) }}" class="link"></a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    </div><!-- Container End -->
                </div><!-- Inner End -->
            </div><!-- Outer End -->
        </section><!-- Section: Blog End -->

        <div class="pr__clients__logos pr__section pr__dark uk-section uk-section-large uk-padding-remove-top"
             id="pr__clients__logos">
            <div class="uk-container">
                <div class="inner">
                    <div class="center">
                        <h2 class="title uk-h1">Our Partner.</h2>
                        <span class="subtitle pr__heading__secondary">Check out some of our partners</span>
                    </div>
                </div>

                <div class="section-outer uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
                    <div class="uk-flex uk-flex-around uk-flex-middle uk-grid uk-grid-large" data-uk-grid="">
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/01.svg')}}" alt="NOreal"
                                                    data-uk-svg=""></div>
                        </div>
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/03.svg')}}" alt="Notron"
                                                    data-uk-svg=""></div>
                        </div>
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/01.svg')}}" alt="Vorbes"
                                                    data-uk-svg=""></div>
                        </div>
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/03.svg')}}" alt="Friday"
                                                    data-uk-svg=""></div>
                        </div>
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/01.svg')}}" alt="Pantheon"
                                                    data-uk-svg=""></div>
                        </div>
                        <div class="item logo">
                            <div class="inner"><img src="{{asset('assets/images/logos/03.svg')}}" alt="Horus"
                                                    data-uk-svg=""></div>
                        </div>
                    </div><!-- Grid End -->
                </div><!-- Outer End -->
            </div><!-- Container End -->
        </div><!-- Section: Clients Logos End -->

    </div><!-- Site Content End -->

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
                                    <a id="pr__contact" href="#pr__contact__form"
                                       class="button uk-button uk-button-large uk-button-default" data-uk-toggle="">Make
                                        an enquiry</a>
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

                <footer class="text-left text-lg-start bg-light text-muted new-footer">


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
                                    <p style="font-size: 14px">

                                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <hr style="color: white;background-color: white">
                                    <p style="font-size: 14px">
                                        <iframe src="{{asset('svg/phone-solid.svg')}}" width="20px" height="20px"
                                                style="color: white"></iframe>&nbsp;&nbsp;+ 20 50 233 44 79
                                    </p>

                                    <p style="font-size: 14px">
                                        <iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px"
                                                style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com
                                    </p>
                                    <p style="font-size: 14px">
                                        <iframe src="{{asset('svg/location-dot-solid.svg')}}" width="20px" height="20px"
                                                style="color: white"></iframe>&nbsp;&nbsp;18 st, Touril, Mansoura
                                    </p>


                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        LINKS
                                    </h6>
                                    <p>
                                        <a style="font-size: 14px" href="/" class="text-reset">Home</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/about-us" class="text-reset">About
                                            Us</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/blogs"
                                           class="text-reset">Blogs</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/contact-us" class="text-reset">Contact
                                            Us</a>
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
                                        <div style="height: 40px;gap: 0.5rem!important;color: #495057;"
                                             class="d-flex flex-column flex-sm-row w-100 gap-2">
                                            <input style="border-radius: 0px!important;" id="newsletter1" type="text"
                                                   class="form-control" placeholder="Email address">
                                            <a style="height: 40px;width: 15%;max-width: 15%!important;"
                                               id="pr__contact" href="#pr__contact__form"
                                               class="button uk-button uk-button-large uk-button-default"
                                               data-uk-toggle="">
                                                <iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px"
                                                        height="20px"
                                                        style="color: white;max-width: 20px!important;max-height: 20px!important;"></iframe>
                                            </a>
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
                                <a href="/">
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
                                    <p>2022 © <a href="http://attractionme.net">Cast&Crew</a>, All rights
                                        reserved.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- Inner End-->
                </div><!-- Container End-->
            </div><!-- Outer End-->
        </div><!-- Footer Bottom End-->

    </footer><!-- Site Footer End-->

</div><!-- Site Wrapper End -->

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

<!-- Needed Scripts -->
<script type="text/javascript">
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show1");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn1')) {
            var dropdowns = document.getElementsByClassName("dropdown-content1");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show1')) {
                    openDropdown.classList.remove('show1');
                }
            }
        }
    }
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/anime.min.js')}}"></script>
<script src="{{asset('assets/js/pr.animation.js')}}"></script>
<script src="{{asset('assets/js/uikit.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

