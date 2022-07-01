


<?php $__env->startSection('container'); ?>
    
  <div class="container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block py-3 mt-5 mb-3">All Products</h2>
    </div>
      <div class="row">
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3 mb-2 mb-5">
            <div class="card border-0"  >
                <div class="position-absolute px-4 py-2" style="background-color : rgba(0, 0, 0, 0.1)">
                    <a href="/kategori/<?php echo e($p->category->namakategori); ?>" class="text-black text-decoration-none"><?php echo e($p->category->namakategori); ?></a></div>
                    <?php if($p->namaproduk==$p::find(1)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(2)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.png"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(3)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(4)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.png"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(5)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(6)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(7)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(8)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(9)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php elseif($p->namaproduk==$p::find(10)->namaproduk): ?>
                        <img src="img/<?php echo e($p->namaproduk); ?>.jpg"  class = "w-100" width="300" height="300">
                    <?php endif; ?>
                    <div class="text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1"><?php echo e($p->namaproduk); ?></p>
                        <span class = "fw-bold">Price : Rp <?php echo e($p->harga); ?></span> 
                        <div class="link text-center">
                            <a href = "/produk/<?php echo e($p->slug); ?>" class = "btn btn-primary mt-3">Add to Cart</a>
                  </div>
              </div>
          </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>  

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/produk.blade.php ENDPATH**/ ?>