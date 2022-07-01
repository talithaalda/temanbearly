
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        
    <main class="form-signin">
        <form action="/resetpassword/<?php echo e($user->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>
        <input type="hidden" name="email" value="<?php echo e($user->email); ?>">
        <input name="password" type="hidden" value= "<?php echo e($user->password); ?>">
        <div class="form-group ">
            <div class="mb-3">
                <label for="password">Change Password</label>
                <input type="password" class="form-control" name="new_password" placeholder="Password" id="password" required > 
            </div>
        </div>
        <div class="form-group ">
            <div class="mb-3">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm Password" id="confirm_password" required> 
            </div>
        </div>
        <button class="w-100 btn-lg btn-primary" type="submit">Reset Password</button>
        
        </form>
    </main>
    </div>
</div>
  <br><br><br>
  <script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>   
<?php $__env->startSection('container'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/login/resetpw.blade.php ENDPATH**/ ?>