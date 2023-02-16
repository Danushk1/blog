
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
		<section class="service-feature-page">
			<div class="container">
				<div class="featured-inner">
					<div class="row">
						<div class="col-lg-6">
							<div class="icon-box style-two color--one wow fadeInUp" data-wow-delay="0.5s">
								<div class="icon-container">
									<i class="ei ei-icon_chat_alt"></i>
								</div>
								<div class="box-content">
									<h3 class="box-title">
										Quick messaging with<br> clients.
									</h3>
									<p>
										Twit cor blimey guvnor wind up James <br>Bond bits and bobs hunky dory blimey <br>bugger all mate blatant.
									</p>
								</div>
								<!-- /.box-content -->
							</div>
							<!-- /.icon-box style-one text-center -->

							<div class="icon-box style-two wow fadeInUp" data-wow-delay="0.6s">
								<div class="icon-container">
									<i class="ei ei-icon_easel"></i>
								</div>
								<div class="box-content">
									<h3 class="box-title">
										Easily manage your <br>works.
									</h3>
									<p>
										Twit cor blimey guvnor wind up James<br> Bond bits and bobs hunky dory blimey<br> bugger all mate blatant.
									</p>
								</div>
								<!-- /.box-content -->
							</div>
							<!-- /.icon-box style-one text-center -->

							<div class="icon-box style-two color--two wow fadeInUp" data-wow-delay="0.7s">
								<div class="icon-container">
									<i class="ei ei-icon_lightbulb_alt"></i>
								</div>
								<div class="box-content">
									<h3 class="box-title">
										Open new investment <br>opportunities
									</h3>
									<p>
										Twit cor blimey guvnor wind up James <br>Bond bits and bobs hunky dory blimey<br> bugger all mate blatant.
									</p>
								</div>
								<!-- /.box-content -->
							</div>
							<!-- /.icon-box style-one text-center -->
						</div>
						<!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="cofounder-content">
								<h2 class="title wow fadeInUp" data-wow-delay="1s">
									Starting with Astriol. Is easier than anything !
								</h2>

								<p class="wow fadeInUp" data-wow-delay="1.2s">
									Why I say old chap that, is spiffing chancer geeza pear shaped barney, fantastic blow off blimey lemon squeezy. Cup of tea my lady a blinding shot lost plot spend.!
								</p>

								<a href="#" class="gp-btn btn-lg btn-sqr wow fadeInUp" data-wow-delay="1.3s">Start Free Trial</a>
								<a href="#" class="gp-btn btn-lg btn-sqr btn-outline wow fadeInUp" data-wow-delay="1.3s">See all features</a>
							</div>
							<!-- /.cofounder-content -->
						</div>
						<!-- /.col-lg-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.featured-inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.service-feture -->

		<!--===========================-->
		<!--=         Video        =-->
		<!--===========================-->
		<section class="intro-video color-theme">
			<div class="container">
				<div class="intro-video-wrapper">
					<div class="row align-items-center">
						<div class="col-xl-7 col-lg-6 mw-670">
							<div class="video-content-wrapper">

								<h3 class="subtitle wow fadeInUp">EASY DEPLOYMENT</h3>
								<h2 class="title wow fadeInUp" data-wow-delay="0.3s">Deploy your Site with Simple Commands</h2>

								<p class="wow fadeInUp" data-wow-delay="0.5s">
									Cack me old mucker wind up spiffing Elizabeth codswallop are you taking the piss, cockup haggle only a quid knackered blatant mufty arse, hanky panky ruddy some dodgy chav it's all gone to pot say.
								</p>

								<a href="#" class="gp-btn btn-round wow fadeInUp" data-wow-delay="0.7s">Learn More</a>
							</div>
							<!-- /.video-content-wrapper -->

						</div>
						<!-- /.col-xl-7 col-lg-6 -->


						<div class="popup-video-warapper">
							<div class="intro-video-inner wow fadeInRight">
								<img src="media/about/2.jpg" alt="intro video">
								<a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-video wow pixFadeUp" data-wow-delay="0.6s"><i class="fa fa-play"></i></a>
							</div>
							<!-- /.intro-video -->

							<div class="video-shape-right">
								<img src="media/background/video.png" alt="">
							</div>
						</div>
						<!-- /.popup-video-arapper -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.intro-video-innter -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.intro-video -->

		<!--=============================-->
		<!--=         Overview         =-->
		<!--=============================-->
		<section class="overview-page section-padding">
			<div class="container">
				<div class="section-title-ana">
					<h2 class="wow gttFadeUp">Amplify<br> your social strategy</h2>
				</div>
				<!-- /.section-title -->

				<div class="gp-tab tab-style-one wow gptFadeUp" data-wow-delay="0.3s">

					<ul class="gp-tabs-nav tab-swipe">
						<li class="current"><a class="isActive" href="#">WooCommerce</a></li>
						<li><a href="#">Statements</a></li>
						<li><a href="#">Shipping Rates</a></li>
						<li><a href="#">Multiple Product</a></li>
						<li class="indicator"></li>
					</ul>
					<!-- / tabs -->

					<div class="tab_content">

						<div class="gp_tabs_item">
							<div class="tab-contents-wrap">
								<div class="left-content">
									<img src="media/tabs/tab2.png" alt="tabs">
								</div>
								<!-- /.left-content -->

								<div class="right-content">
									<div class="icon-container">
										<i class="ei ei-icon_cart_alt"></i>
									</div>

									<h3>
										Based on WooCommerce and <br> Powered by WordPress
									</h3>

									<p>
										WooCommerce is the best ecommerce solution today and WordPress is the most popular CMS platform. With these goodness backed up, Dokan is the best WooCommerce multi vendor marketplace.
									</p>
								</div>
								<!-- /.right-content -->
							</div>
							<!-- /.tab-contents-wrap -->
						</div>
						<!-- / gp_tabs_item -->

						<div class="gp_tabs_item">
							<div class="tab-contents-wrap">
								<div class="left-content">
									<img src="media/tabs/tab1.png" alt="tabs">
								</div>
								<!-- /.left-content -->

								<div class="right-content">
									<div class="icon-container">
										<i class="ei ei-icon_film"></i>
									</div>

									<h3>
										One-click copy to multiple video formats
									</h3>

									<p>
										WooCommerce is the best ecommerce solution today and WordPress is the most popular CMS platform. With these goodness backed up, Dokan is the best WooCommerce multi vendor marketplace.
									</p>
								</div>
								<!-- /.right-content -->
							</div>
							<!-- /.tab-contents-wrap -->
						</div>
						<!-- / gp_tabs_item -->

						<div class="gp_tabs_item">
							<div class="tab-contents-wrap">
								<div class="left-content">
									<img src="media/tabs/tab3.png" alt="tabs">
								</div>
								<!-- /.left-content -->

								<div class="right-content">
									<div class="icon-container">
										<i class="ei ei-icon_cart_alt"></i>
									</div>

									<h3>
										Based on WooCommerce and <br> Powered by WordPress
									</h3>

									<p>
										WooCommerce is the best ecommerce solution today and WordPress is the most popular CMS platform. With these goodness backed up, Dokan is the best WooCommerce multi vendor marketplace.
									</p>
								</div>
								<!-- /.right-content -->
							</div>
							<!-- /.tab-contents-wrap -->
						</div>
						<!-- / gp_tabs_item -->

						<div class="gp_tabs_item">
							<div class="tab-contents-wrap">
								<div class="left-content">
									<img src="media/tabs/tab4.png" alt="tabs">
								</div>
								<!-- /.left-content -->

								<div class="right-content">
									<div class="icon-container">
										<i class="ei ei-icon_film"></i>
									</div>

									<h3>
										Based on WooCommerce and <br> Powered by WordPress
									</h3>

									<p>
										WooCommerce is the best ecommerce solution today and WordPress is the most popular CMS platform. With these goodness backed up, Dokan is the best WooCommerce multi vendor marketplace.
									</p>
								</div>
								<!-- /.right-content -->
							</div>
							<!-- /.tab-contents-wrap -->
						</div>
						<!-- / gp_tabs_item -->

					</div>
					<!-- / tab_content -->

				</div>
				<!-- /.tab -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.overview -->

		<!--=============================-->
		<!--=         Overview         =-->
		<!--=============================-->
		<section class="animate-client-logo-service">
			<div class="section-heading">
				<h2>Over 1200+ completd work &<br> Still counting.</h2>
			</div>
			<!-- /.section-heading -->

			<div class="container">

				<div class="client-logo-wrapper">
					<ul class="client-logo-items-two">
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s1.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s2.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s3.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s4.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s5.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s6.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s7.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s8.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s9.png" alt="astrol-logo"></a>
						</li>
						<li class="logo-item wow zoomBounce">
							<a href="#"><img src="media/client/s10.png" alt="astrol-logo"></a>
						</li>
					</ul>
				</div>
				<!-- /.client-logo-wrapper -->

			</div>
			<!-- /.container -->
		</section>
		<!-- /.animate-client-logo -->



    

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