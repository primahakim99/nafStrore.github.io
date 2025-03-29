
<?php $__env->startSection('content'); ?>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h1>Store Data</h1>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="<?php echo e(url('storeData/create')); ?>"> Input Store Data</a>
            </div>

        </div>
    </div>

    <table class="table-bordered table">
        <tr>
            <th>Owner Name</th>
            <th>Store Name</th>
            <th>Address</th>

            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->storeName); ?></td>
            <td><?php echo e($value->address); ?></td>
            <td style="width: 30%;">
                <form action="<?php echo e(route('storeData.destroy',$value->id)); ?>" method="POST">            
                <?php echo csrf_field(); ?>
                <?php echo method_field("DELETE"); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.indexAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/admin/store/index.blade.php ENDPATH**/ ?>