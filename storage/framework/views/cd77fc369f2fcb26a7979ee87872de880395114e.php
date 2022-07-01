
<?php $__env->startSection('container'); ?>
<h1>Category </h1>
<div class="container">
    <div class="row">
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <a href="">
            <div class="card bg-dark text-white">
                <?php if($c->namakategori=='Skincare'): ?>
                    <img src=img/skincare.jpg class="card-img" alt="...">

                <?php elseif($c->namakategori=='MakeUp'): ?>
                    <img src=img/makeup.jpg class="card-img" alt="...">
                <?php else: ?>
                    <p class="text=center fs-4" >No post found</p>

                <?php endif; ?>
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(0,0,0,0.2)"><?php echo e($c->namakategori); ?></h5>
                  
                </div>
              </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/category/show1.blade.php ENDPATH**/ ?>