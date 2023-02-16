
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

	


<!--==========================-->
<section class="banner banner-main">
			<div class="container">
				<div class="banner-main-content-wrapper">
					<div class="banner-content">
						<h1 class="banner-title wow fadeInUp">Let your remote <br>team do the heavy work.</h1>

						<p class="description wow fadeInUp" data-wow-delay="0.3s">For everyone, from beginners to experts</p>

						<div class="banner-button-container">
							<a href="login.html" class="gp-btn banner-btn btn-circle color-two wow flipInX" data-wow-delay="0.5s">Trt For Free</a>
							<a href="contact.html" class="gp-btn banner-btn btn-circle color-two btn-light ml-3 wow flipInX" data-wow-delay="0.5s">Discover More</a>
						</div>
						<!-- /.banner-button-container -->
					</div>
					<!-- /.banner-content -->

					<div class="banner-promo-mockup">
						<img src="media/banner/main/mockup.png" class="wow fadeInUp" data-wow-delay="0.7s" alt="Astriol">
					</div>
				</div>
				<!-- /.banner-main-content-wrapper -->
			</div>
			<!-- /.container -->

			<div class="banner-main-animate">
				<ul class="animate-items">
					<li><img src="media/banner/main/leaf1.png" alt="leaf"></li>
					<li><img src="media/banner/main/rabar.png" data-parallax='{"y": 200, "x": 100}' alt="leaf"></li>
					<li><img src="media/banner/main/angle.png" data-parallax='{ "x": -200, "rotateZ": 360}' alt="leaf"></li>
					<li><img src="media/banner/main/leaf3.png" data-parallax='{"y": 100, "x": 100}' alt="leaf"></li>
					<li><img src="media/banner/main/dot.png" alt="leaf"></li>
					<li><img src="media/banner/main/box.png" data-parallax='{"y": -200, "x": -100, "rotateZ": 360}' alt="leaf"></li>
					<li class="bubble1"></li>
					<li class="bubble2"></li>
					<li class="bubble3"></li>
					<li class="bubble4"></li>
				</ul>
			</div>
		</section>
		<!-- /.banner banner-main -->

		<!--===============================-->
		<!--=         Client Logo         =-->
		<!--===============================-->
		<section class="client-logo-marque">
			<div class="container">
				<div class="section-heading style-four font-light">
					<h2 class="section-title">
						Trusted by more than<br>
						14,000 users
					</h2>
				</div>

				<div class="logo-marque">
					<div class="marquee-wrap">
						<ul class="logo-marque-items">
							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr1.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr2.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr3.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr4.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr5.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr6.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr7.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr8.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr9.png" alt="astriol logo">
									</a>
								</div>
							</li>

							<li>
								<div class="logo-item">
									<a href="#">
										<img src="media/client/mr10.png" alt="astriol logo">
									</a>
								</div>
							</li>
						</ul>
					</div>
					<!-- /.marquee-wrap -->
				</div>
				<!-- /.logo-marque -->

				<div class="btn-container text-center">
					<a href="#" class="view-btn">View All Partners <i class="ei ei-arrow_right"></i></a>
				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.client-logo-marque -->

		<!--===============================-->
		<!--=         Feature Box         =-->
		<!--===============================-->
		<section class="service-one">
			<div class="container">
				<div class="section-heading style-four">
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						We take step wise<br>
						for your every platform.
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.3s">
							<div class="icon-container color-one">
								<i class="ei ei-icon_book_alt icons"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Advanced Software</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.4s">
							<div class="icon-container color-two">
								<i class="ei ei-icon_pencil-edit"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Pixel Precision</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.5s">
							<div class="icon-container color-three">
								<i class="ei ei-icon_cloud-upload_alt"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Cloud Service</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.6s">
							<div class="icon-container color-four">
								<i class="ei ei-icon_search"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Content Analyzer</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.7s">
							<div class="icon-container color-five">
								<i class="ei ei-icon_piechart"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Custom Reports</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-one wow fadeInRight" data-wow-delay="0.8s">
							<div class="icon-container color-six">
								<i class="ei ei-icon_folder-alt"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service.html">Download Software</a>
								</h3>

								<p>
									Bloke faff about he nicked it bog<br>
									posh what a plonker smashing<br>
									cobblers up.!
								</p>
							</div>
						</div>
						<!-- /.icon-box style-one -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--====================================-->
		<!--=         Dashboard Slider         =-->
		<!--====================================-->
		<section class="dashboard-preview" id="slider-tab">
			<div class="container">
				<div class="section-heading style-four">
					<h2 class="section-title wow fadeInUp">
						One platform,<br>
						Many superpowers
					</h2>

					<p class="description wow fadeInUp" data-wow-delay="0.3s">
						David bevvy my good sir say buggered you mug cuppa hanky panky the want<br>
						no agro off his nut. Me old mucker u blag smashing.!
					</p>
				</div>
				<div class="preview-slider wow fadeInUp" data-wow-delay="0.5s">
					<div class="row align-items-center">
						<div class="col-md-4 col-sm-12">
							<!-- Add Pagination -->
							<div class="astriol-pagination"></div>
						</div>
						<!-- /.col-md-4 col-sm-12 -->

						<div class="col-md-8 col-sm-12">
							<div class="swiper-container previewSlider">
								<div class="swiper-wrapper">
									<div class="swiper-slide color-one" data-image="ei ei-icon_documents_alt" data-title="Export Presets">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/1.png" alt="Export Presets">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
									<div class="swiper-slide color-two" data-image="ei ei-icon_cloud_alt" data-title="Cloud Service">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/2.png" alt="Cloud Service">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
									<div class="swiper-slide color-three" data-image="ei ei-icon_profile" data-title="Pixel Precision">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/3.png" alt="Pixel Precision">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
									<div class="swiper-slide color-four" data-image="ei ei-icon_grid-2x2" data-title="Grid and Guides">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/4.png" alt="Grid and Guides">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
									<div class="swiper-slide color-five" data-image="ei ei-icon_group" data-title="Iterate at Speed">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/5.png" alt="Iterate at Speed">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
									<div class="swiper-slide color-six" data-image="ei ei-icon_film" data-title="Vector Editing">
										<div class="slide-image-wrapper">
											<img src="media/preview-slider/6.png" alt="Vector Editing">
										</div>
										<!-- /.slide-image-wrapper -->
									</div>
								</div>

							</div>
						</div>
						<!-- /.col-md-8 col-sm-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.preview-slider -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.dashboard-preview -->

		<!--================================-->
		<!--=         Image Content        =-->
		<!--================================-->
		<section class="image-content">
			<div class="container">
				<div class="row mb-140">
					<div class="col-lg-7">
						<div class="anime-image-wrapper">
							<div class="feature-image-wrap">
								<img src="media/feature/image4.png" class="wow zoom" alt="astriol feature">
							</div>
						</div>
						<!-- /.anime-image-wrapper -->
					</div>
					<!-- /.col-md-6 -->

					<div class="col-lg-5">
						<div class="image-content-wrapper style-two">
							<h2 class="title wow fadeInUp">Inventory <br>management</h2>

							<p class="wow fadeInUp lead-text" data-wow-delay="0.3s">
								Why I say old chap that is spiffing David butty mush pukka easy peasy my lady burke.
							</p>

							<p class="deacription wow fadeInUp" data-wow-delay="0.5s">
								The full monty so I said have it what a load of rubbish cheeky bevvy car boot chip shop blow off
								happy days the zonked brilliant daft super gutted mate the wireless boot hanky panky.!
							</p>

							<div class="author-info-single wow fadeInUp" data-wow-delay="0.7s">
								<div class="avatar">
									<img src="media/about/author.jpg" alt="author">
								</div>

								<div class="content">
									<h3 class="name">Joss Sticks</h3>
									<span class="designation">Project Manager</span>
								</div>
							</div>

						</div>
						<!-- /.image-content-wrapper -->
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->

				<div class="row align-items-center">
					<div class="col-lg-5 order-md">
						<div class="image-content-wrapper style-two">
							<h2 class="title wow fadeInUp">Reporting and<br> analytice</h2>

							<p class="lead wow fadeInUp lead-text" data-wow-delay="0.3s">
								Why I say old chap that is spiffing David butty mush pukka easy peasy my lady burke.
							</p>

							<p class="description wow fadeInUp" data-wow-delay="0.5s">
								The full monty so I said have it what a load of rubbish cheeky bevvy car boot chip shop blow off
								happy days the zonked brilliant daft super gutted mate the wireless boot hanky panky.!
							</p>

							<a href="login.html" class="gp-btn btn-circle color-two wow fadeInUp" data-wow-delay="0.7s">Try for Free</a>
						</div>
						<!-- /.image-content-wrapper -->
					</div>
					<!-- /.col-md-6 -->
					<div class="col-lg-7">
						<div class="anime-image-wrapper style-four">
							<div class="feature-image-wrap">
								<img src="media/feature/iphonex.png" class="wow zoom" data-wow-delay="0.7s" alt="astriol feature">

								<div class="image-one" data-parallax='{"y": -60}'>
									<img src="media/feature/imagesm.png" class="wow fadeInDown" data-wow-delay="0.9s" alt="astriol">
								</div>
								<!-- /.image-one -->

								<div class="image-two" data-parallax='{"y": 60}'>
									<img src="media/feature/imagelong.png" class="wow fadeInUp" data-wow-delay="1.1s" alt="astriol">
								</div>
								<!-- /.image-two -->
							</div>

							<span class="circle wow zoom2"></span>

							<div class="anime-dot">
								<img src="media/feature/dot3.png" class="wow fadeInRight" data-wow-delay="0.3s" alt="astrion dot">
							</div>
						</div>
						<!-- /.anime-image-wrapper -->
					</div>
					<!-- /.col-md-6 -->

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.image-content -->

		<!--==============================-->
		<!--=         Testimonial        =-->
		<!--==============================-->
		<section class="testimonials-creative">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-7">
						<div class="section-heading style-four testimonial-heading text-left">
							<h2 class="section-title">Engage<br> your customers.</h2>
							<h3 class="sub-title">Customer’s Reviews</h3>

							<!-- Slider Nav -->
							<div class="nav-control nav-static">
								<div class="gp-nav-prev">
									<i class="ei ei-arrow_left"></i>
								</div>
								<div class="gp-nav-next">
									<i class="ei ei-arrow_right"></i>
								</div>

							</div>
							<!-- /.nav-control -->
						</div>
					</div>
					<!-- /.col-md-6 -->

					<div class="col-md-6 col-lg-5">
						<div class="testimonial-wrap">
							<div class="quote">
								<img src="media/testimonial/quote2.png" alt="quote">
							</div>


							<div class="swiper-container" id="testimonial-creative" data-speed="1000" data-space="50">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="testimonial-cre">

											<div class="testi-content">
												<p>
													Nice one chimney pot are you taking the piss cup of tea gosh bonnet,
													smashing you mug knackered bum bag at public school, geeza arse
													bleeder
													young delinquent wellies off his nut barney knees up only.!
												</p>

											</div>
											<!-- /.testi-content -->

											<div class="testmonial-info">
												<div class="info-wrapper">
													<div class="user-avatar">
														<img src="media/testimonial/01.jpg" alt="astriol user-avatar">
													</div>
													<!-- /.user-avatar -->

													<div class="info">
														<h4 class="user-name">Hanson Deck</h4>
														<span class="designation">UI/UX designer</span>
													</div>
												</div>
												<!-- /.info-wrapper -->
											</div>
											<!-- /.testmonial-info -->
										</div>
										<!-- /.testimonial -->
									</div>

									<div class="swiper-slide">
										<div class="testimonial-cre">

											<div class="testi-content">
												<p>
													Nice one chimney pot are you taking the piss cup of tea gosh bonnet,
													smashing you mug knackered bum bag at public school, geeza arse
													bleeder
													young delinquent wellies off his nut barney knees up only.!
												</p>

											</div>
											<!-- /.testi-content -->

											<div class="testmonial-info">
												<div class="info-wrapper">
													<div class="user-avatar">
														<img src="media/testimonial/2.jpg" alt="astriol user-avatar">
													</div>
													<!-- /.user-avatar -->

													<div class="info">
														<h4 class="user-name">Hanson Deck</h4>
														<span class="designation">UI/UX designer</span>
													</div>
												</div>
												<!-- /.info-wrapper -->
											</div>
											<!-- /.testmonial-info -->
										</div>
										<!-- /.testimonial -->
									</div>

									<div class="swiper-slide">
										<div class="testimonial-cre">

											<div class="testi-content">
												<p>
													Nice one chimney pot are you taking the piss cup of tea gosh bonnet,
													smashing you mug knackered bum bag at public school, geeza arse
													bleeder
													young delinquent wellies off his nut barney knees up only.!
												</p>

											</div>
											<!-- /.testi-content -->

											<div class="testmonial-info">
												<div class="info-wrapper">
													<div class="user-avatar">
														<img src="media/testimonial/3.jpg" alt="astriol user-avatar">
													</div>
													<!-- /.user-avatar -->

													<div class="info">
														<h4 class="user-name">Hanson Deck</h4>
														<span class="designation">UI/UX designer</span>
													</div>
												</div>
												<!-- /.info-wrapper -->
											</div>
											<!-- /.testmonial-info -->
										</div>
										<!-- /.testimonial -->
									</div>
								</div>
							</div>
						</div>
						<!-- /.testimonial-overflow-wrap -->
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.testimonials -->

		<!--=======================-->
		<!--=         Blog        =-->
		<!--=======================-->
		<section id="blog-grid-one">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<article class="blog-post-one">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/m1.jpg" alt="blog-thumb">
								</a>

								<div class="entry-content">
									<div class="author vcard">
										<a class="post-author" href="blog-single.html">
											<img alt="" src="media/blog/author.jpg" class="avatar avatar-30 photo" height="30" width="30">
											Mominul Islam
										</a>
									</div>
									<ul class="post-meta">
										<li class="meta-cat"><a href="blog-single.html">WordPress</a></li>
										<li><i class="ei ei-icon_clock_alt"></i>July 20, 2021</li>
									</ul>

									<h3 class="entry-title">
										<a href="blog-single.html">We are launching the moodboard.</a>
									</h3>

									<p>
										The full monty so I said have it what load of rubbish cheeky.
									</p>
								</div><!-- /.blog-content -->
								<a href="blog-single.html" class="read-more-btn">Read More <i class="ei ei-arrow_right"></i></a>
							</div><!-- /.feature-image -->

						</article><!-- /.blog-post -->
					</div><!-- /.col-lg-4 col-md-4 col-sm-6 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<article class="blog-post-one color-two">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/m2.jpg" alt="blog-thumb">
								</a>

								<div class="entry-content">
									<div class="author vcard">
										<a class="url fn n post-author" href="blog-single.html">
											<img alt="" src="media/blog/author.jpg" class="avatar avatar-30 photo" height="30" width="30">
											Momin
										</a>
									</div>
									<ul class="post-meta">
										<li class="meta-cat"><a href="blog-single.html">Business</a></li>
										<li><i class="ei ei-icon_clock_alt"></i>Jun 20, 2021</li>
									</ul>

									<h3 class="entry-title">
										<a href="blog-single.html">We are launching the moodboard.</a>
									</h3>

									<p>
										The full monty so I said have it what load of rubbish cheeky.
									</p>
								</div><!-- /.blog-content -->
								<a href="blog-single.html" class="read-more-btn">Read More <i class="ei ei-arrow_right"></i></a>
							</div><!-- /.feature-image -->

						</article><!-- /.blog-post -->
					</div><!-- /.col-lg-4 col-md-4 col-sm-6 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<article class="blog-post-one color-three">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/m3.jpg" alt="blog-thumb">
								</a>

								<div class="entry-content">
									<div class="author vcard">
										<a class="url fn n post-author" href="blog-single.html">
											<img alt="" src="media/blog/author.jpg" class="avatar avatar-30 photo" height="30" width="30">
											Momin
										</a>
									</div>
									<ul class="post-meta">
										<li class="meta-cat"><a href="blog-single.html">Analytics</a></li>
										<li><i class="ei ei-icon_clock_alt"></i>May 20, 2021</li>
									</ul>

									<h3 class="entry-title">
										<a href="blog-single.html">We are launching the moodboard.</a>
									</h3>

									<p>
										The full monty so I said have it what load of rubbish cheeky.
									</p>
								</div><!-- /.blog-content -->
								<a href="blog-single.html" class="read-more-btn">Read More <i class="ei ei-arrow_right"></i></a>
							</div><!-- /.feature-image -->

						</article><!-- /.blog-post -->
					</div><!-- /.col-lg-4 col-md-4 col-sm-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#blog-grid -->

		<!--==================================-->
		<!--=         Call To Action         =-->
		<!--==================================-->
		<section class="call-to-action-creative">
			<div class="container pr">

				<div class="call-to-action-wrapper">
					<div class="circle-top">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300px" height="300px">
							<defs>
								<linearGradient id="PSgrad_0" x1="50%" x2="0%" y1="0%" y2="86.603%">
									<stop offset="0%" stop-color="rgb(124,61,252)" stop-opacity="1" />
									<stop offset="1%" stop-color="rgb(124,61,252)" stop-opacity="0.99" />
									<stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="0" />
								</linearGradient>

							</defs>
							<path fill-rule="evenodd" fill-opacity="0" opacity="0.502" fill="rgb(255, 255, 255)" d="M150.000,-0.000 C232.843,-0.000 300.000,67.157 300.000,150.000 C300.000,232.843 232.843,300.000 150.000,300.000 C67.157,300.000 -0.000,232.843 -0.000,150.000 C-0.000,67.157 67.157,-0.000 150.000,-0.000 Z" />
							<path fill="url(#PSgrad_0)" d="M150.000,-0.000 C232.843,-0.000 300.000,67.157 300.000,150.000 C300.000,232.843 232.843,300.000 150.000,300.000 C67.157,300.000 -0.000,232.843 -0.000,150.000 C-0.000,67.157 67.157,-0.000 150.000,-0.000 Z" />
						</svg>
					</div>
					<!-- /.circle-top -->
					<div class="action-content-inner">
						<div class="row">
							<div class="col-md-5">
								<div class="action-content-wrapper">
									<h2 class="title">
										Get started with
										Astriol Template.
									</h2>

									<p class="description">
										Daft well fanny around lavatory morish spend a penny gutted mate.
									</p>

									<a href="contact.html" class="gp-btn color-two btn-light btn-circle">Get Started</a>
								</div>
								<!-- /.action-content-wrapper -->
							</div>
							<!-- /.col-md-6 -->

							<div class="col-md-7">
								<div class="action-image-wrapper">
									<div class="image-one wow fadeInRight">
										<img src="media/call-to-action/ac_1.png" data-parallax='{"x": -50}' alt="animated-image-one">
									</div>
									<div class="image-two wow fadeInLeft">
										<img src="media/call-to-action/ac_2.png" data-parallax='{"x": 50}' alt="animated-image-one">
									</div>
								</div>
							</div>
							<!-- /.col-md-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.action-content-inner -->
					<span class="circle-bottom"></span> <!-- /.circle-bottom -->
				</div>
				<!-- /.call-to-action-wrapper -->

			</div>
			<!-- /.container -->
		</section>
		<!-- /.call-to-action-creative -->


    



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