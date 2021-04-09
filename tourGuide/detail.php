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
    <p class="mb-4">Detail Tour Guide </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tour Guide</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?=$data['nama_tourguide']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$data['email_tourguide']?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Nomor HP</label>
                    <input type="text" class="form-control" name="hp" value="<?=$data['no_hp']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Nomor KTP</label>
                    <input type="text" class="form-control" name="umur" value="<?=$data['no_ktp']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Alamat</label>
                    <textarea cols="30" rows="10" class="form-control" readonly><?=$data['alamat']?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Umur</label>
                    <input class="form-control" value="<?=$data['umur']?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Foto</label>
                    <input type="file" class="form-control" name="foto" readonly>
                </div>
                <a href="index.php" class="btn btn-md btn-info">Back</a>
        </div>

    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>