

<?php $__env->startSection('container'); ?>

<div class=" container-fluid my-5 mt-5 py-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col" style="margin-right: 0px">
                        <p class="text-muted space mb-0" >Teman Bearly Beauty</p>   
                    </div>
                    <div class="col "style="margin-right: 10%">
                        <div class="row justify-content-start ">
                            <div class="col " >
                                <img class="irc_mi img-fluid cursor-pointer " src=<?php echo e(asset("img/LOGO4.png")); ?>  width="70" height="70" >
                            </div>
                        </div>
                    </div>
                </div>
               
                <form method="post" action="/checkout" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">
                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                <div class="col justify-content-between">
                                    <?php if(auth()->user()->address==null): ?>
                                    <div class="space mb-0 text-danger"><p><b>Please input your address <a href="/profile">click here</a></b></p></div>
                                    <?php else: ?>
                                    <div class="space mb-0 "><p><b><?php echo e(auth()->user()->name); ?> <br> <?php echo e(auth()->user()->address); ?><br><?php echo e(auth()->user()->zipcode); ?></b>
                                    <a href="/profile" style="font-size: 10px; color:rgb(7, 7, 121);"> <small>Change address</small> </a></p></div>
                                    <?php endif; ?>
                                </div>
                                <div class="row mt-4">
                                    <div class="col"><p class="text-muted mb-2">PAYMENT DETAILS</p><hr class="mt-0"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1  <?php $__errorArgs = ['methodpay'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">METHOD PAYMENT</label>
                                    <select name="methodpay" id="pet-select" class="form-control form-control-sm">
                                        <option value="">--Please choose method payment--</option>
                                        <option value="Dana">Dana</option>
                                        <option value="Ovo">Ovo</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
                                    <?php $__errorArgs = ['methodpay'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                <?php
                                    $total_item=0;
                                    $total=0;
                                ?>
                                <?php $__currentLoopData = auth()->user()->cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="<?php echo e(asset("storage/$c->image")); ?>" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col-auto"><p class="mb-0"><b><?php echo e($c->namaproduk); ?></b>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1"><?php echo e($c->quantity); ?></p></div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>Rp <?php echo e(number_format($c->harga*$c->quantity, 0, ".", ".")); ?></b></p></div>
                                </div>
                                <hr class="my-2">
                                <?php
                                $total_item = $total_item + $c->quantity;
                                $total = $total + ($c->harga*$c->quantity) ;
                                ?>
                                <input name="produk_id" type="hidden" value= "<?php echo e($c->produk_id); ?>">
                                <input name="quantity" type="hidden">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>Rp <?php echo e(number_format($total, 0, ".", ".")); ?></b></p></div>
                                        </div>
                                        
                                        
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p ><b>Total</b></p></div>
                                            <div class="flex-sm-col col-auto"><p  class="mb-1"><b>Rp <?php echo e(number_format($total, 0, ".", ".")); ?></b></p> </div>
                                        </div><hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input name="status" type="hidden" value= "Waiting for payment">
                <input name="user_id" type="hidden" value= "<?php echo e(auth()->user()->id); ?>">
                <input name="total" type="hidden" value= "<?php echo e($total); ?>">
                
                <input name="total_item" type="hidden" value= "<?php echo e($total_item); ?>">
                <input name="checkout_id" type="hidden" >
                <div class="row mb-md-5 text-center mt-5">
                    <div class="col">
                        <?php if(auth()->user()->address==null): ?>
                        <button type="button" class="btn btn-block ">CHECKOUT</button>
                        <?php else: ?>

                        <a href="/confirm">
                        <button type="submit" class="btn btn-block ">CHECKOUT</button>
                        </a>
                        <?php endif; ?>
                        
                    </div>
                </div>
                
                </form>  
            </div>
        </div>
    </div>
</div>

<style>
.space{
    letter-spacing: 0.8px !important;
}

a {
    text-decoration: none !important;
    color: #aaa ;
}

.card-header{
    background-color: #fff;
    border-bottom:0px solid #aaaa !important;
}

p{
    font-size: 13px ;
}
        
.small{
    font-size: 9px !important;
}

.boxed-1{
    padding: 0px 8px 0 8px ;
    color: black !important;
    border: 1px solid #aaaa;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pemweb\temanbearly-app\resources\views/checkout/form.blade.php ENDPATH**/ ?>