@extends('frontend.layouts.app') 

@section('contents')
<div class="site-wrapper-reveal">

    <!-- Hero Area Start -->
    <div class="hero-six-area">
        <div class="swiper-container hero-six-slider-active">
            @if (count($articles) > 0)
            <div class="swiper-wrapper">
                @foreach ($articles as $article)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <a href="{{ route('blog.details', $article->slug) }}" class="hero-slide-six-image">
                                    <img style="height: 425px; width: 570px; object-fit: cover; border-radius: 15px;" src="{{ $article->getImage() }}" alt="{{ $article->title }}"> </a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-slide-post-content">
        
                                    <div class="hero-slide-post-meta">
                                        <div class="hero-blog-post-category">
                                            <a href="#">{{ $article->category->name}}</a>
                                        </div>
                                        <span class="hero-slide-post-author">
                                            By <a href="#">{{ $article->author}}</a>
                                        </span>
                                        <span class="post-date">
                                            <a href="#">{{ $article->created_at->format('d F, Y') }}</a> </span>
                                        <span>10 min read</span>
                                    </div>
                                    <h1 class="hero-slide-post-title">
                                        <a href="{{ route('blog.details', $article->slug) }}">{{ $article->title }}</a>
                                    </h1>
            
                                    <div class="hero-read-more-button">
                                        <a href="{{ route('blog.details', $article->slug) }}">Read more <i class="icofont-long-arrow-right"></i></a>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            
            <div class="slider-six-slider-navigation">
                <div class="slider-six-button-next navigation-button"><i class="icofont-long-arrow-left"></i></div>
                <div class="slider-six-button-prev navigation-button"><i class="icofont-long-arrow-right"></i></div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- Trending Today’s Area Start -->
    <div class="trending-todys-area bg-gray-2 section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="section-title-three mb-30">
                        <h3 class="title">Trending Today’s</h3>
                    </div>
                </div>
                <div class="col-3">
                    <div class="trending-tody-two-slider-navigation">
                        <div class="trending-tody-button-next navigation-button"><i class="icofont-long-arrow-left"></i></div>
                        <div class="trending-tody-button-prev navigation-button"><i class="icofont-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container trending-tody-slider-two-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trending-tody-two-box">
                                    <div class="trending-tody-two-post-author">
                                        By <a href="#">Walter Houston</a>
                                    </div>

                                    <h4 class="trending-tody-two-post-title"><a href="blog-details.html">With WooLentor's drag-and-
                                            drop interface for creating...
                                        </a>
                                    </h4>
                                    <div class="trending-tody-two-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2023</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending-tody-two-box">
                                    <div class="trending-tody-two-post-author">
                                        By <a href="#">Walter Houston</a>
                                    </div>

                                    <h4 class="trending-tody-two-post-title"><a href="blog-details.html">Customize your WooCommerce
                                            store with countless design...
                                        </a>
                                    </h4>
                                    <div class="trending-tody-two-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2023</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending-tody-two-box">
                                    <div class="trending-tody-two-post-author">
                                        By <a href="#">Walter Houston</a>
                                    </div>

                                    <h4 class="trending-tody-two-post-title"><a href="blog-details.html">All of these amazing features
                                            come at an affordable price!
                                        </a>
                                    </h4>
                                    <div class="trending-tody-two-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2023</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Today’s Area End -->

    <!-- Trusted Partners Area Start -->
    <div class="trusted-partners-area border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="mb-20">Trusted Partners:</h6>
                    <div class="swiper-container trusted-partners-slider-active">
                        <div class="swiper-wrapper trusted-partners-slider-wrap">
                            <div class="swiper-slide">
                                <a href="#!"><img src="{{ asset('frontend/assets/images/partners/01-partners.png')}}" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img src="{{ asset('frontend/assets/images/partners/02-partners.png')}}" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img src="{{ asset('frontend/assets/images/partners/03-partners.png')}}" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img src="{{ asset('frontend/assets/images/partners/04-partners.png')}}" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img src="{{ asset('frontend/assets/images/partners/05-partners.png')}}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Partners Area End -->


    <!-- Wordpress Area Start -->
    <div class="wordpress-area section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="section-title-three">WordPress</h3>
                    </div>
                </div>
            </div>
            <div class="row row--30">
                <div class="col-lg-4 col-md-6">
                    <!-- Single Most Populer Item Start -->
                    <div class="single-most-populer-item">
                        <a href="#!" class="most-populer-thum">
                            <img src="{{ asset('frontend/assets/images/recent-article/01-recent-article.jpg')}}" alt="" />
                        </a>
                        <div class="most-populer-content">
                            <div class="most-populer-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h4 class="title"><a href="blog-details.html">All of these amazing features
                                    come at an affordable price!</a>
                            </h4>
                            <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.</p>
                            <div class="most-populer-post-meta">
                                <span class="post-date">
                                <a href="#">03 April, 2023</a>
                            </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Most Populer Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Most Populer Item Start -->
                    <div class="single-most-populer-item">
                        <a href="#!" class="most-populer-thum">
                            <img src="{{ asset('frontend/assets/images/recent-article/02-recent-article.jpg')}}" alt="">
                        </a>
                        <div class="most-populer-content">
                            <div class="most-populer-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Create beautiful designs that
                                    will help convert more...</a>
                            </h4>
                            <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.</p>
                            <div class="most-populer-post-meta">
                                <span class="post-date">
                                <a href="#">03 April, 2023</a>
                            </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Most Populer Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Most Populer Item Start -->
                    <div class="single-most-populer-item">
                        <a href="#!" class="most-populer-thum">
                            <img src="{{ asset('frontend/assets/images/recent-article/03-recent-article.jpg')}}" alt="">
                        </a>
                        <div class="most-populer-content">
                            <div class="most-populer-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h4 class="title"><a href="blog-details.html">WooCommerce comes with
                                    an intuitive drag-and-drop...</a>
                            </h4>
                            <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print industry orem psum has been them industry spa also the loep into type setting.</p>
                            <div class="most-populer-post-meta">
                                <span class="post-date">
                                <a href="#">03 April, 2023</a>
                            </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Most Populer Item End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-box text-center mt-5">
                        <a href="#" class="btn-large btn-bg-6 btn-primary"> Show More <i class="icofont-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wordpress Area End -->

    <!-- SEO Marketing Area Start -->
    

</div>
@endsection