<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>
    <p class="mb-4">Daftar Admin </p>
    <a href="add.php" class="btn btn-primary">Tambah</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                    aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th>Nomor</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>                        
                            </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1; while($data = mysqli_fetch_array($query)){?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?= $a++ ?></td>
                            <td><?=$data['Nama']?></td>
                            <td><?=$data['email']?></td>
                            <td><?=$data['is_admin']?></td>
                            <td>
                                <a href="delete.php?id_user=<?=$data['id_user']?>"
                                    class="btn btn-danger btn-sm">Hapus</a>
                                <a href="edit.php?id_user=<?=$data['id_user']?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="detil.php?id_user=<?=$data['id_user']?>"
                                    class="btn btn-info btn-sm">Detail</a>
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