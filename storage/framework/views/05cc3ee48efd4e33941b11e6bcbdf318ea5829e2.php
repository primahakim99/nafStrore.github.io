
<?php $__env->startSection('content'); ?>
<div class="px-5">
    <h1 class="mt-3 text-center" style="text-transform: uppercase"><b> Order Detail </b></h1>
    <div class="col-md-8">
        <div class="mt-3 mb-5">
            <table class="table table-borderless">
                <?php $__currentLoopData = $pesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th>Name:</th>
                    <td> <?php echo e($order->name); ?> </td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td> <?php echo e($order->phone); ?> </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo e($order->email); ?></td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td><?php echo e($order->country); ?></td>
                </tr>
                <tr>
                    <th>Province:</th>
                    <td><?php echo e($order->province); ?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>
                        <?php echo e($order->address); ?>,
                        <?php echo e($order->postal_code); ?>

                    </td>
                </tr>
                <tr>
                    <th>Image Evidence:</th>
                    <td><img class="img-fluid img-responsive" src="<?php echo e(asset('storage/'.$order->image_evidence)); ?>"
                            style="height: 300px;"></td>
                </tr>
               <?php if($order->status == 1): ?>
                <tr>
                    <form action="<?php echo e(url('evidence_shipping')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <th>Upload Shipping Evidence:</th>
                        <td>
                            <input type="hidden" name="order_id" value="<?php echo e($order['id']); ?>">
                            <input class="form-control" type="file" id="image" name="image" required>
                            <button type="submit" class="btn btn-primary addToCart">Submit</button>
                        </td>
                    </form>
                </tr>
               <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mt-3 mb-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td scope="row"><?php echo e($order->name); ?></td>
                        <td scope="row"><?php echo e($order->qty); ?></td>
                        <td scope="row"><?php echo e($order->price); ?></td>
                        <td><img class="img-fluid img-responsive" src="<?php echo e(asset('storage/'.$order->image)); ?>"
                            style="height: 100px; width:100px;"></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/order/show.blade.php ENDPATH**/ ?>