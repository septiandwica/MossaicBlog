@extends('frontend.layouts.app') 
@section('contents')

<div class="site-wrapper-reveal">
    <!-- Blog Details Wrapper Start -->
    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            @if ($articles->isNotEmpty())
            <div class="row row--17">
                @foreach ($articles as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Single Following Post Start -->
                    <div class="single-following-post" data-aos="fade-up">
                        <a href="{{ route('article.detail', $item->slug) }}" class="following-post-thum">
                            <img src="{{$item->getImage()}}" alt="">
                        <div class="following-post-content">
                            <div class="following-blog-post-top">
                                <div class="trending-blog-post-category">
                                    <a href="#" class="business">{{ $item->category_name}}</a>
                                </div>
                                <div class="following-blog-post-author">
                                    By <a href="#">{{ $item->author}}</a>
                                </div>
                            </div>
                            <h5 class="following-blog-post-title">
                                <a href="{{ route('article.detail', $item->slug) }}">{{ $item->title}}
                                </a>
                            </h5>
                            <div class="dec mt-2">
                                {!! Str::limit(strip_tags($item->description), 50) !!}
                            </div>
                            <div class="following-blog-post-meta">
                                <div class="post-meta-left-side">
                                    <span class="post-date">
                                    <i class="icofont-ui-calendar"></i> 
                                    <a href="#">03 April, 2023</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                                <div class="post-meta-right-side">
                                    <a href="#"><img src="assets/images/icons/small-bookmark.png" alt="" /></a>
                                    <a href="#"><img src="assets/images/icons/heart.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </a>

                    </div><!-- Single Following Post End -->
                </div>
                @endforeach
               
                
            </div>
            <div class="col-12 mt-3">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        {!! $articles->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
                </div>
            </div>
            @else
                <div class="col-12">
                    <h4 class="text-center"> No articles found. </h4>
                </div>
            @endif
           
            
        </div>
    </div> <!-- Blog Details Wrapper End -->


    <!-- Trending Topic Area Start -->
    <!-- Trending Topic Area End -->
</div>

@endsection