
<?php $__env->startSection('content'); ?>
<div class="mx-5 my-5 mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Order Date</th>
                <th scope="col">Tracking No</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
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
                    <?php elseif($order->status == 1): ?>
                    <td scope="row">Payment Verified</td>
                    <?php elseif($order->status == 2): ?>
                    <td scope="row">Shipping</td>
                    <?php elseif($order->status == 3): ?>
                    <td scope="row">Completed</td>
                    <?php else: ?>
                    <td scope="row">Order Reject</td>
                    <?php endif; ?>
                <td>
                    
                    <a href="/orderOwner/<?php echo e($order->id); ?>" class="btn bg-info">Show</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/order/index.blade.php ENDPATH**/ ?>