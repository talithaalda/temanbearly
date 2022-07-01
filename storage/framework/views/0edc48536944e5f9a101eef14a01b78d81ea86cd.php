<link rel="stylesheet" href=<?php echo e(asset("/img")); ?>>


<?php $__env->startSection('container'); ?>
<br>
<br>
<div class = "container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block">Category</h2>
    </div>
    
    <div class = "special-list row "> 
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 mb-2">
           <a class="link" href="/category/<?php echo e($c->slug); ?>">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "<?php echo e(asset("storage/$c->image")); ?>" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($c->namakategori); ?></h5>
                </div>
           </div>
       </a>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/showkategori.blade.php ENDPATH**/ ?>