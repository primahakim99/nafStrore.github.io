<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
                <div class="login-box">
                    <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login') && Route::has('register')): ?>
                    <h4><a href="/sign-in" class="text-white">Sign In &emsp;</a><a href="/sign-up"
                            class="text-white">Sign Up</a></h4>
                    <?php endif; ?>
                    <?php else: ?>
                    <h4><a href="<?php echo e(route('welcome')); ?>" class="text-white"><?php echo e(Auth::user()->name); ?></a></h4>
                    <a style="color: #ffff" href="<?php echo e(route('userProfile')); ?>">Profile</a>
                    <a style="color: #ffff" id="logout-btn" class="btn btn-sm btn-denger" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                    
                    
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\Projects\NAF-STORE\resources\views/layouts/partials/mainTop.blade.php ENDPATH**/ ?>