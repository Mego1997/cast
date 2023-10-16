<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_namear}} | الخدمات الفنية </title>
    @endforeach
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="../{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="../{{asset('assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="../{{asset('assets/images/favicon-16x16.png')}}">
    <link rel="manifest" href="../{{asset('assets/images/site.webmanifest')}}">
    <link rel="mask-icon" href="../{{asset('images/safari-pinned-tab.svg')}}" color="#E9204F">
    <link rel="stylesheet" href="../{{asset('assets/css/normalize.min.css')}}"/>
    <link rel="stylesheet" href="../{{asset('assets/css/pr.animation.css')}}"/>
    <link rel="stylesheet" href="../{{asset('assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="../{{asset('assets/css/uikit.min.css')}}"/>
    <link rel="stylesheet" href="../{{asset('assets/css/fonts.css')}}"/>
    <link rel="stylesheet" href="../{{asset('assets/css/pixeicons.css')}}"/>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="../{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="../{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="../{{asset('css/main.css')}}" class="color-switcher-link">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="../{{asset('assets/css/styleAR.css')}}" rel="stylesheet">


</head>

<body>

<div id="loader" class="preloader pr__dark">
            <span class="loading">
                <span class="txt">تحميل</span>
                <span class="progress">
                    <span class="bar-loading"></span>
                </span>
            </span>
</div><!-- Preloader End -->

<div class="pr__mobile__nav" id="navbar-mobile" data-uk-offcanvas="overlay: true; flip: true; mode: none">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 2;"></button>
        <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light"
             data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
            <div class="container-fluid">
                <div style="display: block!important;" class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach($nav_main_items as $i)
                            @if($i->main_item_hassub==1)
                                <li class="nav-item ">
                                    <a style="font-size: 25px!important;" class="nav-link" href="{{$i->main_item_href}}"
                                       id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        {{$i->main_item_nameAR}}
                                    </a>
                                    <ul style="background-color: black!important;text-align: center;"
                                        class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($nav_submain_items as $ii)
                                            @if($i->ID==$ii->main_item_id)
                                                <li style="padding: 8px"><a
                                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                                        class="dropdown-item"
                                                        href="../{{$ii->submain_item_href}}">{{$ii->submain_item_nameAR}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                                    <a href="../../{{$i->main_item_href}}">{{$i->main_item_nameAR}}</a>
                                </li>
                            @endif
                        @endforeach
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                اللغة
                            </a>
                            <ul style="background-color: black!important;text-align: center;" class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item" href="../services-countryAR">Arabic</a></li>
                                <li style="padding: 8px"><a
                                        style="padding: 0px!important;font-size: 25px;font-weight: 300!important;"
                                        class="dropdown-item" href="../services-country">English</a></li>

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
    <div class="pr__hero__wrap pr__dark" id="site-hero">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/Castingstars">
                            <img style="width: 150%!important;max-width: 150%!important;"
                                 src="../{{asset('images/logo.png')}}" alt="img">
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul>
                                @foreach($nav_main_items as $i)
                                    @if($i->main_item_hassub==1)
                                        <li style="line-height:20px!important;" class="nav-item">
                                            <a style="padding: 0px!important; line-height:20px!important;"
                                               class="nav-link " href="{{$i->main_item_href}}"
                                               id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                {{$i->main_item_nameAR}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                                class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a class="dropdown-item"
                                                                                        href="../{{$ii->submain_item_href}}">{{$ii->submain_item_nameAR}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;" class="nav-item"><a
                                                href="../../{{$i->main_item_href}}">{{$i->main_item_nameAR}}</a></li>

                                    @endif
                                @endforeach
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link "
                                       href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        اللغة
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                        class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">

                                        <li style="padding-top: 8px"><a class="dropdown-item"
                                                                        href="../services-countryAR">Arabic</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item"
                                                                        href="../services-country">English</a></li>

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
                                    <h3 class="widget-title">البحث</h3>
                                    <form role="search" method="get" class="search-form" action="http://webdesign-finder.com/">
                                        <label for="search-form-widget">
                                            <span class="screen-reader-text">البحث عن :</span>
                                        </label>
                                        <input type="search" id="search" class="search-field text-right" placeholder="البحث" name="search" value="">
                                        <button class="search-submit WSB-AR">
                                            <span class="screen-reader-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Eof Search Box Fillters-->

                        <!-- Check Box Fillters-->
                        <div class="row isotope-wrapper  parent RKC" data-animation="fadeInDown" data-delay="150"
                             id="Checkfilters">
                            <!-- Experience Fillters-->
                            <div class="col-md-2 col-sm-6 child2" data-animation="fadeInDown" data-delay="150"
                                 style="top:-31px!important;">
                                <div class="widgets woocommerce widget_price_filter">

                                    <h3 class="widget-titles text-uppercase">الخبرة</h3>

                                    <form method="get">
                                        <div class="container">
                                            <div>
                                                <div class="multi-range-sliderXP">
                                                    <input type="range" id="input-leftW" min="1" step="1" max="50"
                                                           value="1">
                                                    <input type="range" id="input-rightW" min="1" step="1" max="50"
                                                           value="50">

                                                    <div class="sliderW">
                                                        <div class="trackW"></div>
                                                        <div class="rangeW"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="price__wrapperXP">
                                        <span class="price-fromW"></span>
                                        <span class="price-toW"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Gender Fillters-->
                            <div class="col-md-2 col-sm-6 child3 RS" data-animation="fadeInDown" data-delay="150">
                                <dlS class="dropdownGES dropdown">
                                    <dtGES>
                                        <a href="#">
                                            <span class="hidaGES">النوع</span>
                                            <p class="multiSelGES multiSel"></p>
                                        </a>
                                    </dtGES>
                                    <ddGES>
                                        <div class="mutliSelectGES">
                                            <label class="labelGES">
                                                @foreach($AllGender as $i)
                                                    <label>
                                                        <input type="checkbox" id="{{$i->GenderAR}}" name="rolesGE[]"
                                                               value="{{$i->ID}}"><label class="color-dark-font"
                                                                                         for="{{$i->GenderAR}}">{{$i->GenderAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddGES>
                                </dlS>
                            </div>
                            <!-- STATE Fillters-->
                            <div class="col-md-2 col-sm-6 child3 RXP" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownS dropdown">
                                    <dtS>
                                        <a href="#">
                                            <span class="hidaS">المحافظة</span>
                                            <p class="multiSelS multiSel"></p>
                                        </a>
                                    </dtS>
                                    <ddS>
                                        <div class="mutliSelectS gallery-filters">
                                            <label class="labelS">
                                                <label>
                                                    @if($AllStates!="")
                                                        @foreach($AllStates as $i)
                                                            <label>
                                                                <input type="checkbox" id="{{$i->governorate_name_ar}}"
                                                                       name="roles[]" value="{{$i->id}}"><label
                                                                    class="color-dark-font"
                                                                    for="{{$i->governorate_name_ar}}">{{$i->governorate_name_ar}}</label>
                                                            </label>
                                                        @endforeach
                                                    @else
                                                        @foreach($all_states as $i)
                                                            <label>
                                                                <input type="checkbox" id="{{$i->name_ar}}"
                                                                       name="roles[]" value="{{$i->id}}"><label
                                                                    class="color-dark-font"
                                                                    for="{{$i->name_ar}}">{{$i->name_ar}}</label>
                                                            </label>
                                                        @endforeach
                                                    @endif
                                                </label>
                                            </label>
                                        </div>
                                    </ddS>
                                </dl>
                            </div>
                            <!-- Services Fillters-->
                            <div class="col-md-2 col-sm-6 child4 RSE" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Governorate" onfocus='handleonfocus(this)' onblur='handleonblur(this)'
                                            id="services-dropdown" class="postform"
                                            style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="-1">الخدمات</option>
                                        @foreach($services_details as $i)
                                            <option class="Statedropdown"
                                                    value="{{$i->ID}}">{{$i->service_nameAR}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!--  Specialization Fillters-->
                            <div class="col-md-2 col-sm-6 child3 RSA" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="speciali" onfocus='handleonfocus(this)' onblur='handleonblur(this)'
                                            id="speciali-dropdown" class="postform"
                                            style="text-align: center!important;display: none">


                                    </select>
                                </div>
                            </div>
                            <!-- JOB Fillters-->
                            <div class="col-md-2 col-sm-6 child3 RJB" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="job" onfocus='handleonfocus(this)' onblur='handleonblur(this)'
                                            id="job-dropdown" class="postform"
                                            style="text-align: center!important;display: none">


                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- Eof Check Box Fillters-->

                        <!-- Models View-->
                        <div id="AllServices">
                            <div id="data-wrapper" class="row ">


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
                                <button class="panbutton" type="button" id="submit_1">المزيد</button>
                            </div>
                            <div class="auto-loadSe col-lg-12 text-center">
                                <button class="panbutton" type="button" id="submit_2">المزيد</button>
                            </div>
                        </div>
                        <!-- Eof Models View-->
                        <div class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30">
                            <div id="result">

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
                                    <h2 class="title uk-h1">تواصل معنا ؟</h2>
                                </div>
                            </div>
                            <div class="pr__cta column">
                                <div class="inner">
                                    <a id="pr__contact" href="#pr__contact__form"
                                       class="button uk-button uk-button-large uk-button-default" data-uk-toggle="">للإستفسار</a>
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
        <div class="pr__footer__center uk-section uk-section-small" style="direction: rtl;">
            <div class="uk-container">

                <footer class="text-left text-lg-start bg-light text-muted new-footer">


                    <!-- Section: Links  -->
                    <section style="text-align: left!important;" class="op100">
                        <div class="container text-right text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                                    <!-- Content -->
                                    <h6 class="text-uppercase fw-bold mb-4 op100">
                                        عن Cast & Crew
                                    </h6>
                                    <p style="font-size: 14px">

                                        البوابة الخاصة بمشروك القادم للمواهب وطاقم العمل.
                                    </p>
                                    <hr style="color: white;background-color: white">
                                    <p style="font-size: 14px">
                                        <iframe src="../{{asset('svg/phone-solid.svg')}}" width="20px" height="20px"
                                                style="color: white"></iframe>&nbsp;&nbsp; + 79 44 233 50 02+
                                    </p>

                                    <p style="font-size: 14px">
                                        <iframe src="../{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px"
                                                style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com
                                    </p>
                                    <p style="font-size: 14px">
                                        <iframe src="../{{asset('svg/location-dot-solid.svg')}}" width="20px"
                                                height="20px" style="color: white"></iframe>&nbsp;&nbsp;شارع 18 , توريل
                                        , المنصورة
                                    </p>


                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        الروابط
                                    </h6>
                                    <p>
                                        <a style="font-size: 14px" href="/Castingstars/AR" class="text-reset">الرئيسية</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/Castingstars/about-usAR" class="text-reset">من نحن</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/Castingstars/blogsAR" class="text-reset">المدونة</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="/Castingstars/contact-usAR" class="text-reset">تواصل معنا</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        استكشف
                                    </h6>
                                    <p>
                                        <a style="font-size: 14px" href="{{ asset('../talent-countryAR') }}" class="text-reset">المواهب </a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="{{ asset('../services-countryAR') }}" class="text-reset">خدمات تقنية</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="{{ asset('../locations-countryAR') }}" class="text-reset">مواقع التصوير</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <form>
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            اشترك
                                        </h6>
                                        <p style="font-size: 14px">اشترك معنا ليصلك كل جديد</p>
                                        <div style="height: 40px" class="d-flex flex-column flex-sm-row w-100 gap-2">
                                            <input style="border-radius: 0px!important;" id="newsletter1" type="text"
                                                   class="form-control" placeholder="عنوان البريد الالكترونى">
                                            <a style="height: 40px;width: 15%;max-width: 15%!important;"
                                               id="pr__contact" href="#pr__contact__form"
                                               class="button uk-button uk-button-large uk-button-default"
                                               data-uk-toggle="">
                                                <iframe src="../{{asset('svg/envelope-solid.svg')}}" width="20px"
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
                                <a href="/Castingstars">
                                    <img src="../{{asset('images/logo.png')}}" alt="img" style="width: 50%">
                                </a>
                            </div>
                            <div class="pr__links column">
                                <div class="inner">
                                    <a href="#">قوانين الاستخدام</a>
                                    <a href="#">سياسة الخصوصية</a>
                                    <a href="#">سياسة ملفات الارتباط</a>
                                </div>
                            </div>

                            <div class="pr__copyrights column">
                                <div class="inner text-right" style="direction: rtl">
                                    <p>2022 © كل الحقوق محفوظة لدى <a href="http://attractionme.net/Castingstars/AR">Cast&Crew</a>
                                    </p>
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
                        <button class="uk-modal-close-full" type="button" data-uk-close="ratio: 2;"
                                style="color: black"><span>Close</span>
                        </button>
                        <h2 class="uk-modal-title uk-h1">قم بإرسال إستفسارك</h2>
                        <p>قم بإرسال بياناتك واستفسارك لنا وسيتم التواصل معك فى اقرب وقت ممكن</p>
                        <form class="pr__contact pr__form" action="includes/sendemail.php">
                            <div class="pr__form__group">
                                <label for="name">الاسم <span class="required">*</span></label>
                                <input class="pr-input" id="name" name="name" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="email">البريد الالكتروني <span class="required">*</span></label>
                                <input class="pr-input" id="email" name="email" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="subject">عنوان الرسالة <span class="required">*</span></label>
                                <input class="pr-input" id="subject" name="subject" type="text"/>
                            </div>
                            <div class="pr__form__group">
                                <label for="message">الرسالة <span class="required">*</span></label>
                                <textarea class="pr-textarea" id="message" name="message"></textarea>
                            </div>
                            <p class="pr__form__group uk-margin-large" style="margin-bottom: 100px">
                                <button class="uk-button uk-button-large uk-button-primary" type="submit">قم بالإرسال
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
<script type="text/javascript">
    $('.auto-loadSVG').hide();
    $('.auto-loadNoMore').hide();
    $('.auto-loadSe').hide();

    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    var CID = "{{ $CID }}";

    infinteLoadMore(page);
    $("#submit_1").click(function () {
        page++;
        infinteLoadMore(page);
    })

    function infinteLoadMore(page) {
        $.ajax({
            url: ENDPOINT + "/servicesAR/" + CID + "?page=" + page,
            datatype: "html",
            data: {
                CID: CID

            },
            type: "get",
            beforeSend: function () {
                $('.auto-loadSVG').show();
            }
        })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-loadNoMore').html("لا يوجد المزيد");
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

    /**********************************************************Check Box Fillters************************************************************/
    var keyGE=[];
    var keysS=[];
    var keysSE=[];
    var keysSA=[];
    var keysJB=[];
    var search="" ;
    var fmaxw="";
    var fminw="";
    var ENDPOINT = "{{ url('/') }}";
    page2 = 1;
    $("#submit_2").click(function () {
        page2++;
        infinteLoadMore2(page2);

    })
    function infinteLoadMore2(page2) {


        $.ajax({
            url: ENDPOINT + "/search-serviceAR?page=" + page2,
            datatype: "html",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID

            },
            type: "get",
            beforeSend: function () {
                $('.auto-loadll').show();
            }
        })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-loadNoMore').html("لا يوجد المزيد");
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


    /**********Gender Fillter Script**************/
    $(".dropdownGES dtGES a").on('click', function () {
        $(".dropdownGES ddGES .labelGES").slideToggle('fast');
        $(".dropdownS ddS .labelS").hide();

    });
    $(".dropdownGES ddGES .labelGES labelGES a").on('click', function () {
        $(".dropdownGES ddGES .labelGES").hide();
    });

    function getSelectedValueGES(id) {
        return $("#" + id).find("dtGES a span.value").html();
    }

    $(document).bind('click', function (e) {
        var $clickedST = $(e.target);
        if (!$clickedST.parents().hasClass("dropdown")) $(".dropdownGES ddGES .labelGES").hide();

    });
    $('.mutliSelectGES input[type="checkbox"]').on('click', function () {

        var titleST = $(this).closest('.mutliSelectGES').find('input[type="checkbox"]').val(),
            titleST = $(this).val();
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {

            keyGE.push(titleST);
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search:search,
                    keyGE:keyGE,
                    keysS:keysS,
                    keysSE:keysSE,
                    keysSA:keysSA,
                    keysJB:keysJB,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return (keyGE, page2);
                }
            })
        } else {

            const index = keyGE.indexOf(titleST);
            keyGE.splice(index, 1);
            if (keyGE.length == 0) {
                if (search != "" || keyGE != "" || keysS != "" ||
                    keysSE != "" || keysSA != "" || keysJB != "" ||
                    fmaxw != "" ||fminw != "") {
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('search-serviceAR')}}",
                        data: {
                            search:search,
                            keyGE:keyGE,
                            keysS:keysS,
                            keysSE:keysSE,
                            keysSA:keysSA,
                            keysJB:keysJB,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        }, success: function (data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return (keyGE, page2);
                        }
                    })
                } else {

                    keyGE = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();

                }
            } else {

                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-serviceAR')}}",
                    data: {
                        search: search,
                        keyGE: keyGE,
                        keysS: keysS,
                        keysSE: keysSE,
                        keysSA: keysSA,
                        keysJB: keysJB,
                        fmaxw: fmaxw,
                        fminw: fminw,
                        CID: CID
                    }, success: function (data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return (keyGE, page2);
                    }
                })
            }
        }
    });
    /**********Gender Fillter Script**************/
    /**********State Fillter Script**************/
    $(".dropdownS dtS a").on('click', function () {
        $(".dropdownS ddS .labelS").slideToggle('fast');
        $(".dropdownGES ddGES .labelGES").hide();

    });
    $(".dropdownS ddS .labelS labelS a").on('click', function () {
        $(".dropdownS ddS .labelS").hide();
    });

    function getSelectedValueS(id) {
        return $("#" + id).find("dtS a span.value").html();
    }

    $(document).bind('click', function (e) {
        var $clickedST = $(e.target);
        if (!$clickedST.parents().hasClass("dropdown")) $(".dropdownS ddS .labelS").hide();

    });
    $('.mutliSelectS input[type="checkbox"]').on('click', function () {


        var titleS = $(this).closest('.mutliSelectS').find('input[type="checkbox"]').val(),
            titleS = $(this).val();
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {

            keysS.push(titleS);

            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return (keysS, page2);
                }
            })
        } else {
            const index = keysS.indexOf(titleS);
            keysS.splice(index, 1);
            if (keysS.length == 0) {
                if (search != "" || keyGE != "" || keysS != "" ||
                    keysSE != "" || keysSA != "" || keysJB != "" ||
                    fmaxw != "" ||fminw != "") {
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('search-serviceAR')}}",
                        data: {
                            search: search,
                            keyGE: keyGE,
                            keysS: keysS,
                            keysSE: keysSE,
                            keysSA: keysSA,
                            keysJB: keysJB,
                            fmaxw: fmaxw,
                            fminw: fminw,
                            CID: CID
                        }, success: function (data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return (keysS, page2);
                        }
                    })
                } else {
                    keysS = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();

                }
            } else {
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-serviceAR')}}",
                    data: {
                        search: search,
                        keyGE: keyGE,
                        keysS: keysS,
                        keysSE: keysSE,
                        keysSA: keysSA,
                        keysJB: keysJB,
                        fmaxw: fmaxw,
                        fminw: fminw,
                        CID: CID
                    }, success: function (data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return (keysS, page2);
                    }
                })
            }
        }
    });
    /**********State Fillter Script**************/
    /**********Services Fillter Script**************/
    $('#services-dropdown').on('change', function () {
        $("#job-dropdown").html('');
        document.getElementById("speciali-dropdown").style.display = "block";
        document.getElementById("job-dropdown").style.display = "none";
        var service_id = this.value;
        $("#speciali-dropdown").html('');
        $.ajax({
            url: "{{url('get-speciali-by-service')}}",
            type: "POST",
            data: {

                service_id: service_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',

            success: function (result) {
                $("#speciali-dropdown").append('<option hidden class="Statedropdown" value="">Select</option>');
                $.each(result.Allspeciali, function (key, value) {
                    $("#speciali-dropdown").append('<option class="Statedropdown" value="' + value.ID + '">' + value.specialization_nameAR + '</option>');
                });
            }
        });
        keysSE = [];
        keysSE.push(service_id);
        keysSA = [];
        keysJB = [];

        $('.auto-loadSe').show();
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (keysSE, page2);
            }
        })
    });
    /**********Services Fillter Script**************/
    /**********specializations Fillter Script**************/
    $('#speciali-dropdown').on('change', function () {
        var job_id = this.value;
        $("#job-dropdown").html('');
        $.ajax({
            url: "{{url('get-job-by-speciali')}}",
            type: "POST",
            data: {
                specializ_id: job_id,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                $("#job-dropdown").append('<option hidden class="Statedropdown" value="">Select</option>');
                $.each(result.Alljobs, function (key, value) {

                    if (value != '') {
                        $("#job-dropdown").append('<option class="Statedropdown" value="' + value.ID + '">' + value.job_nameAR + '</option>');
                        document.getElementById("job-dropdown").style.display = "block";
                    }
                });
            }
        });
        keysSA = [];
        keysSA.push(job_id);
        keysJB = [];
        $('.auto-loadSe').show();
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (keysSE, page2);
            }
        })

    });
    /**********specializations Fillter Script**************/
    /**********Job Fillter Script**************/
    $('#job-dropdown').on('change', function () {
        var job_id = this.value;

        keysJB = [];
        keysJB.push(job_id);
        $('.auto-loadSe').show();
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (keysSE, page2);
            }
        })
    });
    /**********Job Fillter Script**************/
    $(document).ready(function () {
        /**********Experience data geter**************/
        var max_wff;
        var min_wff;
        let inputLeftW = document.getElementById("input-leftW");
        let inputRightW = document.getElementById("input-rightW");
        let rangeW = document.querySelector(".sliderW > .rangeW");
        let priceFromW = document.querySelector(".price-fromW");
        let priceToW = document.querySelector(".price-toW");

        function setLeftValueW() {
            let _this = inputLeftW,
                min = parseInt(_this.min),
                max = parseInt(_this.max);
            _this.value = Math.min(
                parseInt(_this.value),
                parseInt(inputRightW.value) - 1
            );
            priceFromW.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            rangeW.style.left = percent + "%";
        }

        setLeftValueW();

        function setRightValueW() {
            let _this = inputRightW,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.max(parseInt(_this.value), parseInt(inputLeftW.value) + 1);
            priceToW.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            rangeW.style.right = 100 - percent + "%";
        }

        setRightValueW();
        inputLeftW.addEventListener("input", setLeftValueW);
        inputRightW.addEventListener("input", setRightValueW);
        inputLeftW.addEventListener("mouseover", (e) => {
            inputLeftW.classList.add("hover");
        });
        inputLeftW.addEventListener("mouseout", (e) => {
            inputLeftW.classList.remove("hover");
        });
        inputLeftW.addEventListener("mousedown", (e) => {
            inputLeftW.classList.add("active");
        });
        inputLeftW.addEventListener("mouseup", (e) => {
            inputLeftW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw = max_w;
            fminw = min_w;
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    $('.auto-loadSe').show();
                    page2 = 1;
                    return (page2);
                }
            })
        });
        inputLeftW.addEventListener("touchstart", (e) => {
            inputLeftW.classList.add("active");
        });
        inputLeftW.addEventListener("touchend", (e) => {
            inputLeftW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw = max_w;
            fminw = min_w;
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    $('.auto-loadSe').show();
                    page2 = 1;
                    return (page2);
                }
            })
        });
        inputRightW.addEventListener("mouseover", (e) => {
            inputRightW.classList.add("hover");
        });
        inputRightW.addEventListener("mouseout", (e) => {
            inputRightW.classList.remove("hover");
        });
        inputRightW.addEventListener("mousedown", (e) => {
            inputRightW.classList.add("active");
        });
        inputRightW.addEventListener("mouseup", (e) => {
            inputRightW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw = max_w;
            fminw = min_w;
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    $('.auto-loadSe').show();
                    page2 = 1;
                    return (page2);
                }
            })
        });
        inputRightW.addEventListener("touchstart", (e) => {
            inputRightW.classList.add("active");
        });
        inputRightW.addEventListener("touchend", (e) => {
            inputRightW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw = max_w;
            fminw = min_w;
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    $('.auto-loadSe').show();
                    page2 = 1;
                    return (page2);
                }
            })
        });
        /**********Experience data geter**************/
    });
    /**********Services data geter**************/
    /**************Search Box Script*************/
    $('#search').keyup(function () {
        $('.auto-loadSe').show();
        var search1 = $('#search').val();
        search = search1;
        if (search != "") {
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return (page2);
                }
            })
        } else {
            $("#data-wrapper").empty().html();
            page = 1;
            $("#data-wrapper").empty().html();
            infinteLoadMore(page)
            $('.auto-loadSVG').hide();
            $('.auto-loadNoMore').hide();
            $('.auto-loadSe').hide();
            $('.auto-loadMain').show();

        }

    })
    /**************Search Box Script*************/

    /**********EOF Services data geter**************/
    /**********************************************************EOF Check Box Fillters************************************************************/
    function handleonfocus(x) {
        x.style.backgroundColor = "#E9204F";
    }

    function handleonblur(x) {
        x.style.backgroundColor = "white";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script src="../{{asset('assets/js/anime.min.js')}}"></script>
<script src="../{{asset('assets/js/uikit.min.js')}}"></script>

<script src="../{{asset('assets/js/validate.js')}}"></script>
<script src="../{{asset('assets/js/main.js')}}"></script>
</body>
</html>
