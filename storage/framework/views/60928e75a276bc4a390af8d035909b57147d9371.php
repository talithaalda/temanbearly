

<?php $__env->startSection('container'); ?>
    <H1>Halaman About</H1>
    <h3><?php echo e($nama); ?></h3>
    <h3><?php echo e($alamat); ?></h3>
    <h3><?php echo e($notelp); ?></h3>
<img src=<?php echo e(asset("img/LOGO.png")); ?> alt="Logo teman bearly" width="700">
<?php $__env->stopSection(); ?>
 
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/about.blade.php ENDPATH**/ ?>