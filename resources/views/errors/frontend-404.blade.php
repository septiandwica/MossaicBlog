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
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Page Not Found</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contents')


<div id="main-wrapper">
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="error-404-area">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="error-404-content text-center">
                                <div class="banner" data-aos="fade-up">
                                    <img src="{{ asset('frontend/assets/images/errors/error-404.webp')}}" alt="">
                                </div>
                                <div class="error-text" data-aos="fade-up">
                                    <h5>This Page is Not Found.</h5>
                                    <h2>We are sorry for this error.
                                        Can’t find this page.</h2>

                                    <div class="button-box mt-30" data-aos="fade-up">
                                        <a href="{{ route('index')}}" class="btn-large btn-primary"><i class="icofont-long-arrow-left mr-2"></i> Back To Home </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="error-area-shap">
                    <img src="{{ asset('frontend/assets/images/errors/error-shap.webp')}}" alt="">
                </div>
            </div>

        </div>
    </div>

</div>
@endsection