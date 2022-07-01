
<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Category</h1>
  </div>
  
  <?php if(session()->has('success')): ?>
  <div class="alert alert-success col-lg-8" role="alert">
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>

  <div class="table-responsive ">
    <a href="/dashboard/category/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category</th>
          <th scope="col">Slug</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="/dashboard/category/<?php echo e($c->id); ?>" class="md-form" enctype="multipart/form-data">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td class="col-lg-3"><input type="text" name="namakategori" required autofocus value="<?php echo e(old("namakategori",$c->namakategori)); ?>" style="font-size:18px; width:300px" ></td>
          <td class="col-lg-3"><input type="text" name="slug" required autofocus value="<?php echo e(old("slug",$c->slug)); ?>" style="font-size:18px; width:300px" ></td>
          <td class="col-lg-3">
              <?php if($c->image): ?>
                  <input type="hidden" name="oldImage" value="<?php echo e($c->image); ?>">
                  <img src="<?php echo e(asset("storage/$c->image")); ?>" width="100" height="100">
                  <div class="">
                    <input type="file" class=" <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback">The image must be an image</div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              <?php endif; ?> 
          </td>
          <td>
            <button type="submit" class="btn btn-danger border-0" style="border-radius: 4px;padding: 3px .5em;
            background-color: #059b23;color:white"><span data-feather="check-circle"></span>Update</button>
          </form>
            <form action="/dashboard/category/<?php echo e($c->slug); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this category?')"><span data-feather="x-circle"></span></button>
          </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/category/index.blade.php ENDPATH**/ ?>