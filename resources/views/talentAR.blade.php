<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_namear}} | المواهب</title>
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
        <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
            <div class="container-fluid">
                <div style="display: block!important;" class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach($nav_main_items as $i)
                            @if($i->main_item_hassub==1)
                                <li class="nav-item ">
                                    <a style="font-size: 25px!important;" class="nav-link" href="../{{$i->main_item_hrefAR}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a href="../../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a>
                                </li>
                            @endif
                        @endforeach
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                اللغة
                            </a>
                            <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../talent-countryAR">العربية</a></li>
                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../talent-country">الانجليزية</a></li>

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
                                            <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="../{{$i->main_item_hrefAR}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{$i->main_item_nameAR}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../{{$ii->submain_item_hrefAR}}">{{$ii->submain_item_nameAR}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;" class="nav-item"><a  href="../../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a></li>

                                    @endif
                                @endforeach
                                <li style="line-height:20px!important;" class="nav-item">
                                    <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        اللغة
                                    </a>
                                    <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../talent-countryAR">العربية</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../talent-country">الانجليزية</a></li>

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
                                            <span class="screen-reader-text">Search for:</span>
                                        </label>
                                        <input type="search" id="search" class="search-field text-right" placeholder="البحث" name="search" value="">
                                        <button class="search-submit WSB-AR">
                                            <span class="screen-reader-text">ابحث</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Eof Search Box Fillters-->

                        <!-- Check Box Fillters-->
                        <div class="row isotope-wrapper  parent RCF" data-animation="fadeInDown" data-delay="150" id="Checkfilters">
                            <!-- Talent Fillters-->
                            <div class="col-md-2 col-sm-6 child TAL" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownTA dropdown">
                                    <dtTA>
                                        <a href="#">
                                            <span class="hidaTA">الموهبة</span>
                                            <p class="multiSelTA multiSel"></p>
                                        </a>
                                    </dtTA>
                                    <ddTA>
                                        <div class="mutliSelectTA">
                                            <label class="labelTA">
                                                @foreach($AllTalent as $ii)
                                                    <label>
                                                        <input type="checkbox" id="{{$ii->TalentNameAR}}" name="{{$ii->ID}}" value="{{$ii->ID}}"><label class="color-dark-font" for="{{$ii->TalentNameAR}}">{{$ii->TalentNameAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddTA>
                                </dl>
                            </div>
                            <!-- EyeColor Fillters-->
                            <div class="col-md-2 col-sm-6 child EYC" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownEC dropdown">
                                    <dtEC>
                                        <a href="#">
                                            <span class="hidaEC">لون العيون</span>
                                            <p class="multiSelEC multiSel"></p>
                                        </a>
                                    </dtEC>
                                    <ddEC>
                                        <div class="mutliSelectEC gallery-filters" >
                                            <label class="labelEC">
                                                @foreach($AllEyes as $i)
                                                    <label>
                                                        <input type="checkbox" id="EC{{$i->ColorAR}}" name="{{$i->ID}}" value="{{$i->ID}}"><label class="color-dark-font" for="EC{{$i->ColorAR}}">{{$i->ColorAR}}</label>


                                                    </label>
                                                @endforeach

                                            </label>
                                        </div>
                                    </ddEC>
                                </dl>
                            </div>
                            <!-- Gender Fillters-->
                            <div class="col-md-2 col-sm-6 child RGE" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownGE dropdown">
                                    <dtGE>
                                        <a href="#">
                                            <span class="hidaGE">النوع</span>
                                            <p class="multiSelGE multiSel"></p>
                                        </a>
                                    </dtGE>
                                    <ddGE>
                                        <div class="mutliSelectGE">
                                            <label class="labelGE">
                                                @foreach($AllGender as $i)
                                                    <label>
                                                        <input type="checkbox" id="{{$i->GenderAR}}" name="rolesGE[]" value="{{$i->ID}}"><label class="color-dark-font" for="{{$i->GenderAR}}">{{$i->GenderAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddGE>
                                </dl>
                            </div>
                            <!-- Hair Quality Fillters-->
                            <div class="col-md-2 col-sm-6 child RHQ" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownHQ dropdown">
                                    <dtHQ>
                                        <a href="#">
                                            <span class="hidaHQ">نوع الشعر</span>
                                            <p class="multiSelHQ multiSel"></p>
                                        </a>
                                    </dtHQ>
                                    <ddHQ>
                                        <div class="mutliSelectHQ">
                                            <label class="labelHQ">
                                                @foreach($AllHairQuality as $i)
                                                    <label>
                                                        <input type="checkbox" id="{{$i->HairQualityAR}}" name="roles[]" value="{{$i->ID}}"><label class="color-dark-font" for="{{$i->HairQualityAR}}">{{$i->HairQualityAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddHQ>
                                </dl>
                            </div>
                            <!-- Hair Color Fillters-->
                            <div class="col-md-2 col-sm-6 child RHC" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownHC dropdown">
                                    <dtHC>
                                        <a href="#">
                                            <span class="hidaHC">لون الشعر</span>
                                            <p class="multiSelHC "></p>
                                        </a>
                                    </dtHC>
                                    <ddHC>
                                        <div class="mutliSelectHC">
                                            <label class="labelHC">
                                                @foreach($AllHairColor as $i)
                                                    <label>
                                                        <input type="checkbox" id="HC{{$i->HairColorAR}}" name="rolesHC[]" value="{{$i->ID}}"><label class="color-dark-font" for="HC{{$i->HairColorAR}}">{{$i->HairColorAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddHC>
                                </dl>
                            </div>
                            <!-- Skin Color Fillters-->
                            <div class="col-md-2 col-sm-6 child RSC" data-animation="fadeInDown" data-delay="150" >
                                <dl class="dropdownSC dropdown">
                                    <dtSC>
                                        <a href="#">
                                            <span class="hidaSC">لون البشرة</span>
                                            <p class="multiSelSC multiSel"></p>
                                        </a>
                                    </dtSC>
                                    <ddSC>
                                        <div class="mutliSelectSC">
                                            <label class="labelSC">
                                                @foreach($AllSkinColor as $i)
                                                    <label>
                                                        <input type="checkbox" id="SC{{$i->SkinColorAR}}" name="rolesSC[]" value="{{$i->ID}}"><label class="color-dark-font" for="SC{{$i->SkinColorAR}}">{{$i->SkinColorAR}}</label>
                                                    </label>
                                                @endforeach
                                            </label>
                                        </div>
                                    </ddSC>
                                </dl>
                            </div>
                            <!-- State Fillters-->
                            <div class="col-md-2 col-sm-6 child RST" data-animation="fadeInDown" data-delay="150">
                                <dl class="dropdownST dropdown">
                                    <dtST>
                                        <a href="#">
                                            <span class="hidaST">المحافظة</span>
                                            <p class="multiSelST multiSel"></p>
                                        </a>
                                    </dtST>
                                    <ddST>
                                        <div class="mutliSelectST">
                                            <label class="labelST">
                                                @if($AllStates!="")
                                                    @foreach($AllStates as $i)
                                                        <label >
                                                            <input type="checkbox" id="{{$i->governorate_name_ar}}" name="roles[]" value="{{$i->id}}"><label class="color-dark-font" for="{{$i->governorate_name_ar}}">{{$i->governorate_name_ar}}</label>
                                                        </label>
                                                    @endforeach
                                                @else
                                                    @foreach($all_states as $i)
                                                        <label >
                                                            <input type="checkbox" id="{{$i->name_ar}}" name="roles[]" value="{{$i->id}}"><label class="color-dark-font" for="{{$i->name_ar}}">{{$i->name_ar}}</label>
                                                        </label>
                                                    @endforeach
                                                @endif
                                            </label>
                                        </div>
                                    </ddST>
                                </dl>
                            </div>
                        </div>
                        <!-- Eof Check Box Fillters-->

                        <!-- Sliders Fillters-->
                        <div style="margin-bottom: 1px;" class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30 animate" data-animation="fadeInDown" data-delay="150" >
                            <!-- Age Sliders Fillters-->
                            <div class="col-md-4 SAG col-sm-6 ">
                                <div class="vertical-item item-gallery text-center">
                                    <div class="widget woocommerce">

                                        <h3 class="widget-title">العمر</h3>

                                        <form method="get" action="">
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="multi-range-slider">
                                                        <input type="range" id="input-left" min="0" step="1" max="100" value="0">
                                                        <input type="range" id="input-right" min="0" step="1" max="100" value="100">

                                                        <div class="slider">
                                                            <div class="track"></div>
                                                            <div class="range"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                        <div class="price__wrapper">
                                            <span class="price-from"></span>
                                            <span class="price-to"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Height Sliders Fillters-->
                            <div class="col-md-4 SHI col-sm-6 ">
                                <div class="vertical-item item-gallery text-center">
                                    <div class="widget woocommerce">

                                        <h3 class="widget-title">الطول</h3>
                                        <form method="get" action="">
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="multi-range-sliderH">
                                                        <input type="range" id="input-leftH" min="0" step="1" max="200" value="0">
                                                        <input type="range" id="input-rightH" min="0" step="1" max="200" value="200">

                                                        <div class="sliderH">
                                                            <div class="trackH"></div>
                                                            <div class="rangeH"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                        <div class="price__wrapperH">
                                            <span class="price-fromH"></span>
                                            <span class="price-toH"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Weight Sliders Fillters-->
                            <div class="col-md-4 SWE col-sm-6 ">
                                <div class="vertical-item item-gallery text-center">
                                    <div class="widget woocommerce widget_price_filter">

                                        <h3 class="widget-title">الوزن</h3>

                                        <form method="get" action="http://webdesign-finder.com/">
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="multi-range-sliderW">
                                                        <input type="range" id="input-leftW" min="0" step="1" max="200" value="0">
                                                        <input type="range" id="input-rightW" min="0" step="1" max="200" value="200">

                                                        <div class="sliderW">
                                                            <div class="trackW"></div>
                                                            <div class="rangeW"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                        <div class="price__wrapperW">
                                            <span class="price-fromW"></span>
                                            <span class="price-toW"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- EofSliders Fillters-->
                        <h3 style="font-size: 22px;margin-top: 1px" class="widget-title text-uppercase">البحث المخصص</h3>

                        <div id="advfilterdata" class="row isotope-wrapper  parent ELAAU" data-animation="fadeInDown" data-delay="150" id="Checkfilters">

                            <!-- Experiences Fillters-->
                            <div class="child EXF" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <!--onfocus="this.size=10;" onblur="this.size=0;" onchange=" this.blur()"  onchange='this.size=1; this.blur();-->

                                    <select name="Experiences" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Experiences" class="postform" style="text-align: center!important;">
                                        <option hidden  class="Statedropdown" value="-1" >الخبرات</option>
                                        @foreach($AllExperiences as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" >{{$i->experiences_nameAR}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- Language Fillters-->
                            <div class="child LAF" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Language" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Language" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="-1">اللغة</option>
                                        @foreach($AllLanguage as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" >{{$i->LanguageAR}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- accent Fillters-->
                            <div class="child ACF" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Accent" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Accent" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="">اللهجة</option>
                                        @foreach($AllAccent as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" >{{$i->accent_nameAR}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Appearance Fillters-->
                            <div class="child APF" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Appearance" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Appearance" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="">المظهر</option>
                                        @foreach($AllAppearance as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" >{{$i->appearanceAR}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Unique Fillters-->
                            <div class="child UNF" data-animation="fadeInDown" data-delay="150">
                                <div class="widget widget_LState">
                                    <select name="Unique" onfocus='handleonfocus(this)' onblur='handleonblur(this)' id="Unique" class="postform" style="text-align: center!important;">
                                        <option hidden class="Statedropdown" value="">السمات</option>
                                        @foreach($AllUniquedata as $i)
                                            <option class="Statedropdown" value="{{$i->ID}}" >{{$i->UniqueAR}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- Models View-->
                        <div id="AllModelss">
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
                                <button class="panbutton" type="button" id="submit_1">المزيد</button>
                            </div>
                            <div class="auto-loadSe col-lg-12 text-center">
                                <button class="panbutton" type="button" id="submit_2">المزيد</button>
                            </div>
                        </div>
                        <!-- Eof Models View-->
                        <div class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30" >
                            <di  id="result">
                            </di>
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
                                    <p style="font-size: 14px"><iframe src="{{asset('../../public/svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp; + 79 44 233 50 02+</p>

                                    <p style="font-size: 14px"><iframe src="{{asset('../../public/svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;attractionme@gmail.com</p>
                                    <p style="font-size: 14px"><iframe src="{{asset('../../public/svg/location-dot-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;شارع 18 , توريل , المنصورة</p>


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
                                            <a style="height: 40px;width: 15%;max-width: 15%!important;" id="pr__contact" href="#pr__contact__form" class="button uk-button uk-button-large uk-button-default" data-uk-toggle=""><iframe src="{{asset('../../public/svg/envelope-solid.svg')}}" width="20px" height="20px" style="color: white;max-width: 20px!important;max-height: 20px!important;"></iframe></a>
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
                                    <img src="{{asset('../../public/images/logo.png')}}" alt="img" style="width: 50%">
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
            url: ENDPOINT + "/talentsAR/"+CID+"?page=" + page,
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



    var keys = [];
    var keysEC = [];
    var keysGE = [];
    var keysHQ = [];
    var keysHC = [];
    var keysSC = [];
    var keysst = [];
    var LExperiences=[];
    var LLanguage=[];
    var LAccent=[];
    var LAppearance=[];
    var LUnique=[];
    var search ;
    var fmax_age;
    var fmin_age;
    var fmax_Height;
    var fmin_Height;
    var fmaxw;
    var fminw;
    var ENDPOINT = "{{ url('/') }}";
    page2 = 1;
    $("#submit_2").click(function () {
        page2++;
        infinteLoadMore2(page2);

    })
    function infinteLoadMore2(page2) {


        $.ajax({
            url: ENDPOINT + "/searchAR?page=" + page2,
            datatype: "html",
            data: {
                search:search,
                Eyecolorf:keysEC,
                Genderf:keysGE,
                talent:keys,
                Statef:keysst,
                Skincf:keysSC,
                Haircf:keysHC,
                Hairqf:keysHQ,
                Experiencesf:LExperiences,
                Languagef:LLanguage,
                Accentf:LAccent,
                Appearancef:LAppearance,
                Uniquef:LUnique,
                fmax_age:fmax_age,
                fmin_age:fmin_age,
                fmax_Height:fmax_Height,
                fmin_Height:fmin_Height,
                fmaxw:fmaxw,
                fminw:fminw,
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
    /**********Talent Fillter Script**************/
    $(".dropdownTA dtTA a").on('click', function() {
        $(".dropdownTA ddTA .labelTA").slideToggle('fast');
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownTA ddTA .labelTA labelTA a").on('click', function() {
        $(".dropdownTA ddTA .labelTA").hide();
    });
    function getSelectedValueTA(id) {
        return $("#" + id).find("dtTA a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedTA = $(e.target);
        if (!$clickedTA.parents().hasClass("dropdown")) $(".dropdownTA ddTA .labelTA").hide();
    });
    $('.mutliSelectTA input[type="checkbox"]').on('click', function() {
        var titleTA = $(this).closest('.mutliSelectTA').find('input[type="checkbox"]').val(),
            titleTA = $(this).val();
        $('.auto-loadSe').show();

        if ($(this).is(':checked')) {

            keys.push(titleTA);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keys,page2);
                }
            })
        } else {
            const index = keys.indexOf(titleTA);
            keys.splice(index, 1);
            if(keys.length == 0){

                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('searchAR')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keys,page2);
                        }
                    })
                }else{
                    keys = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }

            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keys,page2);
                    }
                })
            }
        }
    });
    /**********Talent Fillter Script**************/

    /**********Eye Color Fillter Script**************/
    $(".dropdownEC dtEC a").on('click', function() {
        $(".dropdownEC ddEC .labelEC").slideToggle('fast');
        $(".dropdownTA ddTA .labelTA").hide();
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownEC ddEC .labelEC labelEC a").on('click', function() {
        $(".dropdownEC ddEC .labelEC").hide();
    });
    function getSelectedValueEC(id) {
        return $("#" + id).find("dtEC a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedEC = $(e.target);
        if (!$clickedEC.parents().hasClass("dropdown")) $(".dropdownEC ddEC .labelEC").hide();
    });
    $('.mutliSelectEC input[type="checkbox"]').on('click', function() {
        var titleEC = $(this).closest('.mutliSelectEC').find('input[type="checkbox"]').val(),
            titleEC = $(this).val();
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {

            keysEC.push(titleEC);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysEC,page2);
                }
            })
        } else {
            const index = keysEC.indexOf(titleEC);
            keysEC.splice(index, 1);
            if(keysEC.length == 0){

                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('searchAR')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysEC,page2);
                        }
                    })
                }else{
                    keysEC = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keysEC,page2);
                    }
                })
            }
        }
    });
    /**********Eye Color Fillter Script**************/

    /**********Gender Fillter Script**************/
    $(".dropdownGE dtGE a").on('click', function() {
        $(".dropdownGE ddGE .labelGE").slideToggle('fast');
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownTA ddTA .labelTA").hide();
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownGE ddGE .labelGE labelGE a").on('click', function() {
        $(".dropdownGE ddGE .labelGE").hide();
    });
    function getSelectedValueGE(id) {
        return $("#" + id).find("dtGE a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedGE = $(e.target);
        if (!$clickedGE.parents().hasClass("dropdown")) $(".dropdownGE ddGE .labelGE").hide();
    });
    $('.mutliSelectGE input[type="checkbox"]').on('click', function() {

        var titleGE = $(this).closest('.mutliSelectGE').find('input[type="checkbox"]').val(),
            titleGE = $(this).val();
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {
            keysGE.push(titleGE);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysGE,page2);
                }
            })
        } else {
            const index = keysGE.indexOf(titleGE);
            keysGE.splice(index, 1);
            if(keysGE.length == 0){
                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('searchAR')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysGE,page2);
                        }
                    })
                }else{
                    keysGE = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        return(keysGE);
                    }
                })

            }
        }
    });
    /**********Gender Fillter Script**************/

    /**********Hair Quality Fillter Script**************/
    $(".dropdownHQ dtHQ a").on('click', function() {
        $(".dropdownHQ ddHQ .labelHQ").slideToggle('fast');
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownTA ddTA .labelTA").hide();
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownHQ ddHQ .labelHQ labelHQ a").on('click', function() {
        $(".dropdownHQ ddHQ .labelHQ").hide();
    });
    function getSelectedValueHQ(id) {
        return $("#" + id).find("dtHQ a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedHQ = $(e.target);
        if (!$clickedHQ.parents().hasClass("dropdown")) $(".dropdownHQ ddHQ .labelHQ").hide();
    });
    $('.mutliSelectHQ input[type="checkbox"]').on('click', function() {

        var titleHQ = $(this).closest('.mutliSelectHQ').find('input[type="checkbox"]').val(),
            titleHQ = $(this).val();
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {
            keysHQ.push(titleHQ);
            $.ajax({
                type: "get",
                url: "{{URL::to('search')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysHQ,page2);
                }
            })

        } else {
            const index = keysHQ.indexOf(titleHQ);
            keysHQ.splice(index, 1);
            if(keysHQ.length == 0){
                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('search')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysHQ,page2);
                        }
                    })
                }else{
                    keysHQ = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keysHQ,page2);
                    }
                })
            }
        }
    });
    /**********Hair Quality Fillter Script**************/

    /**********Hair Color Fillter Script**************/
    $(".dropdownHC dtHC a").on('click', function() {
        $(".dropdownHC ddHC .labelHC").slideToggle('fast');
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownTA ddTA .labelTA").hide();
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownHC ddHC .labelHC labelHC a").on('click', function() {
        $(".dropdownHC ddHC .labelHC").hide();
    });
    function getSelectedValueHC(id) {
        return $("/" + id).find("dtHC a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedHC = $(e.target);
        if (!$clickedHC.parents().hasClass("dropdown")) $(".dropdownHC ddHC .labelHC").hide();
    });
    $('.mutliSelectHC input[type="checkbox"]').on('click', function() {

        var titleHC = $(this).closest('.mutliSelectHC').find('input[type="checkbox"]').val(),
            titleHC = $(this).val() + ",";
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {
            keysHC.push(titleHC);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysHC,page2);
                }
            })

        } else {
            const index = keysHC.indexOf(titleHC);
            keysHC.splice(index, 1);
            if(keysHC.length == 0){
                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('search')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysHC,page2);
                        }
                    })
                }else{
                    keysHC = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keysHC,page2);

                    }
                })
            }
        }
    });
    /**********Hair Color Fillter Script**************/

    /**********Skin Color Fillter Script**************/
    $(".dropdownSC dtSC a").on('click', function() {
        $(".dropdownSC ddSC .labelSC").slideToggle('fast');
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownTA ddTA .labelTA").hide();
        $(".dropdownST ddST .labelST").hide();
    });
    $(".dropdownSC ddSC .labelSC labelSC a").on('click', function() {
        $(".dropdownSC ddSC .labelSC").hide();
    });
    function getSelectedValueSC(id) {
        return $("#" + id).find("dtSC a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedSC = $(e.target);
        if (!$clickedSC.parents().hasClass("dropdown")) $(".dropdownSC ddSC .labelSC").hide();
    });
    $('.mutliSelectSC input[type="checkbox"]').on('click', function() {
        var titleSC = $(this).closest('.mutliSelectSC').find('input[type="checkbox"]').val(),
            titleSC = $(this).val() + ",";
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {
            keysSC.push(titleSC);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysSC,page2);
                }
            })

        } else {
            const index = keysSC.indexOf(titleSC);
            keysSC.splice(index, 1);
            if(keysSC.length == 0){
                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('searchAR')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysSC,page2);
                        }
                    })
                }else{
                    keysSC = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }
            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keysSC,page2);
                    }
                })
            }
        }
    });
    /**********Skin Color Fillter Script**************/

    /**********State Fillter Script**************/
    $(".dropdownST dtST a").on('click', function() {
        $(".dropdownST ddST .labelST").slideToggle('fast');
        $(".dropdownSC ddSC .labelSC").hide();
        $(".dropdownHC ddHC .labelHC").hide();
        $(".dropdownHQ ddHQ .labelHQ").hide();
        $(".dropdownGE ddGE .labelGE").hide();
        $(".dropdownEC ddEC .labelEC").hide();
        $(".dropdownTA ddTA .labelTA").hide();

    });
    $(".dropdownST ddST .labelST labelST a").on('click', function() {
        $(".dropdownST ddST .labelST").hide();
    });
    function getSelectedValueST(id) {
        return $("#" + id).find("dtST a span.value").html();
    }
    $(document).bind('click', function(e) {
        var $clickedST = $(e.target);
        if (!$clickedST.parents().hasClass("dropdown")) $(".dropdownST ddST .labelST").hide();

    });
    $('.mutliSelectST input[type="checkbox"]').on('click', function() {

        var titleST = $(this).closest('.mutliSelectST').find('input[type="checkbox"]').val(),
            titleST = $(this).val() + ",";
        $('.auto-loadSe').show();
        if ($(this).is(':checked')) {
            keysst.push(titleST);
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
                    CID:CID
                },success: function(data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return(keysst,page2);
                }
            })


        } else {
            const index = keysst.indexOf(titleST);
            keysst.splice(index, 1);
            if(keysst.length == 0){
                if(search!=""||keysEC!=""||keysGE!=""||keys!=""||
                    keysst!=""||keysSC!=""||keysHC!=""||keysHC!=""||
                    keysHQ!=""||LExperiences!=""||LLanguage!=""||LAccent!=""||
                    LAppearance!=""||LUnique!=""||fmax_age!=""||fmin_age!=""||
                    fmax_Height!=""||fmin_Height!=""||fmaxw!=""||fminw!=""){
                    $.ajax({
                        type: "get",
                        url: "{{URL::to('searchAR')}}",
                        data: {
                            search:search,
                            Eyecolorf:keysEC,
                            Genderf:keysGE,
                            talent:keys,
                            Statef:keysst,
                            Skincf:keysSC,
                            Haircf:keysHC,
                            Hairqf:keysHQ,
                            Experiencesf:LExperiences,
                            Languagef:LLanguage,
                            Accentf:LAccent,
                            Appearancef:LAppearance,
                            Uniquef:LUnique,
                            fmax_age:fmax_age,
                            fmin_age:fmin_age,
                            fmax_Height:fmax_Height,
                            fmin_Height:fmin_Height,
                            fmaxw:fmaxw,
                            fminw:fminw,
                            CID:CID
                        },success: function(data) {
                            $("#data-wrapper").empty().html(data);
                            $('.auto-loadNoMore').hide();
                            $('.auto-loadMain').hide();
                            page2 = 1;
                            return(keysst,page2);
                        }
                    })
                }else{
                    keysst = [];
                    $("#data-wrapper").empty().html();
                    page = 1;
                    infinteLoadMore(page)
                    $('.auto-loadSVG').hide();
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadSe').hide();
                    $('.auto-loadMain').show();
                }

            }
            else{
                $.ajax({
                    type: "get",
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
                        CID:CID
                    },success: function(data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return(keysst,page2);
                    }
                })
            }
        }
    });
    /**********State Fillter Script**************/
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
                    url: "{{URL::to('searchAR')}}",
                    data: {
                        search:search,
                        Eyecolorf:keysEC,
                        Genderf:keysGE,
                        talent:keys,
                        Statef:keysst,
                        Skincf:keysSC,
                        Haircf:keysHC,
                        Hairqf:keysHQ,
                        Experiencesf:LExperiences,
                        Languagef:LLanguage,
                        Accentf:LAccent,
                        Appearancef:LAppearance,
                        Uniquef:LUnique,
                        fmax_age:fmax_age,
                        fmin_age:fmin_age,
                        fmax_Height:fmax_Height,
                        fmin_Height:fmin_Height,
                        fmaxw:fmaxw,
                        fminw:fminw,
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

        /**********ADV Show Fillter Script**************/
            ///////////////////////////// Age Slider ///////////////////////////////////
        var min_age;
        var max_age;
        let inputLeft = document.getElementById("input-left");
        let inputRight = document.getElementById("input-right");
        let range = document.querySelector(".slider > .range");
        let priceFrom = document.querySelector(".price-from");
        let priceTo = document.querySelector(".price-to");
        function setLeftValue() {
            let _this = inputLeft,
                min = parseInt(_this.min),
                max = parseInt(_this.max);
            _this.value = Math.min(
                parseInt(_this.value),
                parseInt(inputRight.value) - 1
            );
            priceFrom.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            range.style.left = percent + "%";
        }
        setLeftValue();
        function setRightValue() {
            let _this = inputRight,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);
            priceTo.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            range.style.right = 100 - percent + "%";
        }
        setRightValue();
        inputLeft.addEventListener("input", setLeftValue);
        inputRight.addEventListener("input", setRightValue);

        inputLeft.addEventListener("mouseover", (e) => {
            inputLeft.classList.add("hover");
        });
        inputLeft.addEventListener("mouseout", (e) => {
            inputLeft.classList.remove("hover");
        });
        inputLeft.addEventListener("mousedown", (e) => {
            inputLeft.classList.add("active");
        });
        inputLeft.addEventListener("mouseup", (e) => {
            inputLeft.classList.remove("active");
            min_age = document.getElementById("input-left").value,
                max_age = document.getElementById("input-right").value;
            var min_ageff = (new Date().getFullYear()-min_age)+1;
            var max_ageff = (new Date().getFullYear()-max_age)+1;
            var min_agef = parseInt(min_ageff);//;
            var max_agef = parseInt(max_ageff);
            fmin_age=max_agef;
            fmax_age=min_agef;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputLeft.addEventListener("touchstart", (e) => {
            inputLeft.classList.add("active");
        });
        inputLeft.addEventListener("touchend", (e) => {
            inputLeft.classList.remove("active");
            min_age = document.getElementById("input-left").value,
                max_age = document.getElementById("input-right").value;
            var min_ageff = (new Date().getFullYear()-min_age);
            var max_ageff = (new Date().getFullYear()-max_age);
            var min_agef = parseInt(min_ageff);//;
            var max_agef = parseInt(max_ageff);
            fmin_age=max_agef;
            fmax_age=min_agef;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputRight.addEventListener("mouseover", (e) => {
            inputRight.classList.add("hover");
        });
        inputRight.addEventListener("mouseout", (e) => {
            inputRight.classList.remove("hover");
        });
        inputRight.addEventListener("mousedown", (e) => {
            inputRight.classList.add("active");
        });
        inputRight.addEventListener("mouseup", (e) => {
            inputRight.classList.remove("active");
            min_age = document.getElementById("input-left").value,
                max_age = document.getElementById("input-right").value;
            var min_ageff = (new Date().getFullYear()-min_age);
            var max_ageff = (new Date().getFullYear()-max_age);
            var min_agef = parseInt(min_ageff);//;
            var max_agef = parseInt(max_ageff);
            fmin_age=max_agef;
            fmax_age=min_agef;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputRight.addEventListener("touchstart", (e) => {
            inputRight.classList.add("active");
        });
        inputRight.addEventListener("touchend", (e) => {
            inputRight.classList.remove("active");
            min_age = document.getElementById("input-left").value,
                max_age = document.getElementById("input-right").value;
            var min_ageff = (new Date().getFullYear()-min_age);
            var max_ageff = (new Date().getFullYear()-max_age);
            var min_agef = parseInt(min_ageff);//;
            var max_agef = parseInt(max_ageff);
            fmin_age=max_agef;
            fmax_age=min_agef;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
///////////////////////////// EOF Age Slider ///////////////////////////////////

///////////////////////////// Height Slider ///////////////////////////////////
        var min_Heightff;
        var max_Heightff;
        let inputLeftH = document.getElementById("input-leftH");
        let inputRightH = document.getElementById("input-rightH");
        let rangeH = document.querySelector(".sliderH > .rangeH");
        let priceFromH = document.querySelector(".price-fromH");
        let priceToH = document.querySelector(".price-toH");
        function setLeftValueH() {
            let _this = inputLeftH,
                min = parseInt(_this.min),
                max = parseInt(_this.max);
            _this.value = Math.min(
                parseInt(_this.value),
                parseInt(inputRightH.value) - 1
            );
            priceFromH.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            rangeH.style.left = percent + "%";
        }
        setLeftValueH();
        function setRightValueH() {
            let _this = inputRightH,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.max(parseInt(_this.value), parseInt(inputLeftH.value) + 1);
            priceToH.textContent = `${_this.value * 1}`;
            let percent = ((_this.value - min) / (max - min)) * 100;
            rangeH.style.right = 100 - percent + "%";
        }
        setRightValueH();
        inputLeftH.addEventListener("input", setLeftValueH);
        inputRightH.addEventListener("input", setRightValueH);
        inputLeftH.addEventListener("mouseover", (e) => {
            inputLeftH.classList.add("hover");
        });
        inputLeftH.addEventListener("mouseout", (e) => {
            inputLeftH.classList.remove("hover");
        });
        inputLeftH.addEventListener("mousedown", (e) => {
            inputLeftH.classList.add("active");
        });
        inputLeftH.addEventListener("mouseup", (e) => {
            inputLeftH.classList.remove("active");
            min_Heightff = document.getElementById("input-leftH").value,
                max_Heightff = document.getElementById("input-rightH").value;
            var min_Heightf = parseInt(min_Heightff);
            var max_Heightf = parseInt(max_Heightff);
            fmax_Height=max_Heightf;
            fmin_Height=min_Heightf;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputLeftH.addEventListener("touchstart", (e) => {
            inputLeftH.classList.add("active");
        });
        inputLeftH.addEventListener("touchend", (e) => {
            inputLeftH.classList.remove("active");
            min_Heightff = document.getElementById("input-leftH").value,
                max_Heightff = document.getElementById("input-rightH").value;
            var min_Heightf = parseInt(min_Heightff);
            var max_Heightf = parseInt(max_Heightff);
            fmax_Height=max_Heightf;
            fmin_Height=min_Heightf;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputRightH.addEventListener("mouseover", (e) => {
            inputRightH.classList.add("hover");
        });
        inputRightH.addEventListener("mouseout", (e) => {
            inputRightH.classList.remove("hover");
        });
        inputRightH.addEventListener("mousedown", (e) => {
            inputRightH.classList.add("active");
        });
        inputRightH.addEventListener("mouseup", (e) => {
            inputRightH.classList.remove("active");
            min_Heightff = document.getElementById("input-leftH").value,
                max_Heightff = document.getElementById("input-rightH").value;
            var min_Heightf = parseInt(min_Heightff);
            var max_Heightf = parseInt(max_Heightff);
            fmax_Height=max_Heightf;
            fmin_Height=min_Heightf;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputRightH.addEventListener("touchstart", (e) => {
            inputRightH.classList.add("active");
        });
        inputRightH.addEventListener("touchend", (e) => {
            inputRightH.classList.remove("active");
            min_Heightff = document.getElementById("input-leftH").value,
                max_Heightff = document.getElementById("input-rightH").value;
            var min_Heightf = parseInt(min_Heightff);
            var max_Heightf = parseInt(max_Heightff);
            fmax_Height=max_Heightf;
            fmin_Height=min_Heightf;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
///////////////////////////// EOF Height Slider ///////////////////////////////////

///////////////////////////// Weight Slider ///////////////////////////////////
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
            fmaxw=max_w;
            fminw=min_w;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputLeftW.addEventListener("touchstart", (e) => {
            inputLeftW.classList.add("active");
        });
        inputLeftW.addEventListener("touchend", (e) => {
            inputLeftW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw=max_w;
            fminw=min_w;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
            fmaxw=max_w;
            fminw=min_w;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        inputRightW.addEventListener("touchstart", (e) => {
            inputRightW.classList.add("active");
        });
        inputRightW.addEventListener("touchend", (e) => {
            inputRightW.classList.remove("active");
            min_wff = document.getElementById("input-leftW").value,
                max_wff = document.getElementById("input-rightW").value;
            var min_w = parseInt(min_wff);
            var max_w = parseInt(max_wff);
            fmaxw=max_w;
            fminw=min_w;
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
///////////////////////////// EOF Weight Slider ///////////////////////////////////
        /**************Experiences Search Data Script*************/
        $('#Experiences').on('change', function() {
            var Experiences = this.value;
            LExperiences = [];
            LExperiences.push(Experiences);
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        /**************Experiences Search Data Script*************/
        /**************Experiences Search Data Script*************/
        $('#Language').on('change', function() {
            var Language = this.value;
            LLanguage = [];
            LLanguage.push(Language);
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        /**************Experiences Search Data Script*************/
        /**************Experiences Search Data Script*************/
        $('#Accent').on('change', function() {
            var Accent = this.value;
            LAccent = [];
            LAccent.push(Accent);
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        /**************Experiences Search Data Script*************/
        /**************Experiences Search Data Script*************/
        $('#Appearance').on('change', function() {
            var Appearance = this.value;
            LAppearance = [];
            LAppearance.push(Appearance);
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        /**************Experiences Search Data Script*************/
        /**************Experiences Search Data Script*************/
        $('#Unique').on('change', function() {
            var Unique = this.value;
            LUnique = [];
            LUnique.push(Unique);
            $('.auto-loadSe').show();
            $.ajax({
                type: "get",
                url: "{{URL::to('searchAR')}}",
                data: {
                    search:search,
                    Eyecolorf:keysEC,
                    Genderf:keysGE,
                    talent:keys,
                    Statef:keysst,
                    Skincf:keysSC,
                    Haircf:keysHC,
                    Hairqf:keysHQ,
                    Experiencesf:LExperiences,
                    Languagef:LLanguage,
                    Accentf:LAccent,
                    Appearancef:LAppearance,
                    Uniquef:LUnique,
                    fmax_age:fmax_age,
                    fmin_age:fmin_age,
                    fmax_Height:fmax_Height,
                    fmin_Height:fmin_Height,
                    fmaxw:fmaxw,
                    fminw:fminw,
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
        /**************Experiences Search Data Script*************/
    });
    /***Sliders and Serach Fillters Script**/
    /***************************************************Advanced Fillter*************************************************/
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
