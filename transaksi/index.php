<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM pembayaran JOIN user JOIN ticket ON pembayaran.id_user = user.id_user WHERE
    pembayaran.id_ticket = ticket.id_ticket AND pembayaran.id_user = '$id'";
    $query = mysqli_query($conn,$sql);
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
    <h1 class="h3 mb-2 text-gray-800">Transaksi</h1>
    <p class="mb-4">Daftar Transaksi</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid">
                    <thead>
                        <tr role="row">
                            <th style="width:5%;">No</th>
                            <th>Nama User</th>
                            <th>Total Pembayaran</th>
                            <th>Jatuh Tempo</th>
                            <th>Tanggal Klarifikasi</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Total Pembayaran</th>
                            <th>Jatuh Tempo</th>
                            <th>Tanggal Klarifikasi</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th style="width: 20%;">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1; while($data = mysqli_fetch_array($query)){?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?= $a++ ?></td>
                            <td><?=$data['Nama']?></td>
                            <td>Rp. <?=number_format($data['total_pembayaran'])?></td>
                            <td><?=$data['jatuh_tempo']?></td>
                            <td><?=$data['tanggal_klarifikasi']?></td>
                            <td>
                                <img class="myImg" src="img/<?=$data['bukti_pembayaran']?>"
                                    style="width:100px; height: 100px;">
                            </td>
                            <?php if($data['status'] == 1): ?>
                            <td style="color:green; font-weight:bold;">Terverifikasi</td>
                            <?php elseif(($data['status'] == 2)): ?>
                            <td style="color:red; font-weight:bold;">Ditolak</td>
                            <?php else: ?>
                            <td style="color:red; font-weight:bold;">Belum Diverifikasi</td>
                            <?php endif; ?>
                            <td>
                                <?php if($data['status'] != 1 && $data['status'] != 2): ?>
                                <a href="batal.php?id_pembayaran=<?=$data['id_pembayaran']?>"
                                    class="btn btn-danger btn-sm">Batal</a>
                                <?php endif; ?>
                                <?php if($data['status'] == 2): ?>
                                <a href="perbaikan.php?id_pembayaran=<?=$data['id_pembayaran']?>&&status=<?=$data['status']?>"
                                    class="btn btn-warning btn-sm">Perbaikan</a>
                                <?php endif; ?>
                                <a href="detail.php?id_pembayaran=<?=$data['id_pembayaran']?>"
                                    class="btn btn-info btn-sm">Detail</a>
                                <?php if($data['status'] == 1): ?>
                                <a href="invoice/invoice2.php?id_pembayaran=<?=$data['id_pembayaran']?>"
                                    class="btn btn-secondary btn-sm">Print</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php 
    include "../layout/user/footer.php";
?>

<script src="transaksi.js"></script>