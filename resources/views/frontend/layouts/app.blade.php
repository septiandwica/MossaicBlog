<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
        <meta
            name="description"
            content="Bunzo is one of the most popular blog template"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta
            name="robots"
            content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"
        />
        <link rel="canonical" href="#" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Bunzo - Blog HTML Template" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="icon" href="assets/images/favicon.png" />

        <!-- CSS
        ============================================ -->

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />


        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/vendor.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/plugins.min.css')}} " />

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}" />
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
        <script src="{{ asset('frontend/assets/js/plugins/plugins.min.js')}}"></script>

        <!-- Main JS -->
        <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
    </body>
</html>
