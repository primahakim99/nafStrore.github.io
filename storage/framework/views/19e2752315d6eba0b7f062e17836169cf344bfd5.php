<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?php echo $__env->make('layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <!-- Start Main Top -->
    <?php echo $__env->make('layouts.partials.mainTop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php echo $__env->make('layouts.partials.navBarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Top -->
    <?php echo $__env->yieldContent('title_bar'); ?>
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Start Footer  -->
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">NAF-STORE</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="Assets/js/jquery-3.2.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="Assets/js/jquery.superslides.min.js"></script>
    <script src="Assets/js/bootstrap-select.js"></script>
    <script src="Assets/js/inewsticker.js"></script>
    <script src="Assets/js/bootsnav.js."></script>
    <script src="Assets/js/images-loded.min.js"></script>
    <script src="Assets/js/isotope.min.js"></script>
    <script src="Assets/js/owl.carousel.min.js"></script>
    <script src="Assets/js/baguetteBox.min.js"></script>
    <script src="Assets/js/form-validator.min.js"></script>
    <script src="Assets/js/contact-form-script.js"></script>
    <script src="Assets/js/custom.js"></script>
</body>

</html>
<?php /**PATH E:\Projects\NAF-STORE\resources\views/layouts/indexAdmin.blade.php ENDPATH**/ ?>