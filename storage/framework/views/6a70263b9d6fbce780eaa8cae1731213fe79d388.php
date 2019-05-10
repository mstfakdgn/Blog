<!DOCTYPE html>
<html lang="en">

<head>

<?php echo $__env->make('user/layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

  <?php echo $__env->make('user/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('main-content'); ?>

      <?php echo $__env->yieldSection(); ?>


  <hr>

    <?php echo $__env->make('user/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\kazasker\AppData\Roaming\Composer\vendor\bin\blog\resources\views/user/app.blade.php ENDPATH**/ ?>