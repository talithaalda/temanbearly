

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>
<div class="col-lg-8">
   <form method="post" action="/dashboard/products">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="namaproduk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id='namaproduk' name="namaproduk"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id='slug' name="slug"> 
    </div>
    <div class="mb-3">
        <label for="merk" class="form-label">Merk</label>
        <input type="text" class="form-control" id="merk" name="merk"> 
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="text" class="form-control" id="harga" name="harga"> 
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($c->id); ?>"><?php echo e($c->namakategori); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>

    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Description</label>
        <input id="deskripsi" type="hidden" name="deskripsi">
        <trix-editor input="deskripsi"></trix-editor>
        
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/produk/create.blade.php ENDPATH**/ ?>