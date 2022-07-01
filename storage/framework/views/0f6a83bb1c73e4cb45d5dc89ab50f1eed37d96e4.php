
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php $__env->startSection('container'); ?>

 <!-- collection -->
 <section id = "collection" class = "py-5">
     <div class = "container">
         <div class = "title text-center">
             <h2 class = "position-relative d-inline-block">Sale</h2>
         </div>

         <div class = "row g-0">
             <div class = "collection-list mt-4 row gx-0 gy-3">
                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                     <a href="/produk/<?php echo e($produk[0]->slug); ?>" class="link"  >
                     <div class = "special-img position-relative overflow-hidden">
                         <img src="img/Emina Ms Pimple Acne Solution Face Wash.jpg" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star" ></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">Emina Ms Pimple Acne Solution Face Wash</p>
                         <span class = "fw-bold">Rp 16.300</span>
                     </a>
                     </div>
                 </div>
             
                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                     <div class = "special-img position-relative overflow-hidden">
                         <a href="/produk/<?php echo e($produk[5]->slug); ?>" class="link"  >
                         <img src = "img/Innisfree Sheet Mask.jpg" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">Innisfree Sheet Mask</p>
                         <span class = "fw-bold">Rp 4.100</span>
                     </a>
                     </div>
                 </div>

                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                     <div class ="special-img position-relative overflow-hidden">
                         <a href="/produk/<?php echo e($produk[3]->slug); ?>" class="link"  >
                         <img src = "img/Wardah EyeXpert Eye Shadow Passionate 4.2 gr.png" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">Wardah EyeXpert Eye Shadow Passionate 4.2 gr</p>
                         <span class = "fw-bold">Rp 39.500</span>
                     </a>
                     </a>
                     </div>
                 </div>

                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                     <div class = "special-img position-relative overflow-hidden">
                         <a href="/produk/<?php echo e($produk[2]->slug); ?>" class="link"  >
                         <img src = "img/Wardah Everyday Luminous Face Powder 30 g.jpg" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle ">sale</span>
                         
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">Wardah Everyday Luminous Face Powder 30 g</p>
                         <span class = "fw-bold">Rp 35.500</span>
                     </a>
                     </div>
                 </div>

                 
             </div>
         </div>
     </div>
 </section>
 <!-- end of collection -->
  <!-- Best Sellers -->
  <section id = "special" class = "py-0">
     <div class = "container">
         <div class = "title text-center py-5">
             <h2 class = "position-relative d-inline-block">Best Sellers</h2>
         </div>

         <div class = "special-list row g-0">
             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/Emina Bright Stuff Moisturizing Cream - Normal.jpg" class = "w-100" width="300" height="300">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">Emina Bright Stuff Moisturizing Cream - Normal</p>
                     <span class = "fw-bold d-block">Rp 18.002</span>
                     <a href = "/produk/<?php echo e($produk[8]->slug); ?>" class = "btn btn-primary mt-3">Add to Cart</a>
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/Wardah Lightening Night Cream - 20 gr.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">Wardah Lightening Night Cream - 20 gr</p>
                     <span class = "fw-bold d-block">Rp 22.500</span>
                     <a href = "/produk/<?php echo e($produk[9]->slug); ?>" class = "btn btn-primary mt-3">Add to Cart</a>
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/Geamoore Inspired Parfum 6ml.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">Geamoore Inspired Parfum 6ml</p>
                     <span class = "fw-bold d-block">Rp 4.700</span>
                     <a href = "/produk/<?php echo e($produk[6]->slug); ?>" class = "btn btn-primary mt-3">Add to Cart</a>
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/Geamoore addicted parfum 5ml.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">Geamoore addicted parfum 5ml</p>
                     <span class = "fw-bold d-block">Rp 4.600</span>
                     <section id = "category" >
                     <a href = "/produk/<?php echo e($produk[7]->slug); ?>" class = "btn btn-primary mt-3">Add to Cart</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end of best sellers -->
<!-- Category -->
  
     <div class = "container">
         <div class = "title text-center py-5">
             <h2 class = "position-relative d-inline-block">Category</h2>
         </div>

         <div class = "special-list row ">
             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/skincare.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[0]->namakategori); ?></h5>
                     </div>
                     </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/makeup.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[1]->namakategori); ?></h5>
                     </div>
                 </div>
                 
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/parfum.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[2]->namakategori); ?></h5>
                     </div>
                 </div>
                 
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/bag.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)"><?php echo e($category[3]->namakategori); ?></h5>
                     </div>
                 </div>
                 
             </div>
         </div>
     </div>
 </section>
 <!-- end of Category -->
 
 <!-- blogs -->
 <section id = "offers" class = "py-5">
     <div class = "container">
         <div class = "row d-flex align-items-center justify-content-center text-center ">
             <div class = " offers-content">
                 <span class = "text-capitalize text-black">Discount Up To 40%</span>
                 <h2 class = " text-capitalize text-black">Grand Sale Offer!</h2>
                 <a href = "#" class = "btn">Buy Now</a>
             </div>
         </div>
         <section id = "about" class = "py-5">
     </div>
 </section>
 <!-- end of blogs -->

 <!-- about us -->
 
     <div class = "container">
         <div class = "row gy-lg-5 align-items-center">
             <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                 <div class = "title pt-3 pb-5">
                     <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                 </div>
                 <p class = "lead text-muted">Teman Bearly Beauty.</p>
                 <p>Teman Bearly Beauty merupakan online shop yang menjual berbagai macam skincare,
                     makeup, parfum, dan aksesoris dari berbagai brand lokal maupun internasional</p>
                 <p>No Telp : 085156340246</p>
             </div>
             <div class = "col-lg-6 order-lg-0 py-5">
                 <img src = "img/about.jpg" alt = "" class = "img-fluid">
             </div>
         </div>
     </div>
 </section>
 <!-- end of about us -->

    
<?php $__env->stopSection(); ?>
 


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/home.blade.php ENDPATH**/ ?>