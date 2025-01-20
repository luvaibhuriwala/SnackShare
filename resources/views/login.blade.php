<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('css/core/libs.min.css') }}" />

      <!-- Aos Animation Css -->
       <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css') }}" />

      <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="{{ asset('css/hope-ui.min.css') }}" />

      <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}" />

      <!-- Dark Css -->
      <link rel="stylesheet" href="{{ asset('css/dark.min.css') }}"/>

      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('css/customizer.min.css') }}" />

      <!-- RTL Css -->
        <link rel="stylesheet" href="{{ asset('css/rtl.min.css') }}"/>


  </head>
  <body class=" ">
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                                <img src="{{ asset('images/snackshare.png') }}" alt="logo" style="width: 100px; height: auto">
                              <h1 class="logo-title ms-3" style="color:#3a57e8">Snack Share</h1>
                           </a>
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <form action="{{ route('login') }}" method="POST">
                           @csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>

                              <p class="mt-3 text-center">
                                 Don't have an account? <a href="{{ route('register.show') }}" class="text-underline">Click here to sign up.</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sign-bg">

               </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{ asset('images/food-sharing2.jpg') }}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('js/charts/widgetcharts.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('js/charts/vector-map-custom.js') }}"></script>
    <script src="{{ asset('js/charts/dashboard.js') }}"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('js/plugins/fslightbox.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('js/plugins/setting.js') }}"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('js/plugins/slider-tabs.js') }}"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animation Plugin-->
    <script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>

    <!-- App Script -->
    <script src="{{ asset('js/core/app.js') }}"></script>

  </body>
</html>
