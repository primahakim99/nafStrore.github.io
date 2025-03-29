<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="Assets/images/logo.png" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/custom.css">
        <!--===============================================================================================-->
    </head>

    <body>

        <div class="limiter">
            <div class="container-login100">

                <div class="wrap-login100">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="Assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/vendor/bootstrap/js/popper.js"></script>
        <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="Assets/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="Assets/js/main.js"></script>

    </body>
    <script>
        function showPassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    function showPasswordConfirm() {
      var x = document.getElementById("passwordConfirm");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

</html><?php /**PATH E:\Projects\NAF-STORE\resources\views/layouts/loginRegisterLayout.blade.php ENDPATH**/ ?>