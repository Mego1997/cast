<!DOCTYPE html>
<html lang="zxx">
<head>
    @foreach($cast_crew_data as $i)
        <title>{{$i->cast_crew_nameen}} | Contact Us</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


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
                                <li class="nav-item dropdown">
                                    <a style="font-size: 25px!important;" class="nav-link" href="{{$i->main_item_href}}"
                                       id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        {{$i->main_item_nameEN}}
                                    </a>
                                    <ul style="background-color: black!important;text-align: center;"
                                        class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($nav_submain_items as $ii)
                                            @if($i->ID==$ii->main_item_id)
                                                <li style="padding: 8px"><a
                                                            style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                                            class="dropdown-item"
                                                            href="{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a>
                                                </li>
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

                                    <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="contact-usAR">Arabic</a></li>
                                    <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="contact-us">English</a></li>

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

    <div class="pr__hero__wrap_about pr__dark bg-img-contact"
          id="site-hero">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/main">
                            <img src="{{asset('images/logo.png')}}" alt="img">
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul>
                                @foreach($nav_main_items as $i)
                                    @if($i->main_item_hassub==1)
                                        <li style="line-height:20px!important;" class="nav-item dropdown">
                                            <a style="padding: 0px!important; line-height:20px!important;"
                                               class="nav-link " href="{{$i->main_item_href}}"
                                               id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                {{$i->main_item_nameEN}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important;text-align: center;"
                                                class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a style="font-size: 15px"
                                                                                        class="dropdown-item"
                                                                                        href="{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;"><a
                                                    href="../{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a></li>

                                    @endif
                                @endforeach
                                    <li style="line-height:20px!important;" class="nav-item">
                                        <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Lang
                                        </a>
                                        <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                                            <li style="padding-top: 8px"><a class="dropdown-item" href="contact-usAR">Arabic</a></li>
                                            <li style="padding-top: 8px"><a class="dropdown-item" href="contact-us">English</a></li>

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

                            {{--                            <hr class="line pr__hr__primary">--}}
                            {{--                            <h2 style="text-align: left!important;" class="title uk-heading-hero">The gate of your <br> next project <br>Talented & Crew.</h2>--}}
                            <p class="title uk-text-bold uk-text-large">Home</p>
                            <h2 class="title uk-heading-hero text-uppercase" style="text-align: center; color: white">
                                Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Site Hero End -->


    </div><!-- Hero Wrap End -->

    <div class="pr__content" id="site-content">
        <section
                class="pr__features uk-section uk-padding-remove-bottom pr__clients pr__section pr__dark uk-section uk-section-large"
                id="pr_features">
            <div class="container">
                <div class="row d-flex mb-5 contact-info justify-content-center">
                    <div class="col-md-12">
                        <div class="row mb-5">
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot fa-2x infoIcon"></i>
                                </div>
                                <p><span class="d-block">Address:</span> 8 Hassan Bin Thabet</p>
                            </div>
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-phone fa-2x infoIcon"></i>
                                </div>
                                <p><span class="d-block">Phone:</span> <a href="tel://1234567920" class="text-white">+2010 211 720 96</a></p>
                            </div>
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-envelope fa-2x infoIcon"></i></div>
                                <p><span class="d-block">Email:</span> <a href="mailto:info@yoursite.com"
                                                                          class="text-white">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="pr__vr__section">
        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients">
            <div class="container">
                <form action="" method="post">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." class="itext">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email.." class="iemail">

                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" placeholder="Your phone number.." class="inumber" class="inumber">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" class="itext"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>
        </section>

        <hr class="pr__vr__section">
        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients">
            <div class="block no-padding">
                <div class="main-map">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27342.314042207152!2d31.43737708437499!3d31.059965899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db79078706d%3A0x5151fb8da6796fe6!2z2KrZiNix2YrZhCDYp9mE2KzYr9mK2K_Zhw!5e0!3m2!1sar!2seg!4v1664272154369!5m2!1sar!2seg"
                                width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div><!--main-map end-->
            </div>
        </section>

        {{--        <hr class="pr__vr__section">--}}
        {{--        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients">--}}
        {{--            <div class="uk-container">--}}
        {{--                <div class="section-outer">--}}
        {{--                    <div class="uk-flex uk-flex-middle" data-uk-grid="">--}}
        {{--                        <div class="about_design uk-flex-middle">--}}
        {{--                            <img src="public/assets/images/About_Us design.png" style="width: 100%; max-width: 100%">--}}
        {{--                        </div>--}}

        {{--                        <div class="uk-flex uk-flex-right cc-about">--}}
        {{--                            <img src="public/img/preloader-img.png" class="cc-about-img">--}}
        {{--                        </div>--}}


        {{--                        <div class="right">--}}
        {{--                            <div class="section-heading-about mt-5">--}}
        {{--                                <div class="inner">--}}
        {{--                                    <div class="left">--}}
        {{--                                        <hr class="line pr__hr__secondary">--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="section-inner">--}}
        {{--                                <div class="item client-box style-one">--}}
        {{--                                    <div class="outer">--}}
        {{--                                        <div class="inner">--}}
        {{--                                            <p class="description">Tuesday's filing represents the Justice Department's strongest case to date that Thump concealed classified was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                                investigation into the potential mishandling of classified material.Tuesday's filing represents the Justice Department's strongest case to date that Thump concealed classified was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                                investigation into the potential mishandling. </p>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="left uk-width-2-3@m uk-flex-first">--}}
        {{--                            <h2 class="title uk-h1 uk-h1-about">CAST& <br/>CREW<span>HUB</span></h2>--}}
        {{--                            <div class="item about-box style-one about-image uk-height-medium my-3">--}}
        {{--                                <div class="image pr__image__cover" data-src="public/images/aboutus.jpg" data-uk-img=""></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div><!-- Grid End -->--}}
        {{--                </div><!-- Outer End -->--}}
        {{--            </div><!-- Container End -->--}}
        {{--        </section><!-- Section: Clients End -->--}}

        {{--        <hr class="pr__vr__section">--}}
        {{--        <section class="pr__about pr__section pr__dark section-slider uk-section uk-section-large" id="pr__blog">--}}
        {{--            <div class="section-outer">--}}
        {{--                <div class="uk-container">--}}
        {{--                    <div class="section-inner">--}}
        {{--                        <div class="listing-items uk-grid uk-grid-match uk-grid-medium uk-child-width-1-3@m" data-uk-grid="">--}}
        {{--                            <div class="item about-box">--}}
        {{--                                <div class="inner">--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                        <h4 class="" style="color: white">Who we are</h4>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-center my-3">--}}
        {{--                                        <img style="display: none;"  src="{{asset('assets/images/img-about.jpg')}}" class="img-about-box">--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                    <p class="description-about"> was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                        investigation into the potential mishandling of classified material.Tuesday's filing represents the Justice Department's strongest case to date that Thump concealed classified was keeping at Mar-a-Lago in an attempt</p>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="item about-box">--}}
        {{--                                <div class="inner">--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                        <h4 class="" style="color: white">Our philosophy</h4>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-center my-3">--}}
        {{--                                        <img style="display: none;"  src="{{asset('assets/images/img-about2.jpg')}}" class="img-about-box">--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                        <p class="description-about"> was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                            investigation into the potential mishandling of classified material.Tuesday's filing represents the Justice Department's strongest case to date that Thump concealed classified was keeping at Mar-a-Lago in an attempt</p>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="item about-box">--}}
        {{--                                <div class="inner">--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                        <h4 class="" style="color: white">How we work</h4>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-center my-3">--}}
        {{--                                        <img style="display: none;"  src="{{asset('assets/images/img-about3.jpg')}}" class="img-about-box">--}}
        {{--                                    </div>--}}
        {{--                                    <div class="uk-flex uk-flex-left">--}}
        {{--                                        <p class="description-about"> was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                            investigation into the potential mishandling of classified material.Tuesday's filing represents the Justice Department's strongest case to date that Thump concealed classified was keeping at Mar-a-Lago in an attempt</p>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div><!-- Container End -->--}}
        {{--            </div><!-- Outer End -->--}}
        {{--        </section><!-- Section: About Us End -->--}}

        {{--        <hr class="pr__vr__section">--}}
        {{--        <section class="pr__choose pr__section pr__dark section-slider uk-section" id="pr__blog">--}}
        {{--            <div class="section-outer choose-outer">--}}
        {{--                <div class="section-heading-choose pr__center">--}}
        {{--                    <div class="uk-container">--}}
        {{--                        <div class="inner">--}}
        {{--                            <div class="center">--}}
        {{--                                <h2 class="title uk-h1 choose-h1">WHY CHOOSE US</h2>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="center">--}}
        {{--                            <P class="description choose-p">Tuesday's filing represents the Justice Department's strongest case to date that Thump<br/> concealed classified was keeping at Mar-a-Lago in an attempt to obstruct the FBI's<br/>--}}
        {{--                                investigation into the potential mishandling of classified material.--}}
        {{--                                Tuesday's filing represents<br/> the Justice Department's strongest case to date that Thump concealed classified material he<br/> was keeping at Mar-a-Lago in an attempt to obstruct the FBI's--}}
        {{--                                investigation into the potential <br/>mishandling of classified material.--}}
        {{--                                Tuesday's filing represents the Justice Department's<br/> strongest case to date that Thump concealed classified was keeping at Mar-a-Lago <br/> in an attempt to obstruct the FBI's--}}
        {{--                                investigation in.</P>--}}
        {{--                        </div>--}}
        {{--                    </div><!-- Container End -->--}}
        {{--                </div><!-- Heading End -->--}}
        {{--            </div> <!-- Outer End -->--}}
        {{--        </section> <!-- Section: Choose Us End -->--}}

        {{--        <hr class="pr__vr__section">--}}
        {{--        <section class="pr__blog pr__section pr__dark section-slider uk-section uk-section-large" id="pr__blog">--}}
        {{--            <div class="section-outer">--}}
        {{--                <div class="section-heading pr__center">--}}
        {{--                    <div class="uk-container">--}}
        {{--                        <div class="inner">--}}
        {{--                            <div class="center">--}}
        {{--                                <h2 class="title uk-h1">Our Team</h2>--}}
        {{--                                <span class="subtitle pr__heading__secondary">MEET EXPERT PEOPLE</span>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div><!-- Container End -->--}}
        {{--                </div><!-- Heading End -->--}}
        {{--                <div class="section-inner">--}}
        {{--                    <div class="uk-container uk-container-no">--}}
        {{--                        <div class="blog-listing style-one blog-slider owl-carousel" data-items="4" data-loop="true" data-center="true" data-margin="30" data-autoplay="true" data-dots="true">--}}
        {{--                            <article class="post type-post">--}}
        {{--                                <div class="outer">--}}
        {{--                                    <div class="featured-image">--}}
        {{--                                        <div class="image pr__image__cover" data-src="{{asset('assets/images/blogs/01.jpg')}}" data-uk-img=""></div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="inner">--}}

        {{--                                        <h3 class="title uk-h5"><a href="#">Presiding over CIFF for second time is great responsibility: Hussein Fahmy</a></h3>--}}

        {{--                                        <a href="#" class="link"></a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post type-post">--}}
        {{--                                <div class="outer">--}}
        {{--                                    <div class="featured-image">--}}
        {{--                                        <div class="image pr__image__cover" data-src="{{asset('assets/images/blogs/02.jpg')}}" data-uk-img=""></div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="inner">--}}

        {{--                                        <h3 class="title uk-h5"><a href="#">‘Kira We El Gin’ is great addition to my career: Karim Abdel Aziz</a></h3>--}}

        {{--                                        <a href="#" class="link"></a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post type-post">--}}
        {{--                                <div class="outer">--}}
        {{--                                    <div class="featured-image">--}}
        {{--                                        <div class="image pr__image__cover" data-src="{{asset('assets/images/blogs/03.jpg')}}" data-uk-img=""></div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="inner">--}}

        {{--                                        <h3 class="title uk-h5"><a href="#">Egyptian duo Ahmed Hatem, Hannah El Zahed reveals trailer of new series</a></h3>--}}

        {{--                                        <a href="#" class="link"></a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post type-post">--}}
        {{--                                <div class="outer">--}}
        {{--                                    <div class="featured-image">--}}
        {{--                                        <div class="image pr__image__cover" data-src="{{asset('assets/images/blogs/04.jpg')}}" data-uk-img=""></div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="inner">--}}

        {{--                                        <h3 class="title uk-h5"><a href="#">Veteran Egyptian actor Ahmed Khalil dies of COVID-19 infection</a></h3>--}}

        {{--                                        <a href="#" class="link"></a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post type-post">--}}
        {{--                                <div class="outer">--}}
        {{--                                    <div class="featured-image">--}}
        {{--                                        <div class="image pr__image__cover" data-src="{{asset('assets/images/blogs/05.jpg')}}" data-uk-img=""></div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="inner">--}}

        {{--                                        <h3 class="title uk-h5"><a href="#">Mohamed Henedy will launch his first talk show on 22 October</a></h3>--}}

        {{--                                        <a href="#" class="link"></a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                        </div>--}}
        {{--                    </div><!-- Container End -->--}}
        {{--                </div><!-- Inner End -->--}}
        {{--            </div><!-- Outer End -->--}}
        {{--        </section><!-- Section: Blog End -->--}}


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

    <div id="pr__contact__form" class="pr__contact__form uk-modal-full" data-uk-modal="">
        <div class="uk-modal-dialog" data-uk-height-viewport="">
            <div class="form-outer">
                <div class="uk-container uk-container-xsmall">
                    <div class="form-inner uk-position-relative">
                        <button class="uk-modal-close-full" type="button" data-uk-close="ratio: 2;"><span>Close</span>
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
                            <p class="pr__form__group uk-margin-large">
                                <button class="uk-button uk-button-large uk-button-primary" type="submit">Send message
                                </button>
                            </p>
                        </form>
                    </div>
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

