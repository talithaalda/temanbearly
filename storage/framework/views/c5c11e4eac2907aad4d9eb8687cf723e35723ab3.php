

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
</div>
<div class="col-lg-8">
   <form method="post" action="/dashboard/category" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="namakategori" class="form-label">Category Name</label>
      <input type="text" class="form-control" name="namakategori" required autofocus value="<?php echo e(old('namakategori')); ?>"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" required autofocus value="<?php echo e(old('slug')); ?>"> 
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Upload Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="image" name="image" onchange="previewImage()">
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">The image must be an image</div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

<script>
    // const namaproduk = document.querySelector('#namaproduk');
    // const slug = document.querySelector('#slug');

    // namaproduk.addEventListener('change',function(){
    //     fetch('/dashboard/products/checkSlug?namaproduk=' + namaproduk.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    // });

    // document.addEventListener('trix-file-accept',function(e)){
    //     e.preventDefault();
    // }
    function previewImage(){
        const image = document.querySelector('#image');
        const imgpreview = document.querySelector('.img-preview');
        imgpreview.style.display = 'block';
        const oReader = new FileReader();
        oReader.readAsDataURL(image.files[0]);
        oReader.onload = function(oFREvent){
            imgpreview.src = oFREvent.target.result;
        }
    }
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/category/create.blade.php ENDPATH**/ ?>