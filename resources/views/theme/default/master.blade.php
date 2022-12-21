<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('meta_tags')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="theme/default/theme/default/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="theme/default/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="theme/default/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/default/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="theme/default/css/fontawesome-all.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="theme/default/font/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="theme/default/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="theme/default/css/meanmenu.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="theme/default/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="theme/default/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="theme/default/style.css">
    <!-- Modernize js -->
    <script src="theme/default/js/modernizr-3.6.0.min.js"></script>


</head>
<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <header class="has-mobile-menu">
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout2 bg--dark2">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="{{route('homepage')}}" class="temp-logo" id="temp-logo" >
                                    <img src="theme/default/img/logo-light.png" alt="logo" class="img-fluid" width="50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex justify-content-end">
                            @include('theme/default/partials/navigation');
                        </div>
                        <div class="col-lg-2 d-flex justify-content-end">
                            <div class="header-action-items">
                                <ul>
                                    <li class="header-search-box divider-style-border">
                                        <a href="#header-search" title="Search">
                                            <i class="flaticon-magnifying-glass"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
          @yield('slider')
        <!-- Blog Area Start Here -->
        <section class="blog-wrap-layout19">
           @yield('content')
        </section>
        <!-- Blog Area End Here -->
        <!-- Instagram Start Here -->
        @include('theme/default/partials/social')
        <!-- Instagram End Here -->
        <!-- Footer Area Start Here -->
        @include('theme/default/partials/footer')
        <!-- Footer Area End Here -->
        <!-- Search Box Start Here -->
        @include('theme/default/partials/search_box')
        <!-- Search Box End Here -->
    </div>

    <script src="theme/default/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="theme/default/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="theme/default/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="theme/default/js/bootstrap.min.js"></script>
    <!-- Owl Carousel js -->
    <script src="theme/default/vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu js -->
    <script src="theme/default/js/jquery.meanmenu.min.js"></script>
    <!-- Smooth Scroll js -->
   <!-- <script src="theme/default/js/jquery.smoothscroll.min.js"></script>-->
    <!-- Main js -->
    <script src="theme/default/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    @stack('custom-scripts')

</body>
</html>
