@extends('frontend.layouts.app') 
@section('breadcrumb')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contents')

<div class="site-wrapper-reveal">

    <!-- About Video Area Start -->
   <!-- About Video Area End -->
   <div class="team-area section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-aos="fade-up">
                    <h6 class="sub-title-primary mb-20">Meet Our Team Members</h6>
                    <h2 class="title">Leadership & Experienced Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($founders as $founder)
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="single-team-area">
                        <div class="team-thum">
                            <img src="{{ $founder->getProfile() }}" style="border-radius: 10px" alt="">
                        </div>
                        <div class="team-content">
                            <div class="team-share-top">
                                <a href="#" class="shate-action-button"><i class="icofont-close"></i></a>
                                
                                <ul class="team-social-share">
                                    @if(!empty($founder->instagram))
                                    <li><a target="_blank" href="{{'https://instagram.com/'. $founder->instagram}}"><i class="icofont-instagram"></i></a></li>
                                    @endif
                                    @if(!empty($founder->linkedin))
                                    <li><a target="_blank" href="{{'https://linkedin.com/in/'. $founder->linkedin }}"><i class="icofont-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="team-member-info">
                                <h6 class="name-title">{{ $founder->name }}</h6> 

                                <p class="desination">Founder</p> 
                            </div>
                        </div>
                    </div></div>
            @endforeach
        </div>
        
    </div>
</div>

    <!-- Bunzo History Area Start -->
    <div class="bunzo-history-area section-space--pt_60 mb-5">
        @if(!empty($desc))
        {!! $desc !!}
        @endif

        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bunzo-row">
                        <div class="bunzo-col-6" data-aos="fade-up">
                            
                            <h2 class="bunzo-history-title">You Can <span class="f-w-bold">Read</span> And <span class="f-w-bold">Write</span> With Bunzo.</h2>
                        </div>
                        <div class="bunzo-col-6">
                            <div class="single-history-item" data-aos="fade-up">
                                <h3 class="title mb-20">Mission & Vission</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text eve
                                    since the 1500 when an unknown printer took a galley type scrambled’s
                                    make a type specimen book. It has survived not only five centuries
                                    also the leap into electronic typesetting.
                                </p>
                            </div>
                            <div class="single-history-item" data-aos="fade-up">
                                <h3 class="title mb-20">Bunzo History</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text eve
                                    since the 1500 when an unknown printer took a galley type scrambled’s
                                    make a type specimen book. It has survived not only five centuries
                                    also the leap into electronic typesetting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Bunzo History Area End -->

    <!-- Team Aare Start -->
    
    <!-- Team Aare End -->


    <div class="bg-gray pb-5">
        <!-- Testimonial Area Start -->
        <div class="testimonial-area  section-space--pt_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h6 class="sub-title-primary mb-20">Some Testimonial</h6>
                            <h2 class="title">What People Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-area">
                    <div class="swiper-container testimonial-slider-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-testimonial-item-two" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-1.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>WEB DEVELOPER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item-two" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-2.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Rosario Ferraro</h4>
                                            <p>MARKETER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item-two" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-3.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>UI/UX DESIGNER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonial-item-two" data-aos="fade-up">
                                    <div class="testimonial-post-author">
                                        <div class="testimonial-author-image">
                                            <img src="assets/images/author/testimonial-1.png" alt="">
                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4>Bansten Smith</h4>
                                            <p>UI/UX DESIGNER</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-post-content">
                                        <h5 class="testimonial-post-title">Printer took a galley of type and scrambled to make book.</h5>
                                        <p>Lorem has been them indust standard
                                            unknown printer took galley text printing
                                            and typesetting industry been industry
                                            standard dummy ever.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slider-navigation-two">
                        <div class="testimonial-button-next navigation-button"><i class="icofont-long-arrow-left"></i></div>
                        <div class="testimonial-button-prev navigation-button"><i class="icofont-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

       
    </div>

</div>
@endsection