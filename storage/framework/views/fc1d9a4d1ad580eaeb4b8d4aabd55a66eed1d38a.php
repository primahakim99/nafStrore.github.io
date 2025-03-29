
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
<!-- Start Cart  -->
<?php if(isset($errors)&& $errors != "[]"): ?>
<div style="background-color: rgb(233, 135, 135); text-align: center; font-size: 50px; padding: 50px">
    <?php echo e($errors); ?>

</div>
<?php else: ?>
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo e($cart->product->image); ?>" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        <?php echo e($cart->product->name); ?>

                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp <?php echo e($cart->product->price); ?></p>
                                </td>
                                <td class="quantity-box">
                                    <div class="input-group text-center mb-3">
                                        <?php if($cart->product_qty > 1): ?>
                                        <a href="<?php echo e(url('/updatecart/'.$cart->id.'/-1')); ?>"
                                            class="btn btn-sm bg-primary">-</a>
                                        <?php endif; ?>
                                        <input type="text" value="<?php echo e($cart->product_qty); ?>" name="qty"
                                            class="form-control qty-input text-center" style="width:50px; height:35px">
                                        <a href="<?php echo e(url('/updatecart/'.$cart->id.'/1')); ?>"
                                            class="btn btn-sm bg-primary">+</a>
                                    </div>
                                </td>
                                <td class="total-pr">
                                    <p>Rp <?php echo e($cart->product_qty*$cart->product->price); ?></p>
                                </td>
                                <td class="remove-pr">
                                    <a href="<?php echo e(url('deletecart/'.$cart->id)); ?>">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $total += $cart->product_qty*$cart->product->price; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>

            
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold">Rp <?php echo e($total); ?></div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold">Rp 0</div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Total</h5>
                        <div class="ml-auto h5">Rp <?php echo e($total-0); ?></div>
                    </div>
                    <hr>
                    <div class="col-12 d-flex shopping-box"><a href="checkout"
                            class="ml-auto btn hvr-hover">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- End Cart -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/cart.blade.php ENDPATH**/ ?>