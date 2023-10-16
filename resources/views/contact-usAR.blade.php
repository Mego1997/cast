<!DOCTYPE html>
<html lang="zxx">
<head>
    @foreach($cast_crew_data as $i)
        <title>{{$i->cast_crew_namear}} | تواصل معنا </title>
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
        <link href="{{asset('assets/css/styleAR.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


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
        <nav style="font-size: 30px;text-align: center;margin-top: 72px" class="navbar navbar-expand-lg navbar-light"
             data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
            <div class="container-fluid">
                <div style="display: block!important;" class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach($nav_main_items as $i)
                            @if($i->main_item_hassub==1)
                                <li class="nav-item dropdown">
                                    <a style="font-size: 25px!important;" class="nav-link" href="{{$i->main_item_hrefAR}}"
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
                                                            href="{{$ii->submain_item_hrefAR}}">{{$ii->submain_item_nameAR}}</a>
                                                </li>
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
                                    اللغة
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

    <div class="pr__hero__wrap_about pr__dark bg-img-contact"  id="site-hero">

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
                                               class="nav-link " href="{{$i->main_item_hrefAR}}"
                                               id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                {{$i->main_item_nameAR}}
                                            </a>
                                            <ul style="background-color: #101010;margin-top: 10px!important;text-align: center;"
                                                class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="navbarDarkDropdownMenuLink">
                                                @foreach($nav_submain_items as $ii)
                                                    @if($i->ID==$ii->main_item_id)
                                                        <li style="padding-top: 8px"><a style="font-size: 15px"
                                                                                        class="dropdown-item"
                                                                                        href="{{$ii->submain_item_hrefAR}}">{{$ii->submain_item_nameAR}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else

                                        <li style="line-height:20px!important;"><a
                                                    href="../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a></li>

                                    @endif
                                @endforeach
                                    <li style="line-height:20px!important;" class="nav-item">
                                        <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            اللغة
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
                            <p class="title uk-text-bold uk-text-large">الرئيسية</p>
                            <h2 class="title uk-heading-hero text-uppercase" style="text-align: center; color: white">
                                تواصل معنا</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Site Hero End -->


    </div><!-- Hero Wrap End -->

    <div class="pr__content" id="site-content">
        <section
                class="pr__features uk-section uk-padding-remove-bottom pr__clients pr__section pr__dark uk-section uk-section-large"
                id="pr_features" style="direction: rtl;">
            <div class="container">
                <div class="row d-flex mb-5 contact-info justify-content-center">
                    <div class="col-md-12">
                        <div class="row mb-5">
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot fa-2x infoIcon"></i>
                                </div>
                                <p><span class="d-block">العنوان:</span> ش 18, توريل, المنصورة</p>
                            </div>
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-phone fa-2x infoIcon"></i>
                                </div>
                                <p><span class="d-block">رقم الموبايل:</span> <a href="tel://1234567920" class="text-white">+
                                        01 234 567 89</a></p>
                            </div>
                            <div class="col-md-4 mb-2 text-center py-4 d-flex align-items-center justify-content-center flex-column infoCard"
                                 style="">
                                <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-envelope fa-2x infoIcon"></i></div>
                                <p><span class="d-block">البريد الالكترونى:</span> <a href="mailto:info@yoursite.com"
                                                                          class="text-white">attractionme@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="pr__vr__section">
        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients" style="direction: rtl;">
            <div class="container">
                <form action="" method="post">

                    <label for="fname">الاسم</label>
                    <input type="text" id="fname" name="firstname" placeholder="الاسم.." class="itext">

                    <label for="email">البريد الالكترونى</label>
                    <input type="email" id="email" name="email" placeholder="بريدك الالكترونى.." class="iemail">

                    <label for="phone">رقم الموبايل</label>
                    <input type="number" id="phone" name="phone" placeholder="رقم موبايلك.." class="inumber" class="inumber">

                    <label for="subject">الموضوع</label>
                    <textarea id="subject" name="subject" placeholder="الموضوع.." style="height:200px" class="itext"></textarea>

                    <input type="submit" value="ارسال">

                </form>
            </div>
        </section>

        <hr class="pr__vr__section">
        <section class="pr__clients pr__section pr__dark uk-section uk-section-large" id="pr__clients" style="direction: rtl;">
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
                                        <p style="font-size: 14px"><iframe src="{{asset('svg/phone-solid.svg')}}" width="20px" height="20px" style="color: white"></iframe>&nbsp;&nbsp;79 44 233 50 02+</p>

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
                                                <input style="border-radius: 0px!important;" id="newsletter1" type="text" class="form-control" placeholder="عنوان البريد الالكترونى">
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

