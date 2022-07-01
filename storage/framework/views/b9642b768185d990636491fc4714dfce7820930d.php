<link rel="stylesheet" href=<?php echo e(asset("/img")); ?>>


<?php $__env->startSection('container'); ?>
<div class="container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block py-3 mt-5 mb-3">Category : <?php echo e($kategori->namakategori); ?></h2>
    </div>
      <div class="special-list row g-0">
        <?php $__currentLoopData = $kategori->produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2">
            <div class="card border-0"  >
                <div class="position-absolute px-4 py-2" style="background-color : rgba(0, 0, 0, 0.1)">
                    <a href="/kategori/<?php echo e($p->category->namakategori); ?>" class="text-black text-decoration-none"><?php echo e($p->category->namakategori); ?></a></div>
                    <div class="text-center">
                    <?php for($i = 1; $i <= $produk->count()+1; $i++): ?>
                    
                        <?php if($p::find($i)!=null): ?>
                            <?php if($p->namaproduk==$p::find($i)->namaproduk): ?>
                                <img src="<?php echo e(asset("img/$p->namaproduk.jpg")); ?>"  width="300" height="300">
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                    </div>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/Kategori.blade.php ENDPATH**/ ?>