<!DOCTYPE html>

<html class="no-js">



<!-- blog-left12:56:41  -->
<head>
    @foreach($cast_crew_data as $i)

        <title>{{$i->cast_crew_namear}} | {{$data->blog_titelAR}}</title>
    @endforeach
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('../../public/assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('../../public/assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../../public/assets/images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('../../public/assets/images/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('../../public/images/safari-pinned-tab.svg')}}" color="#E9204F">
    <link rel="stylesheet" href="{{asset('../../public/assets/css/normalize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('../../public/assets/css/pr.animation.css')}}" />
    <link rel="stylesheet" href="{{asset('../../public/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('../../public/assets/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('../../public/assets/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{asset('../../public/assets/css/pixeicons.css')}}" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{asset('../../public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../public/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('../../public/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('../../public/css/main.css')}}"class="color-switcher-link">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{asset('../../public/assets/css/styleAR.css')}}" rel="stylesheet">


</head>

<body>

<div class="preloader">
    <div class="preloader_image pulse"></div>
</div>

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
                                    <a href="../../{{$i->main_item_hrefAR}}">{{$i->main_item_nameAR}}</a>
                                </li>
                            @endif
                        @endforeach
                        <li class="nav-item ">
                            <a style="font-size: 25px!important;" class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                اللغة
                            </a>
                            <ul style="background-color: black!important;text-align: center;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../blogsAR">Arabic</a></li>
                                <li style="padding: 8px"><a style="padding: 0px!important;font-size: 25px;font-weight: 300!important;" class="dropdown-item" href="../blogs">English</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- eof main nav -->

    </div><!-- Off Canvas Bar End -->
</div><!-- Mobile Nav End -->

<div class="pr__wrapper" id="site-wrapper" style="top: 0px!important;">
    <div class="pr__hero__wrap_about pr__dark" id="site-hero" style="background-image: url('Castingstars/public/assets/images/About_Us Banner.jpg');">

        <header class="pr__header pr__dark" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top;">
            <div class="uk-container">
                <div class="inner">
                    <div class="logo">
                        <a href="/Castingstars">
                            <img style="width: 150%!important;max-width: 150%!important;" src="{{asset('../../public/images/logo.png')}}" alt="img" >
                        </a>
                    </div>

                    <div class="navbar pr-font-second">
                        <!-- main nav start -->

                        <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                            <ul >
                                @foreach($nav_main_items as $i)
                                    @if($i->main_item_hassub==1)
                                        <li style="line-height:20px!important;" class="nav-item">
                                            <a style="padding: 0px!important; line-height:20px!important;" class="nav-link " href="{{$i->main_item_hrefAR}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../blogsAR">Arabic</a></li>
                                        <li style="padding-top: 8px"><a class="dropdown-item" href="../blogs">English</a></li>

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

                            <h2 class="title uk-heading-hero" style="font-size: 36px; color: white">{{$data->blog_titelAR}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Site Hero End -->

    </div><!-- Hero Wrap End -->
</div><!-- Site Wrapper End -->


<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas" >
    <div id="box_wrapper">


        <section class="ds s-pt-70 s-pb-50 s-pb-sm-70 s-py-lg-100 s-py-xl-150 c-gutter-60">
            <div class="container">
                <div class="row justify-content-end" style="direction: rtl;">
                    <div class="offset-lg-1 col-lg-10">
                        <article class="vertical-item post type-post status-publish format-standard has-post-thumbnail content-padding border-rad-5">

                            <!-- .post-thumbnail -->
                            <div class="item-media post-thumbnail">
                                <img src="../../Castingstars/public/images/blog/{{$data->blog_img}}" alt="img">
                            </div>


                            <div class="item-content ds ">
                                <header class="entry-header" style="text-align: right">
                                    <a  rel="bookmark" >
                                        <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">{{$data->created_at}}</time>
                                    </a>
                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content" style="text-align: right">


                                    <p>
                                        {{$data->blog_descAR}}
                                    </p>



                                </div>

                            </div>

                        </article>

                    </div>
                </div>

            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
        </section>

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
                                                <a style="font-size: 14px" href="../Castingstars/AR" class="text-reset">الرئيسية</a>
                                            </p>
                                            <p>
                                                <a style="font-size: 14px" href="../Castingstars/about-usAR" class="text-reset">من نحن</a>
                                            </p>
                                            <p>
                                                <a style="font-size: 14px" href="../Castingstars/blogsAR" class="text-reset">الخدمات</a>
                                            </p>
                                            <p>
                                                <a style="font-size: 14px" href="../Castingstars/contact-usAR" class="text-reset">تواصل معنا</a>
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
                                                <a style="font-size: 14px" href="../../talent-countryAR" class="text-reset">المواهب </a>
                                            </p>
                                            <p>
                                                <a style="font-size: 14px" href="../../services-countryAR" class="text-reset">خدمات تقنية</a>
                                            </p>
                                            <p>
                                                <a style="font-size: 14px" href="../../locations-countryAR" class="text-reset">مواقع التصوير</a>
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


    </div><!-- eof #box_wrapper -->
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

</div><!-- eof #canvas -->


<script src="{{asset('../../public/js/compressed.js')}}"></script>
<script src="{{asset('../../public/js/main.js')}}"></script>
{{--	<script src="{{asset('js/switcher.js')}}"></script>--}}
<script src="{{asset('../../public/assets/js/anime.min.js')}}"></script>
<script src="{{asset('../../public/assets/js/uikit.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="{{asset('../../public/assets/js/validate.js')}}"></script>
<script src="{{asset('../../public/assets/js/main.js')}}"></script>

</body>


<!-- blog-left12:56:41  -->
</html>
