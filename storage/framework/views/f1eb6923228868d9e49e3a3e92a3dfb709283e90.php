
<?php $__env->startSection('content'); ?>
<div class="mx-5 my-5 mt-3">
    <div class="card px-3 py-3">
        <form action="/product" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Name: </label>
                        <input type="text" class="form-control" required="required" name="name"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Slug: </label>
                        <input type="text" class="form-control" required="required" name="slug"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Store</label>
                        <select class="form-control" name="store_id">
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($store->id); ?>"><?php echo e($store->storeName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="content">Description: </label>
                        <textarea type="text" class="form-control" required="required"
                            name="description"></textarea></br>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Stock</label>
                        <input type="number" name="stock" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Weight</label>
                        <input type="text" name="weight" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Price</label>
                        <input type="text" name="price" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="image">Image: </label>
                        <input type="file" class="form-control" required="required" name="image"></br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.indexOwner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/owner/product/create.blade.php ENDPATH**/ ?>