<?php $__env->startSection('content'); ?>
<form class="login100-form" method="POST" action="<?php echo e(route('login')); ?>">
	<?php echo csrf_field(); ?>
	<center><img src="Assets/images/logo.png" class="logo " alt=""></center>
	<span class="login100-form-title p-b-26">Sign In</span>
	<div class="wrap-input100 validate-input" data-validate="Valid email is: ">
		<label for="login" class="col-md-4 col-form-label text-md-end">Phone Number or E-mail</label>
		<input class="input100" type="text" name="login" value="<?php echo e(old('username') ?: old('email')); ?>" required
			autofocus>
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<span class="btn-show-pass" onclick="showPassword()">
			<i class="zmdi zmdi-eye"></i>
		</span>
		<label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
		<input id="password" class="input100" type="password" <?php $__errorArgs = ['WrongCredentials'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
			name="password" required autocomplete="current-password">
	</div>
	<?php $__errorArgs = ['WrongCredentials'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<span class="invalid-feedback alert alert-danger" role="alert">
		<strong><?php echo e($message); ?></strong>
	</span>
	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			<button class="login100-form-btn">
				Sign In
			</button>
		</div>
	</div>

	<div class="text-center p-t-115">
		<span class="txt1">
			New Member?
		</span>

		<a class="txt2" href="/sign-up">
			Sign Up
		</a>
	</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.loginRegisterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\NAF-STORE\resources\views/auth/login.blade.php ENDPATH**/ ?>