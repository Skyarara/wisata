<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_pembayaran = $_GET['id_pembayaran'];
    $sql = "SELECT * FROM pembayaran JOIN user JOIN ticket ON pembayaran.id_user = user.id_user WHERE
    pembayaran.id_ticket = ticket.id_ticket AND pembayaran.id_pembayaran = '$id_pembayaran'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
?>
<link rel="stylesheet" href="style.css">

<!-- The Modal -->
<div id="myModal" class="modal2">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pembayaran</h1>
    <p class="mb-4">Detail Pembayaran</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pembayaran</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?=$data['Nama']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?=$data['email']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Pembelian Tiket</label>
                    <input type="text" class="form-control" value="<?=$data['total_pembayaran']/$data['harga']?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga Tiket</label>
                    <input type="text" class="form-control" value="<?=$data['harga']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Pembelian</label>
                    <input class="form-control" value="<?=$data['Tanggal_pembelian']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jatuh Tempo</label>
                    <input class="form-control" value="<?=$data['jatuh_tempo']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total Pembayaran</label>
                    <input type="text" class="form-control" value="Rp. <?=number_format($data['total_pembayaran'])?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bukti Pembayaran</label><br>
                    <img class="myImg" src="img/<?=$data['bukti_pembayaran']?>" style="width:300px; height: 300px;">
                </div>
                <?php if($_SESSION['role'] == 1): ?>
                <a href="index_admin.php" class="btn btn-md btn-info">Back</a>
                <?php else:?>
                <a href="index.php" class="btn btn-md btn-info">Back</a>
                <?php endif; ?>
            </form>
        </div>

    </div>
</div>

<?php 
    include "../layout/user/footer.php";
    ?>
<script src="transaksi.js"></script>