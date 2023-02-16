
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




    <section class="banner banner-analytics">
			<div class="banner-shape-left">
				<img src="media/banner/tab-mockup.png" alt="astriol" class="wow gpUpX" data-wow-duration="2s">
			</div>

			<div class="banner-shape-right">
				<img src="media/banner/shape-border.png" alt="astriol" class="wow gpUpX" data-wow-duration="2s">

			</div>
			<!-- /.banner-shape-right -->
			<!-- /.banner-shape-left -->
			<div class="container d-flex align-items-center">
				<div class="row align-items-center bmt-100">
					<div class="col-lg-6 col-xl-6 gpt-order-2">
						<div class="banner-content">
							<h2 class="banner-title wow gptFadeUp">
								The Complete Multivendor <br>
								<span>E-Commerce Solution</span> for <br> WordPress
							</h2>

							<p class="description wow gptFadeUp" data-wow-delay="0.3s">
								The bee's knees cracking goal you mug cack bleeder gutted mate amongst barmy hanky panky
							</p>

							<div class="banner-button">
								<a href="contact.html" class="gp-btn color-four wow gptFadeLeft" data-wow-delay="0.5s">Get Started Now</a>
								<a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="play-btn-two popup-video wow gptFadeLeft" data-wow-delay="0.6s"><i class="fas fa-play"></i></a>
								<a href="service.html" class="btn-text wow gptFadeLeft" data-wow-delay="0.9s">Now does it work</a>
							</div>
							<!-- /.banner-button -->

						</div>
						<!-- /.banner-content -->
					</div>
					<!-- /.col-md-7 -->

					<div class="col-lg-6 col-xl-6">
						<div class="banner-feature-image">
							<ul class="banner-animate-element">
								<li><img src="media/banner/analytics/1.png" class="wow gptFade" data-wow-duration="2s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/2.png" class="wow gptFadeUp" data-wow-duration="2s" data-wow-delay="0.5s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/3.png" class="wow gptFadeDown" data-wow-duration="2s" data-wow-delay="0.5s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/4.png" class="wow gptFadeLeft" data-wow-duration="2s" data-wow-delay="0.7s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/5.png" class="wow gptFadeLeft" data-wow-duration="2s" data-wow-delay="0.5s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/6.png" class="wow gptFadeLeft" data-wow-duration="2s" data-wow-delay="0.5s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/7.png" class="wow gptFade" data-wow-duration="2s" data-wow-delay="0.9s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/8.png" class="wow zoomBounce" data-wow-delay="1s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/9.png" class="wow zoomBounce" data-wow-delay="1s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/10.png" class="wow zoomBounce" data-wow-delay="1s" alt="astriol animate"></li>
								<li><img src="media/banner/analytics/11.png" class="wow zoomBounce" data-wow-delay="1s" alt="astriol animate"></li>
							</ul>
						</div>
						<!-- /.banner-feature-thumb -->
					</div>
					<!-- /.col-md-5 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.banner-analytics -->

		<!--============================-->
		<!--=         Fun Fact         =-->
		<!--============================-->
		<section id="funfact" class="funfact wow gptFadeUp">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12 col-lg-5">
						<div class="counter-box">
							<div class="count special">
								<div class="count-wrap">
									<h2 class="counted" data-counter="10000">10,000</h2>
									<span class="fas fa-plus"></span>
								</div>

								<p class="title">High Performing Marketplaces Worldwide</p>
							</div>
						</div>
					</div>
					<!-- /.col-md-4 -->

					<div class="col-md-12 col-lg-7">
						<div class="row">
							<div class="col-md-4">
								<div class="counter-box">
									<div class="count">
										<div class="count-wrap">
											<h2 class="counted" data-counter="172178">172,178</h2>
										</div>
										<p class="title">Free Download</p>
									</div>
								</div>
							</div>
							<!-- /.col-md-4 -->

							<div class="col-md-4">
								<div class="counter-box">
									<div class="count">
										<div class="count-wrap">
											<h2 class="counted" data-counter="10000">10,000</h2>
											<span class="fas fa-plus"></span>
										</div>
										<p class="title">Active eCommerce Sites</p>
									</div>
								</div>
								<!-- /.counter-box -->
							</div>
							<!-- /.col-md-4 -->

							<div class="col-md-4">
								<div class="counter-box pl-100">
									<div class="count">
										<div class="count-wrap">
											<h2 class="counted" data-counter="60">60</h2>
											<span>%</span>
										</div>
										<p class="title">Less Cost</p>
									</div>
								</div>
							</div>
							<!-- /.col-md-4 -->
						</div>
						<!-- /.row -->

					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#funfact.funfact -->

		<!--===========================-->
		<!--=         Feature         =-->
		<!--===========================-->
		<section id="feature-analytics" class="feature-analytics">
			<div class="container">
				<div class="section-title-ana">
					<h2 class="title wow gptFadeUp">
						How it works?
					</h2>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-box style-six text-center wow gptFadeLeft" data-wow-delay="0.3s">
							<div class="icon-container">
								<img src="media/feature/5.png" alt="feature">
							</div>
							<div class="box-content">
								<h3 class="feature-title"><a href="service.html">Vendor Registers</a></h3>
								<p>
									Jolly good well some dodgy chav gutted mate I Richard cor blimey guvno.!
								</p>
							</div>
							<!-- /.box-content -->
						</div>
						<!-- /.icon-box style-six text-center -->
					</div>
					<!-- /.col-xl-3 col-lg-3 col-sm-6 -->


					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-box style-six text-center wow gptFadeLeft" data-wow-delay="0.5s">
							<div class="icon-container">
								<img src="media/feature/6.png" alt="feature">
							</div>
							<div class="box-content">
								<h3 class="feature-title"><a href="service.html">Upload Products</a></h3>
								<p>
									Jolly good well some dodgy chav gutted mate I Richard cor blimey guvno.!
								</p>
							</div>
							<!-- /.box-content -->
						</div>
						<!-- /.icon-box style-six text-center -->
					</div>
					<!-- /.col-xl-3 col-lg-3 col-sm-6 -->

					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-box style-six text-center wow gptFadeLeft" data-wow-delay="0.7s">
							<div class="icon-container">
								<img src="media/feature/7.png" alt="feature">
							</div>
							<div class="box-content">
								<h3 class="feature-title"><a href="service.html">Ready to Sale</a></h3>
								<p>
									Jolly good well some dodgy chav gutted mate I Richard cor blimey guvno.!
								</p>
							</div>
							<!-- /.box-content -->
						</div>
						<!-- /.icon-box style-six text-center -->
					</div>
					<!-- /.col-xl-3 col-lg-3 col-sm-6 -->

					<div class="col-xl-3 col-lg-3 col-sm-6">
						<div class="icon-box style-six text-center wow gptFadeLeft" data-wow-delay="0.9s">
							<div class="icon-container">
								<img src="media/feature/8.png" alt="feature">
							</div>
							<div class="box-content">
								<h3 class="feature-title"><a href="service.html">Earn with Comission</a></h3>
								<p>
									Jolly good well some dodgy chav gutted mate I Richard cor blimey guvno.!
								</p>
							</div>
							<!-- /.box-content -->
						</div>
						<!-- /.icon-box style-six text-center -->
					</div>
					<!-- /.col-xl-3 col-lg-3 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature-analytics.section-padding -->

		<!--=============================-->
		<!--=         Analytics         =-->
		<!--=============================-->
		<section class="analytics" id="analytics">
			<div class="section-title-ana">
				<h2 class="title wow gptFadeUp">
					The most unique frontend<br> Dashboard experience
				</h2>
			</div>
			<!-- /.section-title-ana -->


			<div class="ana-feature-image text-center">
				<img src="media/mockup/1.png" class="wow gptFadeDown" data-wow-delay="0.5s" alt="mockup">
			</div>
			<!-- /.ana-feature-image -->

			<div class="animate-stroke wow gptFade" data-wow-delay="0.5">
				<div class="stroke-one" data-bg-image="media/background/stroke1.png">
					<!-- <img src="media/background/stroke1.png" alt=""> -->
				</div>

				<div class="stroke-two" data-bg-image="media/background/stroke2.png">
					<!-- <img src="media/background/stroke2.png" alt=""> -->
				</div>
			</div>
			<!-- /.animate-stock -->
		</section>
		<!-- /#analytics.analytics -->

		<!--============================-->
		<!--=         Info Box         =-->
		<!--============================-->
		<section class="info-box analytics-box">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="info-boxs wow gptFadeUp">
							<h4 class="sub-title">Vendors</h4>
							<h3 class="title"><a href="service.html">Manage Everything</a></h3>

							<p class="des">
								Vendors get full functionality from the frontend dashboard - coupons, discounts, reviews, withdraws, earning reports, support, everything on frontend.
							</p>
						</div>
						<!-- /.info-boxs -->
					</div>
					<!-- /.col-md-4 col-sm-6 -->

					<div class="col-md-4 col-sm-6">
						<div class="info-boxs wow gptFadeUp" data-wow-delay="0.3s">
							<h4 class="sub-title">The best storefront and </h4>
							<h3 class="title"><a href="service.html">Marketplace experience</a></h3>

							<p class="des">
								Ariya offers the best looking storefront, features and follows the most trending marketplace design for creating the best customer experience.
							</p>
						</div>
						<!-- /.info-boxs -->
					</div>
					<!-- /.col-md-4 col-sm-6 -->

					<div class="col-md-4 col-sm-6">
						<div class="info-boxs wow gptFadeUp" data-wow-delay="0.5s">
							<h4 class="sub-title">Compatible</h4>
							<h3 class="title"><a href="service.html">With any WooThemes</a></h3>

							<p class="des">
								Ariya frontend is bootstrap based, fully compatible with most (100+) WooCommerce themes and more than 17+ fully compatible themes on ThemeForest.
							</p>
						</div>
						<!-- /.info-boxs -->
					</div>
					<!-- /.col-md-4 col-sm-6 -->
				</div>
				<!-- /.row -->

				<div class="button-container text-center wow gptFadeUp">
					<a href="service.html" class="gp-btn color-four">Feature Explainer <i class="ti-arrow-right"></i></a>
				</div>
				<!-- /.button-container text-center -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#info-box.text-box -->

		<!--==========================-->
		<!--=         Client         =-->
		<!--==========================-->
		<section class="animate-client-logo">
			<div class="top-shape">
				<img src="media/background/client-bg-shape1.png" alt="astriol">
			</div>

			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="client-content-wrapper">
							<h2 class="title wow gptFadeUp">
								Hundreds of Gateways <br><span>and Multilingual ready</span>
							</h2>

							<p class="description wow gptFadeUp" data-wow-delay="0.3s">
								Astriol is <span>Paypal</span> and Stripe ready. Adding other popular gateways<br> and <span>100+</span> WooCommerce supported gateways will enable your<br> market to sell in any country, with tax rates built-in.
							</p>

							<p class="description wow gptFadeUp" data-wow-delay="0.5s">
								Ariya is available in <span>100+ languages</span>, fully translatable and RTL<br> supported – making your marketplace truly global.
							</p>
						</div>
						<!-- /.client-content-wrapper -->
					</div>
					<!-- /.col-lg-6 -->

					<div class="col-lg-6">
						<div class="client-logo-wrapper">
							<ul class="client-logo-items">
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a1.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a2.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a3.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a4.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a5.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a6.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a7.png" alt="astrol-logo"></a>
								</li>
								<li class="logo-item wow zoomBounce">
									<a href="#"><img src="media/client/a8.png" alt="astrol-logo"></a>
								</li>
							</ul>
						</div>
						<!-- /.client-logo-wrapper -->
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="bottom-shape">
				<img src="media/background/client-bg-shape2.png" alt="astriol">
			</div>
		</section>
		<!-- /.animate-client-logo -->

		<!--=============================-->
		<!--=         Overview         =-->
		<!--=============================-->
		<section class="overview section-padding">
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
		<!--=         Reach Box         =-->
		<!--=============================-->
		<section id="reach-box" class="reach-boxs">
			<div class="container">
				<div class="section-title-ana">
					<h2 class="title wow gptFadeUp">Reach new heights<br> with Astriol</h2>
				</div>
				<!-- /.section-title-ana -->

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="reach-box wow gptFadeUp" data-wow-delay="0.5s">
							<div class="icon-container">
								<i class="ei ei-icon_gift"></i>
							</div>

							<div class="content">
								<h3><a href="service.html">Traditional Marketplace</a></h3>

								<ul class="reach-list">
									<li><i class="ei ei-arrow_carrot-right"></i> Readymade Garments</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Laptop, iPhone, Electronics</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Books, Magazines, Comics</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Beauty Care Items</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Shoes and Handicrafts</li>
								</ul>
							</div>
							<!-- /.content -->
						</div>
						<!-- /.reach-box -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="reach-box color-two wow gptFadeUp" data-wow-delay="0.7s">
							<div class="icon-container">
								<i class="ei ei-icon_film"></i>
							</div>

							<div class="content">
								<h3><a href="service.html">Digital Marketplace</a></h3>

								<ul class="reach-list">
									<li><i class="ei ei-arrow_carrot-right"></i> Readymade Garments</li>
									<li><i class="ei ei-arrow_carrot-right"></i> Laptop, iPhone, Electronics</li>
									<li><i class="ei ei-arrow_carrot-right"></i> Books, Magazines, Comics</li>
									<li><i class="ei ei-arrow_carrot-right"></i> Beauty Care Items</li>
									<li><i class="ei ei-arrow_carrot-right"></i> Shoes and Handicrafts</li>
								</ul>
							</div>
							<!-- /.content -->
						</div>
						<!-- /.reach-box -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="reach-box color-three wow gptFadeUp" data-wow-delay="0.7s">
							<div class="icon-container">
								<i class="ei ei-icon_lightbulb_alt"></i>
							</div>

							<div class="content">
								<h3><a href="service.html">Traditional Marketplace</a></h3>

								<ul class="reach-list">
									<li><i class="ei ei-arrow_carrot-right"></i>Readymade Garments</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Laptop, iPhone, Electronics</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Books, Magazines, Comics</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Beauty Care Items</li>
									<li><i class="ei ei-arrow_carrot-right"></i>Shoes and Handicrafts</li>
								</ul>
							</div>
							<!-- /.content -->
						</div>
						<!-- /.reach-box -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#reach-box.reach-box -->

		<!--=============================-->
		<!--=         Reach Box         =-->
		<!--=============================-->
		<section id="call-to-action" data-bg-image="media/background/7.jpg">
			<div class="container">
				<div class="call-to-action">
					<div class="action-content wow gptFadeUp">
						<h2>Get started with Astriol</h2>

						<p class="wow gptFadeUp" data-wow-delay="0.3s">
							Experience the best multi vendor marketplace with industry leading features at an amazing pricing. Our expert support team is always<br> ready to help you.
						</p>
					</div>
					<!-- /.action-content -->

					<div class="action-button wow gptFadeUp" data-wow-delay="0.5s">
						<a href="service.html" class="gp-btn gp-btn-light btn-light-four">Get Started</a>
						<a href="service.html" class="gp-btn btn-two">Documentation</a>
					</div>
					<!-- /.action-button -->
				</div>
				<!-- /.col-to-action -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#call-to-action -->

		<!--========================-->
		<!--=         Blog         =-->
		<!--========================-->
		<section class="blog-slider">
			<div class="container">
				<div class="section-title-ana wow gptFadeUp">
					<h2>Thoughts & Experiments</h2>
				</div>
				<!-- /.section-title-ana -->

				<div class="blog-wrapper">
					<div class="swiper-container  wow gptFadeUp" data-wow-delay="0.3s" id="blog-slider" data-space="30" data-breakpoints='{"1024": {"slidesPerView": 3}, "576": {"slidesPerView": 2}, "320": {"slidesPerView": 1}}'>

						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="blog-slider-post">
									<div class="feature-image">
										<a href="blog-single.html">
											<img src="media/blog/1.jpg" alt="blog"></a>
									</div>

									<div class="blog-content">
										<ul class="post-meta">
											<li>
												<i class="icon-user icons"></i>By:
												<a href="blog-single.html">Jake Weary</a>
											</li>
											<li>
												<i class="icon-clock icons"></i>
												<a href="blog-single.html">July 24, 2021</a>
											</li>
										</ul>
										<h3>
											<a href="blog-single.html">Astriol Summit 2020 Summary</a>
										</h3>

										<p>
											Mush Harry is cheeky bugger bugger all mate so I said blatant.
										</p>
									</div>

								</div>
							</div>

							<div class="swiper-slide">
								<div class="blog-slider-post">
									<div class="feature-image">
										<a href="blog-single.html">
											<img src="media/blog/2.jpg" alt="blog"></a>
									</div>

									<div class="blog-content">
										<ul class="post-meta">
											<li>
												<i class="icon-user icons"></i>By:
												<a href="blog-single.html">Jake Weary</a>
											</li>
											<li>
												<i class="icon-clock icons"></i>
												<a href="blog-single.html">July 24, 2021</a>
											</li>
										</ul>
										<h3>
											<a href="blog-single.html">Your refreshed archives just landed</a>
										</h3>

										<p>
											Mush Harry is cheeky bugger bugger all mate so I said blatant.
										</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="blog-slider-post">
									<div class="feature-image">
										<a href="blog-single.html">
											<img src="media/blog/3.jpg" alt="blog"></a>
									</div>

									<div class="blog-content">
										<ul class="post-meta">
											<li>
												<i class="icon-user icons"></i>By:
												<a href="blog-single.html">Jake Weary</a>
											</li>
											<li>
												<i class="icon-clock icons"></i>
												<a href="blog-single.html">July 24, 2021</a>
											</li>
										</ul>
										<h3>
											<a href="blog-single.html">How to build a Astriol in few simple steps</a>
										</h3>

										<p>
											Mush Harry is cheeky bugger bugger all mate so I said blatant.
										</p>
									</div>
								</div>
							</div>

						</div>

						<div class="slider-pagi-inner pg-dark">
							<div class="swiper-pagination" id="blog-pagination"></div>
						</div>
						<!-- /.slider-pagi-inner -->

					</div>
				</div>
				<!-- /.blog-wrapper -->

			</div>
			<!-- /.container -->
		</section>
		<!-- /.blog-slider -->

		<!--==========================-->
		<!--=         Contact        =-->
		<!--==========================-->
		<section id="contact" class="contact">
			<div class="container">
				<div class="row no-gutters align-items-center">
					<div class="col-md-7">
						<div class="contact-form-inner wow fadeInRight" data-wow-delay="0.3s">
							<h2 class="title">
								How can we help?<br> Because that's what we're here for!
							</h2>
							<form action="php/mailer.php" class="contact-form" data-gp-form="contact">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="fname" placeholder="First Name" required onfocus="this.placeholder=''" onblur="this.placeholder='First Name'">
									</div>
									<!-- /.col-md-6 -->

									<div class="col-md-6">
										<input type="text" name="lname" placeholder="Last Name" required onfocus="this.placeholder=''" onblur="this.placeholder='Last Name'">
									</div>
									<!-- /.col-md-6 -->
								</div>
								<!-- /.row -->

								<input type="text" name="email" placeholder="Email Address" required onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'">
								<textarea placeholder="Hew can we help?" name="content" required onfocus="this.placeholder=''" onblur="this.placeholder='Hew can we help?'"></textarea>
								<button type="submit" class="submit-btn gp-btn color-four">Send Now</button>
								<div class="form-result alert">
									<div class="content"></div>
								</div>
								<!-- /.form-result-->

							</form>
							<!-- /.contact-form -->
						</div>
						<!-- /.contact-form-inner -->
					</div>
					<!-- /.col-md-7 -->

					<div class="col-md-5">
						<div class="contact-content wow fadeInLeft" data-wow-delay="0.5s">
							<div class="icon">
								<i class="ei ei-icon_headphones"></i>
							</div>

							<h3>Our Help Center</h3>

							<p>
								If you prefer finding answers on your own visit our Help Center
							</p>

							<a href="service.html" class="gp-btn gp-btn-light">Take me There</a>
						</div>
						<!-- /.contact-content -->
					</div>
					<!-- /.col-md-5 -->
				</div>
				<!-- /.row -->

				<div class="contact-infos">
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<div class="icon">
									<i class="ei ei-icon_check"></i>
								</div>

								<p>14 day <span>Money Back Guarantee</span></p>
							</div>
						</div>
						<!-- /.col-md-4 -->

						<div class="col-md-4">
							<div class="contact-info color-two">
								<div class="icon">
									<i class="ei ei-icon_lock_alt"></i>
								</div>

								<p>Secure Online Payment</p>
							</div>
						</div>
						<!-- /.col-md-4 -->

						<div class="col-md-4">
							<div class="contact-info color-three">
								<div class="icon">
									<i class="ei ei-icon_lifesaver"></i>
								</div>

								<p>14 day <span>Money Back Guarantee</span></p>
							</div>
						</div>
						<!-- /.col-md-4 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.contact-infos -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#contact.contact -->


    

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