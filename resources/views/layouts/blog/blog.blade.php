
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




    <section class="page-banner style-light">

<ul class="banner-pertical-two">
    <li><img src="media/banner/header2/tree.png" class="littleSquare" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/wave.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/bigc.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/dot.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/c1.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/dotsm.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/c2.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/hc1.png" alt="astriol pertical"></li>
    <li><img src="media/banner/header2/hc2.png" alt="astriol pertical"></li>
</ul>
<!-- /.banner-pertical -->

<div class="page-title-wrapper text-center">
    <h1 class="page-title">Blog</h1>

    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li>Blog</li>
    </ul>
</div>
<!-- /.page-title-wrapper -->

</section>
<!-- /.page-banner -->

<!--========================-->
<!--=         Blog         =-->
<!--========================-->
<section class="blog-posts">
<div class="container">


    <div class="astriol__blogs wow fadeIn" data-wow-delay="0.3s">
        <div class="row">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/10.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta">Software</a>

                                <h2 class="entry-title"><a href="blog-single.html">How To Deploy a PHP Application with Kubernetes.</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="astriol__blog-post design marketing">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/11.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-two">Analytics</a>

                                <h2 class="entry-title"><a href="blog-single.html">How To Build a Node.js Application with Docker</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6 product design">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/12.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-three">Business</a>

                                <h2 class="entry-title"><a href="blog-single.html">Hear from our Customer Community</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/13.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-four">Design Art</a>

                                <h2 class="entry-title"><a href="blog-single.html">Now, share and get comments on your files!</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6 marketing">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/14.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-five">Research</a>

                                <h2 class="entry-title"><a href="blog-single.html">We are launching the moodboard.</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6 product">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/15.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-six">Marketing</a>

                                <h2 class="entry-title"><a href="blog-single.html">Why you should use design thinking for your business?</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6 product design">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/16.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta color-three">Product Updates</a>

                                <h2 class="entry-title"><a href="blog-single.html">How truly think about your user?</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="astriol__blog-post">
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img src="media/blog/17.jpg" alt="astriol blog">
                                </a>
                            </div>
                            <!-- /.post-thumbnail -->

                            <div class="entry-content">
                                <a href="#" class="entry-meta">Wordpress</a>

                                <h2 class="entry-title"><a href="blog-single.html">How To Build a Node.js Application with Docker</a></h2>

                                <div class="blog-footer">
                                    <div class="avatar-wrapper">
                                        <span class="author vcard">
                                            <a class="url fn n post-author" href="#">
                                                <img alt="avater" src="media/blog/author-sm.jpg" class="avatar">
                                                Admin
                                            </a>
                                        </span>
                                    </div>

                                    <div class="date-meta">
                                        April 20, 2020
                                    </div>
                                </div>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.astriol__blog-post -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4 sidebar-container sidebar-widget-area">
                <aside class="sidebar">
                    <div id="search-2" class="widget astriol_widget widget_search">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <input type="search" class="search-field" placeholder="Search..." name="s" title="Search for:">
                            </label>
                            <button type="submit" class="search-submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div id="gp-posts-widget-2" class="widget gp-posts-widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="gp-posts-widget-wrapper">
                            <div class="post-item">
                                <div class="post-widget-thumbnail">
                                    <a href="#">
                                        <img src="media/blog/re1.jpg" alt="thumb">
                                    </a>
                                </div>
                                <div class="post-widget-info">
                                    <h5 class="post-widget-title">
                                        <a href="#" title="This Is Test Post">How To Deploy a PHP Application.</a>
                                    </h5>
                                    <ul class="post-meta">
                                        <li><a href="#">Softwere</a></li>
                                        <li><a href="#">April 20, 2020</a></li>
                                    </ul>

                                </div>
                            </div>

                            <div class="post-item">
                                <div class="post-widget-thumbnail">
                                    <a href="#">
                                        <img src="media/blog/re2.jpg" alt="thumb">
                                    </a>
                                </div>
                                <div class="post-widget-info">
                                    <h5 class="post-widget-title">
                                        <a href="#" title="This Is Test Post">How truly think about your user?</a>
                                    </h5>
                                    <ul class="post-meta">
                                        <li><a href="#">Analytics</a></li>
                                        <li><a href="#">March 20, 2020</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-item">
                                <div class="post-widget-thumbnail">
                                    <a href="#">
                                        <img src="media/blog/re3.jpg" alt="thumb">
                                    </a>
                                </div>
                                <div class="post-widget-info">
                                    <h5 class="post-widget-title">
                                        <a href="#" title="This Is Test Post">We are launching the moodboard.</a>
                                    </h5>
                                    <ul class="post-meta">
                                        <li><a href="#">Analytics</a></li>
                                        <li><a href="#">March 20, 2020</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="categories" class="widget widget_categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li>
                                <a href="#">Creativity <span class="count">(6)</span></a>
                            </li>
                            <li>
                                <a href="#">Design <span class="count">(14)</span></a>
                            </li>
                            <li>
                                <a href="#">Topics <span class="count">(12)</span></a>
                            </li>
                            <li>
                                <a href="#">IOS/Android Design <span class="count">(10)</span></a>
                            </li>
                            <li>
                                <a href="#">App & Saas <span class="count">(4)</span></a>
                            </li>
                            <li>
                                <a href="#">Inspiration <span class="count">(9)</span></a>
                            </li>

                            <li>
                                <a href="#">Saas Design <span class="count">(8)</span></a>
                            </li>

                        </ul>
                    </div>
                    <div id="widget_recent_comments" class="widget widget_recent_comments">
                        <h2 class="widget-title">Recent Comments</h2>
                        <div class="recent-comments">
                            <div class="comment-list">
                                <div class="avatar">
                                    <img src="media/blog/ca1.jpg" alt="author">
                                </div>

                                <div class="comment-content">
                                    <a href="#" class="comments-text">My good sir at public school the BBC some dodgy chav boot ruddy gosh.</a>
                                    <a href="#" class="comment-author-link">Hanson Deck</a>
                                </div>
                            </div><!-- /.comment-list -->

                            <div class="comment-list">
                                <div class="avatar">
                                    <img src="media/blog/ca2.jpg" alt="author">
                                </div>

                                <div class="comment-content">
                                    <a href="#" class="comments-text">Nancy boy get stuffed mate cup of char loo up the duff naff cheeky.</a>
                                    <a href="#" class="comment-author-link">Guy Mann</a>
                                </div>
                            </div><!-- /.comment-list -->

                            <div class="comment-list">
                                <div class="avatar">
                                    <img src="media/blog/ca3.jpg" alt="author">
                                </div>

                                <div class="comment-content">
                                    <a href="#" class="comments-text">My good sir at public school the BBC some dodgy chav boot ruddy gosh.</a>
                                    <a href="#" class="comment-author-link">Hanson Deck</a>
                                </div>
                            </div><!-- /.comment-list -->

                        </div><!-- /.recent-comments -->
                    </div>
                    <aside id="tags" class="widget widget_tag">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Astriol</a>
                            <a href="#">Web Design</a>
                            <a href="#">App & Saas</a>
                            <a href="#">Saas Lading</a>
                            <a href="#">Project</a>
                            <a href="#">Article</a>
                            <a href="#">Software</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Creativity</a>
                        </div>
                    </aside><!-- /.widget -->
                </aside>
                <!-- /.sidebar -->
            </div>
            <!-- /.col-md-4 -->

        </div>

    </div>
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