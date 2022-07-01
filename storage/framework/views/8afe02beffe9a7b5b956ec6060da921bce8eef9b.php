<header style="background-color: #e5345b" class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Teman Bearly Beauty</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a href="/"><form action="/logout" method="post"></form>
          <?php echo csrf_field(); ?>
          <button type="submit" class="nav-link px-3 bg-dark border-0">
            Logout<span data-feather="log-out"></span>
          </button>
        </a>
      </div>
    </div>
  </a>
</header><?php /**PATH D:\WebsiteApp\temanbearly-app\resources\views/dashboard/layouts/header.blade.php ENDPATH**/ ?>