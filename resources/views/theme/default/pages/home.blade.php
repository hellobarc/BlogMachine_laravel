@extends('theme.default.master')

@section('meta_tags')
@if($meta)
    <title>{{$meta['title']}} - {{env('SITE_URL', 'Site Name')}}</title>
    <meta name='description' itemprop='description' content='{{$meta['description']}}' />
    <?php $tags = implode(',', $meta['tags']); ?>
    <meta name='keywords' content='{{$tags}}' />
    <meta property='article:published_time' content='{{$meta['created_at']}}' />
    <meta property='article:section' content='event' />

    <meta property="og:description" content="{{$meta['description']}}" />
    <meta property="og:title" content="{{$meta['title']}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="en-us" />
    <meta property="og:site_name" content="{{env('SITE_URL', 'Site Name')}}" />
    @foreach($meta['images'] as $image)
        <meta property="og:image" content="{{$image}}" />
    @endforeach

    <meta property="og:image:url" content="{{$meta['images'][0]}}" />
    <meta property="og:image:size" content="300" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{$meta['title']}}" />
    <meta name="twitter:site" content="@BlogMachine" />
@endif
@endsection

@section('slider')
    @include('theme/default/partials/slider');
@endsection
@section('content')
<div class="container">
    <div class="row gutters-40 pb-3"> <!--Premium Post-->
        @include('theme/default/partials/premium');
    </div>
    <div class="row gutters-50">
        <div class="col-lg-8">
            <div class="row">
              @include('theme/default/partials/latest');
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog149.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Business</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog150.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog151.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog152.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog153.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog154.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-box-layout4">
                <div class="item-img">
                    <a href="single-blog.html"><img src="theme/default/img/blog/blog155.jpg" alt="blog"></a>
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Finance</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h3 class="item-title"><a href="single-blog.html">Pebble time steel is on track 2019 to
                            ship in January</a></h3>
                    <p>Phasellus lorem ligula, semper vehicula dolor vitae eleifen deary deary mattis sem.</p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pagination-layout1">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                </div>
                <div class="widget-follow-us">
                    <ul>
                        <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-github-alt"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-kickstarter-k"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">ABOUT ME</h3>
                </div>
                <div class="widget-about">
                    <figure class="author-figure"><img src="theme/default/img/figure/figure9.jpg" alt="about"></figure>
                    <figure class="author-signature"><img src="theme/default/img/figure/signature.png" alt="about"></figure>
                    <p>Fusce mauris auctor ollicituder teary iner hendrerit risusey aeenean rauctor pibus
                        doloer.</p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-newsletter-subscribe-dark">
                    <h3>GET LATEST UPDATES</h3>
                    <p>NEWSLETTER SUBSCRIBE</p>
                    <form class="newsletter-subscribe-form">
                        <div class="form-group">
                            <input type="text" placeholder="your e-mail address" class="form-control" name="email"
                                data-error="E-mail field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group mb-none">
                            <button type="submit" class="item-btn">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">POPULAR POSTS</h3>
                </div>
                <div class="widget-popular">
                    <div class="post-box">
                        <div class="item-img">
                            <a href="single-blog.html"><img src="theme/default/img/blog/blog156.jpg" alt="blog"></a>
                        </div>
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li><i class="fas fa-tag"></i>Finance</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                            </ul>
                            <h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
                                    with aert aos Angeles</a></h3>
                        </div>
                    </div>
                    <div class="post-box">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li><i class="fas fa-tag"></i>Business</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                            </ul>
                            <h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
                                    with aert aos Angeles</a></h3>
                        </div>
                    </div>
                    <div class="post-box">
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li><i class="fas fa-tag"></i>It</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                            </ul>
                            <h3 class="item-title"><a href="single-blog.html">Thought Living area tecnology
                                    with aert aos Angeles</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-ad">
                    <a href="#"><img src="theme/default/img/figure/figure5.jpg" alt="Ad" class="img-fluid"></a>
                </div>
            </div>
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">CATEGORIES</h3>
                </div>
                <div class="widget-categories">
                    <ul>
                        <li>
                            <a href="#">Beauty
                                <span>(35)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Fashion
                                <span>(10)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Food
                                <span>(25)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Life Style
                                <span>(15)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Travel
                                <span>(22)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Video
                                <span>(18)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Technology
                                <span>(22)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
