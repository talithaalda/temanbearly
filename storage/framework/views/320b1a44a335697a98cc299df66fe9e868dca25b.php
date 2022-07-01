

<?php $__env->startSection('container'); ?>
<h1>&emsp;</h1>
<div class="text-center mb-5">
    <a href="/dashboard/products/edit/<?php echo e($produk->slug); ?>" class="btn border-0" style="border-radius: 4px;padding: 7px .9em;
        background-color: #059b23;color:white"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/products/<?php echo e($produk->slug); ?>" method="post" class="d-inline">
    <?php echo method_field('delete'); ?>
    <?php echo csrf_field(); ?>
    <button class="btn border-0" style="border-radius: 4px;padding: 7px .9em;
    background-color: #f80909f1;color:white" onclick="return confirm('Are you sure to delete this category?')">
    <span data-feather="x-circle"></span>Delete</button>
    </form>
</div>
<div class="container ">
    <div class="card border-0 ">
        <div class="container-fluid ">
            <div class="wrapper row">
                <div class="preview col-md-6 px ">
                <div class="preview-pic tab-content mb-5">
                    <?php if($produk->image): ?>
                        <img src="<?php echo e(asset("storage/$produk->image")); ?>" width="500" height="500">
                    <?php else: ?>
                        <?php for($i = 1; $i <= $produk->count()+1; $i++): ?>
                            <?php if($produk::find($i)!=null): ?>
                                <?php if($produk->namaproduk==$produk::find($i)->namaproduk): ?>
                                    <img src="<?php echo e(asset("img/$produk->namaproduk.jpg")); ?>" width="500" height="500">
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
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
                        
                        <div style="float:right;;" class="py-5 mt-5 ">
                            <a href="/dashboard/products" class = "btn btn-primary mt-4">Back to all my product </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/produk/show.blade.php ENDPATH**/ ?>