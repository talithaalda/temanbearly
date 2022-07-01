

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>
<div class="col-lg-8">
   <form enctype="multipart/form-data" method="post" action="/dashboard/products" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <div class="mb-3">
      <label for="namaproduk" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="namaproduk" 
      required autofocus value="<?php echo e(old('namaproduk')); ?>"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" required autofocus value="<?php echo e(old('slug')); ?>"> 
    </div>
    <div class="mb-3">
        <label for="merk" class="form-label">Brand</label>
        <input type="text" class="form-control" name="merk" required autofocus value="<?php echo e(old('merk')); ?>"> 
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="text" class="form-control" name="harga" required autofocus value="<?php echo e(old('harga')); ?>" id="rupiah"> 
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(old("category_id") == $c->id): ?>
            <option value="<?php echo e($c->id); ?>" selected><?php echo e($c->namakategori); ?></option>
            <?php else: ?>
            <option value="<?php echo e($c->id); ?>" ><?php echo e($c->namakategori); ?></option>
            <?php endif; ?>            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>

    </div>

    <div class="form-group mb-3">
        <label for="deskripsi">Description</label>
        <textarea class="form-control mb-2" name="deskripsi" rows="3" style="height: 200px"><?php echo old('deskripsi'); ?></textarea>
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
    <div class="mb-3">
        <label for="stok">Quantity :</label>
        <input type="number" name="stok" min="0" max=1000  required autofocus value="<?php echo e(old('stok')); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

<script>
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
    
    var tanpa_rupiah = document.getElementById('rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
 
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/produk/create.blade.php ENDPATH**/ ?>