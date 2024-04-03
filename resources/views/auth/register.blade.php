<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Admin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('Admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('Admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  
  <!-- Template Main CSS File -->
  <link href="{{ asset('Admin/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('admin/assets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">BlogAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        @if (App\Models\User::count() === 0)
                            <h5 class="card-title text-center pb-0 fs-4">Admin Registration</h5>
                            <p class="text-center small">Enter your personal details to create admin account</p>
                        @else
                            <h5 class="card-title text-center pb-0 fs-4">Create Account</h5>
                            <p class="text-center small">Enter your personal details to create your account</p>
                        @endif
                    </div>
                    

                  <form action="{{ route('register.save')}}" method="POST" class="row g-3 needs-validation" >
                    {{ csrf_field() }}
                    <div class="col-12">
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" name="name" value="{{ old('name')}}" class="form-control" id="name" required>
                      @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" value="{{ old('email')}}" class="form-control " id="email" required>
                      @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" value="{{ old('username')}}" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control " id="username" required>
                      </div>
                      @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                      
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#"> terms and conditions </a></label>
                      @error('terms')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror

                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ route('login')}}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                
                Designed by <a href="#">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Admin/assets/js/main.js')}}"></script>

</body>

</html>