<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>{{ !empty($meta_tit) ? $meta_tit : ''}}</title>
        @if(!empty($meta_desc))
        <meta name="description" content="{{ $meta_desc}}"/>
        @endif @if(!empty($meta_tit))
        <meta name="title" content="{{ $meta_tit}}"/>
        @endif @if(!empty($meta_keys))
        <meta name="keywords" content="{{ $meta_keys}}"/>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="theme-color" content="#6777ef"/>
        <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        <meta
            name="robots"
            content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
        <link rel="canonical" href="#"/>
        <meta property="og:locale" content="en_US"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Bunzo - Blog HTML Template"/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:image" content=""/>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('frontend/assets/images/logo/icon.png')}}"/>

        <!-- CSS ============================================ -->

        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin"/>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"/>
        @yield('styles')
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/css/vendor/vendor.min.css')}}"/>
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/css/plugins/plugins.min.css')}} "/>

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}"/>
    </head>

    <body>
        @include('frontend.layouts.header') 
        
        @yield('breadcrumb')

        <div id="main-wrapper">
            @yield('contents')
        </div>

        @include('frontend.layouts.footer') 
        
        @include('frontend.layouts.overlay')


        <script src="{{ asset('frontend/assets/js/vendor/vendor.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery/jquery.min.js')}}"></script>

        <script src="{{ asset('frontend/assets/js/plugins/plugins.min.js')}}"></script>

        <!-- Main JS -->
        @yield('scripts')

        <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
        <script src="{{ asset('/sw.js') }}"></script>
{{-- <script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script> --}}
    </body>
</html>