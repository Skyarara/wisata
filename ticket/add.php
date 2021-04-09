<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ticket</h1>
    <p class="mb-4">Tambah Data Ticket</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>
        </div>
        <div class="card-body">
            <form action="action_add.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Jenis Wisata</label>
                    <input type="text" class="form-control" name="jenis_wisata" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" required>
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