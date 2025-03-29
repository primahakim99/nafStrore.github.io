
<?php $__env->startSection('title_bar'); ?>
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
<!-- Start Top Search -->
<div class="all-title-box"></div>
<!-- End Top Search -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Start Wishlist  -->

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
                                <th></th>
                                <th>Product Name</th>
                                <th>Unit Price </th>
                                <th>Stock</th>
                                <th>Add to Cart</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo e($wl->product->image); ?>" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        <?php echo e($wl->product->name); ?>

                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp <?php echo e($wl->product->price); ?></p>
                                </td><?php if($wl->product->stock > 0): ?>
                                <td class="quantity-box">In Stock</td>
                                <?php else: ?>
                                <td class="quantity-box">Out of  Stock</td>
                                <?php endif; ?>

                                <td class="add-pr">
                                    
                                    <form action="/add_to_cart" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($wl->product['id']); ?>">
                                        <input type="hidden" name="product_store" value="<?php echo e($wl->product['store_id']); ?>">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    <a href="<?php echo e(url('deletewl/'.$wl->id)); ?>">
                                    </form>
                                </td>
                                <td class="remove-pr">
                                    <a href="<?php echo e(url('deletewl/'.$wl->id)); ?>">
                                        <i class="fas fa-times"></i>
                                    </a>
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
<?php endif; ?>
<!-- End Wishlist -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/wishlist.blade.php ENDPATH**/ ?>