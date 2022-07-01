
<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
</div>

  <?php if(session()->has('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo e(session('success')); ?>

  </div>

  <?php endif; ?>
  <div class="table-responsive">
    <a href="/dashboard/user/create" class="btn btn-primary mb-3">Create New User</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Level</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($u->name); ?></td>
          <td><?php echo e($u->username); ?></td>
          <td><?php echo e($u->email); ?></td>
          <td><?php echo e($u->level); ?></td>
          <td><?php echo e($u->phone); ?></td>
          <td><?php echo e($u->address); ?></td>
          <td>
          
            <form action="/dashboard/user/<?php echo e($u->id); ?>/" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this user?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>