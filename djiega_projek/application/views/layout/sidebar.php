<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('assets'); ?>/index3.html" class="brand-link">
      <img src="<?php echo base_url('assets'); ?>/dist/img/office-building.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Sejahtera </span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo base_url('assets'); ?>/dist/img/teamwork.png" alt="Card image" style="width:100%">

  </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=site_url('barang/');?>" class="nav-link">
              <i class="nav-icon fas fa fa-book fa-fw"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=site_url('bmasuk/');?>" class="nav-link">
              <i class="nav-icon fas fa fa-book fa-fw"></i>
              <p>
                Data Barang Masuk
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?=site_url('bkeluar/');?>" class="nav-link">
              <i class="nav-icon fas fa fa-book fa-fw"></i>
              <p>
                Data Barang Keluar
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">  
            <a href="<?=site_url('pemasok/');?>" class="nav-link">
              <i class="nav-icon fas fa fa-book fa-fw"></i>
              <p>
                Data Pemasok
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>