<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- 40412:57:27  -->
<head>
	<title>page 404</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<script src="{{asset('js/vendor/modernizr-custom.js')}}"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body class="body404">
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image pulse"></div>
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


			<section class="ds s-py-70 s-py-lg-100 s-py-xl-150 s-overlay ds s-mobile-overlay error-404 not-found page_404">
				<div class="container" style="height: 100vh;">
					<div class="row ">

						<div class="col-12">

							<header class="page-header">
								<h3>404</h3>
								<p>
									Oops, page not found!
								</p>
							</header>
							<!-- .page-header -->

							<div class="page-content pc404">
								<p style="text-align: left;">
									<a href="/Castingstars" class="btn btn btn-maincolor">back to Homepage</a>
								</p>
							</div>
							<!-- .page-content -->
						</div>

					</div>
				</div>
			</section>



		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->





	<script src="{{asset('js/compressed.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
{{--	<script src="{{asset('js/switcher.js')}}"></script>--}}

</body>


<!-- 40412:57:27  -->
</html>