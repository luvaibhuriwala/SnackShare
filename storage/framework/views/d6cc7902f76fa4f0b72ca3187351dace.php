<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('fullName', auth()->user()->username); ?>
<?php $__env->startSection('institute', auth()->user()->institute); ?>
<?php $__env->startSection('content'); ?>

<section id="about" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?php echo e(asset('images/food-sharing.png')); ?>" class="card-img" alt="Sharing Food">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5>Hi, <?php echo e(auth()->user()->username); ?></h5><br>
                                <h2 class="card-title text-primary">Welcome to Snack Share</h2>
                                <p class="card-text text-justify">
                                    Snack Share is an initiative to bring together the spirit of sharing and community within your institute.
                                    Whether you have extra food you'd like to give away or you're in need of a meal, Snack Share bridges the
                                    gap between givers and requesters with ease.
                                </p>
                                <p class="card-text text-secondary text-justify">
                                    By using our platform, you can contribute to reducing food waste while fostering a culture of generosity
                                    and kindness. Join us in building a better, more connected community where no meal goes to waste, and
                                    everyone is cared for.
                                </p>
                                <a class="btn btn-outline-primary btn-lg" href="<?php echo e(route('items.create')); ?>">
                                    <span class="item-name">Share</span>
                                </a>
                                <br>
                                <a class="btn btn-outline-primary btn-lg" href="<?php echo e(route('requests.index')); ?>">
                                    <span class="item-name">Request</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/index.blade.php ENDPATH**/ ?>