
<?php $__env->startSection('container'); ?>
<h1>Category : <?php echo e($kategori->namakategori); ?></h1>
<div class="table-responsive col-lg-8">
<table class="table table-striped table-sm mt-3">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $kategori->produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td> <a class="link" href="/dashboard/products/show/<?php echo e($p->slug); ?>"> <?php echo e($p->namaproduk); ?></a></td>
        <td><?php echo e($p->harga); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/category/show.blade.php ENDPATH**/ ?>