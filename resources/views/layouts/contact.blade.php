

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




    <section class="page-banner-two">

<div class="container pr">
    <ul class="banner-pertical-three">
        <li>
            <img src="media/banner/main/rabar.png" data-parallax='{"y": -50, "x": -50}' alt="astriol pertical">
        </li>
        <li>
            <img src="media/banner/main/flash.png" data-parallax='{"y": -50, "x": 50}' alt="astriol pertical">
        </li>
    </ul>
    <!-- /.banner-pertical -->

    <div class="page-title-wrapper text-left">
        <h1 class="page-title">Contact</h1>

        <ul class="breadcrumbs">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Contact</li>
        </ul>
    </div>
    <!-- /.page-title-wrapper -->
</div>
<!-- /.container -->
</section>
<!-- /.page-banner -->

<!--================================-->
<!--=         Contact Form         =-->
<!--================================-->
<section class="contact-form-page">
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <div class="contact-information">
                <h3 class="contact-title">Contact Us</h3>

                <p class="description">
                    Got a project in mind? Fill in the form
                    or send us a <a href="mailto:info@gptheme.com">direct email</a>.
                </p>

                <div class="info-list">
                    <h3 class="info-title">Phone:</h3>
                    <p>
                        +(347 124 574 342)
                    </p>
                </div>
                <!-- /.info-list -->

                <div class="info-list">
                    <h3 class="info-title">Email:</h3>
                    <p>
                        Support@astriol.com
                    </p>
                </div>
                <!-- /.info-list -->

                <div class="info-list mb-0">
                    <h3 class="info-title">Address:</h3>
                    <p>
                        541 Melville Astriol, Palo Alto,
                        DUSS 943, United States
                    </p>
                </div>
                <!-- /.info-list -->

            </div>
            <!-- /.contact-information -->
        </div>
        <!-- /.col-md-4 -->
        @if (session('message'))
        <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
        @endif
       
       
      
        <div class="col-md-8">
            <div class="contact-form-wrapper">
                <form action="{{ url('comment')}}" class="contact-form-main" data-gp-form="contact-form">
                    <div class="row">@foreach($posts as $posts)
                    <input type="hidden" name="post_slug" value="{{ $posts->slug}}">@endforeach
                            <textarea name="content" id="message" cols="30" rows="10" class="gp-input gp-textarea" placeholder="Your Comment"></textarea>
                            <button type="submit" class="gp-btn btn-submit">Send Message</button>

                            <div class="form-result alert">
                                <div class="content"></div>
                            </div>
                            <!-- /.form-result-->
                        </div>
                    </div> 
                    <!-- /.row -->
                </form>
                <!-- /.contact-form-main -->
            </div>
            <!-- /.contact-form-wrapper -->
        </div>
        <!-- /.col-md-8 -->
    </div>
   
    <!-- /.row -->

    <div class="row mt-140">
        <div class="col-sm-4">
            <div class="address-box style-border">
                <h4 class="address-title">
                    New York
                </h4>

                <p class="address">
                    340 Hilldale Lane Maryville, TN<br>
                    46802, United States
                </p>
            </div>
            <!-- /.address-box -->
        </div>
        <!-- /.col-sm-4 -->

        <div class="col-sm-4">
            <div class="address-box">
                <h4 class="address-title">
                    Australia
                </h4>

                <p class="address">
                    8201 44th Avenue NE, TN 22842,<br>
                    Australia
                </p>
            </div>
            <!-- /.address-box -->
        </div>
        <!-- /.col-sm-4 -->

        <div class="col-sm-4">
            <div class="address-box">
                <h4 class="address-title">
                    London
                </h4>

                <p class="address">
                    425 Montgomery Street,<br>
                    TN 37803, London
                </p>
            </div>
            <!-- /.address-box -->
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /.contact-form-page -->

















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