
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-3 text-center" style="text-transform: uppercase"><b> Store Detail </b></h1>
    <div class="mt-3 mb-5">
        <table class="table table-striped table-bordered">
            <?php $__currentLoopData = $store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $str): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Store Name:</th>
                <td> <?php echo e($str->storeName); ?> </td>
            </tr>
            <tr>
                <th>Owner Name:</th>
                <td> <?php echo e(auth()->user()->name); ?> </td>
            </tr>
            <tr>
                <th>Address:</th>
                <td> <?php echo e($str->address); ?> </td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td> <?php echo e(auth()->user()->phone); ?> </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td> <?php echo e(auth()->user()->email); ?> </td>
            </tr>
            <tr>
                <th>Description:</th>
                <td> <?php echo e($str->description); ?> </td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><img class="img-fluid img-responsive"
                src="<?php echo e(asset('storage/'.$str->img)); ?>" style="height: 300px;"></td>
            </tr>
        </table>
        
        <div class="col-md-12 text-right">
            <a href="/storeOwner/<?php echo e($str->id); ?>/edit" class="btn btn-warning mb-3 text-right">Edit Data</a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/store/index.blade.php ENDPATH**/ ?>