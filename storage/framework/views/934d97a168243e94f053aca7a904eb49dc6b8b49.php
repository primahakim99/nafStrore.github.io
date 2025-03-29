
<?php $__env->startSection('content'); ?>
<div class="mx-5 my-5 mt-3">
    <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success mb-3">Input Product Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><img class="img-fluid img-responsive"
                src="<?php echo e(asset('storage/'.$product->image)); ?>" style="height: 150px; width: 150px;"></td>
                <td><?php echo e($product->category->name); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->stock); ?></td>
                <td><?php echo e($product->weight); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td>
                    <a href="/product/<?php echo e($product->slug); ?>" class="btn bg-info">Show</a>
                    <a href="/product/<?php echo e($product->slug); ?>/edit" class="btn bg-warning">Edit</a>
                    <form action="/product/<?php echo e($product->slug); ?>" method="POST" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger" onclick="alert('Delete Product?')">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/product/index.blade.php ENDPATH**/ ?>