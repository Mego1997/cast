<!DOCTYPE html>

<html class="no-js">



<head>
    <title>Modelia</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" class="color-switcher-link">


    <script src="{{asset('js/vendor/modernizr-custom.js')}}"></script>
</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class=""></button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div><!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
        <header class="page_header ds bottom_mask_add">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                        <a href="index.html" class="logo">
                            <img src="{{asset('images/logo.png')}}" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-7 col-1">
                        <div class="nav-wrap">

                            <!-- main nav start -->
                            <nav class="top-nav">
                                <ul class="nav sf-menu">

                                    <li class="active">
                                        <a href="index-2.html">Home</a>

                                    </li>

                                    <!-- blog -->
                                    <li>
                                        <a href="blog-right.html">Blog</a>

                                    </li>
                                    <!-- eof blog -->

                                    <li>
                                        <a href="#">Features</a>

                                    </li>
                                    <!-- eof features -->


                                    <li>
                                        <a href="about.html">Pages</a>
                                        <ul>


                                            <li>
                                                <a href="about.html">About</a>
                                            </li>

                                            <li>
                                                <a href="services.html">Our Services</a>

                                            </li>

                                            <!-- Gallery -->
                                            <li>
                                                <a href="gallery-excerpt.html">Gallery</a>

                                            </li>
                                            <!-- eof Gallery with excerpt -->

                                        </ul>
                                    </li>
                                    <!-- eof pages -->



                                    <!-- contacts -->
                                    <li>
                                        <a href="contact.html">Contact</a>

                                    </li>
                                    <!-- eof contacts -->

                                    <li class="top-includes">
											<span class="top-includes d-xl-flex">
												<a href="#">
													<i class="fa fa-sign-in" aria-hidden="true"></i>
												</a>
												<a href="#">
													<i class="fa fa-user-o" aria-hidden="true"></i>
												</a>
												<a href="#">
													<i class="fa fa-calendar" aria-hidden="true"></i>
												</a>
											</span>
                                        <span class="header-phone">
												<span>call us now</span>
												<span class="phone"><span class="color-main">800</span> 123 4567</span>
												<span>24/7 free</span>
											</span>
                                    </li>
                                </ul>


                            </nav>
                            <!-- eof main nav -->

                            <!--hidding includes on small devices. They are duplicated in topline-->

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                        <div class="top-includes">
                            <ul class="top-includes d-none d-xl-flex">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                            <span class="header-phone">
									<span>call us now</span>
									<span class="phone"><span class="color-main">800</span> 123 4567</span>
									<span>24/7 free</span>
								</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu"><span></span></span>
        </header>


        <section class="ds s-py-70 s-py-lg-100 s-py-xl-150 c-gutter-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Registration</h3>

                        <!-- tabs start -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link regtab active" id="tab01" data-toggle="tab" href="#tab01_pane" role="tab" aria-controls="tab01_pane" aria-expanded="true">Name</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab02" data-toggle="tab" href="#tab02_pane" role="tab" aria-controls="tab02_pane">Address and contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab03" data-toggle="tab" href="#tab03_pane" role="tab" aria-controls="tab03_pane">Birth information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab04" data-toggle="tab" href="#tab04_pane" role="tab" aria-controls="tab04_pane">Talanted Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab05" data-toggle="tab" href="#tab05_pane" role="tab" aria-controls="tab05_pane">Image</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab06" data-toggle="tab" href="#tab06_pane" role="tab" aria-controls="tab06_pane">Social</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link regtab" id="tab07" data-toggle="tab" href="#tab07_pane" role="tab" aria-controls="tab07_pane">Finish</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Name Tab-->
                            <div class="tab-pane fade show active" id="tab01_pane" role="tabpanel" aria-labelledby="tab01">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">First name [English]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Middle name [English]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>

                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Last name [English]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">First name [Arabic]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Middle name [Arabic]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Last name [Arabic]<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Please enter the name in both Arabic and English.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Password<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>

                                    </div>
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Re-Password<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Please enter strong password.
                                </p>


                            </div>
                            <!-- Address-Contact Tab-->
                            <div class="tab-pane fade" id="tab02_pane" role="tabpanel" aria-labelledby="tab02">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Phone<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Governorate<span class="required">*</span>
                                            </label>
                                            <select name="cat" id="cat" class="postform">
                                                <option value="-1">Select Governorate</option>
                                                <option class="level-0" value="3">Corporate</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

                                            <label for="account_last_name">Email address<span class="required">*</span>
                                            </label>
                                            <input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Email address">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">City<span class="required">*</span>
                                            </label>
                                            <select name="cat" id="cat" class="postform">
                                                <option value="-1">Select City</option>
                                                <option class="level-0" value="3">Corporate</option>
                                            </select>

                                        </p>
                                    </div>
                                </div>
                                <p >
                                    <label for="message">Address<span class="required">*</span>
                                    </label>
                                    <textarea rows="2" cols="45" name="message" class="form-control" placeholder="Your Address"></textarea>
                                </p>
                                <p>
                                    Please enter the address in detail and correctly.
                                </p>

                            </div>
                            <!-- Birth Tab-->
                            <div class="tab-pane fade" id="tab03_pane" role="tabpanel" aria-labelledby="tab03">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Birthdate<span class="required">*</span>
                                            </label>
                                            <input name="BirthDate" class="form-control" type="date" id="birthday" name="birthday" required>
                                        </p>

                                    </div>
                                    <div class="col-md-6">

                                        <p class="woocommerce-form-row woocommerce-form-row--first form-row ">
                                            <label for="account_first_name">Gender<span class="required">*</span>
                                            </label>
                                            <select name="cat" id="cat" class="postform">
                                                <option value="-1">Select City</option>
                                                <option class="level-0" value="3">Corporate</option>
                                            </select>

                                        </p>
                                    </div>
                                </div>
                                <p >
                                    <label for="message">Description<span class="required">*</span>
                                    </label>
                                    <textarea rows="2" cols="45" name="message" class="form-control" placeholder="Description about yourself"></textarea>
                                </p>
                            </div>
                            <!-- Talanted Tab-->
                            <div class="tab-pane fade" id="tab04_pane" role="tabpanel" aria-labelledby="tab04">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Weight<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Talent<span class="required">*</span>
                                            </label>
                                            <select name="Gender"  class="choices form-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>

                                            </select>
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Skin Color<span class="required">*</span>
                                            </label>
                                            <select name="Gender"  class="choices form-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Hair Color<span class="required">*</span>
                                            </label>
                                            <select name="Gender"  class="choices form-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>

                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Height<span class="required">*</span>
                                            </label>
                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Eye Color<span class="required">*</span>
                                            </label>
                                            <select name="Gender"  class="choices form-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--last form-row ">
                                            <label for="account_last_name">Hair Quality<span class="required">*</span>
                                            </label>
                                            <select name="Gender"  class="choices form-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
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
                                                <img src="{{asset('images/gallery/main_reg@4x.png')}}" alt="img" width="80%">
                                                    <input style="display: none" id="inputTag" type="file"/>
                                                </label>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        Main Image
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                        <div class="col-md-6">

                                                <div class="card2 text-center ls ms">
                                                    <label for="inputTag">
                                                        <img src="{{asset('images/gallery/profile_reg@4x.png')}}" alt="img" width="100%">
                                                        <input style="display: none" id="inputTag" type="file"/>
                                                    </label>
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Profile Image
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="card2 text-center ls ms">
                                                    <label for="inputTag">
                                                        <img src="{{asset('images/gallery/profile_reg@4x.png')}}" alt="img" width="100%">
                                                        <input style="display: none" id="inputTag" type="file"/>
                                                    </label>                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Profile Image
                                                        </h4>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="card2 text-center ls ms">
                                                    <label for="inputTag">
                                                        <img src="{{asset('images/gallery/profile_reg@4x.png')}}" alt="img" width="100%">
                                                        <input style="display: none" id="inputTag" type="file"/>
                                                    </label>                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Profile Image
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="card2 text-center ls ms">
                                                    <label for="inputTag">
                                                        <img src="{{asset('images/gallery/profile_reg@4x.png')}}" alt="img" width="100%">
                                                        <input style="display: none" id="inputTag" type="file"/>
                                                    </label>                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Profile Image
                                                        </h4>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <p>Main Photo with Dimensions [1080 X 1520]<br> Profile Photo with Dimensions [1110 X 1110]</p>
                            </div>
                            <!-- Social Tab-->
                            <div class="tab-pane fade" id="tab06_pane" role="tabpanel" aria-labelledby="tab06">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                            <div class="apsc-each-profile">
                                                <a class="apsc-instagram-icon clearfix" style="cursor:alias">
                                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-instagram apsc-instagram-icon"></i>
													<span class="media-name">Instagram</span>
												</span>
                                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                            <div class="apsc-each-profile">
                                                <a class="apsc-twitter-icon clearfix" href="#">
                                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
                                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                            <div class="apsc-each-profile">
                                                <a class="apsc-facebook-icon clearfix" style="cursor:alias">
                                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebsook</span>
												</span>
                                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                            <div class="apsc-each-profile">
                                                <a class="apsc-youtube-icon clearfix" style="cursor:alias">
                                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-youtube apsc-youtube-icon"></i>
													<span class="media-name">Youtube</span>
												</span>
                                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-textr" name="account_first_name" id="account_first_name" value="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card text-center ls ms">
                                                <label for="inputTag">
                                                    <img src="{{asset('images/Youtube-Video-Size@4x.png')}}" alt="img" width="100%">
                                                    <input style="display: none" id="inputTag" type="file"/>
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
                                        <label>Terms and Conditions</label>
                                        <p >

                                            <textarea rows="10" cols="45" name="message" class="form-control" placeholder="Discere patrioque tincidunt ex cum. In sonet aliquam qui, sea an vide molestiae. Ludus nam utamur epicuri. Audiam honestatis in pro, ut vim volumus dissentiunt, te pro dicat praesent consectetuer Affert sapientem id nam. Duo ne augue paulo, audiam scripta democritum sea ad. No novum dictas elo quentiam per, eu mei elit soleat. Mei ne eu consulatu philosophia. Est paulo simul has orquatos ea, an duo nihil tacimates. amet Viris tollit ne duo. Ut posse cotidieque cum duo. Definiebas persequeris cu sea, vel ex ea euismod honestatis. Vim id alia nobis possim, partem graecis vis ad. Alii populo lucilius id eam. Ut dicit timeam bonorum sit, ad ludus minimum definiebas his cum mpetus. Nobis labores has et, at mea eu oblique legendos, per populo audire deseruisse id. Graecis insolens cotidieque ex vis. Ex quo at tollit assentior, at harum choro conclusionemque pri, vel ut animal inermis amet forensibus. Mei justo atomorum et. Ex eum tation aliquando, ea nam pericula impetus accusamus aliquando, civibus suscipit intellegam cu pri. Nam ea regione integre amet iudicabit, ne vel exerci ceteros nusquam, nominavi reprehendunt ea sed. Quo cum inani fierent vivendum. Eu vel illud mundi iracundia. Pro et iisque suavitate euismod appellantur, ei sit agam posse, vide choro fabulas deseruisse no usu. Ea erat elitr ex vim. Nec purto albucius philosophia ei, ne quod civibus mediocritatem his. Dolore erroribus id has, ullum doctus iriure pri ut. Ad odio urbanitas prodesset quo, no mea usu cu sint everti, id tollit aperiri impetus expetendis has. Usu prompta inciderint ne, ex timeam albucius consequat vis. Virtute ex delectus incorrupte ut vis. Mei an omnis expetenda. Cibo viderer nonumes an has. Ei pro discere diceret ornatus, ea sit tota ubique.Accusata inciderint duo ne, pri no nisl fierent propriae impetus amet bonorum. "></textarea>
                                        </p>
                                        <input type="checkbox" id="agreement" name="agreement" value="agreement"><label class="mt-40" for="agreement">I Agree to Modelia Terms and Conditions</label>
                                        <p class="form-row align-items-start d-flex flex-wrap justify-content-between">
                                            <input type="submit" class="woocommerce-Button button mt-0" name="login" value="Submit">
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- tabs end-->
                    </div>
                </div>

            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
        </section>
        <footer class="page_footer ds top_mask_add s-pb-10 s-pt-70 s-pb-md-40 s-pt-md-85 s-pb-xl-140 s-pt-xl-145">
            <div class="container">
                <div class="row">
                    <div class="divider-20 d-none d-xl-block"></div>

                    <div class="col-12 text-center animate" data-animation="fadeInUp">

                        <div class="widget widget_social_buttons">
                            <a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
                            <a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
                            <a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
                        </div>

                        <div class="widget logo">
                            <img src="{{asset('images/logo.png')}}" alt="img">
                        </div>

                        <div class="widget copyright">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="{{asset('js/compressed.js')}}"></script>
<script>
    let input = document.getElementById("inputTag");
    let imageName = document.getElementById("imageName")

    input.addEventListener("change", ()=>{
        let inputImage = document.querySelector("input[type=file]").files[0];

        imageName.innerText = inputImage.name;
    })
</script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/switcher.js')}}"></script>

</body>


<!-- shop-account-details12:57:13  -->
</html>
