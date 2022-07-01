<link rel="stylesheet" href=<?php echo e(asset("/img")); ?>>


<?php $__env->startSection('container'); ?>
<br>
<br>
<div class = "container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block">Category</h2>
    </div>
    
    <div class = "special-list row "> 
        <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
           <a class="link" href="/category/<?php echo e($category[0]->slug); ?>">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "img/skincare.jpg" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[0]->namakategori); ?></h5>
                </div>
           </div>
       </a>
       </div>
       
        <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
           <a class="link" href="/category/<?php echo e($category[1]->slug); ?>">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "img/makeup.jpg" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[1]->namakategori); ?></h5>
                </div>
            </div>
           </a>
        </div>

        <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
           <a class="link" href="/category/<?php echo e($category[2]->slug); ?>">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "img/parfum.jpg" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[2]->namakategori); ?></h5>
                </div>
            </div>
           </a>
        </div>

        <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
           <a class="link" href="/category/<?php echo e($category[3]->slug); ?>">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "img/bag.jpg" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[3]->namakategori); ?></h5>
                </div>
                 <!-- end of Category -->
               </a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/kategori.blade.php ENDPATH**/ ?>