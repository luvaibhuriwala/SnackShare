<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="<?php echo e(asset('css/core/libs.min.css')); ?>" />

      <!-- Aos Animation Css -->
       <link rel="stylesheet" href="<?php echo e(asset('vendor/aos/dist/aos.css')); ?>" />

      <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/hope-ui.min.css')); ?>" />

      <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.min.css')); ?>" />

      <!-- Dark Css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/dark.min.css')); ?>"/>

      <!-- Customizer Css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/customizer.min.css')); ?>" />

      <!-- RTL Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/rtl.min.css')); ?>"/>


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
                                <img src="<?php echo e(asset('images/snackshare.png')); ?>" alt="logo" style="width: 100px; height: auto">
                              <h1 class="logo-title ms-3" style="color:#3a57e8">Snack Share</h1>
                           </a>
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <form action="<?php echo e(route('login')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
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
                                 Don't have an account? <a href="<?php echo e(route('register.show')); ?>" class="text-underline">Click here to sign up.</a>
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
               <img src="<?php echo e(asset('images/food-sharing2.jpg')); ?>" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>

    <!-- Library Bundle Script -->
    <script src="<?php echo e(asset('js/core/libs.min.js')); ?>"></script>

    <!-- External Library Bundle Script -->
    <script src="<?php echo e(asset('js/core/external.min.js')); ?>"></script>

    <!-- Widgetchart Script -->
    <script src="<?php echo e(asset('js/charts/widgetcharts.js')); ?>"></script>

    <!-- mapchart Script -->
    <script src="<?php echo e(asset('js/charts/vector-map-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/charts/dashboard.js')); ?>"></script>

    <!-- fslightbox Script -->
    <script src="<?php echo e(asset('js/plugins/fslightbox.js')); ?>"></script>

    <!-- Settings Script -->
    <script src="<?php echo e(asset('js/plugins/setting.js')); ?>"></script>

    <!-- Slider-tab Script -->
    <script src="<?php echo e(asset('js/plugins/slider-tabs.js')); ?>"></script>

    <!-- Form Wizard Script -->
    <script src="<?php echo e(asset('js/plugins/form-wizard.js')); ?>"></script>

    <!-- AOS Animation Plugin-->
    <script src="<?php echo e(asset('vendor/aos/dist/aos.js')); ?>"></script>

    <!-- App Script -->
    <script src="<?php echo e(asset('js/core/app.js')); ?>"></script>

  </body>
</html>
<?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/login.blade.php ENDPATH**/ ?>