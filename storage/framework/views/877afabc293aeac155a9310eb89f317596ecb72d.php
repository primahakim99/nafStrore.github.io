
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-3 text-center" style="text-transform: uppercase"><b> Product <?php echo e($product->name); ?> Detail </b></h1>
    <div class="mt-3 mb-5">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Name:</th>
                <td> <?php echo e($product->name); ?> </td>
            </tr>
            <tr>
                <th>Store:</th>
                <td> <?php echo e($product->store->storeName); ?> </td>
            </tr>
            <tr>
                <th>Category:</th>
                <td> <?php echo e($product->category->name); ?> </td>
            </tr>
            <tr>
                <th>Description:</th>
                <td> <?php echo e($product->description); ?> </td>
            </tr>
            <tr>
                <th>Stock:</th>
                <td> <?php echo e($product->stock); ?> </td>
            </tr>
            <tr>
                <th>Weight:</th>
                <td> <?php echo e($product->weight); ?> </td>
            </tr>
            <tr>
                <th>Price:</th>
                <td> <?php echo e($product->price); ?> </td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><img class="img-fluid img-responsive"
                src="<?php echo e(asset('storage/'.$product->image)); ?>" style="height: 300px;"></td>
            </tr>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/product/show.blade.php ENDPATH**/ ?>