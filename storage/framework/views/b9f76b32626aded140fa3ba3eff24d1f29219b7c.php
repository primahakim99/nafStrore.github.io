
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
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Product List</h2>
                <ul class="breadcrumb">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Search -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                            <img src="<?php echo e(asset('storage/'.$product->image)); ?>" class="img-fluid"
                                                    alt="Image" style="width: 300px; height:300px">

                                            </div>
                                            <div class="why-text">
                                                <h4><?php echo e($product->name); ?></h4>
                                                <h5> Rp<?php echo e($product->price); ?></h5>
                                                <form action="/add_to_cart" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                                                    <input type="hidden" name="product_store" value="<?php echo e($product['store_id']); ?>">
                                                    <input type="hidden" name="product_price" value="<?php echo e($product['price']); ?>">
                                                <!-- <button type="submit" class="btn btn-primary">Add to Cart</button> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <div class="list-view-box">
                                    <div class="row">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                <img src="<?php echo e(asset('storage/'.$product->image)); ?>" class="img-fluid"
                                                    alt="Image" style="width: 300px; height:300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <input type="hidden" name="product_id" value=<?php echo e($product->id); ?>>
                                                <h4><?php echo e($product->name); ?></h4>
                                                <h5> Rp<?php echo e($product->price); ?></h5>
                                                <p><?php echo e($product->description); ?></p>
                                                <form action="/add_to_cart" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                                                    <input type="hidden" name="product_store" value="<?php echo e($product['store_id']); ?>">
                                                    <input type="hidden" name="product_price" value="<?php echo e($product['price']); ?>">
                                                <button type="submit" class="btn btn-primary addToCart">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/productAdmin.blade.php ENDPATH**/ ?>