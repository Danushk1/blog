
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



<section class="banner banner-agency-two jarallax">
			<div class="container banner-content-position">
				<div class="banner-content">
					<h3 class="subtitle wow fadeInUp">
						Avenue
					</h3>

					<h1 class="banner-title wow fadeInUp" data-wow-delay="0.3s">
						Creative Astriol<br>
						Agency
					</h1>

					<p class="description wow fadeInUp" data-wow-delay="0.5s">
						Cheeky it's your round bloke hanky panky brolly haggle gosh, my good sir up the kyver cras easy peasy.!
					</p>

					<a href="contact.html" class="banner-btn gp-btn btn-outline color-nine wow fadeInUp" data-wow-delay="0.7s">Get In Touch</a>
				</div>
				<!-- /.banner-content -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.banner -->




		<!--========================-->
		<!--=         About        =-->
		<!--========================-->
		<section class="about-two">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-feature-image style-two">
							<div class="circle-half wow fadeInDown"></div>

							<div class="image-wrapper wow fadeInRight" data-wow-delay="0.3s">
								<img src="media/about/3.jpg" alt="astriol about">
							</div>

							<div class="dot wow fadeInLeft">
								<img src="media/about/dot.png" alt="astriol dot">
							</div>
						</div>
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-content-wrapper style-two">
							<div class="section-heading style-five text-left">
								<h3 class="subtitle wow fadeInUp">Who We Are</h3>

								<h2 class="section-title wow fadeInUp" data-wow-delay="0.5">
									Selling Digital<br> Astriol Designs
								</h2>
							</div>
							<!-- /.section-heading -->

							<p class="lead-content wow fadeInUp" data-wow-delay="0.5s">
								We know that good design means<br> good business.
							</p>

							<p class="description wow fadeInUp" data-wow-delay="0.7s">
								The little rotter bugger all mate golly gosh twit horse play some dodgy chav,
								cack blatant are you taking the piss at public school cor blimey guvnor I, the
								BBC chinwag Oxford telling Richard brolly lost the plot old crikey.
							</p>

							<a href="about.html" class="gp-btn color-nine wow fadeInUp" data-wow-delay="0.9s">More About Us</a>
						</div>
						<!-- /.about-content-wrapper -->
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.about -->

		<!--==========================-->
		<!--=         Feature        =-->
		<!--==========================-->
		<section class="feature-agency">
			<div class="container">
				<div class="section-heading style-five text-left">
					<h3 class="subtitle wow fadeInUp">How it Works</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
						Simple process to start
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--one wow fadeInRight" data-wow-delay="0.3s">
							<div class="icon-container color-one">
								<i class="ei ei-icon_folder-open_alt"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Attend an Event</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--two wow fadeInRight" data-wow-delay="0.4s">
							<div class="icon-container color-two">
								<i class="ei ei-icon_pencil-edit"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Pixel Precision</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--three wow fadeInRight" data-wow-delay="0.5s">
							<div class="icon-container color-three">
								<i class="ei ei-icon_tools"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Cloud Service</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--four wow fadeInRight" data-wow-delay="0.6s">
							<div class="icon-container color-four">
								<i class="ei ei-icon_lightbulb_alt"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Content Analyzer</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--five wow fadeInRight" data-wow-delay="0.7s">
							<div class="icon-container color-five">
								<i class="ei ei-icon_cloud_alt"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Custom Reports</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="icon-box style-nine color--six wow fadeInRight" data-wow-delay="0.8s">
							<div class="icon-container color-six">
								<i class="ei ei-icon_headphones"></i>
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Download Software</a>
								</h3>

								<p>
									Say cracking goal why bugger<br> do one happy days.
								</p>

								<a href="service-two.html" class="more-info">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="12px">
										<path fill-rule="evenodd" fill="rgb(204, 203, 210)" d="M-0.000,4.999 L36.200,4.999 L32.600,1.399 L34.000,-0.002 L40.000,5.998 L34.000,11.998 L32.600,10.598 L36.200,6.998 L-0.000,6.998 L-0.000,4.999 Z" />
									</svg>
								</a>
							</div>
						</div>
						<!-- /.icon-box style-nine -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--====================================-->
		<!--=         Image Tab Feature        =-->
		<!--====================================-->
		<section class="feature-image-tabs">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="feature-content-wrapper mt-60">
							<div class="section-heading text-left style-five">
								<h3 class="subtitle wow fadeInUp">The History</h3>
								<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
									<span>Create Your</span><br>
									Awesome Website
								</h2>

								<p class="wow fadeInUp" data-wow-delay="0.5s">
									He lost his bottle bog-standard show off show off pick your<br>
									nose and blow off Richard loo chap my lady the bee's<br>
									knees crikey, cockup wellies.
								</p>
							</div>
							<!-- /.section-heading -->

							<a href="contact.html" class="gp-btn btn-outline color-nine wow fadeInUp" data-wow-delay="0.7s">Get Started <i class="ei ei-arrow_right"></i></a>
						</div>
						<!-- /.feature-content-wrapper -->
					</div>
					<!-- /.col-lg-6 -->


					<div class="col-lg-6">
						<div class="gp-tabs style-two">

							<ul class="gp-tabs-navigation wow fadeInUp" data-wow-delay="0.3s">
								<li data-content="inbox" class="active-tab">
									<a href="#0">Committed to quality </a>
								</li>
								<li data-content="new">
									<a href="#0">Brandin </a>
								</li>
								<li data-content="gallery">
									<a href="#0">Animation</a>
								</li>
							</ul> <!-- gp-tabs-navigation -->

							<div class="tab-content-inner wow fadeInUp" data-wow-delay="0.5s">
								<ul class="gp-tabs-content wow fadeIn">
									<li data-content="inbox" class="active-tab">
										<div class="feature-tab-image">
											<img src="media/about/tab1.jpg" alt="feature">
										</div>
									</li>

									<li data-content="new">
										<div class="feature-tab-image">
											<img src="media/about/tab2.jpg" alt="feature">
										</div>
									</li>

									<li data-content="gallery">
										<div class="feature-tab-image">
											<img src="media/about/tab3.jpg" alt="feature">
										</div>
									</li>

								</ul> <!-- gp-tabs-content -->
							</div><!-- /.tab-content-inner -->

						</div> <!-- gp-tabs -->
					</div>
					<!-- /.col-lg-6 -->




				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.feature-image-tabs -->

		<!--===================================-->
		<!--=         Portfolio Agency        =-->
		<!--===================================-->
		<div class="portfolio-agency">
			<div class="container">
				<div class="section-heading style-five text-left mb-0">
					<h3 class="subtitle">Projects</h3>
					<h2 class="section-title">

						Latest works
					</h2>
				</div>
				<!-- /.section-heading -->
				<div class="filter__wrapper">
					<ul class="astriol__isotope-filter style--two">
						<li class="current">
							<a href="" data-filter="*">See All</a>
						</li>
						<li>
							<a href="" data-filter=".mobile">Mobile Apps</a>
						</li>
						<li>
							<a href="" data-filter=".branding">Branding</a>
						</li>
						<li>
							<a href="" data-filter=".design">Design</a>
						</li>
						<li>
							<a href="" data-filter=".commerce">Commerce</a>
						</li>
					</ul>


				</div>
				<!-- /.filter__wrapper -->
				<div class="astriol__isotope wow fadeIn" data-wow-delay="0.3s">
					<div class="astriol__portfolio-items astriol__portfolio-items--three column-3 port-gutters">
						<div class="grid-sizer"></div>

						<div class="astriol__portfolio astriol__grid--item branding commerce design">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a1.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Website Design</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">Creative Tropical</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>

						</div>

						<div class="astriol__portfolio astriol__grid--item branding mobile">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a2.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Creative</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">Bronze Age</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>

						</div>

						<div class="astriol__portfolio astriol__grid--item commerce design">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a3.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Design</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">Brown Tabby Manbatty</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>
						</div>

						<div class="astriol__portfolio astriol__grid--item branding">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a4.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Creative</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">California’s New</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>
						</div>

						<div class="astriol__portfolio astriol__grid--item branding design mobile">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a5.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Marketing</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">Snowflake Says</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>
						</div>

						<div class="astriol__portfolio  commerce mobile astriol__grid--item">
							<div class="astriol__portfolio-image">
								<img src="media/portfolio/a6.jpg" alt="portfolio thumb" />

								<div class="portfolio-info">
									<span>Technology</span>
									<h3 class="portfolio-title"><a href="portfolio-single.html">Clear Glass Light Bulb</a></h3>
								</div>

								<a href="portfolio-single.html" class="popup-image"><i class="ei ei-arrow_carrot-right"></i></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.portfolio-inner -->

		<!--======================-->
		<!--=         Faq        =-->
		<!--======================-->
		<section class="faq-agency">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="image-wrapper-faq wow fadeInLeft" data-wow-delay="0.3s">
							<img src="media/background/faq.jpg" alt="faq">
						</div>
						<!-- /.image-wrapper -->
					</div>
					<!-- /.col-lg-6 -->

					<div class="col-lg-6">
						<div class="faq-wrapper">
							<div class="section-heading style-five text-left">
								<h3 class="subtitle wow fadeInUp">Frequently Ask Question</h3>
								<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
									We help to create visual
									strategies.
								</h2>
							</div>

							<div id="accordion-agency" class="faq style-two wow fadeInUp" data-wow-delay="0.5s">
								<div class="card">
									<div class="card-header" id="heading10">
										<h5>
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">User Experience</button>
										</h5>
									</div>
									<div id="collapse00" class="collapse" aria-labelledby="heading10" data-parent="#accordion-agency">
										<div class="card-body">
											<p>
												The little rotter bugger all mate golly gosh twit horse play some dodgy chav, cack blatant are you taking the piss at public school cor blimey.
											</p>
										</div>
									</div>
								</div>
								<div class="card active">
									<div class="card-header" id="heading20">
										<h5>
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">Save Searches for Faster Access</button>
										</h5>
									</div>
									<div id="collapse10" class="collapse show" aria-labelledby="heading20" data-parent="#accordion-agency">
										<div class="card-body">
											<p>
												The little rotter bugger all mate golly gosh twit horse play some dodgy chav, cack blatant are you taking the piss at public school cor blimey.
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading30">
										<h5>
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">Website & Mobile App Design</button>
										</h5>
									</div>
									<div id="collapse20" class="collapse" aria-labelledby="heading30" data-parent="#accordion-agency">
										<div class="card-body">
											<p>
												The little rotter bugger all mate golly gosh twit horse play some dodgy chav, cack blatant are you taking the piss at public school cor blimey.
											</p>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- /.faq-wrapper -->

					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.faq-agency -->

		<!--========================-->
		<!--=         Team         =-->
		<!--========================-->
		<section class="teams-two">
			<div class="container">
				<div class="section-heading style-five">
					<h3 class="subtitle wow fadeInUp" data-wow-delay="0.3s">Meet The Team</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">Our Creative Team.</h2>
				</div>
				<!-- /.section-heading -->
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="team-member style-two wow fadeInRight" data-wow-delay="0.3s">
							<div class="team-avatar">
								<img src="media/team/t6.jpg" alt="Astriol Team">

								<ul class="member-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- /.team-avatar -->

							<div class="member-info">
								<h3 class="name">Barry Tone</h3>
								<span class="designation">Founder</span>
							</div>
						</div>
						<!-- /.team-member style-two -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->

					<div class="col-lg-3 col-md-6">
						<div class="team-member style-two wow fadeInRight" data-wow-delay="0.5s">
							<div class="team-avatar">
								<img src="media/team/t7.jpg" alt="Astriol Team">

								<ul class="member-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- /.team-avatar -->

							<div class="member-info">
								<h3 class="name">Penny Tool</h3>
								<span class="designation">Project Manager</span>
							</div>
						</div>
						<!-- /.team-member style-two -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->

					<div class="col-lg-3 col-md-6">
						<div class="team-member style-two wow fadeInRight" data-wow-delay="0.7s">
							<div class="team-avatar">
								<img src="media/team/t8.jpg" alt="Astriol Team">

								<ul class="member-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- /.team-avatar -->

							<div class="member-info">
								<h3 class="name">Jonquil Von</h3>
								<span class="designation">Engineer</span>
							</div>
						</div>
						<!-- /.team-member style-two -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->

					<div class="col-lg-3 col-md-6">
						<div class="team-member style-two wow fadeInRight" data-wow-delay="0.9s">
							<div class="team-avatar">
								<img src="media/team/t9.jpg" alt="Astriol Team">

								<ul class="member-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<!-- /.team-avatar -->

							<div class="member-info">
								<h3 class="name">Russell Sprout</h3>
								<span class="designation">Web Developer</span>
							</div>
						</div>
						<!-- /.team-member style-two -->
					</div>
					<!-- /.col-lg-3 col-md-6 -->

				</div>
				<!-- /.row -->

				<div class="button-container text-center">
					<a href="team.html" class="gp-btn-normal wow fadeInUp">View All Members <i class="ei ei-arrow_right"></i></a>
				</div>
				<!-- /.button-container -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.teams -->

		<!--===========================-->
		<!--=         Pricing         =-->
		<!--===========================-->
		<section class="pricing-agency">

			<div class="container">
				<div class="section-heading style-five">
					<h3 class="subtitle wow fadeInUp">Pricing Plan</h3>
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">Choose Your Plan</h2>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table style-agency wow fadeInLeft" data-wow-delay="0.3s">
							<div class="price-header">
								<h3 class="price-title">Basic</h3>
							</div>
							<!-- /.price-header -->

							<div class="price-period">
								<h2 class="price">$12.99</h2>
								<span class="period">Billed Monthly</span>
							</div>
							<!-- /.price-period -->

							<ul class="price-feature">
								<li><i class="ei ei-icon_check checked"></i> Creative Astriol</li>
								<li><i class="ei ei-icon_check checked"></i> Competitive Analysis</li>
								<li><i class="ei ei-icon_check"></i> Advanced Options</li>
								<li><i class="ei ei-icon_check"></i> Unlimited Support</li>
							</ul>
							<a href="contact.html" class="gp-btn color-nine btn-outline">Buy Now</a>

						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table style-agency feature-item wow fadeInLeft" data-wow-delay="0.5s">
							<div class="price-header">
								<h3 class="price-title">Standard</h3>
							</div>
							<!-- /.price-header -->

							<div class="price-period">
								<h2 class="price">$44.95</h2>
								<span class="period">Billed Monthly</span>
							</div>
							<!-- /.price-period -->

							<ul class="price-feature">
								<li><i class="ei ei-icon_check checked"></i> Creative Astriol</li>
								<li><i class="ei ei-icon_check checked"></i> Competitive Analysis</li>
								<li><i class="ei ei-icon_check checked"></i> Advanced Options</li>
								<li><i class="ei ei-icon_check"></i> Unlimited Support</li>
							</ul>
							<a href="contact.html" class="gp-btn color-nine">Buy Now</a>

						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table style-agency wow fadeInLeft" data-wow-delay="0.7s">
							<div class="price-header">
								<h3 class="price-title">Premium</h3>
							</div>
							<!-- /.price-header -->

							<div class="price-period">
								<h2 class="price">$75.99</h2>
								<span class="period">Billed Monthly</span>
							</div>
							<!-- /.price-period -->

							<ul class="price-feature">
								<li><i class="ei ei-icon_check checked"></i> Creative Astriol</li>
								<li><i class="ei ei-icon_check checked"></i> Competitive Analysis</li>
								<li><i class="ei ei-icon_check checked"></i> Advanced Options</li>
								<li><i class="ei ei-icon_check checked"></i> Unlimited Support</li>
							</ul>
							<a href="contact.html" class="gp-btn color-nine btn-outline">Buy Now</a>

						</div>
						<!-- /.pricing-table -->
					</div>
					<!-- /.col-lg-4 col-md-6 -->

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.pricings -->

		<!--==============================-->
		<!--=         Testimonial        =-->
		<!--==============================-->
		<section class="testimonials-two">
			<div class="testimonial-overflow-wrap agency-testimonial-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="testimonial-content-left mt-5">
								<div class="section-heading style-five text-left">
									<h3 class="subtitle wow fadeInUp">Feedback</h3>
									<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
										We help to achieve
										Mutual goals.
									</h2>
								</div>

								<div class="nav-control wow fadeInUp" data-wow-delay="0.5s">
									<div class="gp-nav-prev">
										<i class="ei ei-arrow_carrot-left"></i>
									</div>
									<div class="gp-nav-next">
										<i class="ei ei-arrow_carrot-right"></i>
									</div>

								</div>
								<!-- /.nav-control -->
							</div>
							<!-- /.testimonial-content-left -->
						</div>
						<!-- /.col-lg-5 -->


						<div class="col-lg-7">
							<div class="testimonial-inner">
								<div class="swiper-container wow fadeInRight" id="testimonial-agency" data-wow-delay="0.5s" data-breakpoints='{"1280": {"slidesPerView": 3, "spaceBetween": 45}, "1024": {"slidesPerView": 2, "spaceBetween": 50}, "768": {"slidesPerView": 2, "spaceBetween": 40}, "320": {"slidesPerView": 1, "spaceBetween": 30}}'>
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="testimonial-three">

												<div class="testi-content">
													<p>
														Baking cakes naff fanny around bamboozled sloshed at public school lost the plot Why cack smashing Jeffrey bobby brolly, skive off horse play.
													</p>

													<ul class="ratings">
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
													</ul>
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
											<div class="testimonial-three">

												<div class="testi-content">
													<p>
														Baking cakes naff fanny around bamboozled sloshed at public school lost the plot Why cack smashing Jeffrey bobby brolly, skive off horse play.
													</p>

													<ul class="ratings">
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
													</ul>
												</div>
												<!-- /.testi-content -->

												<div class="testmonial-info">
													<div class="info-wrapper">
														<div class="user-avatar">
															<img src="media/testimonial/2.jpg" alt="astriol user-avatar">
														</div>
														<!-- /.user-avatar -->

														<div class="info">
															<h4 class="user-name">Joss Sticks</h4>
															<span class="designation">Content Writter</span>
														</div>
													</div>
													<!-- /.info-wrapper -->

												</div>
												<!-- /.testmonial-info -->

											</div>
											<!-- /.testimonial -->
										</div>

										<div class="swiper-slide">
											<div class="testimonial-three">

												<div class="testi-content">
													<p>
														Baking cakes naff fanny around bamboozled sloshed at public school lost the plot Why cack smashing Jeffrey bobby brolly, skive off horse play.
													</p>

													<ul class="ratings">
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
														<li><i class="ei ei-icon_star"></i></li>
													</ul>
												</div>
												<!-- /.testi-content -->

												<div class="testmonial-info">
													<div class="info-wrapper">
														<div class="user-avatar">
															<img src="media/testimonial/3.jpg" alt="astriol user-avatar">
														</div>
														<!-- /.user-avatar -->

														<div class="info">
															<h4 class="user-name">Penny Tool</h4>
															<span class="designation">Web Developer</span>
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
							<!-- /.testimonial-inner -->
						</div>
						<!-- /.col-lg-7 -->
					</div>
					<!-- /.row -->

				</div>
				<!-- /.container -->

				<div class="bg-shape">
					<img src="media/testimonial/shape_bg.svg" class="wow fadeInRight" data-wow-delay="0.3s" alt="astriol background">
				</div>
			</div>
			<!-- /.testimonial-overflow-wrap -->



		</section>
		<!-- /.testimonials -->

		<!--=================================-->
		<!--=         Call To Action        =-->
		<!--=================================-->
		<section id="call-to-action-agency-two" class="jarallax" data-bg-image="media/background/action_bg.jpg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-9">
						<div class="action-content wow fadeInUp">
							<h2 class="action-title wow fadeInUp">
								We are Creative Digital Agency.<br>
								We Make Future!
							</h2>
						</div>
						<!-- /.action-content -->
					</div>
					<!-- /.col-md-5 -->

					<div class="col-md-3">
						<div class="action-info wow fadeInUp" data-wow-delay="0.3s">
							<a href="contact.html" class="gp-btn color-nine wow fadeInUp" data-wow-delay="0.5s">Get In Touch</a>
						</div>
						<!-- /.action-button -->
					</div>
					<!-- /.col-md-7 -->
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