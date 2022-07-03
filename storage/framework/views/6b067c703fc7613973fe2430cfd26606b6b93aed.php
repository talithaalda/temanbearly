


<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Orders</h1>
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
        <td style="column-width: 860px" ><h5>Product</h5></td>
        <td style="column-width: 130px" >Quantity</td>
        <td  style="column-width: 120px">Status</td>
        <td >Must Pay</td>
      </tr>
     
    </tbody>
  </table>
  </div>
  <?php $__currentLoopData = $checkout->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mb-3 col-lg-11">
    
    <div class="card-header"> <?php echo e($c->id); ?>. <b><?php echo e($c->user->username); ?></b>  
      <p class="d-inline" style="color: grey"><?php echo e($c->date_order); ?></p>
      <a href="/dashboard/orders/<?php echo e($c->id); ?>" class="badge bg-warning text-decoration-none d-inline" style="margin-left: 10px"><span data-feather="eye"></span>Details</a>
      <form action="/dashboard/orders/<?php echo e($c->id); ?>" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" value="Canceled" name="status">
        <button class="badge bg-danger text-decoration-none border-0" style="margin-left: 10px" onclick="return confirm('Are you sure to cancel this order?')">
        <span data-feather="x-circle"></span>Cancel</button>
        </form>
      <?php if($c->status == 'Paid'): ?>
      <form action="/dashboard/orders/<?php echo e($c->id); ?>" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" value="Packing" name="status">
        <button type="submit" class="badge bg-info text-decoration-none border-0" style="margin-left: 10px"><span data-feather="package"></span>Packing</button>
      </form>
      <?php elseif($c->status == 'Packing'): ?>
      <form action="/dashboard/orders/<?php echo e($c->id); ?>" method="post" class="d-inline">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" value="Shipping" name="status">
        <button type="submit" class="badge bg-success text-decoration-none border-0" style="margin-left: 10px"><span data-feather="check"></span>Process to courier</button>
      </form>
      <?php endif; ?>
     
      
      <form action="/dashboard/orders/<?php echo e($c->id); ?>" method="post" class="position-absolute d-inline" style="text-align: right; right:10px;" >
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <button class="badge bg-danger text-decoration-none border-0" style="margin-left: 10px" onclick="return confirm('Are you sure to delete this order?')">
        <span data-feather="x-circle"></span></button>
        </form>
      </div>
    <div class="card-body text-dark">
      <?php $__currentLoopData = $c->detail_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <table class="table">
        
        <tbody>
          <tr>
            <td><img src="<?php echo e(asset("storage/".$order->produk->image)); ?>" width="50" height="50"></td>
            <td style="column-width: 750px"><h5><?php echo e($order->produk->namaproduk); ?></h5></td>
            <td style="column-width: 100px">x <?php echo e($order->quantity); ?></td>
            <td style="column-width: 100px"><?php echo e($c->status); ?></a></td>
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/order/index.blade.php ENDPATH**/ ?>