<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
    <div class="sidebar-brand-icon rotate-n-15">
      Logo
    </div>
    <div class="sidebar-brand-text mx-3 text-warning h5">TravelBus Admin</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Master Data
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Master Data</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="#">Data Loket</a>
          <a class="collapse-item" href="#">Data Mobil</a>
          <a class="collapse-item" href="#">Data Kota</a>
          <a class="collapse-item" href="#">Data Trayek</a>
          <a class="collapse-item" href="#">Data Admin Loket</a>
          <a class="collapse-item" href="#">Data Pelanggan</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">TRANSAKSI</div>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-fw fa-folder"></i>
        <span>Data Perjalanan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-fw fa-folder"></i>
        <span>Data Pemesanan Tiket</span>
      </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->
  <!-- Content Wrapper close tag ada di vfooter.php-->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content close tag di vfooter.php -->
    <div id="content">
      <?php $this->load->view('template_admin/vtopbar');?>
