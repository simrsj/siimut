<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
         <a href="<?php echo base_url('Mutu/Dashboard');?>" class="brand-link">
      <!-- <img src="<?= base_url('dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Aplikasi Mutu</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="<?= base_url('dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image"> -->
          <!-- <h2>SIIMUT</h2> -->
        </div>
         <div class="info">
          <a href="#" class="d-block">Hai, <?php echo $profile->nama_user;?> </a>
        </div> 
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- MENU OPEN -->
               <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="<?php echo base_url('C_Home/Logout');?>" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">Mutu</li>
               <li class="nav-item">
                <a href="<?php echo base_url('Mutu/Dashboard');?>" class="nav-link <?php echo $this->uri->segment(2) == 'Dashboard' ? 'active': '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Indikator/Index');?>" class="nav-link <?php echo $this->uri->segment(1) == 'Indikator' ? 'active': '' ?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Indikator
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
         
          
          <li class="nav-header">Pengaturan</li>
          <?php if($profile->id_grup ==1){?>
          <li class="nav-item">
            <a href="<?php echo base_url('Master/User');?>" class="nav-link <?php echo $this->uri->segment(2) == 'User' ? 'active': '' ?>">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                User
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Master/Kamus');?>" class="nav-link <?php echo $this->uri->segment(2) == 'Kamus' ? 'active': '' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kamus Indikator
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          
          <!-- <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>