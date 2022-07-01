 <!-- fontawesome cdn -->
 <link rel="stylesheet" href=<?php echo e(asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css")); ?> integrity=<?php echo e(asset("sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==")); ?> crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- bootstrap css -->
 <link rel = "stylesheet" href = <?php echo e(asset("bootstrap-5.0.2-dist/css/bootstrap.min.css")); ?>>
 <!-- custom css -->
 <link href = <?php echo e(asset("/css/main.dashboard.css")); ?> rel = "stylesheet" >
<style>

</style>
<nav id="Nav" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse active">
    <div class=" position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard')?'active' :''); ?>" aria-current="page" href="/dashboard">
            <span data-feather="home" style="color: white"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/products*')?'active' :''); ?>" href="/dashboard/products">
            <span data-feather="file-text" style="color: white"></span>
            Products
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('dashboard/category*')?'active' :''); ?>" href="/dashboard/category">
              <span data-feather="file-text" style="color: white"></span>
            Category
          </a>
        </li>
      </ul>
    </div>
  </nav><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>