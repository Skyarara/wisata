<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../main/index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-github-alt"></i>
            </div>
            <div class="sidebar-brand-text mx-3">KenPark</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="../main/index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php if($_SESSION["role"] == 1):?>
        <div class="sidebar-heading">
            Akun
        </div>

        <li class="nav-item">
            <a class="nav-link" href="../admin/index.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Admin</span>
            </a>
            <a class="nav-link" href="../admin/index.php">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span></a>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php endif;?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Landmark
        </div>
        <li class="nav-item">
            <a class="nav-link" href="../map/map.php">
                <i class="fas fa-fw fa-map marker"></i>
                <span>Peta</span></a>
            <a class="nav-link" href="../map/street_view.php">
                <i class="fas fa-fw fa-road"></i>
                <span>Street View</span></a>
            <a class="nav-link" href="../spot/index.php">
                <i class="fas fa-fw fa-vr-cardboard"></i>
                <span>Spots</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Utilities
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <?php if($_SESSION["role"] == 1): ?>
            <a class="nav-link" href="../ticket/index.php">
                <i class="fas fa-fw fa-ticket-alt"></i>
                <span>Tiket</span></a>
            <a class="nav-link" href="../ticket/index.php">
                <i class="fas fa-shopping-cart"></i>
                <span>Transaksi</span></a>
            <?php else: ?>
            <a class="nav-link" href="../ticket_user/index.php">
                <i class="fas fa-fw fa-ticket-alt"></i>
                <span>Tiket</span></a>
            <a class="nav-link" href="../ticket/index.php">
                <i class="fas fa-shopping-cart"></i>
                <span>Transaksi</span></a>
            <?php endif; ?>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->