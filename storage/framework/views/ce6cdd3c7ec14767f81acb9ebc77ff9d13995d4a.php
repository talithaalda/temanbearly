
<?php $__env->startSection('container'); ?>

<h1>Category : <?php echo e($kategori->namakategori); ?></h1>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success col-lg-8" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>
<div class="table-responsive col-lg-5">
<table class="table table-striped table-sm mt-3">
    <thead>
      <tr>
        <th class="col-lg-1">No.</th>
        <th class="col-lg-7" scope="col">Product</th>
        <th class="col-lg-2" scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $kategori->produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form method="post" action="/dashboard/category/<?php echo e($p->id); ?>" class="md-form">
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td> <a class="link" href="/dashboard/products/show/<?php echo e($p->slug); ?>"> <?php echo e($p->namaproduk); ?></a></td>
        <td><?php echo e($p->harga); ?></td>
        <td>
            <form action="/dashboard/products/<?php echo e($p->slug); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this category?')"><span data-feather="x-circle"></span></button>
            </form>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/category/edit.blade.php ENDPATH**/ ?>