<!DOCTYPE html>
<html lang="zxx">
<head>
    @foreach($cast_crew_data as $i)
        <title>{{$i->cast_crew_namear}} | إختار الدولة </title>
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
    <link rel="stylesheet" href="{{asset('assets/css/normalize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/pr.animation.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/pixeicons.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('assets/css/styleAR.css')}}" rel="stylesheet">


</head>
<body class="home front-page">

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
        <!-- main nav start -->
        <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
            <div class="container-fluid">
                <div style="display: block!important;" class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach($nav_main_items as $i)
                            @if($i->main_item_hassub==1)
                                <li class="nav-item dropdown">
                                    <a style="font-size: 25px!important;" class="nav-link" href="{{$i->main_item_hrefAR}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{$i->main_item_nameAR}}
                                    </a>
                                    <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($nav_submain_items as $ii)
                                            @if($i->ID==$ii->main_item_id)
                                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../{{$ii->submain_item_hrefAR}}">{{$ii->submain_item_nameAR}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li style="padding: 15px;font-size: 25px!important;" class="nav-item">
                                    <a href="../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a>
                                </li>
                            @endif
                        @endforeach
                            <li class="nav-item ">
                                <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lang
                                </a>
                                <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                    <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="services-countryAR">Arabic</a></li>
                                    <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="services-country">English</a></li>

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

    <div class="pr__hero__wrap pr__dark"  id="site-hero">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/main">
                            <img src="{{asset('images/logo.png')}}" alt="img" >
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul >
                                @foreach($nav_main_items as $i)
                                    @if($i->main_item_hassub==1)
                                        <li style="line-height:20px!important;" class="nav-item dropdown">
                                            <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="{{$i->main_item_hrefAR}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{$i->main_item_nameAR}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important;text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a style="font-size: 15px" class="dropdown-item" href="{{$ii->submain_item_hrefAR}}">{{$ii->submain_item_nameAR}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;"><a href="../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a></li>

                                    @endif
                                @endforeach
                                    <li style="line-height:20px!important;" class="nav-item">
                                        <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            اللغة
                                        </a>
                                        <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                                            <li style="padding-top: 8px"><a class="dropdown-item" href="services-countryAR">Arabic</a></li>
                                            <li style="padding-top: 8px"><a class="dropdown-item" href="services-country">English</a></li>

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
                                <h2 class="title uk-heading-hero text-uppercase" style="text-align: center; color: white">اختر الدولة</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Site Hero End -->
        <section class="pr__features uk-section uk-padding-remove-bottom" id="pr_features" >
            <div class="uk-container">
                <div class="section-inner" style="margin-bottom: 20px">
                    <div class="items-listing features-boxes uk-grid uk-grid-match uk-grid-medium uk1-child-width-1-3@m d-flex justify-content-center" data-uk-grid="">
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Egypt.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Egypt.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">مصر</h3>
                                <a href="{{ asset('../servicesAR/59') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Syria.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Syria.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">سوريا</h3>
                                <a href="{{ asset('../servicesAR/195') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Saudi_Arabia.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Saudi_Arabia.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">السعودية</h3>
                                <a href="{{ asset('../servicesAR/178') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Kuwait.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Kuwait.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">الكويت</h3>
                                <a href="{{ asset('../servicesAR/112') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Algeria.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Algeria.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">الجزائر</h3>
                                <a href="{{ asset('../servicesAR/56') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Bahrain.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Bahrain.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">البحرين</h3>
                                <a href="{{ asset('../servicesAR/21') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Iraq.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Iraq.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">العراق</h3>
                                <a href="{{ asset('../servicesAR/97') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Jordan.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Jordan.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">الأردن</h3>
                                <a href="{{ asset('../servicesAR/102') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Lebanon.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Lebanon.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">لبنان</h3>
                                <a href="{{ asset('../servicesAR/116') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Libya.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Libya.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">ليبيا</h3>
                                <a href="{{ asset('../servicesAR/125') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Morocco.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Morocco.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">المغرب</h3>
                                <a href="{{ asset('../servicesAR/126') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Oman.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Oman.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">عمان</h3>
                                <a href="{{ asset('../servicesAR/159') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Palestine.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Palestine.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">فلسطين</h3>
                                <a href="{{ asset('../servicesAR/169') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Sudan.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Sudan.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">السودان</h3>
                                <a href="{{ asset('../servicesAR/181') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Tunisia.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Tunisia.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">تونس</h3>
                                <a href="{{ asset('../servicesAR/205') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/United_Arab_Emirates.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/United_Arab_Emirates.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">الامارات</h3>
                                <a href="{{ asset('../servicesAR/2') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Yemen.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Yemen.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">اليمن</h3>
                                <a href="{{ asset('../servicesAR/224') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="item feature-box ">
                            <div class="inner inner1">
                                <div id="CastPink" class="cflag" style="height: 60px">
                                    <img style="display: none;" id="CastPink1" src="{{asset('assets/images/flags/Qatar.png')}}" class="img11 img-bottom" alt="Card Back">
                                    <img id="CastPink2" src="{{asset('assets/images/flags/Qatar.png')}}" class="img11 img-top" alt="Card Front">
                                </div>
                                <i class="bi bi-people-fill "></i>
                                <h3 class="title uk-h4">قطر</h3>
                                <a href="{{ asset('../servicesAR/173') }}" class="link uk-position-cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Section: Features End -->


    </div><!-- Hero Wrap End -->

    <div class="pr__content" id="site-content">



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
                                    <a id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle="">للإستفسار</a>
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

                <footer  class="text-left text-lg-start bg-light text-muted new-footer">


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
                                    <p style="font-size: 14px" >

                                        البوابة الخاصة بمشروك القادم للمواهب وطاقم العمل.
                                    </p>
                                    <hr style="color: white;background-color: white">
                                    <p style="font-size: 14px"><iframe src="{{asset('svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp; + 79 44 233 50 02+</p>

                                    <p style="font-size: 14px"><iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com</p>
                                    <p style="font-size: 14px"><iframe src="{{asset('svg/location-dot-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;شارع 18 , توريل , المنصورة</p>


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
                                        <a style="font-size: 14px" href="/Castingstars/blogsAR" class="text-reset">الخدمات</a>
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
                                        <a style="font-size: 14px" href="../talent-countryAR" class="text-reset">المواهب </a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="../services-countryAR" class="text-reset">خدمات تقنية</a>
                                    </p>
                                    <p>
                                        <a style="font-size: 14px" href="../locations-countryAR" class="text-reset">مواقع التصوير</a>
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
                                            <input style="border-radius: 0px!important;" id="newsletter1" type="text" class="form-control" placeholder="عنوان البريد الالكترونى">
                                            <a style="height: 40px;width: 15%;max-width: 15%!important;" id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle=""><iframe src="{{asset('svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe></a>
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
                                    <a href="#">قوانين الاستخدام</a>
                                    <a href="#">سياسة الخصوصية</a>
                                    <a href="#">سياسة ملفات الارتباط</a>
                                </div>
                            </div>

                            <div class="pr__copyrights column">
                                <div class="inner text-right" style="direction: rtl">
                                    <p>2022 © كل الحقوق محفوظة لدى <a href="http://attractionme.net/Castingstars/AR">Cast&Crew</a></p>
                                </div>
                            </div>

                        </div>
                    </div><!-- Inner End-->
                </div><!-- Container End-->
            </div><!-- Outer End-->
        </div><!-- Footer Bottom End-->

    </footer><!-- Site Footer End-->
    </div>
</div><!-- Site Wrapper End -->


<div id="pr__contact__form" class="pr__contact__form uk-modal-full" data-uk-modal="">
    <div class="uk-modal-dialog" data-uk-height-viewport="">
        <div class="form-outer">
            <div class="uk-container uk-container-xsmall">
                <div class="form-inner uk-position-relative">
                    <button class="uk-modal-close-full" type="button" data-uk-close="ratio: 2;" style="color: black"><span>Close</span>
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
<!-- Needed Scripts -->
<script type="text/javascript">
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
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
    window.onclick = function(event) {
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/anime.min.js')}}"></script>
<script src="{{asset('assets/js/pr.animation2.js')}}"></script>
<script src="{{asset('assets/js/uikit.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

