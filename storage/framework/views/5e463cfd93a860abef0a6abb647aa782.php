<?php $__env->startSection('fullName', auth()->user()->username); ?>
<?php $__env->startSection('institute', auth()->user()->institute); ?>
<?php $__env->startSection('title', 'Share Food'); ?>

<?php $__env->startSection('content'); ?>
<br><br>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Share Food</h4>
        </div>
    </div>
    <div class="card-body">
        <p>Fill in the details below to share food with others in your institute.</p>
        <form method="POST" action="<?php echo e(route('items.store')); ?>" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="menu">Menu:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Enter the menu" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="quantity">Quantity (No. of people):</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="expires_at">Expiry Date and Time:</label>
                <div class="col-sm-9">
                    <input type="datetime-local" class="form-control" id="expires_at" name="expires_at" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Share</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/items/create.blade.php ENDPATH**/ ?>