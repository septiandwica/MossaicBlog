<footer class="footer-area footer-one">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img width="161px" height="48px"
                                    src="{{ asset('frontend/assets/images/logo/logo-white.png')}}"
                                    alt=""
                                />
                            </a>
                        </div>
                        <p>
                            MossaicBlog: Elevate your voice, connect with the world, and cultivate your expertise.
                        </p>
                        <ul class="footer-socail-share">
                            <li>
                                <a href="#"
                                    ><i class="icofont-facebook"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="icofont-skype"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="icofont-twitter"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="icofont-linkedin"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    
                </div>
                <div class="col-lg-5">
                    <div class="footer-menu-widget">
                        <div class="single-footer-menu">
                            <div class="footer-widget-title">
                                <h4 class="title">Company</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li>
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="single-footer-menu">
                            <div class="footer-widget-title">
                                <h4 class="title">Quick Links</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li><a href="#!">Privacy Policy</a></li>
                                <li><a href="#!">Discussion</a></li>
                                <li>
                                    <a href="#!">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#!">Customer Support</a>
                                </li>
                                <li><a href="#!">Course FAQ’s</a></li>
                            </ul>
                        </div> --}}
                        <div class="single-footer-menu">
                            @php
                            $getCategoryHead = App\Models\Category:: getActiveCategory()->shuffle()->take(4);
                            @endphp
                            <div class="footer-widget-title">
                                <h4 class="title">Category</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                @foreach ($getCategoryHead as $categoryhead)
                                <li class="@if(request()->routeIs('category.show', $categoryhead->slug)) active @endif">
                                    <a href="{{ route('category.show', $categoryhead->slug) }}">
                                        <span>{{ $categoryhead->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-inner">
                        <div class="copy-right-text">
                            <p>
                                © {{ date('Y') }} <a href="{{route('home')}}">MossaicBlog</a>. Made with
                                ❤️ by
                                <a
                                    target="_blank"
                                    rel="noopener"
                                    href="https://tiancode.my.id"
                                    >TIAN WEB CODE</a
                                >
                            </p>
                        </div>
                        
                        <div class="button-right-box">
                            @if (Route::has('login'))
                            @auth
                            <a href="{{route('dashboard/blog/list')}}" class="btn-primary btn-large"
                                >Start Write
                                <i class="icofont-long-arrow-right"></i
                            ></a>
                            @else
                            <a href="{{route('login')}}" class="btn-primary btn-large"
                            >Expand Your Writing Skill
                            <i class="icofont-long-arrow-right"></i
                            ></a>
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>