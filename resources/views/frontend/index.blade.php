@extends('frontend.layouts.app') @section('contents')
<div class="site-wrapper-reveal">

    <!-- Hero Area Start -->
    <div class="hero-six-area">
        <div class="swiper-container hero-six-slider-active">
            <div class="swiper-wrapper">
                @foreach ($heroarticles as $article)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <a
                                    href="{{ route('article.detail', $article->slug) }}"
                                    class="hero-slide-six-image">
                                    <img
                                        loading="lazy"
                                        style="height: 425px; width: 570px; object-fit: cover; border-radius: 15px;"
                                        src="{{ $article->getImage() }}"
                                        alt="{{ $article->title }}">
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-slide-post-content">
                                    <div class="hero-slide-post-meta">
                                        <div class="hero-blog-post-category">
                                            <a class="business" href="{{ url('category/'. $article->category->slug)}}">{{ $article->category->name}}</a>
                                        </div>
                                        <span class="hero-slide-post-author">
                                            By
                                            <a href="#">{{ $article->author}}</a>
                                        </span>
                                        <span class="post-date">
                                            <a href="#">{{ $article->created_at->format('M d, Y') }}</a>
                                        </span>
                                        <span>10 min read</span>
                                    </div>
                                    <h1 class="hero-slide-post-title">
                                        <a href="{{ url('article/'. $article->slug)}}">{{ $article->title }}</a>
                                    </h1>

                                    <div class="hero-read-more-button">
                                        <a href="{{ url('article/'. $article->slug)}}">Read more
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="slider-six-slider-navigation">
                <div class="slider-six-button-next navigation-button">
                    <i class="icofont-long-arrow-left"></i>
                </div>
                <div class="slider-six-button-prev navigation-button">
                    <i class="icofont-long-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <div class="bg-gray-1">
        <div class="trending-topic-area section-space--ptb_80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="trending-topic-section-title">
                        <h3>Category</h3>
                        <div class="trending-topic-navigation mt-30">
                            <div class="trending-topic-button-prev navigation-button">
                                <i class="icofont-long-arrow-left"></i>
                            </div>
                            <div class="trending-topic-button-next navigation-button">
                                <i class="icofont-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="trending-topic-item-wrap">
                        <div class="swiper-container trending-topic-slider-active">
                            <div class="swiper-wrapper">
                                @foreach ($topiccategories as $category)
                                <div class="swiper-slide" data-aos="fade-up">
                                    <div class="single-trending-topic-item">
                                        <a class="categorycard" href="{{ route('category.show', $category->slug) }}">
                                            <img
                                                style="width: 217.25px; height: 217.25px; object-fit:cover;"
                                                loading="lazy"
                                                src="{{ $category->getImage() }}"
                                                alt="{{ $category->name }}">
                                            <h4 class="title">{{ $category->name }}</h4>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wordpress Area Start -->
    <div class="wordpress-area section-space--ptb_120">
        <div class="container">
          <div class="my-5">
            @foreach ($categories as $category)
              @if (!$category->blogs->where('status', 1)->isEmpty())
                <div class="section-title text-center mb-4 mt-4">
                  <h3 class="section-title-three">{{ $category->name }}</h3>
                </div>
      
                <div class="row row--30">
                  @foreach ($category->blogs->shuffle()->take(3) as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="single-most-populer-item">
                        <a href="{{ route('article.detail', $blog->slug) }}" class="most-populer-thum text-center">
                          <img loading="lazy" src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" width="300" height="200">
                        </a>
      
                        <div class="most-populer-content">
                          <div class="most-populer-post-author">By
                            <a href="#">{{ $blog->user->name }}</a>
                          </div>
                          <h4 class="title">
                            <a href="{{ route('article.detail', $blog->slug) }}">{{ Str::limit($blog->title, 50) }}</a>
                          </h4>
                          <div class="dec mt-2">{!! Str::limit($blog->description, 150) !!}</div>
                          <div class="most-populer-post-meta">
                            <span class="post-date">
                              <a href="#">{{ $blog->created_at->format('M d, Y') }}</a>
                            </span>
                            <span>10 min read</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
      
                <div class="text-center mt-4 mb-5">
                  <a href="{{ url('category/' . $category->slug) }}" class="btn-large btn-primary">
                    Show More <i class="icofont-long-arrow-right"></i>
                  </a>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      

    <!-- Wordpress Area End -->

    <!-- SEO Marketing Area Start -->
    <div class="trusted-partners-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="mb-20">Trusted Partners:</h6>
                    <div class="swiper-container trusted-partners-slider-active">
                        <div class="swiper-wrapper trusted-partners-slider-wrap">
                            <div class="swiper-slide">
                                <a href="#!"><img
                                    loading="lazy"
                                    src="{{ asset('frontend/assets/images/partners/01-partners.png')}}"
                                    alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img
                                    loading="lazy"
                                    src="{{ asset('frontend/assets/images/partners/02-partners.png')}}"
                                    alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img
                                    loading="lazy"
                                    src="{{ asset('frontend/assets/images/partners/03-partners.png')}}"
                                    alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img
                                    loading="lazy"
                                    src="{{ asset('frontend/assets/images/partners/04-partners.png')}}"
                                    alt=""/></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#!"><img
                                    loading="lazy"
                                    src="{{ asset('frontend/assets/images/partners/05-partners.png')}}"
                                    alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection