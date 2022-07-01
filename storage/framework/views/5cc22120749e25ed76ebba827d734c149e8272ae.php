
<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

  <?php if(session()->has('success')): ?>
  <div class="alert alert-success col-lg-8" role="alert">
    <?php echo e(session('success')); ?>

  </div>

  <?php endif; ?>
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Product</th>
          <th scope="col">Merk</th>
          <th scope="col">Harga</th>
          <th scope="col">Category</th>
          <th scope="col">Stok</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($p->namaproduk); ?></td>
          <td><?php echo e($p->merk); ?></td>
          <td>Rp <?php echo e(number_format($p->harga, 0, ".", ".")); ?></td>
          <td><?php echo e($p->category->namakategori); ?></td>
          <td><?php echo e($p->stok); ?></td>
          <td>
            <a href="/dashboard/products/show/<?php echo e($p->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
          
            <a href="/dashboard/products/edit/<?php echo e($p->slug); ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
          
            <form action="/dashboard/products/<?php echo e($p->slug); ?>/" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this product?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/produk/index.blade.php ENDPATH**/ ?>