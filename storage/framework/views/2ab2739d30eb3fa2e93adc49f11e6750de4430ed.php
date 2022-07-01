
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        
    <main class="form-signin">
        <form action="/forgotpassword" method="post">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>
    
        <div class="form-floating mb-5">
            <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="email">Email address</label>
        </div>
        <button class="w-100 btn-lg btn-primary" type="submit">Send Password Reset Link</button>
        
        </form>
    </main>
    </div>
</div>
  <br><br><br>
<?php $__env->startSection('container'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/login/forgotpassword.blade.php ENDPATH**/ ?>