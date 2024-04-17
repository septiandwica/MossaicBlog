<header class="header">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 col-sm-9 col-md-6" 
                >
                    <div class="header-top-contact-info justify-content-md-start justify-content-center ">
                    <div class="header-top-single-contact-item justify-content-start ">
                        <div
                            class="header-top-contact-text text-size-small"
                        >
                            <a class="" href="tel:62859106959787"
                                ><i class="icofont-phone"></i>  (+62) 8591-0695-9787</a
                            >
                        </div>
                    </div>

                    <div class="header-top-single-contact-item">
                        
                        <div class="header-top-contact-text">
                            <a href="mailto:mossaicblog@tiancode.my.id"
                                ><i class="icofont-envelope"></i> mossaicblog@tiancode.my.id</a
                            >
                        </div>
                    </div>
                    </div>
                </div>
               
                <div class="col-12 col-sm-3 col-md-6">
                    <div class="header-top-right-side">
                      <p id="country">Fetching location...</p>
                      <div class="wayder">
                        <span class="wayder-icon">
                          <img src="{{ asset('frontend/assets/images/icons/wayder.png')}}" alt="" />
                        </span>
                        <span id="temperature">Fetching weather...</span>
                      </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="header-mid-area">
        <div class="container">
            <div class="row align-items-center justify-content-center ">
                <div class="col-12 text-center ">
                    <div class="logo">
                        <a href="index.html">
                            <img width="161px" height="48px"
                                src="{{ asset('frontend/assets/images/logo/logo.png')}}"
                                alt=""
                            />
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-9">
                    <ul class="social-share-area mt-15 mb-15">
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
                <div class="col-lg-8 col-3">
                    @php
                        $getCategoryHead = App\Models\Category::getCategoryFront();
                    @endphp
                    
                    <div class="main-menu-area text-end">
                        <nav class="navigation-menu">
                            <ul>
                                <li >
                                    <a href="{{ route('home')}}"
                                        ><span>Home</span></a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('about')}}"
                                        ><span>About</span></a
                                    >
                                </li>
                                <li class="has-children @if(request()->routeIs('category')) active @endif">
                                    <a href="{{route('category')}}">
                                        <span>Category</span>
                                    </a>
                                    <ul class="submenu">
                                        @foreach ($getCategoryHead as $categoryhead)
                                            <li class="@if(request()->routeIs('category.show', $categoryhead->slug)) active @endif">
                                                <a href="{{ route('category.show', $categoryhead->slug) }}">
                                                    <span>{{ $categoryhead->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                 
                                
                                @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ route('dashboard')}}">
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a id="logout"  href="{{ route('logout')}}">
                        <span>Logout</span></a>
                    </li>
                    @else

                    <li>
                        <a href="{{ route('login')}}">
                        <span>Log In</span></a>
                    </li>
                    <li>
                        <a href="{{ route('register')}}">
                        <span>Register</span></a>
                    </li>
                    @endauth
                    @endif
                            </ul>
                            
                        </nav>
                    </div>
                    <!-- mobile menu -->
                    <div class="mobile-menu-right">
                        <div
                            class="mobile-navigation-icon d-block d-lg-none"
                            id="mobile-menu-trigger"
                        >
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img
                                    src="{{ asset('frontend/assets/images/logo/logo.png')}}"
                                    class="img-fluid"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span
                                class="mobile-navigation-close-icon"
                                id="mobile-menu-close-trigger"
                            ></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li >
                                    <a href="{{ route('home')}}"
                                        ><span>Home</span></a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('about')}}"
                                        ><span>About</span></a
                                    >
                                </li>
                                <li class="has-children @if(request()->routeIs('category')) active @endif">
                                    <a href="{{route('category')}}">
                                        <span>Category</span>
                                    </a>
                                    <ul class="sub-menu">
                                        @foreach ($getCategoryHead as $categoryhead)
                                            <li class="@if(request()->routeIs('category.show', $categoryhead->slug)) active @endif">
                                                <a href="{{ route('category.show', $categoryhead->slug) }}">
                                                    <span>{{ $categoryhead->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ route('dashboard')}}">
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a id="logout" href="{{ route('logout')}}">
                        <span>Logout</span></a>
                    </li>
                    @else

                    <li>
                        <a href="{{ route('login')}}">
                        <span>Log In</span></a>
                    </li>
                    <li>
                        <a href="{{ route('register')}}">
                        <span>Register</span></a>
                    </li>
                    @endauth
                    @endif
                    
                </ul>
            </nav>
        </div>
    </div>
</div>


  <script>
   if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition((position) => {
       const latitude = position.coords.latitude;
       const longitude = position.coords.longitude;

       fetch(`/fetch-weather?latitude=${latitude}&longitude=${longitude}`)
         .then(response => response.json())
         .then(data => {
           document.getElementById('country').textContent = data.country;
           document.getElementById('temperature').textContent = data.temperature;
         })
         .catch(error => {
           console.error('Error:', error);
           document.getElementById('country').textContent = 'Location unavailable';
           document.getElementById('temperature').textContent = 'Weather unavailable';
         });
     });
   } else {
     console.error('Geolocation is not supported by this browser.');
     document.getElementById('country').textContent = 'Location unavailable';
     document.getElementById('temperature').textContent = 'Weather unavailable';
   }
  </script>
