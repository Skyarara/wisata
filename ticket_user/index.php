<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $sql = "SELECT * FROM ticket";
    $query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ticket</h1>
    <p class="mb-4">Daftar Ticket</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                    aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th>Nomor</th>
                            <th>Jenis Wisata</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Nomor</th>
                            <th rowspan="1" colspan="1">Jenis Wisata</th>
                            <th rowspan="1" colspan="1">Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1; while($data = mysqli_fetch_array($query)){?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?= $a++ ?></td>
                            <td><?=$data['jenis_wisata']?></td>
                            <td>Rp. <?=number_format($data['harga'])?></td>
                            <td>
                                <a href="form_beli.php?id_ticket=<?=$data['id_ticket']?>" class="btn btn-info btn-sm"
                                    style="width:40%;">Beli</a>
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