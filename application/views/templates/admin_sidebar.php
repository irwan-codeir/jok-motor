<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <img src="<?= base_url('assets/img/teknik.png'); ?>" alt="" width="70" height="50">
        </div>
        <div class="sidebar-brand-text mx-3">Jok Motor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- nav item dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - profil/tentang kami -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profil'); ?>">
            <i class="far fa-fw fa-id-card"></i>
            <span>Profil</span></a>
    </li>
    <!-- Nav Item - info -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/inbox'); ?>">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Inbox</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pengguna'); ?>">
            <i class="far fa-fw fa-user"></i>
            <span>Data Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->