
<?php $__env->startSection('container'); ?>
<br>

<?php if(session()->has('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<div class="container ">
    <div class="card border-0 ">
        <div class="container-fluid ">
            <div class="wrapper row">
                <div class="preview col-md-6">
                <div class="preview-pic tab-content mb-5 card" style="width: 500px;height: 500px">
                    <form method="post" action="/dashboard/products/edit/<?php echo e($produk->id); ?>" class="md-form" enctype="multipart/form-data">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="oldImage" value="<?php echo e($produk->image); ?>">
                        <img class="" src="<?php echo e(asset("storage/$produk->image")); ?>" width="500" height="500">
                        <img class="img-preview img-fluid editimage position-absolute" width="500" height="500" >
                        <div class="card-img-overlay  d-flex align-items-center justify-content-center">
                          <div class="btn float-left">
                              
                            <span>Change img</span>
                            
                            <input type="file" class="border-0" id="image" name="image" onchange="previewImage()">
                          </div>
                      </div>
                      
                    </div>
                </div>
                
                <div class="details col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="namaproduk" 
                        style="height: 50px; font-size:28px;"  required autofocus value="<?php echo e(old('namaproduk',$produk->namaproduk)); ?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug"  
                        required autofocus value="<?php echo e(old('slug',$produk->slug)); ?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="mt-2" for="category">Category :</label>
                        <select class="form-select d-inline" name="category_id"style="width: 200px">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('category_id',$produk->category_id) == $c->id): ?>
                                <option value="<?php echo e($c->id); ?>" selected><?php echo e($c->namakategori); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($c->id); ?>" ><?php echo e($c->namakategori); ?></option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="sizes" for="merk"  style="font-size:20px;">Brand: </label >
                        <input type="text" name="merk" required autofocus value="<?php echo e(old('merk',$produk->merk)); ?>" style="font-size:18px;" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Description</label>
                        <textarea class="form-control mb-2" name="deskripsi" rows="3" style="height: 200px"><?php echo old('deskripsi',$produk->deskripsi); ?></textarea>
                    </div>    
                    <div class="mb-3">
                        <label for="harga"  style="font-size:24px;">Rp: </label >
                        <input type="text" min="0.00"  step="0.01" name="harga" id="rupiah"
                        required autofocus value="<?php echo e(old('harga', number_format($produk->harga, 0, ".", ".")  )); ?>" style="font-size:24px;">
                    </div>
                    <div class="mb-3">
                        <label for="stok">Quantity :</label>
                        <input type="number" id="stok" name="stok" min="0" max=<?php echo e($produk->stok); ?>  required autofocus value="<?php echo e(old('stok',$produk->stok)); ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white border-0"  style=" background-color: #e5345b;">Update Product</button>
                    </div>
                    <div class="link text-center">
                        <div style="float:right;" class="py-5 mt-5 ">
                            <a href="/dashboard/products" class = "btn btn-primary mt-4">Back</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/dashboard/produk/edit.blade.php ENDPATH**/ ?>