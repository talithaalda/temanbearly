

<?php $__env->startSection('container'); ?>
<link rel = "stylesheet" href = <?php echo e(asset("css/cart.css")); ?>>
<br><br>

   <div class="CartContainer py-5">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
		<form action="/cart" method="post" class="d-inline">
			<?php echo method_field('delete'); ?>
			<?php echo csrf_field(); ?>
			<button class="border-0" style="background-color: white" onclick="return confirm('Are you sure to delete all item?')"><h5 class="Action">Remove all</h5></button>
		</form>
   	   </div>
        <?php
            $total=0;
			$item=0;
        ?>
		<?php if(session()->has('success')): ?>
		<div class="alert alert-success" role="alert">
		  <?php echo e(session('success')); ?>

		</div>
		<?php endif; ?>
        <?php $__currentLoopData = auth()->user()->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
   	   <div class="Cart-Items">
   	   	  <div class="image-box">
   	   	  	<img src="<?php echo e(asset("storage/$c->image")); ?>" height="120px" >
   	   	  </div>
   	   	  <div class="about ">
   	   	  	<h3 class="title "><?php echo e($c->namaproduk); ?></h3>
   	   	  	
   	   	  </div>
   	   	  <div class="counter">
			<h3 class="title ">&emsp;&emsp;&emsp;<?php echo e($c->quantity); ?> x</h3>		
            
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">Rp <?php echo e(number_format($c->harga*$c->quantity, 0, ".", ".")); ?></div>
            <?php
			 	$item = $item + $c->quantity;
                $total = $total + ($c->harga*$c->quantity) 
            ?>
			</form>
            <form action="/cart/<?php echo e($c->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button class="text-decoration-none border-0 text-white" style="background-color: rgba(255, 9, 9, 0.799); font-weight:500;font-size:14px;border-radius:20px" onclick="return confirm('Are you sure to delete this item?')">Remove</button>
          </form>
   	   	  </div>
   	   </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   	  
   	 <hr> 
    <div class="position-relative py-2 bottom" >
   	 <div class="checkout ">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Total</div>
   	 		<div class="items"><?php echo e($item); ?> items</div>
   	 	</div>
   	 	<div class="total-amount">Rp <?php echo e(number_format($total, 0, ".", ".")); ?></div>
   	 </div>
		<?php if(auth()->user()->address==null): ?>
		<a href="/profile"><button class="button btn-primary">Checkout</button></div></a>
		<?php else: ?>
		<a href="/checkout"><button class="button btn-primary">Checkout</button></div></a>
		<?php endif; ?>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/cart.blade.php ENDPATH**/ ?>