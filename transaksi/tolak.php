<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pembayaran</h1>
    <p class="mb-4">Pembayaran</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penolakan Pembayaran</h6>
        </div>
        <div class="card-body">
            <form action="aksi_tolak.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Kode Pembayaran</label>
                    <input type="text" class="form-control" name="id_pembayaran" value="<?= $_GET['id_pembayaran'] ?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alasan Penolakan</label><br>
                    <textarea name="alasan" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <a href="index_admin.php" class="btn btn-info">Back</a>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>

    </div>
</div>


<?php 
    include "../layout/user/footer.php";
?>