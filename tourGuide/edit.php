<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_tourguide = $_GET['id_tourguide'];
    $sql= "SELECT * FROM tourguide WHERE id_tourguide='$id_tourguide'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
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
            <form method="POST" action="action_edit.php">
                <input type="hidden" name="id" value="<?=$id_tourguide?>">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?=$data['nama_tourguide']?>" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$data['email_tourguide']?>"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Nomor HP</label>
                    <input type="text" class="form-control" name="hp" value="<?=$data['no_hp']?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Nomor KTP</label>
                    <input type="text" class="form-control" name="ktp" value="<?=$data['no_ktp']?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Alamat</label>
                    <textarea cols="30" rows="10" class="form-control" name="alamat"
                        required><?=$data['alamat']?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Umur</label>
                    <input class="form-control" name="umur" value="<?=$data['umur']?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
                <button type="submit" class="btn btn-md btn-warning">Ubah</button>
        </div>

    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>