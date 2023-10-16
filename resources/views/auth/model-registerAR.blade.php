<!DOCTYPE html>

<html class="no-js">


<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_nameen}} | Talent Registration</title>
        @endforeach
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>

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
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animations.css')}}">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
        <link rel="stylesheet" href="{{asset('css/shop.css')}}" class="color-switcher-link">


        <link href="{{asset('assets/css/styleAR.css')}}" rel="stylesheet">
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
                                    <a href="{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a>
                                </li>
                            @endif
                        @endforeach
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
                        <a href="/main">
                            <img style="width: 150%!important;max-width: 150%!important;"
                                 src="{{asset('images/logo.png')}}" alt="img">
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
                                                {{$i->main_item_nameEN}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important; text-align: center;"
                                                class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a class="dropdown-item"
                                                                                        href="{{$ii->submain_item_href}}">{{$ii->submain_item_nameEN}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;" class="nav-item"><a
                                                href="{{$i->main_item_href}}">{{$i->main_item_nameEN}}</a></li>

                                    @endif
                                @endforeach
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
        <section class="ds s-py-70 s-py-lg-100 s-py-xl-150 c-gutter-30">
            <div class="container">
                <div class="row" style="direction: rtl;">
                    <div class="col-12">
                        <h3 class="text-uppercase">تسجيل المواهب</h3>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif
                        <div style="display: none;" class="alert alert-danger" role="alert" id="myDIVpasswordmiss">
                            Password Missmatch!
                        </div>
                        <div style="display: none;" class="alert alert-danger" role="alert" id="myDIVforget">
                            You forget some data!
                        </div>
                        <div style="display: none;" class="alert alert-danger" role="alert" id="myDIVMain">
                            Main Photo with Dimensions [1080 X 1520].
                        </div>
                        <div style="display: none;" class="alert alert-danger" role="alert" id="myDIVProfile">
                            Profile Photo with Dimensions [1110 X 1110].
                        </div>
                        <form action="{{url('insert-new-user')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <!-- tabs start -->
                            <ul class="nav nav-tabs" role="tablist" style="padding-right: 0px">
                                <li class="nav-item">
                                    <a class="nav-link regtab active" id="tab01" data-toggle="tab" href="#tab01_pane"
                                       role="tab" aria-controls="tab01_pane" aria-expanded="true"><span class="d-block mb-1">الخطوة الأولى</span>الاسم</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab02" data-toggle="tab" href="#tab02_pane"
                                       role="tab" aria-controls="tab02_pane"><span class="d-block mb-1">الخطوة الثانية</span>العنوان والتواصل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab03" data-toggle="tab" href="#tab03_pane"
                                       role="tab" aria-controls="tab03_pane"><span class="d-block mb-1">الخطوة الثالثة</span>بيانات الميلاد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab04" data-toggle="tab" href="#tab04_pane"
                                       role="tab" aria-controls="tab04_pane"><span class="d-block mb-1">الخطوة الرابعة</span>بيانات الموهوب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab05" data-toggle="tab" href="#tab05_pane"
                                       role="tab" aria-controls="tab05_pane"><span class="d-block mb-1">الخطوة الخامسة</span>الصورة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab06" data-toggle="tab" href="#tab06_pane"
                                       role="tab" aria-controls="tab06_pane"><span class="d-block mb-1">الخطوة السادسة</span>التواصل الاجتماعى</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link regtab" id="tab07" data-toggle="tab" href="#tab07_pane"
                                       role="tab" aria-controls="tab07_pane"><span class="d-block mb-1">الخطوة السابعة</span>انتهى</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Name Tab-->
                                <div class="tab-pane fade show active" id="tab01_pane" role="tabpanel"
                                     aria-labelledby="tab01">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name1" style="padding-left:15px; padding-right: 0px;">الاسم الاول [عربى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="FirstNameEn" id="FirstNameEn" value="{{ old('FirstNameEn') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name2" style="padding-left:15px; padding-right: 0px;">الاسم الثانى [عربى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="MiddelNameEn" id="MiddelNameEn" value="{{ old('MiddelNameEn') }}">
                                            </p>

                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name3" style="padding-left:15px; padding-right: 0px;">اللقب الأخير [عربى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="LastNameEn" id="LastNameEn" value="{{ old('LastNameEn') }}">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name4" style="padding-left:15px; padding-right: 0px;">الاسم الأول [انجليزى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="FirstNameAr" id="FirstNameAr" value="{{ old('FirstNameAr') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name5" style="padding-left:15px; padding-right: 0px;">الاسم الثانى [انجليزى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="MiddelNameAr" id="MiddelNameAr" value="{{ old('MiddelNameAr') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name6" style="padding-left:15px; padding-right: 0px;">اللقب الأخير [انجليزى]<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="LastNameAr" id="LastNameAr" value="{{ old('LastNameAr') }}">
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        من فضلك أدخل الاسم بالعربى والانجليزى.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name7" style="padding-left:15px; padding-right: 0px;">الرقم السرى<span class="required">*</span>
                                                </label>
                                                <input type="password"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="Password" id="Password" value="">
                                            </p>

                                        </div>
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name8" style="padding-left:15px; padding-right: 0px;">اعادة الرقم السرى<span
                                                        class="required">*</span>
                                                </label>
                                                <input type="password"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="Re-Password" id="RePassword" value="">
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        من فضلك أدخل رقم سرى قوى.
                                    </p>


                                </div>
                                <!-- Address-Contact Tab-->
                                <div class="tab-pane fade" id="tab02_pane" role="tabpanel" aria-labelledby="tab02">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name9" style="padding-left:15px; padding-right: 0px;">رقم الموبايل<span class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-textr"
                                                       name="Phone" id="Phone" value="{{ old('Phone') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name10" style="padding-left:15px; padding-right: 0px;">المحافظة<span
                                                        class="required">*</span>
                                                </label>
                                                <select name="Governorate" id="state-dropdown" class="postform" >
                                                    <option value="">اختر</option>
                                                    @foreach($AllStates as $i)
                                                        <option value="{{$i->id}}">{{$i->governorate_name_ar}}</option>

                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">البريد الالكترونى<span
                                                        class="required">*</span>
                                                </label>
                                                <input id="Email" name="Email" type="email"
                                                       class="form-control mailchimp_email" placeholder="عنوان البريد الالكترونى" value="{{ old('Email') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name11" style="padding-left:15px; padding-right: 0px;">المدينة<span class="required">*</span>
                                                </label>
                                                <select name="City" id="city-dropdown" class="postform" >

                                                    <option value="">اختر المدينة</option>

                                                </select>

                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        <label for="message">العنوان<span class="required">*</span>
                                        </label>
                                        <textarea rows="2" cols="45" name="FullAddress" class="form-control"
                                                  placeholder="عنوانك" id="FullAddress"></textarea>
                                    </p>
                                    <p>
                                        من فضلك ادخل العنوان بالتفصيل وصحيحا.
                                    </p>

                                </div>
                                <!-- Birth Tab-->
                                <div class="tab-pane fade" id="tab03_pane" role="tabpanel" aria-labelledby="tab03">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name12" style="padding-left:15px; padding-right: 0px;">تاريخ الميلاد<span class="required">*</span>
                                                </label>
                                                <input name="BirthDate" class="form-control" type="date" id="BirthDate" value="{{ old('BirthDate') }}">
                                            </p>

                                        </div>
                                        <div class="col-md-6">

                                            <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                                <label for="account_first_name13" style="padding-left:15px; padding-right: 0px;">النوع<span class="required">*</span>
                                                </label>
                                                <select name="Gender" class="postform" id="Gender" >

                                                    <option value="">اختر</option>
                                                    @foreach($AllGender as $i)
                                                        <option value="{{$i->ID}}">{{$i->GenderAR}}</option>
                                                    @endforeach
                                                </select>

                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        <label for="message">الوصف<span class="required">*</span>
                                        </label>
                                        <textarea rows="2" cols="45" name="ModelDesc" class="form-control"
                                                  placeholder="وصف عنك" id="ModelDesc" ></textarea>
                                    </p>
                                </div>
                                <!-- Talanted Tab-->
                                <div class="tab-pane fade" id="tab04_pane" role="tabpanel" aria-labelledby="tab04">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">الوزن<span class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-text"
                                                       name="Weight" id="Weight" value="{{ old('Weight') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">الموهبة<span class="required">*</span>
                                                </label>
                                                <select name="Talent" class="choices form-select" id="Talent" >
                                                    <option value="">اختر</option>
                                                    @foreach($AllTalent as $i)
                                                        <option value="{{$i->ID}}">{{$i->TalentNameAR}}</option>
                                                    @endforeach

                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">لون البشرة<span class="required">*</span>
                                                </label>
                                                <select name="SkinColor" class="choices form-select" id="SkinColor">
                                                    <option value="">اختر</option>
                                                    @foreach($AllSkinColor as $i)
                                                        <option value="{{$i->ID}}">{{$i->SkinColorAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">لون الشعر<span class="required">*</span>
                                                </label>
                                                <select name="HairColor" class="choices form-select" id="HairColor">
                                                    <option value="">اختر</option>
                                                    @foreach($AllHairColor as $i)
                                                        <option value="{{$i->ID}}">{{$i->HairColorAR}}</option>
                                                    @endforeach

                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">اللغة<span class="required">*</span>
                                                </label>
                                                <select name="Language" class="choices form-select" id="Language">
                                                    <option value="">اختر</option>
                                                    @foreach($AllLanguage as $i)
                                                        <option value="{{$i->ID}}">{{$i->LanguageAR}}</option>
                                                    @endforeach

                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">المظهر<span class="required">*</span>
                                                </label>
                                                <select name="Appearance" class="choices form-select" id="Appearance">
                                                    <option value="">اختر</option>
                                                    @foreach($AllAppearance as $i)
                                                        <option value="{{$i->ID}}">{{$i->appearanceAR}}</option>
                                                    @endforeach

                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">الطول<span class="required">*</span>
                                                </label>
                                                <input type="text"
                                                       class="woocommerce-Input woocommerce-Input--text input-text"
                                                       name="Height" id="Height" value="{{ old('Height') }}">
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">لون العيون<span class="required">*</span>
                                                </label>
                                                <select name="EyeColor" class="choices form-select" id="EyeColor">
                                                    <option value="">اختر</option>
                                                    @foreach($AllEyes as $i)
                                                        <option value="{{$i->ID}}">{{$i->ColorAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">نوع الشعر<span
                                                        class="required">*</span>
                                                </label>
                                                <select name="HairQuality" class="choices form-select" id="HairQuality">
                                                    <option value="">اختر</option>
                                                    @foreach($AllHairQuality as $i)
                                                        <option value="{{$i->ID}}">{{$i->HairQualityAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">الخبرات<span
                                                        class="required">*</span>
                                                </label>
                                                <select name="Experiences" class="choices form-select" id="Experiences">
                                                    <option value="">اختر</option>
                                                    @foreach($AllExperiences as $i)
                                                        <option value="{{$i->ID}}">{{$i->experiences_nameAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">السمات<span
                                                        class="required">*</span>
                                                </label>
                                                <select name="Unique" class="choices form-select" id="Uniquedata">
                                                    <option value="">اختر</option>
                                                    @foreach($AllUniquedata as $i)
                                                        <option value="{{$i->ID}}">{{$i->UniqueAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <label for="account_last_name" style="padding-left:15px; padding-right: 0px;">اللهجة<span
                                                        class="required">*</span>
                                                </label>
                                                <select name="Accent" class="choices form-select" id="Accent">
                                                    <option value="">اختر</option>
                                                    @foreach($AllAccent as $i)
                                                        <option value="{{$i->ID}}">{{$i->accent_nameAR}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Image Tab-->
                                <div class="tab-pane fade" id="tab05_pane" role="tabpanel" aria-labelledby="tab05">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                                <div class="card1 text-center ls ms">
                                                    <label for="inputTag">
                                                        <img id="Image"
                                                             src="{{asset('images/gallery/main_reg@4x.png')}}" alt="img"
                                                             width="80%">
                                                        <input style="display: none" id="inputTag" name="Image"
                                                               type="file" onchange="readURL(this);"
                                                               accept="image/png, image/jpeg"/>
                                                    </label>
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            الصورة الرئيسية
                                                        </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="card2 text-center ls ms">
                                                        <label for="inputTag1">
                                                            <img id="ProfileImage1"
                                                                 src="{{asset('images/gallery/profile_reg@4x.png')}}"
                                                                 alt="img" width="100%">
                                                            <input style="display: none" id="inputTag1"
                                                                   name="ProfileImage1" type="file"
                                                                   onchange="readURL1(this);"
                                                                   accept="image/png, image/jpeg"/>
                                                        </label>
                                                        <div class="card-body">
                                                            <h4 class="card-title">
                                                                الصورة الشخصية
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card2 text-center ls ms">
                                                        <label for="inputTag2">
                                                            <img id="ProfileImage2"
                                                                 src="{{asset('images/gallery/profile_reg@4x.png')}}"
                                                                 alt="img" width="100%">
                                                            <input style="display: none" id="inputTag2"
                                                                   name="ProfileImage2" type="file"
                                                                   onchange="readURL2(this);"
                                                                   accept="image/png, image/jpeg"/>
                                                        </label>
                                                        <div class="card-body">
                                                            <h4 class="card-title">
                                                                الصورة الشخصية
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card2 text-center ls ms">
                                                        <label for="inputTag3">
                                                            <img id="ProfileImage3"
                                                                 src="{{asset('images/gallery/profile_reg@4x.png')}}"
                                                                 alt="img" width="100%">
                                                            <input style="display: none" id="inputTag3"
                                                                   name="ProfileImage3" type="file"
                                                                   onchange="readURL3(this);"
                                                                   accept="image/png, image/jpeg"/>
                                                        </label>
                                                        <div class="card-body">
                                                            <h4 class="card-title">
                                                                الصورة الشخصية
                                                            </h4>

                                                        </div>
                                                    </div>
                                                    <div class="card2 text-center ls ms">
                                                        <label for="inputTag4">
                                                            <img id="ProfileImage4"
                                                                 src="{{asset('images/gallery/profile_reg@4x.png')}}"
                                                                 alt="img" width="100%">
                                                            <input style="display: none" id="inputTag4"
                                                                   name="ProfileImage4" type="file"
                                                                   onchange="readURL4(this);"
                                                                   accept="image/png, image/jpeg"/>
                                                        </label>
                                                        <div class="card-body">
                                                            <h4 class="card-title">
                                                                الصورة الشخصية
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <p style="direction: ltr;"> [1080 X 1520] الصورة الرئيسية بأبعاد<br>  [1110 X 1110] الصورة الشخصية بأبعاد</p>
                                </div>
                                <!-- Social Tab-->
                                <div class="tab-pane fade" id="tab06_pane" role="tabpanel" aria-labelledby="tab06">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                                <div class="apsc-each-profile">
                                                    <a class="apsc-instagram-icon clearfix">
                                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-instagram apsc-instagram-icon"></i>
													<span class="media-name">Instagram</span>
												</span>
                                                            <input type="text"
                                                                   class="woocommerce-Input woocommerce-Input--text input-textr"
                                                                   name="Socialinstagram" id="account_first_name14"
                                                                   value="{{ old('Socialinstagram') }}">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                                <div class="apsc-each-profile">
                                                    <a class="apsc-twitter-icon clearfix">
                                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
                                                            <input type="text"
                                                                   class="woocommerce-Input woocommerce-Input--text input-textr"
                                                                   name="Socialtwitter" id="account_first_name15"
                                                                   value="{{ old('Socialtwitter') }}">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                                <div class="apsc-each-profile">
                                                    <a class="apsc-youtube-icon clearfix">
                                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-youtube apsc-youtube"></i>
													<span class="media-name">Youtube video link about your self.</span>
												</span>
                                                            <input type="text"
                                                                   class="woocommerce-Input woocommerce-Input--text input-textr"
                                                                   name="Videolink" id="Videolink" value="{{ old('Videolink') }}">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                                <div class="apsc-each-profile">
                                                    <a class="apsc-facebook-icon clearfix">
                                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebsook</span>
												</span>
                                                            <input type="text"
                                                                   class="woocommerce-Input woocommerce-Input--text input-textr"
                                                                   name="Socialfacebook" id="account_first_name16"
                                                                   value="{{ old('Socialfacebook') }}">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                                <div class="apsc-each-profile">
                                                    <a class="apsc-youtube-icon clearfix">
                                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-youtube apsc-youtube-icon"></i>
													<span class="media-name">Youtube</span>
												</span>
                                                            <input type="text"
                                                                   class="woocommerce-Input woocommerce-Input--text input-textr"
                                                                   name="Socialyoutube" id="account_first_name17"
                                                                   value="{{ old('Socialyoutube') }}">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="card text-center ls ms">
                                                    <label for="inputTag5">
                                                        <img id="Thumbnail"
                                                             src="{{asset('images/Youtube-Video-Size@4x.png')}}"
                                                             alt="img" width="100%">
                                                        <input style="display: none" id="inputTag5" name="Thumbnail"
                                                               type="file" onchange="readURL5(this);"
                                                               accept="image/png, image/jpeg"/>
                                                    </label>
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Thumbnail
                                                        </h4>
                                                        <p>Enter Your Video Thumbnail with Dimensions [770 X 578].</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Finish Tab-->
                                <div class="tab-pane fade" id="tab07_pane" role="tabpanel" aria-labelledby="tab07">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>الشروط والقوانين</label>
                                            @foreach($Terms as $i)
                                                <p>

                                                    <textarea rows="10" cols="45" name="message"
                                                              class="form-control">{{$i->TermsEN}}</textarea>

                                                </p>
                                            @endforeach
                                            <input type="checkbox" id="agreement" name="agreement"
                                                   value="agreement"><label class="mt-40" for="agreement">أوافق على كل الشروط</label>
                                            <p class="col-md-12 ">
                                                <button type="submit"   style="color: white!important;"  class="button uk-button uk-button-large uk-button-default"
                                                        name="fregister" id="fregister" data-toggle="modal" data-target="#exampleModalCenter">ارسال</button>
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- tabs end-->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: white!important;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content"
                                         style="background-color: #1b1b1b; background-image: url(http://layerdrops.com/qutiizwp/wp-content/uploads/2021/12/footer-bg-1-1.png);">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLongTitle">SMS Confirm</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Please confirm your mobile number</h6>
                                            <p>We have sent a text message to your number registered with us. Please enter the code included in
                                                the message</p>
                                            <div id="result">
                                            </div>
                                            <input style="border-radius: 0px!important;" id="SMS Code" name="SMSCode" type="text" class="form-control"
                                                   placeholder="SMS Code">
                                            <div id="timer"></div>
                                            <p style="cursor: pointer;display: none" id="codeagain">Send sms massage again?</p>
                                        </div>
                                        <div class="modal-footer">
                                            {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                            <button type="submit" style="color: white!important;"
                                                    class="button uk-button uk-button-large uk-button-default" >تأكيد</button>

                                            {{--                    <button type="button" class="btn btn-primary">confirm</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
        </section>
    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->

<div class="pr__wrapper" id="site-wrapper">
    <!-- Modal -->
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
                                       class="button uk-button uk-button-large uk-button-default" data-uk-toggle="" style="letter-spacing: 0px">للاستفسار</a>
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
                                    <p style="font-size: 14px"><iframe src="{{asset('svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp; 79 44 233 50 02+</p>

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
                                        <a style="font-size: 14px" href="{{ asset('../locations-country') }}" class="text-reset">مواقع التصوير</a>
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
                                            <input style="border-radius: 0px!important;" id="newsletter1" type="text" class="form-control" placeholder="عنوان البرد الالكترونى">
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


<script src="{{asset('js/compressed.js')}}"></script>
<script>

    $('#fregister').click(function (ev) {
        ev.preventDefault();

        var Phone = $('input[name="Phone"]').val();
        var Email = $('input[name="Email"]').val();

        $.ajax({
            url: "{{url('send-code')}}",
            type: "POST",
            data: {
                user_email: Email,
                user_phone: Phone,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
            }
        });
    });

    var timert = 0;

    $('#codeagain').click(function () {
        var Phones = $('#Phone').val();
        var Emails = $('#Email').val();
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            var inter = setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                $('#codeagain').hide();

                display.text(minutes + ":" + seconds);

                if (--timer < 0) {
                    timer = 0;
                    window.clearInterval(inter);
                    display.text("");
                    $('#codeagain').show();

                }
            }, 1000);
        }
        jQuery(function ($) {
            var fiveMinutes = 60 * 1,
                display = $('#timer');
            startTimer(fiveMinutes, display);
            $.ajax({
                url: "{{url('send-code')}}",
                type: "POST",
                data: {
                    Emails: Emails,
                    Phones: Phones,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                }
            });
        });
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Check the image resolution


                $('#Image')
                    .attr('src', e.target.result);


            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {

                $('#ProfileImage1')
                    .attr('src', e.target.result);


            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ProfileImage2')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ProfileImage3')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ProfileImage4')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#Thumbnail')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    //////////////////////////////////////////////////////////validations////////////////////
    var checker = document.getElementById('agreement');
    var sendbtn = document.getElementById('fregister');
    var FirstNameEn = document.getElementById('FirstNameEn');
    var MiddelNameEn = document.getElementById('MiddelNameEn');
    var LastNameEn = document.getElementById('LastNameEn');
    var FirstNameAr = document.getElementById('FirstNameAr');
    var MiddelNameAr = document.getElementById('MiddelNameAr');
    var LastNameAr = document.getElementById('LastNameAr');
    var Password = document.getElementById('Password');
    var RePassword = document.getElementById('RePassword');
    var Phone = document.getElementById('Phone');
    var Email = document.getElementById('Email');
    var FullAddress = document.getElementById('FullAddress');
    var BirthDate = document.getElementById('BirthDate');
    var Gender = document.getElementById('Gender');
    var ModelDesc = document.getElementById('ModelDesc');
    var Weight = document.getElementById('Weight');
    var Talent = document.getElementById('Talent');
    var SkinColor = document.getElementById('SkinColor');
    var HairColor = document.getElementById('HairColor');
    var EyeColor = document.getElementById('EyeColor');
    var HairQuality = document.getElementById('HairQuality');

    var Experiences = document.getElementById('Experiences');
    var Uniquedata = document.getElementById('Unique');
    var Accent = document.getElementById('Accent');
    var Appearance = document.getElementById('Appearance');
    var Language = document.getElementById('Language');

    var inputTag = document.getElementById('inputTag');
    var inputTag1 = document.getElementById('inputTag1');
    var inputTag2 = document.getElementById('inputTag2');
    var inputTag3 = document.getElementById('inputTag3');
    var inputTag4 = document.getElementById('inputTag4');
    var inputTag5 = document.getElementById('inputTag5');
    var Videolink = document.getElementById('Videolink');

    checker.onchange = function () {
        if (this.checked && FirstNameEn.value != "" && MiddelNameEn.value != "" && LastNameEn.value != "" && FirstNameAr.value != "" && MiddelNameAr.value != "" && LastNameAr.value != "" && Password.value != "" && Phone.value != "" && Email.value != "" && FullAddress.value != "" && BirthDate.value != "" && Gender.value != "" && ModelDesc.value != "" && Weight.value != "" && Talent.value != "" && SkinColor.value != "" && HairColor.value != "" && EyeColor.value != "" && HairQuality.value != "" && Experiences.value != "" && Uniquedata.value != "" && Accent.value != "" && Appearance.value != "" && Language.value != "" && inputTag.value != "" && inputTag1.value != "" && inputTag2.value != "" && inputTag3.value != "" && inputTag4.value != "" && inputTag5.value != "" && Videolink.value != "") {
            if (Password.value == RePassword.value) {
                sendbtn.style.pointerEvents = "auto";
                var x = document.getElementById("myDIVpasswordmiss");
                var xz = document.getElementById("myDIVforget");
                if (x.style.display === "block") {
                    x.style.display = "none";
                }
                if (xz.style.display === "block") {
                    xz.style.display = "none";
                }
                var Phones = $('#Phone').val();
                var Emails = $('#Email').val();
                function startTimer(duration, display) {
                    var timer = duration, minutes, seconds;
                    var inter = setInterval(function () {
                        minutes = parseInt(timer / 60, 10)
                        seconds = parseInt(timer % 60, 10);

                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;
                        $('#codeagain').hide();

                        display.text(minutes + ":" + seconds);
                        if (--timer < 0) {
                            timer = 0;
                            window.clearInterval(inter);
                            display.text("");
                            $('#codeagain').show();
                        }
                    }, 1000);
                }
                if (timert == 0) {
                    jQuery(function ($) {
                        var fiveMinutes = 60 * 1,
                            display = $('#timer');
                        startTimer(fiveMinutes, display);

                        $.ajax({
                            url: "{{url('send-code')}}",
                            type: "POST",
                            data: {
                                Emails: Emails,
                                Phones: Phones,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            success: function (data) {
                                $('#result').show(data);
                            }
                        });
                        timert = 1;
                    });
                }
            } else {
                var x = document.getElementById("myDIVpasswordmiss");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                checker.checked = false;
            }
        } else {
            sendbtn.disabled = true;
            if (FirstNameEn.value != "" && MiddelNameEn.value != "" && LastNameEn.value != "" && FirstNameAr.value != "" && MiddelNameAr.value != "" && LastNameAr.value != "" && Password.value != "" && Phone.value != "" && Email.value != "" && FullAddress.value != "" && BirthDate.value != "" && Gender.value != "" && ModelDesc.value != "" && Weight.value != "" && Talent.value != "" && SkinColor.value != "" && HairColor.value != "" && EyeColor.value != "" && HairQuality.value != "" && inputTag.value != "" && inputTag1.value != "" && inputTag2.value != "" && inputTag3.value != "" && inputTag4.value != "" && inputTag5.value != "" && Videolink.value != "") {

            } else {
                var xz = document.getElementById("myDIVforget");
                if (xz.style.display === "none") {
                    xz.style.display = "block";
                }
                checker.checked = false;
            }
        }
    };
    //////////////////////////////////////////////////////////////////////////////////////////
    $(document).ready(function () {

        $('#state-dropdown').on('change', function () {
            var governorate_id = this.value;
            $("#city-dropdown").html('');
            $.ajax({
                url: "{{url('get-cities-by-state')}}",
                type: "POST",
                data: {
                    governorate_id: governorate_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#city-dropdown').html('<option value="">Select City</option>');
                    $.each(result.AllCities, function (key, value) {
                        $("#city-dropdown").append('<option value="' + value.id + '">' + value.city_name_ar + '</option>');
                    });
                }
            });
        });
    });
    let input = document.getElementById("inputTag");
    input.addEventListener("change", () => {
        let inputImage = document.querySelector("input[name=Image]").files[0];
    })
    let input1 = document.getElementById("inputTag1");
    input1.addEventListener("change", () => {
        let inputImage1 = document.querySelector("input[name=ProfileImage1]").files[0];
    })
    let input2 = document.getElementById("inputTag2");
    input2.addEventListener("change", () => {
        let inputImage1 = document.querySelector("input[name=ProfileImage2]").files[0];
    })
    let input3 = document.getElementById("inputTag3");
    input3.addEventListener("change", () => {
        let inputImage1 = document.querySelector("input[name=ProfileImage3]").files[0];
    })
    let input4 = document.getElementById("inputTag4");
    input4.addEventListener("change", () => {
        let inputImage1 = document.querySelector("input[name=ProfileImage4]").files[0];
    })
    let input5 = document.getElementById("inputTag5");
    input5.addEventListener("change", () => {
        let inputImage1 = document.querySelector("input[name=Thumbnail]").files[0];
    })
</script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

<script src="{{asset('assets/js/anime.min.js')}}"></script>
<script src="{{asset('assets/js/uikit.min.js')}}"></script>

<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
