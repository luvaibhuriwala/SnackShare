<?php $__env->startSection('fullName', auth()->user()->username); ?>
<?php $__env->startSection('institute', auth()->user()->institute); ?>
<?php $__env->startSection('title', 'Contact Details'); ?>

<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Contact Details</h4><br>
                    <p>Thank you for requesting the food. Please contact the contributor using the details below:</p>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                        <tr>
                            <th>Name</th>
                            <td><?php echo e($giver->username); ?></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><?php echo e($giver->phone); ?></td>
                        </tr>
                        <tr>
                            <th>Institute</th>
                            <td><?php echo e($giver->institute); ?></td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/requests/show.blade.php ENDPATH**/ ?>