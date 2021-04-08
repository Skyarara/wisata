<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tour Guide</h1>
    <p class="mb-4">Tambah Tour Guide </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tour Guide</h6>
        </div>
        <div class="card-body">
            <form action="action_add.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Nomor HP</label>
                    <input type="text" class="form-control" name="hp" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Umur</label>
                    <input type="text" class="form-control" name="umur" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>

    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>