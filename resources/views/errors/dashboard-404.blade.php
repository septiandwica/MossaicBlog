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
  
    <!-- Favicons -->
    <link href="{{ asset('admin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
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
  
  
</head>

<body>
    <div class="main-wrapper">
       
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
     
        <div class="error-box">
            <div class="error-body text-center min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1 class="error-title text-primary">404</h1>
                <h3 class="text-uppercase error-subtitle"><strong>PAGE NOT FOUND !</strong></h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="{{route('dashboard')}}" class="btn btn-primary btn-rounded waves-effect waves-light m-b-40">Back to home</a> 
            </div>
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
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

    <script src="{{ asset('admin/assets/js/main.js')}}"></script>
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>
</body>

</html>