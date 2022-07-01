

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
</div>
<div class="col-lg-8">
   <form method="post" action="/dashboard/products">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="namakategori" class="form-label">Category Name</label>
      <input type="text" class="form-control" id='namakategori' name="namakategori"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id='slug' name="slug"> 
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

<script>
    const namaproduk = document.querySelector('#namaproduk');
    const slug = document.querySelector('#slug');

    namaproduk.addEventListener('change',function(){
        fetch('/dashboard/products/checkSlug?namaproduk=' + namaproduk.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept',function(e)){
        e.preventDefault();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/category/create.blade.php ENDPATH**/ ?>