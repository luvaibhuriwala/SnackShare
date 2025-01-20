<?php $__env->startSection('fullName', auth()->user()->username); ?>
<?php $__env->startSection('institute', auth()->user()->institute); ?>
<?php $__env->startSection('title', 'Available Food'); ?>

<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Available Food</h4>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive mt-4">
                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                            <tr>
                                <th>Food Item</th>
                                <th>Expiry</th>
                                <th>Quantity</th>
                                <th>Request</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6><?php echo e($item->menu); ?> (<?php echo e($item->quantity); ?> servings available)</h6>
                                        </div>
                                    </td>
                                    <td><?php echo e(\Carbon\Carbon::parse($item->expires_at)->addHours(5)->format('F j, Y h:i A')); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(route('requests.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
                                            <input type="number" name="quantity" class="form-control"
                                                   id="quantity_<?php echo e($item->id); ?>" max="<?php echo e($item->quantity); ?>"
                                                   required placeholder="Enter quantity">
                                    </td>
                                    <td>
                                            <button type="submit" class="btn btn-primary">Request</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\luvai\Desktop\Uni Stuff\5th Semester\CSC2126 Software Construction and Development\Final Project\SnackShare_2212290\resources\views/requests/index.blade.php ENDPATH**/ ?>