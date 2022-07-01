
<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

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
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($p->namaproduk); ?></td>
          <td><?php echo e($p->merk); ?></td>
          <td><?php echo e($p->harga); ?></td>
          <td><?php echo e($p->category->namakategori); ?></td>
          <td>
            <a href="/dashboard/products/show/<?php echo e($p->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
          
            <a href="/dashboard/products/edit/<?php echo e($p->slug); ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
          
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/produk/index.blade.php ENDPATH**/ ?>