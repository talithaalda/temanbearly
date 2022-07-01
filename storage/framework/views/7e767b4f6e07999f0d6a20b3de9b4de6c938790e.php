<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class=<?php echo e(request()->is('dashboard/employees')? 'active' : ''); ?>><a href="dashboard/employees"><i class="fa fa-dashboard"></i> <span>Employees</span></a></li>
    <li class=<?php echo e(request()->is('dashboard/products')? 'active' : ''); ?>><a href="dashboard/products"><i class="fa fa-book"></i> <span>Products</span></a></li>
   
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
  </ul>
    <?php /**PATH D:\pemweb\temanbearly-app\resources\views/partials/navbar2.blade.php ENDPATH**/ ?>