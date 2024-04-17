@extends('frontend.layouts.app') 

@section('contents')

<div class="site-wrapper-reveal">
    <!-- Blog Details Wrapper Start -->
    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="row row--17">
                <div class="blog-details-col-8 article">
                    <!-- blog details Post Start -->
                    <div class="blog-details-post-wrap">
                        <div class="blog-details-thum text-center">
                            @if(!@empty($articledetail->getImage()))
                            <img class="rounded" src="{{ $articledetail->getImage()}}" alt="" loading="lazy">
                            @endif
                        </div>
                        <div class="blog-details-post-content">
                            <div class="blog-details-meta-box">
                                <div class="post-meta-left-side mb-2">
                                    <div class="trending-blog-post-category">
                                        <a class="business" href="#">{{ $articledetail ->category_name }}</a>
                                    </div>
                                    <div class="following-blog-post-author">
                                        By <a href="#">{{ $articledetail ->author }}</a>
                                    </div>
                                </div>

                                <div class="post-mid-side mb-2">
                                    <span class="post-meta-left-side">
                                        <span class="post-date">
                                            <i class="icofont-ui-calendar"></i> 
                                            <a href="#">{{ $articledetail->created_at->format('M d, Y') }}</a>
                                        </span>
                                    </span>
                                    <span>10 min read</span>
                                </div>

                            </div>
                            <h3 class="following-blog-post-title">
                                <a href="#">{{ $articledetail ->title }}
                                </a>
                            </h3>

                            <div class="post-details-text">
                                <span>
                                    {!! $articledetail ->description !!}

                                </span>

                                

                                <div class="blog-details-tag-and-share-area ">
                                    <div class="col">
                                        <hr>
                                        <h4>Tag</h4>
                                        <br>
                                        <div class="col">
                                            @if(!empty($articledetail->getTags->count()))
                                            <div class="post-tag">
                                                @php
                                                    function generateRandomButtonClass() {
                                                        $buttonClasses = [
                                                            'primary', 'bg-2', 'bg-3 ', 'bg-4 ', 'bg-5 ', 'bg-6'
                                                        ];
                                                        return $buttonClasses[rand(0, count($buttonClasses) - 1)];
                                                    }
                                                @endphp
                                                @foreach ($articledetail->getTags as $tag)
                                                <a id="keys" href="{{ route('article.tag', ['tag' => urlencode($tag->name)]) }}" class="btn-medium rounded-4 btn-{{ generateRandomButtonClass() }} mb-2">{{ $tag->name }}</a>
                                                @endforeach
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    
                                
                                   
                                </div>

                            </div>

                            <!-- Related Post Area Start -->
                            <div class="related-post-area section-space--pt_60">
                                <div class="row">
                                    <div class="col-lg-8 col-7">
                                        <div class="section-title mb-30">
                                            <h3 class="title">Related Post</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-5">
                                        <div class="related-post-slider-navigation text-end">
                                            <div class="related-post-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                                            <div class="related-post-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper -->
                                @if(!empty( $relatedpost->count() ))
                                <div class="swiper-container related-post-slider-active">
                                    <div class="swiper-wrapper">
                                        @foreach ($relatedpost as $repost)
                                        <div class="swiper-slide">
                                            <!-- Single Following Post Start -->
                                            <div class="single-related-post">
                                                <div class="related-post-thum">
                                                    <img src="{{ $repost->getImage()}}" alt="" loading="lazy">
                                                </div>
                                                <div class="following-post-content">
                                                    <div class="following-blog-post-top">
                                                        <div class="trending-blog-post-category">
                                                            <a class="business" href="#">{{ $repost->category_name}}</a>
                                                        </div>
                                                        <div class="following-blog-post-author">
                                                            By <a href="#">{{$repost->author}}</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="following-blog-post-title">
                                                        <a href="{{ route('article.detail', $repost->slug) }}">{{$repost->title}}
                                                        </a>
                                                    </h5>
                                                    <div class="following-blog-post-meta">
                                                        <div class="post-meta-left-side">
                                                            <span class="post-date">
                                                                <i class="icofont-ui-calendar"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Following Post End -->
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                @else
                                <div class="no-related-posts-message text-center">
                                    <p>No related posts found yet. Check back later, or browse other categories!</p>
                                </div>
                                @endif
                            </div>
                            
                            <!-- Related Post Area End -->

                            <!-- Comment Area Start -->
                            <div class="comment-area section-space--pt_60">
                                
                                    <div class="row">
                                        <div class="col-lg-12 m-auto">
                                            <div class="comment-list-wrapper">
                
                                                <h3 class="widget-title mb-3">Comments ({{$articledetail->getComment()->count() }}) </h3>
                                                <ol class="comment-list">
                                                    <li class="comment">
                                                        @foreach ($articledetail->getComment as $comment)
                                                        <div class="comment-2 my-2">
                                                            <div class="comment-author-info">
                                                                <div class="comment-author vcard" style="max-width: 70px">
                                                                    <img alt="" src="{{$comment->user->getProfile()}}">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="meta">
                                                                        <div class="comment-content-top">
                                                                            <div class="comment-actions">
                                                                                <h6 class="fn">{{$comment->user->name}}</h6>
                                                                                <span class="time">{{ date('M d Y', strtotime($comment->created_at)) }} at {{ date('h:i', strtotime($comment->created_at)) }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn comment-reply-link ReplyOpen"  id="{{ $comment->id}}"><i class="icofont-reply"></i> Reply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>{{ $comment->comment}}</p>
                                                            </div>
                                                            
                                                        </div>
                                                        @foreach ($comment->getReply as $reply)
                                                        <ol class="children">
                                                            <li class="comment ">
                                                                <div class="comment-reply-wrap">
                                                                    <div class="comment-author-info">
                                                                        <div class="comment-author vcard" style="max-width: 70px">
                                                                            <img alt="" src="{{$reply->user->getProfile()}}" >
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <div class="meta">
                                                                                <div class="comment-content-top">
                                                                                    <div class="comment-actions">
                                                                                        <h6 class="fn">{{$reply->user->name}}</h6>
                                                                                        <span class="time">{{ date('M d Y', strtotime($reply->created_at)) }} at {{ date('h:i', strtotime($reply->created_at)) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>{{ $reply->comment}}</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                        @endforeach
                                                      
                                                        
                                                        <div class="reply mb-5 mt-2 ShowReply{{$comment->id}}" style="display: none">
                                                            <div class="section-title ">
                                                                <h3 class="title">Reply a comment</h3>
                                                            </div>
                                                            <div class="row">
                                                                <form  class="comment-form-area" method="POST" action="{{ route('blog-comment-reply')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="blog_comment_id" value="{{$comment->id}}">
                                                                    <div class="col-lg-12">
                                                                        <label>Comment *</label>
                                                                        <div class="single-input">
                                                                            <textarea name="comment" id="comment" placeholder="Enter your reply comment here......" style="color: black" required ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="submit-button text-center">
                                                                            <button class="btn-large btn-primary" type="submit"> Submit Reply<i class="icofont-long-arrow-right"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach
                                                    </li>
                
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-title mb-10">
                                        <h3 class="title">Leave a comment</h3>
                                    </div>
                                    <div class="row">
                                        <form  class="comment-form-area" method="POST" action="{{ route('blog-comment')}}">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$articledetail->id}}">
                                            <div class="col-lg-12">
                                                <label>Comment *</label>
                                                <div class="single-input">
                                                    <textarea name="comment" id="comment" placeholder="Enter your comment here......" style="color: black" required ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="submit-button text-center">
                                                    <button class="btn-large btn-primary" type="submit"> Submit Now <i class="icofont-long-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                            </div>


                        </div>
                    </div>
                    <!-- blog details Post End -->
                </div>
                <div class="blog-details-col-4 information">
                    <div class="following-author-area">
                        <div class="author-image" style="max-width: 100px">
                            <img src="{{$articledetail->user->getProfile()}}" alt="" loading="lazy">
                        </div>
                        <div class="author-title">
                            <h4><a href="#">{{ $articledetail->author}}</a></h4>
                            <p>{{ $articledetail->user->role->name}}</p>
                        </div>
                        <div class="author-details">
                            <p>Lorem psum has been industry standard dumy text since the when and scrambled make specimen book has survived.</p>

                            <div class="author-post-share">
                                <ul class="social-share-area">
                                    @if(!empty($articledetail->user->instagram))
                                    <li><a target="_blank" href="{{'https://instagram.com/'. $articledetail->user->instagram}}"><i class="icofont-instagram"></i></a></li>
                                    @endif
                                    @if(!empty($articledetail->user->linkedin))
                                    <li><a target="_blank" href="{{'https://linkedin.com/in/'. $articledetail->user->linkedin }}"><i class="icofont-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>

                            <div class="button-box">
                                <a href="#" class="btn">View Profile <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <!-- Latest Post Area Start -->
                    <div class="latest-post-inner-wrap mt-5">
                        <div class="latest-post-header">
                            <div class="section-title">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="latest-post-slider-navigation">
                                <div class="latest-post-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                                <div class="latest-post-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper-container latest-post-slider-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="latest-post-box">
                                        @foreach ($recentpost as $rpost)
                                        <!-- Single Latest Post Start -->
                                        <div class="single-latest-post">
                                            <div class="latest-post-thum">
                                                <a href="#">
                                                    @if (!empty($rpost->getImage()))
                                                    <img src="{{ $rpost->getImage()}}" width="84px" height="84px" style="object-fit: cover" alt="" loading="lazy">
                                                        
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="latest-post-content">
                                                <h6 class="title"><a href="{{ route('article.detail', $rpost->slug) }}">{!! Str::limit($rpost->title, 25) !!}</a>
                                                </h6>
                                                <div class="latest-post-meta">
                                                    <span class="post-date">
                                                    <i class="icofont-ui-calendar"></i> 
                                                    <a href="#">{{ $articledetail->created_at->format('d - m - Y') }}</a>
                                                </span>
                                                    <span>10 min read</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Latest Post End -->
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     

                    </div>
                    <!-- Latest Post Area End -->
                   
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Details Wrapper End -->

    <!-- Trending Topic Area Start -->
   

</div>
@endsection
@section('scripts')
    <script>
       $('.ReplyOpen').click(function(){
        let id = $(this).attr('id');
        $('.ShowReply').hide(); // Hide all reply forms initially
        $(this).closest('.comment').find('.ShowReply'+id).show(); // Show the specific reply form
    });
    </script>
@endsection