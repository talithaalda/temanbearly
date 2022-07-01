
<?php $__env->startSection('container'); ?>
<h1>&emsp;</h1>

<div class="container ">
    <div class="card border-0 ">
        <div class="container-fluid ">
            <div class="wrapper row">
                <div class="preview col-md-5 px ">
                <div class="preview-pic tab-content mb-5">
                        
                        <?php if($produk->namaproduk==$produk::find(1)->namaproduk): ?>
                        <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(2)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.png" )); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(3)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(4)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.png" )); ?>" width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(5)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(6)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(7)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(8)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg" )); ?>" width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(9)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php elseif($produk->namaproduk==$produk::find(10)->namaproduk): ?>
                            <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>"  width="500" height="500">
                        <?php endif; ?>
                    
                </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?php echo e($produk->namaproduk); ?></h3>
                    <div class="rating">
                        <div  class="stars">
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                        </div>
                    </div>
                    <h5 class="sizes mt-5">Brand: <?php echo e($produk->merk); ?></h5>
                    <p class="product-description"><?php echo $produk->deskripsi; ?></p>
                    <h4 class="price">Rp <span> <?php echo e($produk->harga); ?></span></h4>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <p>Select Quantity :</p>
                        </div>
                        <div class="col-md-6">
                            <div class="number-input position-absolute right-100">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="link text-center">
                        <a href = "/produk/<?php echo e($produk->slug); ?>" style=" background-color: #e5345b;" class = "text-white border-0 btn btn-primary mt-4">Add to Cart</a>
                        <div style="float:right;;" class="py-5 mt-5 ">
                            <a href="/produk" class = "btn btn-primary mt-4">Back to Produk </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/produk/show.blade.php ENDPATH**/ ?>