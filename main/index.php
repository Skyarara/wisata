<?php 
    include "../layout/user/header.php"; 
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800" style="text-align:center;">Dashboard</h1>

    </div>

    <h5 class="h5 mb-0 text-black-800">Selamat Datang <?= $_SESSION["nama"] ?> !</h5>

    <!-- End of Main Content -->
</div>

<?php
    include "../layout/user/footer.php";
?>