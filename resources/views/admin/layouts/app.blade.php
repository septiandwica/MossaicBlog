<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ !empty($meta_tit) ? $meta_tit : 'Dashboard'}}</title>
  @if(!empty($meta_desc))
  <meta name="description" content="{{ $meta_desc}}"/>
  @endif @if(!empty($meta_tit))
  <meta name="title" content="{{ $meta_tit}}"/>
  @endif @if(!empty($meta_keys))
  <meta name="keywords" content="{{ $meta_keys}}"/>
  @endif
  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef"/>
  <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/images/logo/icon.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/images/logo/icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet">
  @yield('styles')


</head>

<body>

    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <main id="main" class="main min-vh-100 ">
        @yield('contents')
    </main>

    @include('admin.layouts.footer')

    
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to log out of your account?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <a href="{{route('logout')}}" type="button" class="btn btn-primary">Yes, Log Out</a>
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
  
    <!-- Template Main JS File -->
    @yield('scripts')

    <script src="{{ asset('admin/assets/js/main.js')}}"></script>


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