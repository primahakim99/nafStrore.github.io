
<?php $__env->startSection('content'); ?>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h1>Customer Data</h1>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="<?php echo e(url('customerData/create')); ?>"> Input Customer Data</a>
            </div>

        </div>
    </div>

    <table class="table-bordered table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Postal Code</th>

            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->phone); ?></td>
            <td><?php echo e($value->email); ?></td>
            <td><?php echo e($value->address); ?></td>
            <td><?php echo e($value->postal_code); ?></td>
            <td>
                <form action="<?php echo e(route('customerData.destroy',$value->id)); ?>" method="POST">
                <a class="btn btn-info" href="<?php echo e(route('customerData.show',$value->id)); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo e(route('customerData.edit',$value->id)); ?>">Edit</a>


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

<?php echo $__env->make('layouts.indexAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/admin/customerData.blade.php ENDPATH**/ ?>