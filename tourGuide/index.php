<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $sql = "SELECT * FROM tourguide";
    $query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tour Guide</h1>
    <p class="mb-4">Daftar Tour Guide </p>
    <a href="add.php" class="btn btn-primary">Tambah</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tour Guide</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                    aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th>Nomor</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>email</th>
                            <th>Nomor HP</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Nomor</th>
                            <th rowspan="1" colspan="1">Foto</th>
                            <th rowspan="1" colspan="1">Nama</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1">Nomor HP</th>
                            <th rowspan="1" colspan="1">Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1; while($data = mysqli_fetch_array($query)){?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?= $a++ ?></td>
                            <td><?=$data['foto']?></td>
                            <td><?=$data['nama_tourguide']?></td>
                            <td><?=$data['email_tourguide']?></td>
                            <td><?=$data['no_hp']?></td>
                            <td><?=$data['umur']?></td>
                            <td>
                                <a href="delete.php?id_tourguide=<?=$data['id_tourguide']?>"><button>Hapus</button></a>
                                <button>Edit</button>
                                <button>Detil</button>
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
    // }
    include "../layout/user/footer.php";
?>