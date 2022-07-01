
<!-- fontawesome cdn -->
<link rel="stylesheet" href=<?php echo e(asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css")); ?> integrity=<?php echo e(asset("sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==")); ?> crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstrap css -->
<link rel = "stylesheet" href = <?php echo e(asset("bootstrap-5.0.2-dist/css/bootstrap.min.css")); ?>>
<!-- custom css -->
<link href = <?php echo e(asset("/css/main.css")); ?> rel = "stylesheet" >
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top ">
    <div class = "container">
        <a class = "navbar-brand">
            <img src = <?php echo e(asset("img/LOGO4.png")); ?> alt = "site icon" width="70">
            <span class = "text-uppercase fw-lighter ms-2">Teman Bearly Beauty</span>
        </a>
        <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn position-relative" >
                <i class = "fa fa-shopping-cart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" style="background-color: #e5345b">5</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-heart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-search"></i>
            </button>
        </div>

        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center active">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark <?php echo e(($active == "home") ?'active': ' '); ?>" href = "/">home</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark <?php echo e(($active == "produk") ?'active': ' '); ?>" href = "/produk">Products</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark <?php echo e(($active == "kategori") ?'active': ' '); ?>" href = "#category">Category</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark <?php echo e(($active == "about") ?'active': ' '); ?>" href = "#about">About us</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark <?php echo e(($active == "dashboard") ?'active': ' '); ?>" href = "/dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>     


<?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/partials/navbar.blade.php ENDPATH**/ ?>