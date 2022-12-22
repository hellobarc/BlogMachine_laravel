<nav id="dropdown" class="template-main-menu">
    <ul>
        <li class="hide-on-mobile-menu">
            <a href="{{route('homepage')}}">HOME</a>
            <!--
            <ul class="dropdown-menu-col-2">
                <li>
                    <a href="index.html">Home 1</a>
                    <a href="index2.html">Home 2</a>
                    <a href="index3.html">Home 3</a>
                    <a href="index4.html">Home 4</a>
                    <a href="index5.html">Home 5</a>
                    <a href="index6.html">Home 6</a>
                    <a href="index7.html">Home 7</a>
                </li>
                <li>
                    <a href="index8.html">Home 8</a>
                    <a href="index9.html">Home 9</a>
                    <a href="index10.html">Home 10</a>
                    <a href="index11.html">Home 11</a>
                    <a href="index12.html">Home 12</a>
                    <a href="index13.html">Home 13</a>
                    <a href="coming-soon.html">Coming Soon</a>
                </li>
            </ul>
        -->
        </li>
        <li class="hide-on-desktop-menu">
            <a href="#">HOME</a>
        <!--
            <ul class="dropdown-menu-col-2">
                <li><a href="index.html">Home 1</a></li>
                <li><a href="index2.html">Home 2</a></li>
                <li><a href="index3.html">Home 3</a></li>
                <li><a href="index4.html">Home 4</a></li>
                <li><a href="index5.html">Home 5</a></li>
                <li><a href="index6.html">Home 6</a></li>
                <li><a href="index7.html">Home 7</a></li>
                <li><a href="index8.html">Home 8</a></li>
                <li><a href="index9.html">Home 9</a></li>
                <li><a href="index10.html">Home 10</a></li>
                <li><a href="index11.html">Home 11</a></li>
                <li><a href="index12.html">Home 12</a></li>
                <li><a href="index13.html">Home 13</a></li>
            </ul>
        -->
        </li>
        <li>
            <a href="about.html">ABOUT</a>
        </li>
        <li>
            <a href="#">CATEGORIES</a>
            <ul class="dropdown-menu-col-1">
                @foreach ($contents as $content)
                    <li>
                        <a href="{{route('categorypage',$content->id)}}">{{$content->cat_name}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <!--
        <li>
            <a href="#">BLOG</a>
            <ul class="dropdown-menu-col-1">
                <li>
                    <a href="single-blog.html">Blog Details 1</a>
                </li>
                <li>
                    <a href="single-blog2.html">Blog Details 2</a>
                </li>
                <li>
                    <a href="single-blog3.html">Blog Details 3</a>
                </li>
            </ul>
        </li>
    -->
    <!--
        <li class="possition-static hide-on-mobile-menu">
            <a href="#">PAGES</a>
            <div class="template-mega-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="menu-ctg-title">Home</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-home"></i>Home 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-home"></i>Home 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-home"></i>Home 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-home"></i>Home 4</a>
                                </li>
                                <li>
                                    <a href="index5.html">
                                        <i class="fas fa-home"></i>Home 5</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <div class="menu-ctg-title">Home</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index6.html">
                                        <i class="fas fa-home"></i>Home 6</a>
                                </li>
                                <li>
                                    <a href="index7.html">
                                        <i class="fas fa-home"></i>Home 7</a>
                                </li>
                                <li>
                                    <a href="index8.html">
                                        <i class="fas fa-home"></i>Home 8</a>
                                </li>
                                <li>
                                    <a href="index9.html">
                                        <i class="fas fa-home"></i>Home 9</a>
                                </li>
                                <li>
                                    <a href="index10.html">
                                        <i class="fas fa-home"></i>Home 10</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <div class="menu-ctg-title">Home</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index11.html">
                                        <i class="fas fa-home"></i>Home 11</a>
                                </li>
                                <li>
                                    <a href="index12.html">
                                        <i class="fas fa-home"></i>Home 12</a>
                                </li>
                                <li>
                                    <a href="index13.html">
                                        <i class="fas fa-home"></i>Home 13</a>
                                </li>
                            </ul>
                            <div class="menu-ctg-title">ARCHIVES</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="archives1.html">
                                        <i class="fab fa-cloudversify"></i>Archive 1</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <div class="menu-ctg-title">ARCHIVES</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="archives2.html">
                                        <i class="fab fa-cloudversify"></i>Archive 2</a>
                                </li>
                            </ul>
                            <div class="menu-ctg-title">AUTHORS</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="authors.html">
                                        <i class="fas fa-users"></i>Authors</a>
                                </li>
                            </ul>
                            <div class="menu-ctg-title">PAGES</div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="404.html">
                                        <i class="fas fa-user-secret"></i>404 Error</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    -->
        <li class="hide-on-desktop-menu">
            <a href="#">Pages</a>
            <ul>
                <li>
                    <a href="about.html">About 1</a>
                </li>
                <li>
                    <a href="blog-category1.html">Blog Category 1</a>
                </li>
                <li>
                    <a href="single-blog.html">Blog Details 1</a>
                </li>
                <li>
                    <a href="archives1.html">Archives 1</a>
                </li>
                <li>
                    <a href="404.html">404 Error</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact.html">CONTACT</a>
        </li>

        <li>
            <a href="contact.html" ><span class="brn btn-primary p-3">LOGIN</span></a>
        </li>
    </ul>
</nav>

@push('custom-scripts')
    <script>
      //  alert("love");
    </script>
@endpush
