
<?php $__env->startSection('content'); ?>
<?php if(isset($errors)&& $errors != "[]"): ?>
<div style="background-color: rgb(233, 135, 135); text-align: center; font-size: 50px; padding: 50px">
    <?php echo e($errors); ?>

</div>
<?php else: ?>
<div class="wishlist-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Tracking No</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Evidence</th>
                                <th scope="col">Confirmation</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td scope="row"><?php echo e(date('d-m-Y'), strtotime($order->created_at)); ?></td>
                                <td scope="row"><?php echo e($order->tracking_no); ?></td>
                                <td scope="row"><?php echo e($order->grand_total); ?></td>
                                <?php if($order->status == 0): ?>
                                <td scope="row">Process</td>
                                <td scope="row"><img src="<?php echo e(asset('storage/'.$order->image_evidence)); ?>" style="width: 150px; height: 150px;"></td>
                                <?php elseif($order->status == 1): ?>
                                <td scope="row">Payment Verified</td>
                                <td scope="row">
                                <?php $__currentLoopData = $evidence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('storage/'.$ev->img_evidence)); ?>" style="width: 150px; height: 150px;">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <?php elseif($order->status == 2): ?>
                                <td scope="row">Shipping</td>
                                <?php elseif($order->status == 3): ?>
                                <td scope="row">Completed</td>
                                <?php else: ?>
                                <td scope="row">Order Reject</td>
                                <?php endif; ?>
                                <td>
                                    <?php if($order->status == 0): ?>
                                    <form action=" <?php echo e(url('/update-order/'.$order->id.'/1')); ?> " method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <button type="submit" class="btn btn-primary">Payment Verified</button>
                                    </form>
                                    <?php endif; ?>
                                    <?php if($order->status == 1): ?>
                                    <form action=" <?php echo e(url('/update-order/'.$order->id.'/1')); ?> " method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <button type="submit" class="btn btn-primary">Shipping verified</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/admin/transaction.blade.php ENDPATH**/ ?>