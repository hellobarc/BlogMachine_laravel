 <!-- Header Area Start Here -->
        <header class="has-mobile-menu">
            <div id="header-middlebar" class="pt--29 pb--29 bg--dark">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4">
                            <div class="header-action-items">
                                <ul>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fas fa-rss"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="item-social-layout2"> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center">
                            <div class="logo-area">
                                <a href="index.html" class="temp-logo" id="temp-logo">
                                    <img src="{{asset('theme/default/img/logo-light.png')}}" alt="{{env('SITE_THEME')}}" class="img-fluid" width="50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
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
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout1 bg--light">
                 @include('theme/'.env('SITE_THEME').'/partials/navigation')
            </div>
        </header>
        <!-- Header Area End Here -->