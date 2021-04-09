<?php 
    include "../layout/user/header.php";
    include "../layout/user/sidebar.php";
    include "../layout/user/navbar.php";

    $id_ticket = $_GET['id_ticket'];
    $sql= "SELECT * FROM ticket WHERE id_ticket='$id_ticket'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ticket</h1>
    <p class="mb-4">Edit Ticket</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="action_edit.php">
                <input type="hidden" name="id" value="<?=$id_ticket?>">
                <div class="mb-3">
                    <label class="form-check-label">Jenis Wisata</label>
                    <input type="text" class="form-control" name="jenis_wisata" value="<?=$data['jenis_wisata']?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="<?=$data['harga']?>"
                    required>
                </div>
                <button type="submit" class="btn btn-md btn-warning">Ubah</button>
        </div>

    </div>
</div>


<?php 
    // }
    include "../layout/user/footer.php";
?>