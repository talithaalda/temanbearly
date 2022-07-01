


<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  
    <h1 class="h2 py-3">My Orders</h1>
  </div>
  <?php if(session()->has('success')): ?>
  <div class="alert alert-success" role="alert">
      <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <div class="card-header mb-3 col-lg-11">
    <table>
    <tbody>
      <tr>
        <td style="column-width: 800px"><h5>Product</h5></td>
        <td style="column-width: 130px" >Quantity</td>
        <td style="column-width: 120px">Status</td>
        <td >Must Pay</td>
        
      </tr>
     
    </tbody>
  </table>
  </div>
  <?php $__currentLoopData = auth()->user()->checkout->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mb-3 col-lg-11">
    
    <div class="card-header"><b><?php echo e($c->user->username); ?></b>  
      <p class="d-inline" style="color: grey"><?php echo e($c->date_order); ?></p>
      <a href="/orderhistory/<?php echo e($c->id); ?>" class="badge bg-warning text-decoration-none " style="margin-left: 10px"><span data-feather="eye"></span>Details</a>
      <?php if($c->status == 'Shipping'): ?>
      <form action="/orderhistory/<?php echo e($c->id); ?>" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" value="Done" name="status">
        <button type="submit" class="badge bg-success text-decoration-none border-0" style="margin-left: 10px"><span data-feather="check"></span>Done</button>
      </form>
      
      <?php elseif($c->status == 'Waiting for payment' ): ?>
      <form action="/orderhistory/<?php echo e($c->id); ?>" method="post" class="d-inline">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <button class="badge bg-danger text-decoration-none border-0" style="margin-left: 10px" onclick="return confirm('Are you sure to cancel this order?')">
        <span data-feather="x-circle"></span>Cancel</button>
        </form>
        <?php endif; ?>
    </div>
    <div class="card-body text-dark">
      <?php $__currentLoopData = $c->detail_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <table class="table">
        
        <tbody>
          <tr>
            <td><img src="<?php echo e(asset("storage/".$order->produk->image)); ?>" width="50" height="50"></td>
            <td style="column-width: 630px"><h5><?php echo e($order->produk->namaproduk); ?></h5></td>
            <td style="column-width: 80px">x <?php echo e($order->quantity); ?></td>
            <td style="column-width: 90px"><?php echo e($c->status); ?></a></td>
            <td >Rp <?php echo e(number_format($order->produk->harga*$order->quantity , 0, ".", ".")); ?></td>
          </tr>
         
        </tbody>
      </table>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <h5 style="text-align: right">Rp <?php echo e(number_format($c->total , 0, ".", ".")); ?></h5>
    </div>
  </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/profile/orderhistory.blade.php ENDPATH**/ ?>