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

    <div class="about-history-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-platform-box" data-aos="fade-up">
                        <div class="platform-icon">
                            <img src="{{ asset('frontend/assets/images/icons/open-platform.png')}}" alt="">
                        </div>
                        <div class="platform-content">
                            <h3 class="title">Open Platform</h3>
                            <p>Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry has been
                                the industry's standard dummy text ever
                                since the 1500s when an unknown printer
                                took galley type and scrambled.
                            </p>
                            <p>Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry has been
                                the industry's standard.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-platform-box platform-d-flex">
                        <div class="platform-content-box" data-aos="fade-up">
                            <div class="platform-icon">
                                <img src="{{ asset('frontend/assets/images/icons/digital-publishing.png')}}" alt="">
                            </div>
                            <div class="platform-content">
                                <h3 class="title">Digital Publishing</h3>
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry has been
                                    the industry's standard dummy text ever
                                    since the 1500s when an unknown printer
                                    took galley type and scrambled.
                                </p>
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry has been
                                    the industry's standard.
                                </p>
                            </div>
                        </div>
                        <div class="plateform-image-box" data-aos="fade-up">
                            <div class="plateforem-image">
                                <img src="{{ asset('frontend/assets/images/banners/about-ex-share.jpg')}}" alt="">
                                <div class="platform-box-button">
                                    <a href="contact-us.html" class="btn-primary btn-large">Share your thinking <i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bunzo History Area Start -->
    <div class="bunzo-history-area section-space--pt_60">
        <div class="container">
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
        </div>
    </div>
    <!-- Bunzo History Area End -->

    <!-- Team Aare Start -->
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
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Team Area Start -->
                    <div class="single-team-area" data-aos="fade-up">
                        <div class="team-thum">
                            <img src="{{ asset('frontend/assets/images/team/team-1.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <div class="team-share-top">
                                <a href="#" class="shate-action-button"><i class="icofont-close"></i></a>
                                <ul class="team-social-share">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-member-info">
                                <h6 class="name-title">Luella Bernstein</h6>
                                <p class="desination">Founder</p>
                            </div>
                        </div>
                    </div><!-- Single Team Area End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <!-- Single Team Area Start -->
                    <div class="single-team-area">
                        <div class="team-thum">
                            <img src="{{ asset('frontend/assets/images/team/team-2.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <div class="team-share-top">
                                <a href="#" class="shate-action-button"><i class="icofont-close"></i></a>
                                <ul class="team-social-share">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-member-info">
                                <h6 class="name-title">Luella Bernstein</h6>
                                <p class="desination">Founder</p>
                            </div>
                        </div>
                    </div><!-- Single Team Area End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <!-- Single Team Area Start -->
                    <div class="single-team-area">
                        <div class="team-thum">
                            <img src="{{ asset('frontend/assets/images/team/team-3.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <div class="team-share-top">
                                <a href="#" class="shate-action-button"><i class="icofont-close"></i></a>
                                <ul class="team-social-share">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-member-info">
                                <h6 class="name-title">Luella Bernstein</h6>
                                <p class="desination">Founder</p>
                            </div>
                        </div>
                    </div><!-- Single Team Area End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <!-- Single Team Area Start -->
                    <div class="single-team-area">
                        <div class="team-thum">
                            <img src="{{ asset('frontend/assets/images/team/team-4.jpg')}}" alt="">
                        </div>
                        <div class="team-content">
                            <div class="team-share-top">
                                <a href="#" class="shate-action-button"><i class="icofont-close"></i></a>
                                <ul class="team-social-share">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-member-info">
                                <h6 class="name-title">Luella Bernstein</h6>
                                <p class="desination">Founder</p>
                            </div>
                        </div>
                    </div><!-- Single Team Area End -->
                </div>
                

            </div>
        </div>
    </div>
    <!-- Team Aare End -->


    <div class="bg-gray">
        <!-- Testimonial Area Start -->
        <div class="testimonial-area section-space--pt_100">
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

        <!-- Trending Topic Area Start -->
        <div class="trending-topic-area section-space--pb_80">
            <div class="container">
                <!-- Newsletter Subscribe Area Start -->
                <div class="newsletter-subscribe-inner section-space--mt_80">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="section-title mb-4">
                                <h3>Subscribe For Newsletter</h3>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="newsletter-input-box">
                                <input class="newsletter-input" type="text" placeholder="Enter your email">
                                <div class="button-box">
                                    <a href="#" class="btn-primary btn-large">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter-inner-image">
                        <img class="newsletter-image-01" src="assets/images/shap/1-newsletter.png" alt="">
                        <img class="newsletter-image-02" src="assets/images/shap/2-newsletter.png" alt="">
                    </div>
                </div>
                <!-- Newsletter Subscribe Area End -->

            </div>
        </div>
        <!-- Trending Topic Area End -->
    </div>

</div>
@endsection