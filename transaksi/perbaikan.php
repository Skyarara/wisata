<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_pembayaran = $_GET['id_pembayaran'];
    $sql = "SELECT * FROM pembayaran WHERE pembayaran.id_pembayaran = '$id_pembayaran'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
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
            <form action="aksi_perbaikan.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_pembayaran" value="<?= $_GET['id_pembayaran'] ?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alasan Penolakan</label><br>
                    <textarea name="alasan" class="form-control" cols="30" rows="10"
                        readonly><?= $data['reason'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Masukan Gambar Perbaikan</label>
                    <a style="color:red;">Note: Jika biaya kurang tolong untuk digabung dengan gambar awal</a>
                    <input type="file" class="form-control" name="bukti" accept="image/*" required>
                </div>
                <a href="index_admin.php" class="btn btn-info">Back</a>
            </form>
        </div>

    </div>
</div>


<?php 
    include "../layout/user/footer.php";
?>