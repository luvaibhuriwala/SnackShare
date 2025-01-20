
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $__env->yieldContent('title'); ?></title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="<?php echo e(asset('css/core/libs.min.css')); ?>" />

      <!-- Aos Animation Css -->
       <link rel="stylesheet" href="<?php echo e(asset('vendor/aos/dist/aos.css')); ?>" />

      <!-- Hope Ui Design System Css -->
       <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/hope-ui.min.css')); ?>" />

      <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.min.css')); ?>" />

      <!-- Dark Css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/dark.min.css')); ?>"/>

      <!-- Customizer Css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/customizer.min.css')); ?>" />

      <!-- RTL Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/rtl.min.css')); ?>"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  </head>
  <body class="  ">

    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="<?php echo e(route('index')); ?>" class="navbar-brand">
                <!--Logo start-->
                <!--logo End-->

                <!--Logo start-->
                <div class="logo-main">
                    <img src="<?php echo e(asset('images/snackshare.png')); ?>" alt="logo" style="width: 50px; height: auto">
                </div>
                <!--logo End-->
                <h5 class="logo-title">Snack Share</h5>
            </a>

        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('items.create')); ?>">
                            <span class="item-name">Share</span>
                        </a>
                    </li><br>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('requests.index')); ?>">
                            <span class="item-name">Request</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class="sidebar-footer" style="padding: 10px; position: absolute; bottom: 0; width: 100%; align-items:center">
        <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline; align-items:center">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        <p>©<script>document.write(new Date().getFullYear())</script>&nbsp;Snack Share by <br><a href="https://luvaibhuriwala-5b0e2.web.app/" target="_blank">Luvai Bhuriwala</a></p>
        </div>
    </aside>
    <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown">
                  <div class="py-0 nav-link d-flex align-items-center">
                    <img src="../images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">

                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title"><?php echo $__env->yieldContent('fullName'); ?></h6>
                        <p class="mb-0 caption-sub-title"><?php echo $__env->yieldContent('institute'); ?></p>
                    </div>
                </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px; background-image: url(<?php echo e(asset('images/dashboard/top-header.png')); ?>); background-size: cover; background-position: center;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Snack Share: Spreading Joy, One Bite at a Time!</h1>
                                  <p>SnackShare brings students together through the simple joy of sharing food. Whether you have
                                    extra snacks to give or need a little something to brighten your day, SnackShare creates a
                                    community of care and connection. Together, we make every meal a chance to share kindness and
                                    build friendships.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
      <?php echo $__env->yieldContent('content'); ?>
      </div>
    </main>
    <!-- Wrapper End-->

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
<?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/layout.blade.php ENDPATH**/ ?>