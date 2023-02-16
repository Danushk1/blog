
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Community - Multipurpose Saas Landing Page</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/swiper/css/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
    <link rel="stylesheet" href="dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">
    <link rel="stylesheet" href="dependencies/themify-icons/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css" type="text/css">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CPoppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    @include('layouts.sections.header.header')



    <section class="page-banner">
			<div class="page-title-wrapper text-center">
				<h1 class="page-title">Service</h1>

				<ul class="breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li>Service</li>
				</ul>
			</div>
			<!-- /.page-title-wrapper -->

			<ul class="banner-pertical">
				<li><img src="media/banner/header/crose.png" alt="astriol pertical"></li>
				<li><img src="media/banner/header/box.png" alt="astriol pertical"></li>
				<li><img src="media/banner/header/dot.png" alt="astriol pertical"></li>
				<li><img src="media/banner/header/dot_sm.png" data-parallax='{"y": 100}' alt="astriol pertical"></li>
				<li><img src="media/banner/header/line.png" data-parallax='{"y": 50, "x": 100}' alt="astriol pertical"></li>
				<li data-parallax='{"y": -100}'></li>
				<li></li>
			</ul>
			<!-- /.banner-pertical -->

		</section>
		<!-- /.page-banner -->

		<!--===========================-->
		<!--=         Feature         =-->
		<!--===========================-->
		<section class="feature-page">
			<div class="container">
				<div class="section-heading">
					<h2 class="section-title wow fadeInUp">
						A simple, proven way to boost<br> your team performance.
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.3s">
							<div class="icon-container">
								<img src="media/feature/10.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Highly Customizable</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.5s">
							<div class="icon-container">
								<img src="media/feature/11.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Live call support</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.7s">
							<div class="icon-container">
								<img src="media/feature/12.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Installation Guide</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.9s">
							<div class="icon-container">
								<img src="media/feature/13.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">One Platform</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="1.1s">
							<div class="icon-container">
								<img src="media/feature/14.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Easy setup process</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="1.3s">
							<div class="icon-container">
								<img src="media/feature/15.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Well Documented</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--===========================-->
		<!--=         Platform        =-->
		<!--===========================-->
		<section id="platform">
			<div class="container">
				<div class="section-heading">
					<h2 class="section-title wow fadeInUp">
						The Point of Sale Platform<br> Powering the Most Successful Restaurants
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Easy-to-use software that can scale with your business
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Cloud-based reports accessible in real-time
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Hardwired terminals and offline mode so nothing slows you down
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Tickety boo what a plonker blower tinkety tonk old fruit
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Simple, flat rate payment processing for all transactions
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Tableside ordering and payments, with digital receipts, to grow your customer list
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->
				</div>
				<!-- /.row -->

				<div class="platform-mockup text-center">
					<img src="media/feature/16.png" class="wow fadeInDown" data-wow-delay="0.7s" alt="mockup">
				</div>
				<!-- /.platform-mockup -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#platform -->

		<!--=========================-->
		<!--=         Image Content         =-->
		<!--=========================-->
		<section class="service-image-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="image-content-wrapper">
							<h2 class="title">How we help our clients <br> measure social</h2>

							<p>
								So I said gosh pear shaped cockup no biggie bog standard<br> Harry he nicked it barmy.!
							</p>

							<ul class="listitem color-theme">
								<li><i class="ei ei-icon_check"></i>Create unique websites</li>
								<li><i class="ei ei-icon_check"></i> Automate your busy work</li>
								<li><i class="ei ei-icon_check"></i>Optimize all your efforts</li>
							</ul>

							<a href="#" class="gp-btn">How it Works</a>
						</div>
						<!-- /.image-content-wrapper -->
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="service-featured-image">
							<img src="media/feature/image3.png" alt="">
						</div>
						<!-- /.service-featured-image -->
					</div>
					<!-- /.col-md-6 -->

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>



    

@include('layouts.sections.footer.footer')

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script src="dependencies/jquery/jquery.min.js"></script>
<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="dependencies/swiper/js/swiper.min.js"></script>
<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="dependencies/jquery.appear/jquery.appear.js"></script>
<script src="dependencies/wow/js/wow.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="dependencies/countUp.js/countUp.min.js"></script>
<script src="dependencies/bodymovin/lottie.min.js"></script>
<script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
<script src="dependencies/wavify/wavify.js"></script>
<script src="dependencies/jquery.marquee/js/jquery.marquee.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="dependencies/gmap3/js/gmap3.min.js"></script>
<script src="dependencies/slick-carousel/js/slick.min.js"></script>
<script src="assets/js/jquery.parallax.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M'></script>


</body>

</html>