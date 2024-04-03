<header class="header">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 col-sm-9"
                >
                    <div class="header-top-contact-info justify-content-md-start justify-content-center ">
                    <div class="header-top-single-contact-item justify-content-start ">
                        <div class="header-top-contact-icon">
                            <img
                                src="assets/images/icons/contact-call.png"
                                alt=""
                            />
                        </div>
                        <div
                            class="header-top-contact-text text-size-small"
                        >
                            <a href="tel:62859106959787"
                                >(+62) 8591-0695-9787</a
                            >
                        </div>
                    </div>

                    <div class="header-top-single-contact-item">
                        <div class="header-top-contact-icon">
                            <img
                                src="assets/images/icons/contact-emaill.png"
                                alt=""
                            />
                        </div>
                        <div class="header-top-contact-text">
                            <a href="mailto:address@gmail.com"
                                >mossaicblog@tianwebcode.my.id</a
                            >
                        </div>
                    </div>
                    </div>
                </div>
               
                <div class="col-12 col-sm-3">
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
                            <img
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
                                <li class="has-children">
                                    <a href="#"
                                        ><span>Category</span></a
                                    >
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('category')}}"
                                                ><span
                                                    >Tech</span
                                                ></a
                                            >
                                        </li>
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
                        <a href="index.html">Home</a>
                       
                    </li>
                    <li>
                        <a href="about-us.html"><span>About</span></a>
                    </li>
                    <li class="has-children">
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="category.html"
                                    ><span>Category List</span></a
                                >
                            </li>
                            <li>
                                <a href="category-grid.html"
                                    ><span>Category Grid</span></a
                                >
                            </li>
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
  // Get user's location using Geolocation API
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;

      // Replace with your weatherapi.com API key
      const apiKey = '1ac036f0766c4928bba174434243003'; // Replace with your actual key
      const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${latitude},${longitude}`;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          const country = data.location.country;
          const temperature = Math.round(data.current.temp_c); // Get temperature in Celsius
          document.getElementById('country').textContent =  country;
          document.getElementById('temperature').textContent = temperature + '° C';
        })
        .catch(error => {
          console.error('Error fetching weather data:', error);
          document.getElementById('temperature').textContent = 'Weather unavailable';
        });
    }, (error) => {
      console.error('Geolocation error:', error);
      document.getElementById('country').textContent = 'Location unavailable';
      document.getElementById('temperature').textContent = 'Weather unavailable';
    });
  } else {
    console.error('Geolocation is not supported by this browser.');
    document.getElementById('country').textContent = 'Location unavailable';
    document.getElementById('temperature').textContent = 'Weather unavailable';
  }
  </script>
